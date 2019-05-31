<?php 
    $con=mysqli_connect("localhost","root","","usmsystem");
    if (isset($_POST['register'])) {
    $query="INSERT INTO userreg VALUES(null,'".$_POST['full-name']."','".$_POST['your-email']."','".$_POST['password']."')";
    $res=mysqli_query($con,$query);
    echo "<script> alert('Registered Successfully'); window.location='login.php';</script>";

    }
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="" method="post">
				<h2>New User! Register Here</h2>
				<div class="form-row">
					<input type="text" name="full-name" id="full-name" class="input-text" placeholder="Your Name" required>
					
				</div>
				<div class="form-row">
					<input type="Email" name="your-email" id="your-email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">		
				</div>
				<div class="form-row">
					<input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
					
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
</body>
</html>