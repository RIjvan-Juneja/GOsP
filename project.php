<?php include "Database/connect.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="project.css">
    <?php include "include/importhead.php"; ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <title>GOsP</title>
</head>

<body>

    <!-- <header> -->
    <?php include "componants/header/header.php"; ?>
    <!-- </header> -->
    <div class="projects">
        <div class="projects-hero">
            <h1 class="title">Projects</h1>
        </div>
        <div class="projects-search-box">
            <div class="field"><input class="input" type="text"
                    placeholder="Search projects using project name, topics and mentor" id="search" value=""></div>
        </div>
        <div id="table-data">
        <div class="project-card-grid">
            <?php
            $stmt = $con->prepare("SELECT u.first_name, u.last_name, p.id as project_id, p.project_name, p.description, p.technology_used, p.github_repo_link FROM projects p JOIN user u ON p.mentor_id = u.id Where p.is_active=1 AND p.is_delete=0");
            $stmt->execute();
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                $mentor_name = $row['first_name'] . " " . $row['last_name'];
                ?>
                <div class="card-project-r">
                    <header class="card-header-heading"><?php echo $row['project_name']; ?></header>
                    <section class="details"><b>Mentored by:</b><?php echo $mentor_name; ?> </section>
                    <div class="card-content">
                        <div class="content"> <?php echo $row['description']; ?></div><br>
                        <section id="projectTags">
                            <?php $array = explode(',', $row['technology_used']); 
                            foreach ($array as $value) {
                                echo '<span class="tag">' . $value . '</span>';
                            }
                            ?>
                        </section>
                    </div>
                    <footer class="card-footer-two-btn">
                        <a class="button" href="<?php echo $row['github_repo_link']; ?>" target="_blank" rel="noopener noreferrer">View Project</a>
                        <a class="button" href="view_project.php?id=<?php echo $row['project_id']; ?>" target="_blank" rel="noopener noreferrer">More details</a>
                    </footer>
                </div>
                <?php
            }
            ?>


           <br>
    </div>
    </div>
    <!-- <footer> -->
    <?php include "componants/footer/footer.php"; ?>
    <!-- </footer> -->

    <script src="assets/js/jquery.js"></script>

    <script>
  $(document).ready(function(){

        // Live Search
     $("#search").on("keyup",function(){
       var search_term = $(this).val();

       $.ajax({
         url: "ajax-live-search.php",
         type: "POST",
         data : {search:search_term },
         success: function(data) {
           $("#table-data").html(data);
         }
       });
     });
  });

    </script>
</body>

</html>