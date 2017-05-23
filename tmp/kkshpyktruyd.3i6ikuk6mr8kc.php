<!DOCTYPE html>
<html lang="en">
	<!--
		Author: Jeremy Manalo
		Date: 5/16/17
		Filename: login.html
		Description: Login page for blogging site
	-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Login</title>
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<!-- BootStrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"  type='text/css'>
		
		<!-- Customized Stylesheets -->
		<link href="./styles/styles.css" rel="stylesheet" type="text/css">
		<link href="./styles/login.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
		<div class="col-sm-2">
			<ul>
				<h2>Blog Site</h2>
				<img id="trumpet" src="images/trumpet.png" alt="trumpet">
				<li><a href="./home">Home ></a></li>
				<li><a href="./blogger">Become a Blogger ></a></li>
				<li><a href="./about">About Us ></a></li>
				<li><a href="./login">Login ></a></li>
			</ul>
		</div>
		
		<div class="col-sm-10">
			<div class="jumbotron">
				<div class="container">
					<div class="row">
						<div class="col-sm-9">
							<h1 class="display-4">Welcome back!</h1>
							<br>
							<p class="lead">Please log in below</p>
						</div>
						<div class="col-sm-3">
							<img src="images/lock.png">
						</div>
					</div>
				</div>
			</div>
			
			<div class="well well-lg">
				<form>
					<div class="input-group">
						<input type="text" class="form-control" aria-describedby="username">
						<span class="input-group-addon" id="username">Username</span>
					</div>
					<div class="input-group">
						<input type="text" class="form-control" aria-describedby="password">
						<span class="input-group-addon" id="password">Password</span>
					</div>
				</form>				
				<br>
				<div class="text-center">
					<button class="btn btn-primary">Log In</button>
				</div>
			</div>
		</div>
		
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>