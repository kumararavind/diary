<!--Author: W3layou<h5>Dairy </h5>ts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include '../connection.php'; ?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Video Login Form Responsive Widget Template :: w3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Video Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Marck+Script&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext"
	    rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<div class="video-w3l" data-vide-bg="video/1">
		<!-- title -->
		<h1>
			<span>P</span>ersonal
			<span>D</span>airy
			<span>R</span>egistration</h1>
		<!-- //title -->
		<!-- content -->
		<div class="sub-main-w3">
			<form action="#" method="post">
				<div class="form-style-agile">
					<label>Name</label>
					<input placeholder="Full name" pattern="[A-Za-z]+" title="letters only" name="Name" type="text" required="">
				</div>
				<div class="form-style-agile">
					<label>Contact</label>
					<input placeholder="Contact Number" pattern="[0-9]+" title="only letters" name="Contact" type="text" required="">
				</div>
				<div class="form-style-agile">
					<label>DOB</label>
					<input  name="dob" pattern="[A-Za-z0-9\s]+" max="2000-12-01" title="only letters" type="date" required="">
				</div>
				
				<div class="form-style-agile">
					<label>Gender</label>
					<input name="gender" type="radio" value="male" checked>Male
					<input name="gender" type="radio" value="female">Female
				</div>
				<div class="form-style-agile">
					<label>Image</label>
					<input  name="image" type="file">
				</div>
				<div class="form-style-agile">
					<label>Email</label>
					<input  name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" type="email" required="">
				</div>
				<div class="form-style-agile">
					<label>Password</label>
					<input placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  name="Password" type="password" required="">
				</div>
				<div class="form-style-agile">
					<label>Confirm Password</label>
					<input placeholder="Re-enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  name="Cpassword" type="password" required="">
				</div>
				<!-- switch -->
				
				<!-- //switch -->
				<input type="submit" name="save" value="Register">
				<!-- social icons -->
				<div class="footer-social">
					<h2><a href="index.php" style="color:white; font-weight: bold;">Login</a></h2>
					<!-- <ul>
						<li>
							<a href="#">
								<i class="fab fa-facebook-f icon_facebook"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-twitter icon_twitter"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-dribbble icon_dribbble"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-google-plus-g icon_g_plus"></i>
							</a>
						</li>
					</ul> -->
				</div>
				<!-- //social icons -->
			</form>
		</div>
		<!-- //content -->

		<!-- copyright -->
		<div class="footer">
			<p>&copy; 2018 Personal Dairy Login Form. All rights reserved  | design by <a href="http://www.W3Layouts.com" target="_blank">ARAVIND KUMAR</a></p>
		</div>
		<!-- //copyright -->
	</div>

	
	<!-- Jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //Jquery -->

	<!-- Video js -->
	<script src="js/jquery.vide.min.js"></script>
	<!-- //Video js -->
	
</body>

</html>
<?php
     if (isset($_POST['save']))
     {
     	$name=$_POST['Name'];
     	$contact=$_POST['Contact'];
     	$dob=$_POST['dob'];
     	$gender=$_POST['gender'];
     	$image=$_POST['image'];
     	$email=$_POST['email'];
     	$password=$_POST['Password'];
        
      	$query=mysqli_query($con,"INSERT INTO `user`(`uname`, `email`, `pwd`, `gender`, `dob`, `image`, `contact`) VALUES ('$name','$email','$password','$gender','$dob','$image','$contact')") or die(mysqli_error($con));

     	if($query==true)
     	{
     		echo '<script> alert("Register successfully");window.location="index.php";</script>';
     	}
     	else
     	{
     		echo '<script> alert("Register Failed");</script>';
     	}
     }
 
?>
