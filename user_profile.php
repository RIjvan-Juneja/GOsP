<?php

include "Database/connect.php";


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
						<h4 class="text-center">Kiran Acharya</h4>
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
								<p class="d-inline-block">JUNEJA RIJVAN RIYAJBHAI</p>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<h6 class="d-inline-block">Enrollment Number :</h6>
									<p class="d-inline-block">201290116020 </p>
								</div>
							</div>
							<div class="col-md-4">
								<h6 class="d-inline-block">Branch :</h6>
								<p class="d-inline-block">IT </p>
							</div>
							<div class="col-md-12 row">
								<div class="col-md-4">
									<h6 class="d-inline-block">Skills :</h6>
									<ul>
										<li>HTML</li>
										<li>CSS</li>
										<li>Javascript</li>
									</ul>
								</div>
								<div class="col-md-4">
									<h6 class="d-inline-block">Semester :</h6>
									<p class="d-inline-block">3 </p>
									<br>
									<h6 class="d-inline-block">Github link :</h6>
									<a href="">Link</a>
									<br>
									<h6 class="d-inline-block">Email :</h6>
									<a href="">avb9924@gmail.com</a>
								</div>
								<div class="col-md-4">

								</div>
							</div>
							<div class="col-md-9">
								<h6 class="d-inline-block">Bio:</h6>
								<p class="text-justify">Lorem, Lorem ipsum dolor sit amet consectetur adipisicing elit.
									Consequuntur vitae repudiandae incidunt et exercitationem, explicabo, labore
									reprehenderit voluptatibus eveniet expedita tempore modi laboriosam laudantium
									numquam. ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus odio
									consequatur molestias, ut accusamus soluta rem molestiae eligendi consectetur eos
									esse id ipsa optio doloribus quasi, a sapiente iure tenetur accusantium enim
									voluptatem adipisci commodi? Ut, in impedit, dolorum exercitationem perferendis,
									eveniet aut nihil itaque iusto aliquam fugit error! Ullam?</p>
							</div>
						</div>

					</div>
					<div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
						<div class="card mb-3">
							<div class="card-body">
								<h5 class="card-title">Project Name</h5>
								<h6 class="card-subtitle mb-2 text-muted">Request for a Contributor</h6>
								<p class="card-text"> <a href=""> Rijvan,</a>I have Request become a contribiution in
									your project </p>
								<a href="#" class="card-link">Accept</a>
								<a href="#" class="card-link">Reject</a>
							</div>
						</div>
						
						
					</div>
					<div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
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
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Semester</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Skills</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-check">
										<label class="form-label" for="textAreaExample">Bio</label>
										<textarea class="form-control" id="textAreaExample1" rows="5" placeholder="Update your bio here.."></textarea>
									</div>
								</div>
							</div>
							<div class="row-md-6">
								<div class="form-group">
									<div class="form-check github-link">
										<label class="form-label" for="github">Github-Link:<i class='bx bxl-github'></i></label>
										<input type="text" name="github" placeholder="https://github.com/RIjvan-Juneja" class="form-control form-github"/>
									</div>
								</div>
							</div>
						</div>
						 <div>
							<button class="btn btn-primary">Update</button>
						</div> 
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