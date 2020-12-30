<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$UserName=$_POST['txtUser'];
$Password=$_POST['txtPass'];
$UserType=$_POST['cmbUser'];
if($UserType=="Student")
{
$con = mysqli_connect("localhost","root","","talent");

$sql = "select * from student_r where UserName='".$UserName."' and Password='".$Password."' and Status='Confirm'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong Information Provided");window.location=\'right.php\';</script>';
}
else
{
$_SESSION['ID']=$row['StudentId'];
$_SESSION['Name']=$row['StudentName'];
$_SESSION['$UserName_std']=$UserName;
header("location:Student/index.php");
} 
mysqli_close($con);
}
else if($UserType=="Employer")
{
$con = mysqli_connect("localhost","root","","talent");
$sql = "select * from employer_r where UserName='".$UserName."' and Password='".$Password."' and Status='Confirm'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong Information Provided");window.location=\'right.php\';</script>';
}
else
{
$_SESSION['ID']=$row['EmployerId'];
$_SESSION['Name']=$row['EmployerName'];
$_SESSION['$UserName_emp']=$UserName;
header("location:Employer/index.php");
} 
mysqli_close($con);
}
?>

</body>
</html>
