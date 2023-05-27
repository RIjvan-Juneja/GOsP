<?php
include "Database/connect.php";
$stmt = $con->prepare("INSERT INTO `user`(enrollment_number,user_type,first_name,middle_name,last_name,phone_number,email,cource,branch,semester,github_link)VALUES (?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssssssis", $enrollment_number, $user_type, $first_name, $middle_name, $last_name, $phone_number, $email, $cource, $branch, $semester, $github_link);

if ($result = $stmt->execute()) {
    echo "Data stored successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>