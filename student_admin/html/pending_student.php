<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>

    <!--import head -->
    <?php include 'include/head.php'; ?>
    
 <!-- Font Awesome CDN link -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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
                        <div class="card">
                            <h5 class="card-header">Total Student</h5>
                            <div class="card-body">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Enrollment No</th>
                                                <th>Name</th>
                                                <th>Course</th>
                                                <th>Branch</th>
                                                <th>Semester</th>
                                                <th>Status</th>
                                                <th>View</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                                <td>
                                                    <strong>201290116020</strong>
                                                </td>
                                                <td>Juneja Rijvan</td>
                                                <td>
                                                    B.E
                                                </td>
                                                <td>
                                                    CE
                                                </td>
                                                <td>
                                                    3
                                                </td>
                                                <td><span class="badge bg-label-warning me-1">Pending</span></td>
                                                <td>
                                                     <a href="" class="btn btn-icon btn-primary text-white">
                                                     <i class="fas fa-eye"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="" class="btn btn-icon btn-primary text-white">
                                                        <i class='tf-icons bx bx-check fs-5'></i>
                                                    </a>
                                                    <a href="" class="btn btn-icon btn-secondary text-white">
                                                        <i class='tf-icons bx bx-x fs-5'></i>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <strong>201290116020</strong>
                                                </td>
                                                <td>Juneja Rijvan</td>
                                                <td>
                                                    B.E
                                                </td>
                                                <td>
                                                    CE
                                                </td>
                                                <td>
                                                    3
                                                </td>
                                                <td><span class="badge bg-label-warning me-1">Pending</span></td>
                                                <td>
                                                     <a href="" class="btn btn-icon btn-primary text-white">
                                                     <i class="fas fa-eye"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="" class="btn btn-icon btn-primary text-white">
                                                        <i class='tf-icons bx bx-check fs-5'></i>
                                                    </a>
                                                    <a href="" class="btn btn-icon btn-secondary text-white">
                                                        <i class='tf-icons bx bx-x fs-5'></i>
                                                    </a>
                                                </td>
                                            </tr>

                                           
                                        </tbody>
                                    </table>
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
    <script src="../assets/vendor/libs/jquery/jquery.js"></>
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