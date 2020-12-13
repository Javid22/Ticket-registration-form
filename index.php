<html>
<?php 
	session_start();
	include 'header.php';
?>
<head>
	 <title>Page Title</title> 
	 <link rel="stylesheet" type="text/css" href="style.php">
</head>
<body>
	<div class="container">
	<div class="row">
	<div class="col-md-6">
	<div class="card">
		<form class="box"  method="POST">
			<h1>Sign In</h1>
			<div id="incorrect"></div>
			<p class="muted">Already a member? </p> 
			<input type="email" name="email" placeholder="Email Id" > 
			<input type="password" name="password" placeholder="Password" > 
			<div id="button">
				<input type="submit" name="submit" id="login" value="Sign In" href="#">
				<a href="new_registration.php"><input type="button" id="user" value="New User ?" ></a>
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
$con=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	$_SESSION['email'] = $_POST['email'];
	$result=mysqli_query($con,"SELECT * FROM log_in WHERE email = '".$email."' AND password = '".$password."' ")or die(mysqli_error($con));
	$row=mysqli_fetch_array($result);
	  if(empty($email) || empty ($password))
	  {
		echo 
		'<script type="text/javascript">
			document.getElementById("incorrect").innerHTML="Warning  Email Id and Password cannot be blank ";
		</script>';
		exit();
 	  }
	  if($email == $row['email'] && $password == $row['password'])
	  {
	 	header("location:http://localhost/peer_xp/add_new_ticket.php");
		exit();
      } 
	 if(!($email == $row['email'] && $password == $row['password']))
	  {
		 echo 
		 '<script type="text/javascript">
	  		document.getElementById("incorrect").innerHTML="Email Id and Password is incorrect";
		  </script>';
		  exit();
 	  }

}
?>
</html>	