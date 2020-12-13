<html>
<?php 
	session_start();
	include 'header.php';
	$host="localhost";
	$user="root";
	$password="";
	$db="peer_xp";
	$con=mysqli_connect($host,$user,$password,$db);
	$email = $_SESSION['email'];
	$result=mysqli_query($con,"SELECT `user_name` FROM log_in WHERE `email` = '".$email."' ")or die(mysqli_error($con));
	$row = mysqli_fetch_array($result);
	$_SESSION['user'] = $row['user_name'];
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
          <form class="box" action="manage_tickets.php" method="POST">
              <h1>Submit a ticket</h1>
              <div id="incorrect"></div>
              <p class="muted"><u>Ticket Information</u></p> 
		          Department :<select name='department' required>
                            <option value='0'> - Select Section- </option>
                            <option value='PWSLab DevOps Support'> PWSLab DevOps Support</option>
                            <option value='iSupport'> iSupport</option>
						    		      </select><br>
              Category :  <select name='category' required>
                            <option value='None'>  - None - </option>
                            <option value='NEW Project CI/CD Pipeline Setup'>  NEW Project CI/CD Pipeline Setup</option>
                            <option value='Update CI/CD Pipeline Configuration'>  Update CI/CD Pipeline Configuration</option>
                            <option value='DevSecOps Pipeline Setup'>  DevSecOps Pipeline Setup</option>
                            <option value='CI/CD Pipeline failure'>  CI/CD Pipeline failure </option>
                            <option value='Automated Deployment failure'>  Automated Deployment failure</option>
                            <option value='Docker and Container'>  Docker and Container</option>
                            <option value='Kubernetes Deployment(like EKS/GCP)'>  Kubernetes Deployment(like EKS/GCP)</option>
                            <option value='Git Source control'>  Git Source control</option>
                            <option value='PWSLab server not responding'>  PWSLab server not responding</option>
                            <option value='PWSLab Runnernot working'> PWSLab Runnernot working</option>
                            <option value='User management and Project access'> User management and Project access</option>
                            <option value='Cloud Integration Consultation'> Cloud Integration Consultation</option>
                            <option value='Others'> Others</option>
								          </select><br>
              Subject :   <input type="text" name="name" required> <br>
		          Description :<textarea  name ="description" row="15" cols="50"></textarea><br>
		          <p class="muted"><u>Contact Details</u></p><br>
              Contact Name:<input type="text" name="user"  placeholder = "<?php echo $_SESSION['user']; ?>" ><br>
		          Email :      <input type="text" name="password" placeholder = "<?php echo $_SESSION['email']; ?>" ><br>
              Phone :<input type="text" name="phone" required><br>
              <p class="muted"><u>Aditional Information</u></p><br>
              Priority :    <select name='Priority'>
                              <option value='None'> - None - </option>
                              <option value='High - Production System Down'> High - Production System Down</option>
                              <option value='Medium - System Impaired'> Medium - System Impaired</option>
                              <option value='Low - General Guidance'> Low - General Guidance</option>
								            </select><br>
              <input type="submit" name="submit" id="login" value="Login">
          </form>
      </div>
      </div>
      </div>
      </div>
  </body>
</html>	