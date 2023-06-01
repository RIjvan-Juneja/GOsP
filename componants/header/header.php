<?php
// session_start();
include "Database/connect.php";

// Start the session
// session_start();
// //check user is logged or not
// echo $_SESSION['enrollmentNumber'];
// if (isset($_GET['id'])) {
//     $enrollmentNumber = $_GET['id'];

//     $stmt = $con->prepare("SELECT * FROM `user` where enrollment_number =?");
//     $stmt->bind_param("i", $enrollmentNumber);
//     $stmt->execute();
//     $result = $stmt->get_result();
//     if ($result->num_rows == 1) {
//         $row = $result->fetch_assoc();
//         $name = !empty($row['first_name']) ? $row['first_name'] : "";
//     } else {
//         $name = "";
//     }

// }

//  echo "eroor";
// } else {

    
    if (isset($_SESSION['enrollmentNumber'])){
            $enrollmentNumber = $_SESSION['enrollmentNumber'];
    $stmt = $con->prepare("SELECT * FROM `user` where enrollment_number =?");
    $stmt->bind_param("i", $enrollmentNumber);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $name = !empty($row['first_name']) ? $row['first_name'] : "";
    } else {
        $name = "";
    }

    }
//     echo $_SESSION['enrollmentNumber'];
//     $enrollmentNumber = $_SESSION['enrollmentNumber'];
//     $stmt = $con->prepare("SELECT * FROM `user` where enrollment_number =?");
//     $stmt->bind_param("i", $enrollmentNumber);
//     $stmt->execute();
//     $result = $stmt->get_result();
//     if ($result->num_rows == 1) {
//         $row = $result->fetch_assoc();
//         $name = !empty($row['first_name']) ? $row['first_name'] : "";
//     } else {
//         $name = "";
//     }
// }

?>

<link rel="stylesheet" href="componants/header/header.css">

<header>
    <a href="#" class="logo">GOsP</a>

    <input type="checkbox" id="menu-bar">
    <label for="menu-bar">Menu</label>

    <nav class="navbar">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="project.php">PROJECT</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="#">CONTACT</a></li>
            <?php
            if (isset($_SESSION['enrollmentNumber'])) {
                ?>
                <li>

                <a href="">
                    <?php echo $name; ?>
                    <i class='bx bx-chevron-down'></i>
                </a>
                <ul>
                    <li><a href="user_profile.php">Profile</a></li>
                    <li><a href="logout.php">LogOut</a></li>
                </ul>
                </li>


            <?php } else { ?>
                <li>
                    <a href="">LOGIN <i class='bx bx-chevron-down'></i></a>
                    <ul>
                        <li><a href="http://localhost/GOsP/login.php">STUDENT</a></li>
                        <li><a href="student_admin/index.php">ADMIN</a></li>
                    </ul>
                </li>
            <?php } ?>
        </ul>
    </nav>
</header>