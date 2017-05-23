<!DOCTYPE html>
<html lang="en">
	<!--
		Author: Jeremy Manalo
		Date: 5/16/17
		Filename: blogger.html
		Description: Become a blogger page for blogging site
	-->
	
	<head> 
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Become a Blogger</title>
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<!-- BootStrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"  type='text/css'>
		
		<!-- Customized Stylesheets -->
		<link href="./styles/styles.css" rel="stylesheet" type="text/css">
		<link href="./styles/blogger.css" rel="stylesheet" type="text/css">
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
							<h1 class="display-4">Become a Blogger!</h1>
							<br>
							<p class="lead">Create a new account below</p>
						</div>
						<div class="col-sm-3">
							<img src="images/writing.png">
						</div>
					</div>
				</div>
			</div>
			
			<div class="panel-body">
				<form role="form" action="" method="POST">
					
					<!-- Left side of Form -->
					<div class="col-md-6 profile-left">
						
						<!-- Email input -->
						<div class="box">
							<div class="input-group">
								<input type="text" class="form-control" aria-describedby="username">
								<span class="input-group-addon" id="username">Username</span>
							</div>
							<div class="input-group">
								<input type="text" class="form-control" aria-describedby="email">
								<span class="input-group-addon" id="email">Email</span>
							</div>
						</div>
						<br><br><br>
						<div class="box">
							<div class="input-group">
								<input type="text" class="form-control" aria-describedby="password">
								<span class="input-group-addon" id="password">Password</span>
							</div>
							<div class="input-group">
								<input type="text" class="form-control" aria-describedby="verify">
								<span class="input-group-addon" id="verify">Verify</span>
							</div>
						</div>
					</div> 
					
					<!-- Right side of Form-->    
					<div class="col-md-6 profile-right">
						<div class="input-group">
							<input type="text" class="form-control" aria-describedby="image">
							<span class="input-group-addon" id="image">Upload portrait</span>
						</div>
						
						<!-- Bio -->
						<div class="form-group">
							<h4 class="text-center" id="bio">Quick Biography</h4>
							<textarea class="form-control" rows="6" name="biography" placeholder="Describe yourself..."></textarea>
						</div>
					</div>
					
					<!-- Start Blogging Button -->
					<div class="col-md-12 text-center">
						<button class="btn btn-primary">Start Blogging!</button>
					</div>
				</form>
			</div>
		</div>
		
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>