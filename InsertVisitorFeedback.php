<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$Feedback=$_POST['txtFeedback'];
	$FDate= date('y/m/d');


	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","talent");

	// Specify the query to Insert Record
	$sql = "insert into visitor_feedback(VisitorFeedback,VisitorFeedbackDate) values('".$Feedback."','".$FDate."')";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	
	echo '<script type="text/javascript">alert;window.location=\'index.php#contact-section\';</script>';

?>
</body>
</html>