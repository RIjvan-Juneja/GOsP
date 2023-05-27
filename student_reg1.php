<?php
include "Database/connect.php";
include "common/function.php";
// $stmt = $con->prepare("INSERT INTO `user`(enrollment_number,user_type,first_name,middle_name,last_name,phone_number,email,cource,branch,semester,github_link)VALUES (?,?,?,?,?,?,?,?,?,?,?)");
//         $stmt->bind_param("sssssssssis", $enrollment_number, $user_type, $first_name, $middle_name, $last_name, $phone_number, $email, $cource, $branch, $semester, $github_link);
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
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Registation form</h4>
                        <ul class="nav nav-pills d-flex flex-md-row mb-3">
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary" href="student_reg.php"><i
                                        class="bx bx-user me-1"></i> Student</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="faculty_reg.php"><i class='bx bxs-user me-1'></i></i>
                                    Faculty</a>
                            </li>
                        </ul>
                        <!-- Basic Layout -->
                        <div class="row">

                            <div class="col-xl">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Student Form</h5>
                                    </div>
                                    <div class="card-body">
                                        <form id="basic_detail" method="POST">
                                            <div class="row mb-3">
                                                <div class="form-group col-md-4">
                                                    <label for="first_name" class="form-label">First Name </label> <span
                                                        class="form_error_message">*</span>
                                                    <input type="text" class="form-control" name="first_name"
                                                        id="first_name" placeholder="Your Name">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="middle_name" class="form-label">Middle Name</label>
                                                    <span class="form_error_message">*</span>
                                                    <input type="text" class="form-control" name="middle_name"
                                                        id="middle_name" placeholder="Father Name">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="last_name" class="form-label">Last Name</label> <span
                                                        class="form_error_message">*</span>
                                                    <input type="text" class="form-control" name="last_name"
                                                        id="last_name" placeholder="Surename">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="form-group col-md-6">
                                                    <label for="mobile_number" class="form-label">PHONE NUMBER</label>
                                                    <span class="form_error_message">*</span>
                                                    <input type="text" class="form-control" name="phone_number"
                                                        id="mobile_number" placeholder="9999999999">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="enrollment_number" class="form-label">Enrollment
                                                        NUMBER</label> <span class="form_error_message">*</span>
                                                    <input type="text" class="form-control" name="enrollment_number"
                                                        id="mobile_number" placeholder="000000000000">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="form-group col-md-6">
                                                    <label for="email" class="form-label">Email</label> <span
                                                        class="form_error_message">*</span>
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="xyz85@gmail.com">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="github_link" class="form-label">Github link</label>
                                                    <span class="form_error_message">*</span>
                                                    <input type="text" class="form-control" name="github_link"
                                                        id="github_link" placeholder="https://github.com/RIjvan-Juneja">
                                                </div>
                                            </div>

                                            <div class="row mb-3">

                                                <div class="form-group col-md-4">
                                                    <label for="last_name" class="form-label">Course</label> <span
                                                        class="form_error_message">*</span>
                                                    <select name="course" class="form-select" ">
                                                        <option value="">select cource</option>
                                                        <option value=" BE">B.E</option>
                                                        <option value="MCA">MCA</option>
                                                        <option value="DIPLOMA">DIPLOMA</option>
                                                        <option value="D2D">D2D</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="last_name" class="form-label">Branch</label> <span
                                                        class="form_error_message">*</span>
                                                    <select name="branch" class="form-select" ">
                                                        <option value="">select  branch</option>
                                                        <option value=" IT">Information Technology</option>
                                                        <option value="CS">Computer Science</option>
                                                        <option value="MCA">Master of Computer Application</option>
                                                        <option value="ME">Mechanical Engineering</option>
                                                        <option value="CE">Civil Engineering</option>
                                                        <option value="EE">Electrical Engineering</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="" class="form-label">Semester</label> <span
                                                        class="form_error_message">*</span>
                                                    <select name="semester" class="form-select"
                                                        id="exampleFormControlSelect1">
                                                        <option value="">select semester</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label for="formFile" class="form-label">Professional Photo </label>
                                                    <input class="form-control" type="file" id="formFile" name="photo">
                                                    <span class="form-text"> * only image allowded (Optional)</span>

                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <label for="formFile" class="form-label">collage ID Card</label>
                                                    <input class="form-control" type="file" id="formFile"
                                                        name="collage_id">
                                                    <span class="form-text"> * only pdf allowded</span>

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



    <script>
        $(document).ready(function () {
            $("#basic_detail").validate({
                messages: {
                    first_name: {
                        required: "Please Enter First Name",
                        pattern: 'Only Letters allowed',
                        nowhitespace: 'Spaces are not allowed'
                    },
                    middle_name: {
                        required: "Please Enter Middle Name",
                        pattern: 'Only Letters allowed',
                        nowhitespace: 'Spaces are not allowed'
                    },
                    last_name: {
                        required: "Please Enter Last Name",
                        pattern: 'Only Letters allowed',
                        nowhitespace: 'Spaces are not allowed'
                    },
                    phone_number: {
                        required: "Please Enter phone Number",
                        minlength: "Number must be 10 digits",
                        maxlength: "Number must be 10 digits",
                        nowhitespace: 'Spaces are not allowed'
                    },
                    email: {
                        required: "Please Enter Email",
                        email: 'Invalid email format.',
                        nowhitespace: 'Spaces are not allowed'
                    },
                    github_link: {
                        required: 'GitHub link is required.',
                        pattern: 'Invalid GitHub link format.'
                    },
                    enrollment_number: {
                        required: "Please Enter Enrollment Number",
                        minlength: " Er Number must be 12 digits",
                        maxlength: " Er Number must be 12 digits",
                    },
                    course: {
                        required: "Please select Course",
                    },
                    branch: {
                        required: "Please select Branch",
                    },
                    semester: {
                        required: "Please select Semester",
                    },
                    collage_id: {
                        required: 'Please select a file.',
                        extension: 'Only PDF files are allowed.'
                    },
                    // photo: {
                    //     required: true,
                    //     accept: 'image/*'
                    // }

                },
                rules: {
                    first_name: {
                        required: true,
                        pattern: /^[a-zA-Z\s]+$/,
                        nowhitespace: true
                    },
                    middle_name: {
                        required: true,
                        pattern: /^[a-zA-Z\s]+$/,
                        nowhitespace: true
                    },
                    last_name: {
                        required: true,
                        pattern: /^[a-zA-Z\s]+$/,
                        nowhitespace: true
                    },
                    phone_number: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 10,
                        nowhitespace: true
                    },
                    email: {
                        required: true,
                        email: true,
                        nowhitespace: true
                    },
                    github_link: {
                        required: true,
                        pattern: /^(https?:\/\/)?(www\.)?github\.com\/[a-zA-Z0-9_-]+\/[a-zA-Z0-9_-]+$/
                    },
                    enrollment_number: {
                        required: true,
                        digits: true,
                        minlength: 12,
                        maxlength: 12,
                    },
                    course: {
                        required: true,
                    },
                    branch: {
                        required: true,
                    },
                    semester: {
                        required: true,
                    },
                    collage_id: {
                        required: true,
                        extension: 'pdf'
                    },
                    // photo: {
                    //     required: 'Please select a file.',
                    //     accept: 'Only image files are allowed.'
                    // }
                },

                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.insertAfter(element);
                },

                submitHandler: function (form) {
                    // If the form is valid, send it to the server
                    $.ajax({
                        url: 'store_data.php',
                        type: 'POST',
                        data: $(form).serialize(),
                        success: function (response) {
                            $('#message').text(response);
                            $(form)[0].reset(); // Clear the form
                        }
                    });
                }

            });
        });
    </script>

</body>

</html>