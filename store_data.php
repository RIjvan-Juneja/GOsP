<?php
include "Database/connect.php";

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
  $user_type = "student";
  echo "<script>alert('hello')</script>";
$stmt = $con->prepare("INSERT INTO `user`(enrollment_number,user_type,first_name,middle_name,last_name,phone_number,email,cource,branch,semester,github_link) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssssssis", $enrollment_number, $user_type, $first_name, $middle_name, $last_name, $phone_number, $email, $cource, $branch, $semester, $github_link);

if ($result = $stmt->execute()) {
    echo "Data stored successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>