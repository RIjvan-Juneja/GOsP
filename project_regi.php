<?php
include "Database/connect.php";

session_start();

if (isset($_SESSION['enrollmentNumber'])) {
	$enrollmentNumber = $_SESSION['enrollmentNumber'];
	$stmt = $con->prepare("SELECT * FROM `user` where enrollment_number =?");
	$stmt->bind_param("i", $enrollmentNumber);
	$stmt->execute();
	$result = $stmt->get_result();
	if ($result->num_rows == 1) {
		$row = $result->fetch_assoc();
		$id_mentor = !empty($row['id']) ? $row['id'] : "";
    }
}else{
    echo "<script>setTimeout(function(){window.location='login.php'},1000); alert('First You need to login')</script>";
    header("Location:login.php");
    exit();
}

if (isset($_POST["submit"])) {

    $project_name = mysqli_real_escape_string($con, $_POST['project_name']);
    $github_repo_link = mysqli_real_escape_string($con, $_POST['github_repo_link']);
    $group_link = mysqli_real_escape_string($con, $_POST['group_link']);
    $technology_used = mysqli_real_escape_string($con, $_POST['technology_used']);
    $project_description = mysqli_real_escape_string($con, $_POST['project_description']);
    $project_tags = mysqli_real_escape_string($con, $_POST['project_tags']);
    $is_active = 1;
    $is_delete = 1;

    $stmt = $con->prepare("INSERT INTO `projects`(project_name,description,project_tag,mentor_id,technology_used,github_repo_link,group_link,is_active,is_delete)VALUES (?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssisssii", $project_name,$project_description,$project_tags,$id_mentor,$technology_used,$github_repo_link,$group_link,$is_active,$is_delete);
    $result = $stmt->execute();

    if ($result){
        echo "<script>confirm('Project Added successfully!')</script>";
    }

}

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <style>
        .btn {
            cursor: pointer;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            line-height: 1.53;
            color: #697a8d;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.4375rem 1.25rem;
            font-size: 0.9375rem;
            border-radius: 0.375rem;
            transition: all 0.2s ease-in-out;
        }

        .btn-primary {
            color: #fff !important;
            background-color: #696cff !important;
            border-color: #696cff;
            box-shadow: 0 0.125rem 0.25rem 0 rgba(105, 108, 255, 0.4);
        }

        .color-red {
            color: red !important;
        }
    </style>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />


    <meta name="description" content="" />


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- boxicons csn link  -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="core.css" />

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Project form</h4>

                        <!-- Basic Layout -->
                        <div class="row">

                            <div class="col-xl">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Mentor Form</h5>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label" for="basic-icon-default-fullname">Project
                                                        Name</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-fullname2"
                                                            class="input-group-text">
                                                            <i class="bx bx-user"></i>
                                                        </span>
                                                        <input type="text" name="project_name" class="form-control"
                                                            id="basic-icon-default-fullname"
                                                            placeholder="Title of Project" />
                                                    </div>

                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label" for="basic-icon-default-fullname">GitHub
                                                        Repo Link</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-fullname2"
                                                            class="input-group-text">
                                                            <i class='bx bxl-github'></i>
                                                        </span>
                                                        <input type="text" name="github_repo_link" class="form-control"
                                                            placeholder="https://github.com/RIjvan-Juneja" />
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label" for="basic-icon-default-fullname">Group
                                                        link</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-fullname2"
                                                            class="input-group-text">
                                                            <i class='bx bx-group'></i>
                                                        </span>
                                                        <input type="text" name="group_link" class="form-control"
                                                            id="basic-icon-default-fullname"
                                                            placeholder="whatsapp link, discord link, ..." />
                                                    </div>

                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label"
                                                        for="basic-icon-default-fullname">Technology Used</label>
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-fullname2"
                                                            class="input-group-text">
                                                            <i class='bx bx-code-alt'></i>
                                                        </span>
                                                        <input type="text" name="technology_used" class="form-control"
                                                            placeholder="HTML,CSS,JS,MONGODB" />
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label" for="basic-icon-default-fullname">Project
                                                        Description</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i
                                                                class='bx bx-code-alt'></i></span>
                                                        <textarea class="form-control" name="project_description"
                                                            style="height: 100px;"
                                                            placeholder="this is a e-commerce application"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label" for="basic-icon-default-fullname">Project
                                                        Tags</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i
                                                                class='bx bx-purchase-tag-alt'></i></span>
                                                        <textarea class="form-control" name="project_tags"
                                                            style="height: 100px;"
                                                            placeholder="open source, e-commerce project, python project"></textarea>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="mb-3 d-flex justify-content-end">
                                                <button type="submit" name="submit"
                                                    class="btn btn-primary mt-lg-3">SUBMIT</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

    </div>
    <!-- / Layout wrapper -->

</body>

</html>