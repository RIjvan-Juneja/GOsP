<?php

$search_value = $_POST["search"];

include "Database/connect.php";
$sql = "SELECT u.first_name, u.last_name, p.id AS project_id, p.project_name, p.description, p.technology_used, p.github_repo_link 
FROM projects p 
JOIN user u ON p.mentor_id = u.id 
WHERE p.technology_used LIKE '%{$search_value}%' 
    OR project_tag LIKE '%{$search_value}%' 
    OR p.description LIKE '%{$search_value}%' 
    OR u.first_name LIKE '%{$search_value}%' 
    OR u.last_name LIKE '%{$search_value}%' 
    OR u.middle_name LIKE '%{$search_value}%' 
    OR p.project_tag LIKE '%{$search_value}%'
    OR p.project_name LIKE '%{$search_value}%' ";

$result = mysqli_query($con, $sql) or die("SQL Query Failed.");
$output = "";
if (mysqli_num_rows($result) > 0) {
  $output = '<div class="project-card-grid">';

  while ($row = mysqli_fetch_assoc($result)) {
    $mentor_name = $row['first_name'] . " " . $row['last_name'];
    $output .= '<div class="card-project-r">
                <header class="card-header-heading">' . $row['project_name'] . '</header>
                <section class="details"><b>Mentored by:</b>' . $mentor_name . ' </section>
                <div class="card-content">
                    <div class="content">' . $row['description'] . '</div><br>
                    <section id="projectTags">';
    $array = explode(',', $row['technology_used']);
    foreach ($array as $value) {
      $output .= '<span class="tag">' . $value . '</span>';
    }
    $output .= '</section>
                </div>
                <footer class="card-footer-two-btn">
                    <a class="button" href="' . $row['github_repo_link'] . '" target="_blank" rel="noopener noreferrer">View Project</a>
                    <a class="button" href="view_project.php?id=' . $row['project_id'] . '" target="_blank" rel="noopener noreferrer">More details</a>
                </footer>
            </div>';
  }
  $output .= '</div>';

  mysqli_close($con);

  echo $output;
} else {
  echo "<h2 class='text-center'>No Record Found.</h2>";
}

?>