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
	
	$StudentId=$_SESSION['ID'];
	$txtTalentTitle=$_POST['txtTalentTitle'];
	$txtIG=$_POST['txtIG'];
	$txtTalentVideo=$_POST['txtTalentVideo'];
	$txtTalentResume=$_POST['txtTalentResume'];
	$txtDescription=$_POST['txtDescription'];
	$Status="Pending";
	$Name=$_SESSION['Name'];

	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","talent");

	// Specify the query to Insert Record
	$sql = "insert into talent (StudentId,StudentName,TalentTitle,IG,TalentVideo,TalentResume,Description,Status) values('".$StudentId."','".$Name."','".$txtTalentTitle."','".$txtIG."','".$txtTalentVideo."','".$txtTalentResume."','".$txtDescription."','".$Status."')";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert;window.location=\'index.php#talentpost-section\';</script>';

?>
</body>
</html>
