<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$Name=$_POST['txtName'];
	$Area=$_POST['txtArea'];
	$Email=$_POST['txtEmail'];
	$Mobile=$_POST['txtMobile'];
	$Status="Pending";
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	$Question=$_POST['cmbQue'];
	$Answer=$_POST['txtAnswer'];
	$UserType="Employer";
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","talent");
	
	$stmt = $con->prepare("SELECT * FROM employer_r WHERE UserName = ?;");
	$stmt->bind_param("s",$UserName);
	
	$stmt->execute();
	$result = $stmt->get_result();
	$stmt->close();
	$exists = $result->fetch_all();
	if(count($exists) > 0) {
		Print '<script>alert("This Username has been taken!");</script>';
		Print '<script>window.location.assign("index.php#employerr-section");</script>';
	}else{
	// Specify the query to Insert Record
	$sql="insert into employer_r(EmployerName,Area,Email,Mobile,Status,UserName,Password,Question,Answer) VALUES ('$Name','$Area','$Email','$Mobile','$Status','$UserName','$Password','$Question','$Answer')";
	// execute query
			mysqli_query ($con,$sql);
			echo '<script type="text/javascript">alert("Succesfully Submit");window.location=\'index.php#employerr-section\';</script>';

	}
		mysqli_close ($con);
	
	// Close The Connection
?>
</body>
</html>
