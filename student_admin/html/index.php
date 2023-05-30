

<?php
include "../../Database/connect.php";
// Start the session
session_start();
//check user is logged or not
if (!isset($_SESSION['user_id'])) {
 header('Location: http://localhost/GOsP/student_admin/index.php');
 exit();

}else{

echo $_SESSION['user_id'];
$user_id = $_SESSION['user_id'];
$stmt = $con->prepare("SELECT * FROM `student_admin` where id =?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $name = !empty($row['name']) ? $row['name'] : "";
} else {
    $name = "";
}
}
?>
<!DOCTYPE html>
 
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <!--import head -->
    <?php include 'include/head.php'; ?>

  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- side bar Menu -->
        <?php include 'include/sidebar.php'; ?>
        <!-- side bar Menu end -->

        <!-- Layout container -->
        <div class="layout-page">

          <!-- Navbar/ header start -->
          <?php include 'include/header.php'; ?>
          <!-- Navbar/ header end -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              

                <!-- ================ card section start =======================-->
                <div class="col-12">
                  <div class="row">
                    <!-- card 1 -->
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                            </div>
                            
                          </div>
                          <span class="d-block mb-1">Total Students
                            <?php
                            $total_student_query = "SELECT * from user where user_type = 'student';";
                            $total_student_query_run = mysqli_query($con,$total_student_query);
                            if($total_student = mysqli_num_rows($total_student_query_run ))
                            {
                              echo '<h3 class="card-title text-nowrap mb-2">'.$total_student.'</h3>';
                            }
                            else
                            {
                               echo '<h3 class="card-title text-nowrap mb-2">0</h3>';
                            }

                            ?>
                          </span>
                          
                        </div>
                      </div>
                    </div>
                    
                    <!-- card 2 -->
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Total Faculty
                            <?php
                          $total_student_query = "SELECT * from user where user_type = 'faculty';";
                            $total_student_query_run = mysqli_query($con,$total_student_query);
                            if($total_student = mysqli_num_rows($total_student_query_run ))
                            {
                              echo '<h3 class="card-title text-nowrap mb-2">'.$total_student.'</h3>';
                            }
                            else
                            {
                               echo '<h3 class="card-title text-nowrap mb-2">0</h3>';
                            }
                            ?>
                          </span>
                        </div>
                      </div>
                    </div>
                    
                    <!-- card 3 -->
                    <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                            
                          </div>
                          <span class="fw-semibold d-block mb-1">Approved Students
                          <?php
                          $total_student_query = "SELECT * from user where status = 'active';";
                            $total_student_query_run = mysqli_query($con,$total_student_query);
                            if($total_student = mysqli_num_rows($total_student_query_run ))
                            {
                              echo '<h3 class="card-title text-nowrap mb-2">'.$total_student.'</h3>';
                            }
                            else
                            {
                               echo '<h3 class="card-title text-nowrap mb-2">0</h3>';
                            }
                            ?>
                          </span>
                        </div>
                      </div>
                    </div>
                    
                    <!-- card 4 -->
                    <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                            
                          </div>
                          <span class="fw-semibold d-block mb-1">Pending Students
                          <?php
                          $total_student_query = "SELECT * from user where status = 'pending';";
                            $total_student_query_run = mysqli_query($con,$total_student_query);
                            if($total_student = mysqli_num_rows($total_student_query_run ))
                            {
                              echo '<h3 class="card-title text-nowrap mb-2">'.$total_student.'</h3>';
                            }
                            else
                            {
                               echo '<h3 class="card-title text-nowrap mb-2">0</h3>';
                            }
                            ?>
                          </span>
                        </div>
                      </div>
                    </div>

                    <!-- card 5 -->
                    <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                            
                          </div>
                          <span class="fw-semibold d-block mb-1">Projects
                          <?php
                          $total_student_query = "SELECT * from projects;";
                            $total_student_query_run = mysqli_query($con,$total_student_query);
                            if($total_student = mysqli_num_rows($total_student_query_run ))
                            {
                              echo '<h3 class="card-title text-nowrap mb-2">'.$total_student.'</h3>';
                            }
                            else
                            {
                               echo '<h3 class="card-title text-nowrap mb-2">0</h3>';
                            }
                            ?>

                          </span>
                        </div>
                      </div>
                    </div>

                    <!-- card 6 -->
                    <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                            
                          </div>
                          <span class="fw-semibold d-block mb-1">Mentors
                          <?php
                          $total_student_query = "SELECT * from projects;";
                            $total_student_query_run = mysqli_query($con,$total_student_query);
                            if($total_student = mysqli_num_rows($total_student_query_run ))
                            {
                              echo '<h3 class="card-title text-nowrap mb-2">'.$total_student.'</h3>';
                            }
                            else
                            {
                               echo '<h3 class="card-title text-nowrap mb-2">0</h3>';
                            }
                            ?>
                          </span>
                          
                        </div>
                      </div>
                    </div>

                    <!-- card 7 -->
                    <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                            
                          </div>
                          <span class="fw-semibold d-block mb-1">Contributors</span>
                          <h3 class="card-title mb-2">628</h3>
                        </div>
                      </div>
                    </div>
                    
                    
                  </div>
                </div>
                <!-- ================ card section end =======================-->


              </div>
            </div>
            <!-- / Content -->

            <!-- footer start  -->
            <?php include "include/footer.php"; ?>
            <!-- footer end  -->

          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
