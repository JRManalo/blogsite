<!DOCTYPE html>
<html lang="en">
	<!--
		Author: Jeremy Manalo
		Date: 5/16/17
		Filename: blog.html
		Description: view users blog for blogging site
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
		<link href="./styles/blog.css" rel="stylesheet" type="text/css">
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
        
        <div class="row content col-sm-10">
            <div class="separate">
                <div class="block">
                    <div id="header">
                        <h1>Joe Schmoe's Blogs</h1>
                    </div>
                </div>
                
                <div class="separate extend col-sm-8">
                    <div id="most-recent">
                        <h4><strong>My most recent blog:</strong></a></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum quam et tortorsodales commodo...
                        </p>
                    </div>
                    
                    <div id="myblogs">
                        <div  class="bottom-border extend">
                            <h4><strong id="s1">My blogs:</strong></h4>
                        </div>
                        <div class="bottom-border extend">
                            <h4><a href="./fullviewblog">In the words of Abraham Lincoln</a>
                            - word count: 14 -
                            05/19/2017</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum quam et tortorsodales commodo...</p>
                        </div>
    
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="center" id="profilePic">
                        <img src="images/user.png" alt="profile pic" />
                    </div>
                    <div id="bio">
                        <div class="center bottom-border extend">
                            <h3><strong>Joe Schmoe</strong></h3>
                        </div>
                        <p>Bio: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum quam et tortorsodales commodo.</p>
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