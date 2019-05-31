<?php 
    $con=mysqli_connect("localhost","root","","usmsystem");
    if (isset($_POST['login'])) {
        $user=$_POST['email'];
        $pass=$_POST['pass'];
        $s="SELECT user_email, user_password FROM userreg";
        $q=mysqli_query($con,$s);
        while ($row=mysqli_fetch_array($q)) {
            $username=$row['user_email'];
            $password=$row['user_password'];
        }
        if ($user===$username AND $pass===$password) {
            session_start();
        if (isset($_SESSION['user_email'])) {
            session_unset();
        }
        $_SESSION['username']=$user;
        $_SESSION['password']=$pass;
            header("location:welcome.html");
        }
        else
            echo"<script> alert('Wrong Username or Password'); window.location='login.php';</script>";
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Here</title>
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-26">
						Welcome!<br> Log In here 
					</span>
					<br>
					<br>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
							<center>
                                 <input type="submit" name="login" value="LOGIN">
                             </center><br><br>

						<a class="txt2" href="register.php">
							<center><b>Register Here</b></center>
						</a>
				
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>