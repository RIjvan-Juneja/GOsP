
<?php
include "Database/connect.php";
$login_status_error = "";
// Start the session

// Check if the form is submitted
if(isset($_POST['sign_in'])) {
  // Get the form data
  $enrollmentNumber = $_POST['email_username'];
  $password = $_POST['password'];

  // Prepare the SQL query
  $query = "SELECT * FROM user WHERE enrollment_number = ? AND password = ?";
  $stmt = $con->prepare($query);
  $stmt->bind_param("ss", $enrollmentNumber, $password);
  $stmt->execute();
  $result = $stmt->get_result();

  // Check if the user exists
  if ($result->num_rows === 1) {
    // User is authenticated
    // Set the enrollment number in the session
    $_SESSION['enrollmentNumber'] = $enrollmentNumber;
   
    // You can perform further actions like redirecting
    header("Location: index.php?id=".$enrollmentNumber);
    exit();
  } else {
    // Invalid credentials
    $login_status_error = "Invalid username or password";
  }

  // Close the prepared statement and database connection
  $stmt->close();
  $con->close();
}
?>

<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Student Login</title>

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
  <link rel="stylesheet" href="student_admin/assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="student_admin/assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="student_admin/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />

  <!-- Page -->
  <link rel="stylesheet" href="student_admin/assets/vendor/css/pages/page-auth.css" />
  <link rel="stylesheet" href="componants/header/header.css">
  <link rel="stylesheet" href="componants/footer/footer.css">


</head>

<body>
  <!-- header  -->
  <?php include "componants/header/header.php"; ?>

  <!-- Content -->
  
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
            <h4 class="mb-10">Welcome to GOsP! 👋</h4>
            <form id="formAuthentication" action="index.php" class="mb-3 mt-sm-3" method="POST">
              <div class="mb-3">
                <label for="email" class="form-label">Username</label>
                <input type="text" class="form-control" id="email" name="email_username"
                  placeholder="Enter your enrollment or username" autofocus required />
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
                <button name="sign_in" class="btn btn-primary d-grid w-100" type="submit">Login</button>
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
  <?php include "componants/footer/footer.php"; ?>
</body>

</html>