<?php include "Database/connect.php"; ?>
<?php

session_start();

if (isset($_SESSION['enrollmentNumber'])) {
    $enrollmentNumber = $_SESSION['enrollmentNumber'];
} else {
    header("Location: login.php");
    exit();
}

$project_id = mysqli_real_escape_string($con, $_GET['id']);

// get a contributor data
$stmt = $con->prepare("SELECT first_name FROM `user` where enrollment_number =?");
$stmt->bind_param("i", $enrollmentNumber);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $contributor_name = !empty($row['first_name']) ? $row['first_name'] : "";
}

// get a project data
$stmt = $con->prepare("SELECT mentor_id, project_name FROM `projects` where id =?");
$stmt->bind_param("i", $project_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $mentor_id = !empty($row['mentor_id']) ? $row['mentor_id'] : "";
    $project_name = !empty($row['project_name']) ? $row['project_name'] : "";
}


// insert data in request table
$status = "pending";
$stmt1 = $con->prepare("INSERT INTO `request`(mentor_id,countributor_id,status,project_id,project_name,contributor_name)VALUES (?,?,?,?,?,?)");
$stmt1->bind_param("iisiss", $mentor_id, $enrollmentNumber, $status,$project_id,$project_name,$contributor_name);
$result = $stmt1->execute();
if ($result) {
    echo "<script>confirm('Request successfully!')</script>";
    echo "<a href='project.php'>Back</a>";
} else {
    echo "<script>confirm('Request Failed!')</script>";
}
header("Location: project.php");
?>