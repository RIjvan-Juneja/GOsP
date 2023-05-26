<?php
include('C:\xampp\htdocs\GOsP\Database\connect.php');
$id = $_GET['enrollment_number'];
$stmt = $con->prepare("UPDATE `user` SET status = 'active' WHERE id = ? ");
$stmt->bind_param("i", $id);
$result = $stmt->execute();
if ($result) {
    $_SESSION['status'] = "Status changed Successfully";
        $_SESSION['status_code'] = "success";

        echo "<script>setTimeout(function(){window.location='pending_student.php'},1000);</script>";
} else {
    $_SESSION['status'] = "laboratories Deletion Failed";
        $_SESSION['status_code'] = "error";

        echo "<script>setTimeout(function(){window.location='pending_student.php.php'},1000);</script>";
}
?>