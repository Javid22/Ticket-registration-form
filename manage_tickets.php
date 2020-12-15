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
        

        
$url = "https://desk.zoho.in/api/v1/tickets";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "orgId:60001280952",
   "Authorization: 9446933330c7f886fbdf16782906a9e0",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
$result = json_decode( $resp,true); 
curl_close($curl);         

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
		<p style="float:left;margin-left:40px;color:white;"><?php echo 'Test id ' .' - '.$result['data']['0']['id']; ?>
		<p style="float:right;margin-left:-20px;color:white;"><?php  echo $result['data']['0']['ticketNumber']; ?> </p></p><br></br>
		<p style="float:left;margin-left:40px;color:white;"><?php echo 'Status' .' - '.$result['data']['0']['status']; ?></p><br><br>
		<p style="float:left;margin-left:40px;color:white;"><?php  echo $_POST['department'] ;?> </p></p><br>
		<span style="float:left;margin-left:40px;color:white;"> <?php echo 'Time - '.substr($result['data']['0']['createdTime'],11,8);?><span>
	</div>
	</div>
	</div>
	</div>
	</div>
</body>
</html>
