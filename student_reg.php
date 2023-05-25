<?php
include "Database/connect.php";
include "common/function.php";
$first_name_error = $middle_name_error =  "";

if (isset($_POST["submit"])) {

  $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
  
  $middle_name = mysqli_real_escape_string($con, $_POST['middle_name']);
  $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
  $phone_number = mysqli_real_escape_string($con, $_POST['phone_number']);
  $enrollment_number = mysqli_real_escape_string($con, $_POST['enrollment_number']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $cource = mysqli_real_escape_string($con, $_POST['cource']);
  $branch = mysqli_real_escape_string($con, $_POST['branch']);
  $semester = mysqli_real_escape_string($con, $_POST['semester']);
  $github_link = mysqli_real_escape_string($con, $_POST['github_link']);
  // $user_type = "student";
  // $is_active = 0;
  // $is_delete = 0;

  // if(empty($first_name)  || $first_name = " "){
  //   $first_name_error = "please enter a first name";
  //   if(only_alphabet($first_name)){
  //     $first_name_error = "only String are allowed";
  //   }
  // }else{
  //   $first_name_error = "please enter a first name";
  // }

  // $stmt = $con->prepare("INSERT INTO `user`(enrollment_number,user_type,first_name,middle_name,last_name,phone_number,email,cource,branch,semester,github_link)VALUES (?,?,?,?,?,?,?,?,?,?,?)");
  // $stmt->bind_param("sssssssssis", $enrollment_number,$user_type,$first_name,$middle_name,$last_name,$phone_number,$email,$cource,$branch,$semester,$github_link);
  // $result = $stmt->execute();
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
    .color-red{
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
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Registation form</h4>
            <ul class="nav nav-pills d-flex flex-md-row mb-3">
              <li class="nav-item">
                <a class="nav-link btn btn-primary" href="student_reg.php"><i class="bx bx-user me-1"></i> Student</a>
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
                    <form method="POST" action="student_reg.php">
                      <div class="row">
                        <div class="col-md-4 mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">First Name</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text">
                              <i class="bx bx-user"></i>
                            </span>
                            <input type="text" name="first_name" class="form-control" id="basic-icon-default-fullname"
                              placeholder="Your name" />
                          </div>
                          <div class="form-text color-red"><?php echo $first_name_error; ?></div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Middle Name</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text">
                              <i class="bx bx-user"></i>
                            </span>
                            <input type="text" name="middle_name" class="form-control" id="basic-icon-default-fullname"
                              placeholder="father name" />
                          </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Last Name</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text">
                              <i class="bx bx-user"></i>
                            </span>
                            <input type="text" name="last_name" class="form-control" id="basic-icon-default-fullname"
                              placeholder="Surename" />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">PHONE NO</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text">
                              <i class="bx bx-phone"></i>
                            </span>
                            <input type="number" name="phone_number" class="form-control" id="basic-icon-default-fullname"
                              placeholder="9999999999" />
                          </div>
                        </div>

                        <div class="col-md-6 mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Enrollment Number</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text">
                              <i class="bx bx-user"></i>
                            </span>
                            <input type="number" name="enrollment_number" class="form-control" id="basic-icon-default-fullname"
                              placeholder="111111111111" />
                          </div>
                        </div>

                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-email">Email</label>
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                          <input type="text" name="email" id="basic-icon-default-email" class="form-control" placeholder="xyz2@gmail.com" />
                        </div>
                        <div class="form-text">You can use letters, numbers & periods</div>
                      </div>
                      <div class="row">
                        <div class="mb-3 col-md-4">
                          <label for="exampleFormControlSelect1" class="form-label">Cource</label>

                          <select name="cource" class="form-select" id="exampleFormControlSelect1">
                            <option selected>select cource</option>
                            <option value="BE">B.E</option>
                            <option value="MCA">MCA</option>
                            <option value="DIPLOMA">DIPLOMA</option>
                            <option value="D2D">D2D</option>
                          </select>
                        </div>
                        <div class="mb-3 col-md-4">
                          <label for="exampleFormControlSelect1" class="form-label">Branch</label>
                          <select name="branch" class="form-select" id="exampleFormControlSelect1">
                            <option selected>select  branch</option>
                            <option value="IT">Information Technology</option>
                            <option value="CS">Computer Science</option>
                            <option value="MCA">Master of Computer Application</option>
                            <option value="ME">Mechanical Engineering</option>
                            <option value="CE">Civil Engineering</option>
                            <option value="EE">Electrical Engineering</option>
                          </select>
                        </div>
                        <div class="mb-3 col-md-4">
                          <label for="exampleFormControlSelect1" class="form-label">Semester</label>
                          <select name="semester" class="form-select" id="exampleFormControlSelect1">
                            <option selected>select semester</option>
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

                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">GitHub Profile Link</label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-fullname2" class="input-group-text">
                            <i class='bx bxl-github'></i>
                          </span>
                          <input type="text" name="github_link" class="form-control"
                            placeholder="https://github.com/RIjvan-Juneja" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="mb-3 col-md-6">
                          <label for="formFile" class="form-label">Professional Photo </label>
                          <input class="form-control" type="file" id="formFile name="photo">
                          <span class="form-text"> * only image allowded</span>

                        </div>

                        <div class="mb-3 col-md-6">
                          <label for="formFile" class="form-label">collage ID Card</label>
                          <input class="form-control" type="file" id="formFile" name="collage_id">
                          <span class="form-text"> * only pdf allowded</span>

                        </div>
                      </div>
                      <div class="mb-3 d-flex justify-content-end">
                        <button type="submit" name="submit" class="btn btn-primary mt-lg-3">SUBMIT</button>
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