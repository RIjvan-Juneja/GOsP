<?php

include "Database/connect.php";
session_start();

if (isset($_POST['update'])) {
	$u_semester = mysqli_real_escape_string($con, $_POST['u_semester']);
	$u_skills = mysqli_real_escape_string($con, $_POST['u_skills']);
	$u_description = mysqli_real_escape_string($con, $_POST['u_description']);
	$u_github_link = mysqli_real_escape_string($con, $_POST['u_github_link']);

	$stmt = $con->prepare("UPDATE `user` SET `semester` = ?, `skills` = ?, `description` = ?, `github_link` = ? WHERE enrollment_number = ?");
	$stmt->bind_param("isssi", $u_semester, $u_skills, $u_description, $u_github_link, $_SESSION['enrollmentNumber']);
	$result = $stmt->execute();
	if ($result) {
		echo "<script>alert('updated')</script>";
	}
}

if (isset($_SESSION['enrollmentNumber'])) {
	$enrollmentNumber = $_SESSION['enrollmentNumber'];
	$stmt = $con->prepare("SELECT * FROM `user` where enrollment_number =?");
	$stmt->bind_param("i", $enrollmentNumber);
	$stmt->execute();
	$result = $stmt->get_result();
	if ($result->num_rows == 1) {
		$row = $result->fetch_assoc();
		$id = !empty($row['id']) ? $row['id'] : "";
		$first_name = !empty($row['first_name']) ? $row['first_name'] : "";
		$middle_name = !empty($row['middle_name']) ? $row['middle_name'] : "";
		$last_name = !empty($row['last_name']) ? $row['last_name'] : "";
		$er_num = !empty($row['enrollment_number']) ? $row['enrollment_number'] : "";
		$email = !empty($row['email']) ? $row['email'] : "";
		$branch = !empty($row['branch']) ? $row['branch'] : "";
		$semester = !empty($row['semester']) ? $row['semester'] : "";
		$skills = !empty($row['skills']) ? $row['skills'] : "";
		$description = !empty($row['description']) ? $row['description'] : "";
		$github_link = !empty($row['github_link']) ? $row['github_link'] : "";

	}

} else {
	header("Location: login.php");
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>User</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css"
		href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="user_profile.css">
</head>

<body>
	<section class="py-5 my-5">
		<div class="container-fluid">
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="assets/images/user2.jpg" alt="Image" class="shadow">
						</div>
						<h4 class="text-center">
							<?php echo $first_name; ?>
						</h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab"
							aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i>
							Account
						</a>
						<a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab"
							aria-controls="notification" aria-selected="false">
							<i class="fa fa-bell text-center mr-1"></i>
							Notification
						</a>
						<a class="nav-link" id="application-tab" data-toggle="pill" href="#application" role="tab"
							aria-controls="application" aria-selected="false">
							<i class="fa fa-tv text-center mr-1"></i>
							Project
						</a>

						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab"
							aria-controls="password" aria-selected="false">
							<i class="fa fa-user text-center mr-1"></i>
							contribiution

						</a>
						<a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab"
							aria-controls="security" aria-selected="false">
							<i class="fa fa-pencil-square-o"></i>
							Edit profile
						</a>


					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<div class="row">
							<div class="col-md-4">
								<h6 class="d-inline-block">Name :</h6>
								<p class="d-inline-block">
									<?php echo $first_name . " " . $middle_name . " " . $last_name; ?>
								</p>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<h6 class="d-inline-block">Enrollment Number :</h6>
									<p class="d-inline-block">
										<?php echo $er_num; ?>
									</p>
								</div>
							</div>
							<div class="col-md-4">
								<h6 class="d-inline-block">Branch :</h6>
								<p class="d-inline-block">
									<?php echo $branch; ?>
								</p>
							</div>
							<div class="col-md-12 row">
								<div class="col-md-4">
									<h6 class="d-inline-block">Skills :</h6>
									<ul>
										<?php $array = explode(',', $skills);
										foreach ($array as $key => $value) {
											echo "<li>" . $value . "</li>";
										}
										?>
									</ul>
								</div>
								<div class="col-md-4">
									<h6 class="d-inline-block">Semester :</h6>
									<p class="d-inline-block">
										<?php echo $semester; ?>
									</p>
									<br>
									<h6 class="d-inline-block">Github link :</h6>
									<a href="">
										<?php echo $github_link; ?>
									</a>
									<br>
									<h6 class="d-inline-block">Email :</h6>
									<a href="">
										<?php echo $email; ?>
									</a>
								</div>
								<div class="col-md-4">

								</div>
							</div>
							<div class="col-md-9">
								<h6 class="d-inline-block">Bio:</h6>
								<p class="text-justify">
									<?php echo $description; ?>
								</p>
							</div>
						</div>

					</div>
					<div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
						<div class="card mb-3">
							<?php
							$s = "pending";
							// get
							$stmt3 = $con->prepare("SELECT * FROM `request` Where mentor_id = ? AND status = ?");
							$stmt3->bind_param("is", $id, $s);
							$stmt3->execute();
							$result = $stmt3->get_result();
							while ($row = $result->fetch_assoc()) {
								?>
								<div class="card-body">
									<h5 class="card-title">Project : <?php echo $row['project_name']; ?></h5>
									<h6 class="card-subtitle mb-2 text-muted">Request for a Contributor</h6>
									<p class="card-text"> <a href=""> <?php echo $row['contributor_name']; ?>,</a>I have Request become a contribiution in
										your project </p>
									<a href="#" class="card-link">Accept</a>
									<a href="#" class="card-link">Reject</a>
								</div>
							</div>

						<?php } ?>
					</div>
					<div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
						<<?php
							$s = "pending";
							// get
							$stmt3 = $con->prepare("SELECT * FROM `request` Where mentor_id = ? AND status = ?");
							$stmt3->bind_param("is", $id, $s);
							$stmt3->execute();
							$result = $stmt3->get_result();
							while ($row = $result->fetch_assoc()) {
								?>
								<div class="card-body">
									<h5 class="card-title">Project : <?php echo $row['project_name']; ?></h5>
									<h6 class="card-subtitle mb-2 text-muted">Request for a Contributor</h6>
									<p class="card-text"> <a href=""> <?php echo $row['contributor_name']; ?>,</a>I have Request become a contribiution in
										your project </p>
									<a href="#" class="card-link">Accept</a>
									<a href="#" class="card-link">Reject</a>
								</div>
							</div>

						<?php } ?>
					</div>
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<div class="card mb-3">
							<div class="card-header">
								Project Name
							</div>
							<div class="card-body">
								<h5 class="card-title">Contributors</h5>
								<p class="card-text">Rijvan ,jainam , cag , dhjdu</p>
								<a href="#" class="btn btn-primary">View Project</a>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
						<h3 class="mb-4">Edit Profile</h3>
						<form action="" method="POST">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Semester</label>
										<input type="text" class="form-control" name="u_semester">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Skills</label>
										<input type="text" class="form-control" name="u_skills"
											placeholder="React, node, php">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<div class="form-check">
											<label class="form-label" for="textAreaExample">Bio</label>
											<textarea class="form-control" id="textAreaExample1" rows="5"
												placeholder="Update your bio here.." name="u_description"></textarea>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<!-- <div class="form-check github-link"> -->
										<label class="form-label" for="github">Github-Link:<i
												class='bx bxl-github'></i></label>
										<input type="text" class="form-control" name="u_github_link"
											placeholder="https://github.com/RIjvan-Juneja" />
										<!-- </div> -->
									</div>
								</div>
							</div>
							<div>
								<button class="btn btn-primary" name="update" type="submit">Update</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>


	<script src="assets/js/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>