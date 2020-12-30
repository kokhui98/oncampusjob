<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$TalentId=$_GET['TalentId'];
	$EmployerId=$_SESSION['ID'];
	
	// Establish Connection with MYSQL
	$con1 = mysqli_connect ("localhost","root","","talent");

	// Specify the query to Insert Record
	$sql1 = "select * from like_master where EmployerId='".$EmployerId."' and TalentId='".$TalentId."'";
	// execute query
	$result1 = mysqli_query ($con1,$sql1);
	$records1 = mysqli_num_rows($result1);
	// Close The Connection
	mysqli_close ($con1);
	if($records1==0)
	{
	
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","talent");

	// Specify the query to Insert Record
	$sql = "insert into like_master (EmployerId,TalentId) values('".$EmployerId."','".$TalentId."')";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	
	echo '<script type="text/javascript">alert;window.location=\'TalentLiked.php#talentliked-section\';</script>';
}
else
{
echo '<script type="text/javascript">alert;window.location=\'index.php#talentsearch-section\';</script>';
}
?>
</body>
</html>
