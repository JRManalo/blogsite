<!DOCTYPE html>
<html lang="en">
	<!--
		Author: Jeremy Manalo
		Date: 5/16/17
		Filename: about.html
		Description: About us page for blogging site
	-->
	
	<head> 
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>About Us</title>
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<!-- BootStrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"  type='text/css'>
		
		<!-- Customized Stylesheets -->
		<link href="./styles/styles.css" rel="stylesheet" type="text/css">
		<link href="./styles/about.css" rel="stylesheet" type="text/css">
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
							<h1 class="display-4">The Blog Site</h1>
							<br>
							<p class="lead">Your one-stop shop for all things internet blogs</p>
						</div>
						<div class="col-sm-3 jumbo-image">
							<img src="images/blog_logo.png">
						</div>
					</div>
				</div>
			</div>
			
			<div class="well">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							<h3>The Internet is abuzz with our blog content</h3>
							<hr>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
								exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
								dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
								Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
								anim id est laborum
							</p>
							<hr>
						</div>
						
						<div class="col-sm-12">
							<h3>Hear what others are saying about us!</h3>
							<br>
							<div class="testimonial">
								<p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor&rdquo;
								<small>- long time user Sally Nguyen</small></p>
								<p>&ldquo;Lorem ipsum dolor sit amet, consectetur ... &rdquo;
								<small>- blog contributer Terry Stone</small></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>
