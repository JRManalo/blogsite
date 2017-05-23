<!DOCTYPE html>
<html lang="en">
	<!--
		Author: Jeremy Manalo
		Date: 5/16/17
		Filename: home.html
		Description: Home page for blogging site
	-->
	
	<head> 
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Home</title>
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<!-- BootStrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"  type='text/css'>
		
		<!-- Customized Stylesheets -->
		<link href="./styles/styles.css" rel="stylesheet" type="text/css">
		<link href="./styles/home.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
		<div class="col-sm-2">
			<ul>
				<h2>Blog Site</h2>
				<img id="trumpet" src="images/trumpet.png" alt="trumpet">
				<li><a href="./">Home ></a></li>
				<li><a href="./blogger">Become a Blogger ></a></li>
				<li><a href="./about">About Us ></a></li>
				<li><a href="./login">Login ></a></li>
			</ul>
		</div>
		
		<div class="row col-md-9 col-xs-12 page-container">
			<div class="row">
				<?php foreach (($squad?:[]) as $key=>$value): ?>
					<div class="post-box col-md-4 col-sm-6">						
						<div class="post">
							<img src="userimage/<?= $value[profile_pic] ?>"  alt="<?= $value[profile_pic] ?>" >
							<p class="center"><?= $value[name] ?></p>
							<p class="top-bottom-border extend pull"><a href="./blog">view blogs</a>
							<span class="pull-right">Total: 10</span></p>
							<div class="blog-text">
								<p>Something from my latest blog:<br>
								<?= $value[bio] ?></p>
							</div>
						</div>
					</div>
				<?php endforeach; ?>	
			</div>
		</div>
		
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>