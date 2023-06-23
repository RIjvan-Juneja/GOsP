<?php
include "../../common/function.php";
include('../../Database/connect.php');

$id = $_GET['id'];
$password = generate_password();
echo $password;
$enc_password = encryptPassword($password);
$stmt = $con->prepare("UPDATE `user` SET status = 'active', password = ? WHERE id = ? ");
$stmt->bind_param("ss",$enc_password,$id);
$result = $stmt->execute();
if ($result) {
    $_SESSION['status'] = "Status changed Successfully";
        $_SESSION['status_code'] = "success";
        echo $_SESSION['status'];

        echo "<script>setTimeout(function(){window.location='total_faculty.php'},1000);</script>";
} else {
    $_SESSION['status'] = "laboratories Deletion Failed";
        $_SESSION['status_code'] = "error";

        echo "<script>setTimeout(function(){window.location='total_faculty.php.php'},1000);</script>";
}
?>