<?php
include('../../Database/connect.php');
$id = $_GET['enrollment_number'];
$stmt = $con->prepare("UPDATE `user` SET status = 'active' WHERE enrollment_number = ? ");
$stmt->bind_param("s", $id);
$result = $stmt->execute();
if ($result) {
    $_SESSION['status'] = "Status changed Successfully";
        $_SESSION['status_code'] = "success";
        echo $_SESSION['status'];

        echo "<script>setTimeout(function(){window.location='pending_student.php'},1000);</script>";
} else {
    $_SESSION['status'] = "laboratories Deletion Failed";
        $_SESSION['status_code'] = "error";

        echo "<script>setTimeout(function(){window.location='pending_student.php.php'},1000);</script>";
}
?>