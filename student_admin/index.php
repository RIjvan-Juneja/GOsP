<?php
include "../Database/connect.php";
include "../common/function.php";

session_start();
$login_status_error="";
// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
  // User is already logged in, redirect to the home page or dashboard
  header('Location: html\index.php');
  exit();
}

// Check if the form is submitted
if (isset($_POST['sign_in'])) {

  // Get the submitted username and password
  $username = mysqli_real_escape_string($con,$_POST['email_username']);
  $password = mysqli_real_escape_string($con,$_POST['password']);

  // Prepare and execute the SQL statement
  $cmd = $con->prepare("SELECT id as user_id, username,password FROM student_admin WHERE username = ? AND password = ? ");
  $cmd->bind_param("ss", $username,$password);
  $cmd->execute();
  $ex = $cmd->get_result();

  if ($ex->num_rows == 1) {

    $row = mysqli_fetch_array($ex);

    $user_id = $row['user_id'];
    $_SESSION['user_id'] = $user_id;

    $_SESSION['status'] = "Logged In Successfully.";
    $_SESSION['status_code'] = "success";
    echo "<script>setTimeout(function(){window.location='html/index.php'},1000)</script>";

    // header("Location: http://localhost/GOsP/student_admin/");

  }else{
    $_SESSION['status'] = "Invalid Username or Password.";
    $_SESSION['status_code'] = "error";
    echo "<script>setTimeout(function(){window.location='index.php'},1000)</script>";
  }

}
  
?>


<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Admin Login</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <!-- <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" /> -->

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />

  <!-- Page -->
  <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css" />
  <link rel="stylesheet" href="../componants/header/header.css">
  <link rel="stylesheet" href="../componants/footer/footer.css">


</head>

<body>
  <!-- header  -->
  <?php include "../componants/header/header.php"; ?>

  <!-- Content -->
  
  <div class="container-xxl">
    <?php if(isset($_SESSION['status'])){
      if($_SESSION['status_code'] == "success"){
        echo '<div class="bs-toast toast toast-placement-ex m-2 fade bg-primary top-0 end-0 show" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
        <div class="toast-header">
          <i class="bx bx-bell me-2"></i>
          <div class="me-auto fw-semibold">Welcome to Student Admin </div>
          <small>5 sec ago</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">Login Successfully</div>
      </div>';
      } elseif($_SESSION['status_code'] == "error"){
        echo '<div class="bs-toast toast toast-placement-ex m-2 fade bg-primary top-0 end-0 show" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
        <div class="toast-header">
          <i class="bx bx-bell me-2"></i>
        
          <small>11 mins ago</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">Error</div>
      </div>';
      }
      
    }?>
  
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <span class="app-brand-text demo text-body fw-bolder" style="font-size: 31px;">GOsP</span>
            </div>
            <!-- /Logo -->
            <h4 class="mb-10">Welcome to Student Admin! 👋</h4>
            <form id="formAuthentication" action="index.php" class="mb-3 mt-sm-3" method="POST">
              <div class="mb-3">
                <label for="email" class="form-label">Username</label>
                <input type="text" class="form-control" id="email" name="email_username"
                  placeholder="Enter your email or username" autofocus required />
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
                  <a href="auth-forgot-password-basic.html">
                    <small>Forgot Password?</small>
                  </a>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" required />

                </div>
                <div class="form-text color-red"><?php echo $login_status_error; ?></div>
              </div>

              <div class="mb-3">
                <button name="sign_in" class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                <!-- <a href="html/index.php" class="btn btn-primary d-grid w-100">Sign in</a> -->
              </div>
            </form>
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>


  <!-- footer -->
  <?php include "../componants/footer/footer.php"; ?>
</body>

</html>