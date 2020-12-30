<?php
if (!isset($_SESSION)) 
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
if(!isset($_SESSION))
{
session_start();
}
	$StudentId=$_SESSION['ID'];
	$Feedback=$_POST['txtFeedback'];
	$FDate= date('y/m/d');


	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","talent");

	// Specify the query to Insert Record
	$sql = "insert into student_feedback(StudentId,StudentFeedback,StudentFeedbackDate) values('".$StudentId."','".$Feedback."','".$FDate."')";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	
	echo '<script type="text/javascript">alert;window.location=\'index.php#feedback-section\';</script>';

?>
</body>
</html>
