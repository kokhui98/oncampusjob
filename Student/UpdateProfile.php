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
$txtArea=$_POST['txtArea'];
$txtEmail=$_POST['txtEmail'];
$txtMobile = $_POST['txtMobile'];
$txtPassword=$_POST['txtPassword'];
// Establish Connection with MYSQL
$con = mysqli_connect("localhost","root","","talent");
// Select Database

// Specify the query to Update Record
$sql = "Update student_r  set Area='".$txtArea."',Email='".$txtEmail."',Mobile='".$txtMobile."',Password='".$txtPassword."' where StudentId=".$StudentId."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert;window.location=\'index.php#profile-section\';</script>';
?>
</body>
</html>
