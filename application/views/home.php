<!doctype html>
<html lang="en">


<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


	<title>GOAL TRACKER SIGN UP</title>
	<link rel="stylesheet" href="styles.css">
	<!-- echo <img src="/public/goal.jpg" width="280" height="125" title="Logo of a company" alt="Logo of a company" /> -->


</head>

<body style='background: -webkit-linear-gradient(right, #3931af, #00c6ff)'>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
				aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<a class="navbar-brand" href="#"> <img src="https://img.icons8.com/bubbles/64/000000/google-tag-manager.png"/> GOAL TRACKER </a>
			
			<p><i class="fas fa-bolt fa-3x amber-text pr-3" aria-hidden="true"></i></p>
           			
			<form class="d-flex">
			<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				 <li class="nav-item">
						<a class="nav-link" href="<?=base_url('welcome/login')?>">Login</a>
					</li> 
				</ul>
				</form> 
			</div>
		</div>
	</nav>
	
	
	<div class="container" style="margin-right: 1px">
	<div class="row">
				
			<div class="col-md-6" font-family="sans-serif-bold">
				<br><br><br>
				&nbsp; <h1><b> Create your Account <br> Start to Build your Habit! </b></h1>


				<img src="https://www.pngall.com/vector-png/download/12714" alt=""/>
			</div>
			


			<div class="col-md-4">
				<div class="card" style="margin-top: 20px">
					<div class="card-header text-center">
						<img src="https://img.icons8.com/material/50/000000/edit-user-male--v1.png" ass="rounded-circle" alt="logo">
						<h2>Sign Up</h2>
						<p>Fill out this form to create an account!</p>

					</div>
					<div class="card-body">
						<form method="post" autocomplete="off" action="<?=base_url('welcome/registerNow')?>">
						
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">First Name</label>
								<input type="text" placeholder="First Name" name="firstname" class="form-control"
									id="name" aria-describedby="name">

							</div>

							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Last Name</label>
								<input type="text" placeholder="Last Name" name="lastname" class="form-control"
									id="name" aria-describedby="name">

							</div>

							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Username</label>
								<input type="text" placeholder="User Name" name="username" class="form-control"
									id="name" aria-describedby="name">

							</div>

							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Email address</label>
								<input type="email" placeholder="Email Address" name="email" class="form-control"
									id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>

							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Password</label>
								<input type="password" name="password" placeholder="User Password" class="form-control"
									id="exampleInputPassword1">
							</div>

							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Confirm Password</label>
								<input type="password" name="password" placeholder="Confirm Password"
									class="form-control" id="exampleInputPassword1">
							</div>

							<div class="text-center">
								<button type="submit" class="btn btn-primary">CREATE ACCOUNT</button>
							</div><br>
							<p class="login-register-text text-center small">Already have an account? <a href="welcome/login">Click to Login</a>.</p>

							<?php
						if($this->session->flashdata('success'))  {	?>
							<p class="text-success text-center "   style="margin-top: 5px;">
								<?=$this->session->flashdata ('success')?> 
							</p>
							<?php } ?>
							

						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>


	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>


	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>