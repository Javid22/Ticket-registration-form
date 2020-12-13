<html>
<?php
	session_start();
	include 'header.php'; 
?>

<head>
	<title>Page Title</title> 
	<link rel="stylesheet" type="text/css" href="style.php">	
</head>

<?php
	//Assign parameter for server
	$data_array = array(
		'department'  => $_POST['department'],
		'category'    => $_POST['category'],
		'subject'     => $_POST['name'],
		'description' => $_POST['description'],
		'username'    => $_SESSION['user'],
		'email'       => $_SESSION['email'],
		'phone'       => $_POST['phone'],
		'Priority'    => $_POST['Priority']
	);
	//Sending data in POST method
	$url="zoho desk api";
 	$data = http_build_query($data_array);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	$decode =  json_decode($result,true);
	print_r($decode);
	curl_close($ch);
?>

<body> 
	<!-- Result will be displayed to user -->
	<div class="container">
	<div class="row">
	<div class="col-md-6">
	<div class="card">
	<div style="margin-left:25%;margin-top:20%;width:800px;" class="box" >
		<h1>Ticket Details</h1>
		<p style="color:white;"><u>ticket status </u></p>
		<p><?php //Response values are display here ?> </p>
	</div>
	</div>
	</div>
	</div>
	</div>
</body>
</html>