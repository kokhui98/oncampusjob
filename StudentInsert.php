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
	$UserType="Student";
	$Question=$_POST['cmbQue'];
	$Answer=$_POST['txtAnswer'];
	// Establish Connection with MYSQL
	
	$con = mysqli_connect ("localhost","root","","talent");
	
	$stmt = $con->prepare("SELECT * FROM Student_R WHERE UserName = ?;");
	$stmt->bind_param("s",$UserName);
	
	$stmt->execute();
	$result = $stmt->get_result();
	$stmt->close();
	$exists = $result->fetch_all();
	if(count($exists) > 0) {
		Print '<script>alert("This Username has been taken!");</script>';
		Print '<script>window.location.assign("index.php#studentr-section");</script>';
	}else{
		// Specify the query to Insert Record
		$sql = "insert into Student_R(StudentName,Area,Email,Mobile,Status,UserName,Password,Question,Answer) values('".$Name."','".$Area."','".$Email."',".$Mobile.",'".$Status."','".$UserName."','".$Password."','".$Question."','".$Answer."')";
		// execute query
      
		mysqli_query ($con,$sql);
			echo '<script type="text/javascript">alert("Succesfully Submit");window.location=\'index.php#studentr-section\';</script>';

	}
	
	
	// Close The Connection
	mysqli_close ($con);
	

?>
</body>
</html>
