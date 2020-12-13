<html>
<head>
	<title>Page Title</title> 
	<link rel="stylesheet" type="text/css" href="style.php">
</head>

<body>
	<div class="container">
	<div class="row">
	<div class="col-md-6">
	<div class="card">
		<form style="margin-left:25%;margin-top:20%;width:800px;" class="box"  method="POST">
			<h1>Sign Up</h1>
			<div id="incorrect" style="color:white;"></div>
			<p class="muted"> Create an account to submit tickets</p> 
			<input type="email" name="email" placeholder="Email id" >
			<input type="text" name="user" placeholder="Username" required> 
			<input type="password" name="password" placeholder="Password" required> 
			<div id="button">
				<input type="submit" name="submit" id="login" value="Sign In" >
				<a href="index.php"><input type="button" id="user" value="Back" ></a>
			</div>
		</form>
	</div>
	</div>
	</div>
	</div>
</body>
	
<?php
	$host="localhost";
	$user="root";
	$password="";
	$db="peer_xp";
	include 'header.php';
	$con=mysqli_connect($host,$user,$password,$db);

		if(isset($_POST['submit']))
		{
			$username = $_POST['user'];
			$password = $_POST['password'];
			$email = $_POST['email'];
				 if(empty($username) || empty ($password) ||empty ($email) )
				 {
					echo 
					'<script type="text/javascript" >
						document.getElementById("incorrect").innerHTML="Please enter all the mandatory fields";
					</script>';
					exit();
 				 }
				 else
				 {
					$sql = "INSERT INTO log_in(`user_name`,`password`,`email`)VALUES('$username','$password','$email')";
					$result=mysqli_query($con,$sql);
					header("location:http://localhost/peer_xp/index.php");
				 }
			$con->close();
		}
?>
</html>