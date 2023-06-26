<?php
include "Database/connect.php";
include "common/function.php";
// $stmt = $con->prepare("INSERT INTO `projects`(project_name,description,project_tag,technology_used,github_repo_link,group_link)VALUES (?,?,?,?,?,?)");
//         $stmt->bind_param("sssssssssis", $project_name,$description,$project_tag,$technology_used,$github_repo_link,$group_link );
//         $result = $stmt->execute();



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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    

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
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Upload Project</h4>
                       
                        <!-- Basic Layout -->
                        <div class="row">

                            <div class="col-xl">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Student Form</h5>
                                    </div>
                                    <div class="card-body">
                                        <form id="stuform" method="POST">
                                            <div class="row mb-3">
                                                <div class="form-group col-md-4">
                                                    <label for="first_name" class="form-label">Project Name </label> <span
                                                        class="form_error_message">*</span>
                                                    <input type="text" class="form-control" name="first_name"
                                                        id="first_name_name" placeholder="Project Name">
                                                </div>
                                               <div class="row mb-3">
                                                <div class="form-group col-md-6">
                                                    <label for="mobile_number" class="form-label">Description</label>
                                                    <span class="form_error_message">*</span>
                                                    <input type="text" class="form-control" name="phone_number"
                                                        id="mobile_number" placeholder="About Your Project">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="enrollment_number" class="form-label">project tags
                                                        </label> <span class="form_error_message">*</span>
                                                    <input type="text" class="form-control" name="enrollment_number"
                                                        id="mobile_number" placeholder="#tags,Keywords">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="form-group col-md-6">
                                                    <label for="email" class="form-label">technology_used</label> <span
                                                        class="form_error_message">*</span>
                                                    <input type="text" class="form-control" name="email" id="email"
                                                        placeholder="Like Html,css,js">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="github_link" class="form-label">Github link</label>
                                                    <span class="form_error_message">*</span>
                                                    <input type="text" class="form-control" name="github_link"
                                                        id="github_link" placeholder="https://github.com/RIjvan-Juneja">
                                                </div>
                                            </div>
											<div class="form-group col-md-6">
                                                    <label for="github_link" class="form-label">Group link</label>
                                                    <span class="form_error_message">*</span>
                                                    <input type="text" class="form-control" name="github_link"
                                                        id="github_link" placeholder="Group link">
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



    <!--
	 
	-->

</body>

</html>