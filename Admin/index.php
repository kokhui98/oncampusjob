<?php
session_start();
if(isset($_SESSION['$UserName'])){

} 
else{
		header('location:../index.php');
}
?>
<?xml version="1.0"?>
<!doctype html>
<html lang="en">
  <head>
    <title>On Campus Job and Talent Matching Corner</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   

	<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />


    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      <div class="container">
        <div class="row align-items-center">         
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.php" class="mb-0">OCJ/TMC</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li class="has-children">
                  <a class="nav-link">Admin</a>
                  <ul class="dropdown">
                    <li><a href="#admincreate-section" class="nav-link">Create</a></li>
                    <li><a href="#adminlist-section" class="nav-link">List</a></li>                   
                    </li>
				 </ul>
				</li> 
				<li><a href="#student-section" class="nav-link">Student</a></li>                   
                <li><a href="#employer-section" class="nav-link">Employer</a></li>
				<li class="has-children">
                  <a href="#talent-section" class="nav-link">Talent</a>
                  <ul class="dropdown">
                    <li><a href="#talentcreate-section" class="nav-link">Create</a></li>
                    <li><a href="#talentlist-section" class="nav-link">List</a></li>                   
                    </li>
				 </ul>
				</li>
				<li class="has-children">
                  <a class="nav-link">Feedback</a>
                  <ul class="dropdown">
					<li><a href="Feedback.php#visitorfeedback-section" class="nav-link">Visitor</a></li>
                    <li><a href="Feedback.php#studentfeedback-section" class="nav-link">Student</a></li>
                    <li><a href="Feedback.php#employerfeedback-section" class="nav-link">Employer</a></li>                   
                    </li>
                  </ul>
                </li>             
				<li class="has-children">
                  <a class="nav-link">News</a>
                  <ul class="dropdown">
                    <li><a href="#newspost-section" class="nav-link">Post</a></li>
                    <li><a href="#newsposted-section" class="nav-link">Posted</a></li>                   
                    </li>
                  </ul>
                </li>
				<li><a href="session_destroy.php" class="nav-link">Logout</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>
        </div>
      </div>      
    </header>

  
     
    <div class="site-blocks-cover overlay" style="background-image: url(images/home.jpeg);" data-aos="fade" id="home-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">          
          <div class="col-md-8 mt-lg-5 text-center">
            <h1 class="text-uppercase mb-5" data-aos="fade-up"><i class="icon-heart text-danger" aria-hidden="true"></i> Admin <i class="icon-heart text-danger" aria-hidden="true"></i></h1>            
          </div>           
        </div>
      </div>
    </div> 



    <section class="site-section border-bottom bg-light" id="admincreate-section">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Create Admin</h2>
          </div>
        </div>
        <div class="col-12 text-center">
   
		  <form class="p-5 bg-white" id="form1" name="form1" method="post" action="InsertAdmin.php">
            <div class="row form-group">               
				<div class="col-md-12">
					<label class="text-black">Admin Name</label> 
					<span id="sprytextfield1">
					<input type="text" name="txtUserName" id="txtUserName" class="form-control"/>
					<span class="textfieldRequiredMsg"></span></span>
				</div>
			</div>							
            <div class="row form-group">               
				<div class="col-md-12">
					<label class="text-black">Password</label> 
					<span id="sprytextfield2">
					<input type="password" name="txtPassword" id="txtPassword" class="form-control"/>
					<span class="textfieldRequiredMsg"></span></span>
				</div>
			</div>						
			<div class="row form-group">
				<div class="col-md-12">
					<input type="submit" name="button" id="button" value="Submit" class="btn btn-primary btn-md text-white"/>
				</div>
			</div> 
                    </form>              

<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>

      </div>  
    </section>
	
	
	
	<section class="site-section border-bottom bg-white" id="adminlist-section">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Admin List</h2>
          </div>
        </div>
        <div class="row">

        <table class="bg-light" width="100%" border="1" bordercolor="#1CB5F1" >
<tr>
<th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>ID</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>UserName</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Delete</div></th>
</tr>
<?php
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","talent");
// Specify the query to execute
$sql = "select * from Admin";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Id=$row['UserId'];
$UserName=$row['UserName'];

?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><?php echo $Id;?></div></td>
<td class="style3"><div align="left" class="style9 style5"><?php echo $UserName;?></div></td>
<td class="style3"><div align="left" class="style9 style5"><a href="DeleteAdmin.php?UserId=<?php echo $Id;?>">Delete</a></div></td>
</tr>
<?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
<tr>
<td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
</tr>
<?php
// Close the connection
mysqli_close($con);
?>
		</table>

      </div>  
    </section>
	
	
	
	<section class="site-section border-bottom bg-light" id="talentcreate-section">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Add Talent</h2>
          </div>
        </div>
        <div class="col-12 text-center">
   
		  <form class="p-5 bg-white" id="form1" name="form1" method="post" action="AddTalent.php">
            <div class="row form-group">               
				<div class="col-md-12">
					<label class="text-black">Talent Title</label> 
					<span id="sprytextfield4">
					<input type="text" name="txtTalentTitle" id="txtTalentTitle" class="form-control"/>
					<span class="textfieldRequiredMsg"></span></span>
				</div>
			</div>													
			<div class="row form-group">
				<div class="col-md-12">
					<input type="submit" name="button" id="button" value="Submit" class="btn btn-primary btn-md text-white"/>
				</div>
			</div> 
                    </form>              

<script type="text/javascript">
<!--
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
//-->
</script>

      </div>  
    </section>
	
	
	
		<section class="site-section border-bottom bg-white" id="talentlist-section">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Talent List</h2>
          </div>
        </div>
        <div class="row">

        <table class="bg-light" width="100%" border="1" bordercolor="#1CB5F1" >
<tr>
<th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>ID</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Talent Title</strong></div></th>
<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Delete</div></th>
</tr>
<?php
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","talent");
// Specify the query to execute
$sql = "select * from TalentMaster";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Id=$row['talentID'];
$talentName=$row['talentName'];

?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><?php echo $Id;?></div></td>
<td class="style3"><div align="left" class="style9 style5"><?php echo $talentName;?></div></td>
<td class="style3"><div align="left" class="style9 style5"><a href="DeleteTalentMaster.php?Id=<?php echo $Id;?>">Delete</a></div></td>
</tr>
<?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
<tr>
<td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
</tr>
<?php
// Close the connection
mysqli_close($con);
?>
		</table>

      </div>  
    </section>
	
	
	
	<section class="site-section border-bottom bg-light" id="student-section">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Student</h2>
          </div>
        </div>
        <div class="row">
		<table class="bg-white" width="100%" border="0" cellspacing="0" cellpadding="0">

                        <tr>
                            <td>
                                <table width="100%" border="1" bordercolor="#1CB5F1">
                                    <tr>
                                        <th height="32" bgcolor="#1CB5F1" class="style3">
                                            <div align="left" class="style9 style5"><strong>ID</strong></div>
                                        </th>
                                        <th bgcolor="#1CB5F1" class="style3">
                                            <div align="left" class="style9 style5"><strong>Student Name</strong></div>
                                        </th>
                                        <th bgcolor="#1CB5F1" class="style3">
                                            <div align="left" class="style9 style5"><strong>Area</strong></div>
                                        </th>
										<th bgcolor="#1CB5F1" class="style3">
                                            <div align="left" class="style9 style5"><strong>Email</strong></div>
                                        </th>
										<th bgcolor="#1CB5F1" class="style3">
                                            <div align="left" class="style9 style5"><strong>Mobile</strong></div>
                                        </th>
										<th bgcolor="#1CB5F1" class="style3">
                                            <div align="left" class="style9 style5"><strong>Approve</strong></div>
                                        </th>
										<th bgcolor="#1CB5F1" class="style3">
                                            <div align="left" class="style9 style5"><strong>Delete</strong></div>
                                        </th>
                                    </tr>
                                    <?php
                                    // Establish Connection with Database
                                    $con = mysqli_connect("localhost", "root", "", "talent");
                                    // Specify the query to execute
                                    $sql = "select * from Student_R where Status='Pending'";
                                    // Execute query
                                    $result = mysqli_query($con,$sql);
                                    // Loop through each records
                                    while ($row = mysqli_fetch_array($result)) {
                                        $Id = $row['StudentId'];
                                        $Name = $row['StudentName'];
                                        $Area = $row['Area'];
                                        $Email = $row['Email'];
                                        $Mobile = $row['Mobile'];
										?>
                                        <tr>
                                            <td class="style3">
                                                <div align="left" class="style9 style5">
                                                    <?php echo $Id; ?></div>
                                            </td>
                                            <td class="style3">
                                                <div align="left" class="style9 style5">
                                                    <?php echo $Name; ?></div>
                                            </td>
                                            <td class="style3">
                                                <div align="left" class="style9 style5">
                                                    <?php echo $Area; ?></div>
                                            </td>
                                            <td class="style3">
                                                <div align="left" class="style9 style5">
                                                    <?php echo $Email; ?></div>
                                            </td>
											<td class="style3">
                                                <div align="left" class="style9 style5">
                                                    <?php echo $Mobile; ?></div>
                                            </td>
																																			
											<td class="style3">
                                                <div align="left" class="style9 style5"><strong><a href="ApproveStd.php?StdId=<?php echo $row['StudentId'];?>">Approve</a></strong></div>
                                            </td>
											<td class="style3">
                                                <div align="left" class="style9 style5"><strong><a href="DeleteStd.php?StdId=<?php echo $row['StudentId'];?>">Delete</a></strong></div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    // Retrieve Number of records returned
                                    $records = mysqli_num_rows($result);
                                    ?>
                                    <tr>
                                        <td colspan="7" class="style3">
                                            <div align="left"
                                                 class="style12"><?php echo "Total " . $records . " Records"; ?> </div>
                                        </td>
                                    </tr>
                                    <?php
                                    // Close the connection
                                    mysqli_close($con);
                                    ?>
                                </table>
                            </td>
                        </tr>
                    </table>
        </div>
      </div>  
    </section>
	
	
	
	<section class="site-section border-bottom bg-white" id="employer-section">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Employer</h2>
          </div>
        </div>
        <div class="row">
		<table class="bg-light" width="100%" border="0" cellspacing="0" cellpadding="0">

                        <tr>
                            <td>
                                <table width="100%" border="1" bordercolor="#1CB5F1">
                                    <tr>
                                        <th height="32" bgcolor="#1CB5F1" class="style3">
                                            <div align="left" class="style9 style5"><strong>ID</strong></div>
                                        </th>
                                        <th bgcolor="#1CB5F1" class="style3">
                                            <div align="left" class="style9 style5"><strong>Employer Name</strong></div>
                                        </th>
                                        <th bgcolor="#1CB5F1" class="style3">
                                            <div align="left" class="style9 style5"><strong>Area</strong></div>
                                        </th>
										<th bgcolor="#1CB5F1" class="style3">
                                            <div align="left" class="style9 style5"><strong>Email</strong></div>
                                        </th>
										<th bgcolor="#1CB5F1" class="style3">
                                            <div align="left" class="style9 style5"><strong>Mobile</strong></div>
                                        </th>
										<th bgcolor="#1CB5F1" class="style3">
                                            <div align="left" class="style9 style5"><strong>Approve</strong></div>
                                        </th>
										<th bgcolor="#1CB5F1" class="style3">
                                            <div align="left" class="style9 style5"><strong>Delete</strong></div>
                                        </th>
                                    </tr>
                                    <?php
                                    // Establish Connection with Database
                                    $con = mysqli_connect("localhost", "root", "", "talent");
                                    // Specify the query to execute
                                    $sql = "select * from Employer_R where Status='Pending'";
                                    // Execute query
                                    $result = mysqli_query($con,$sql);
                                    // Loop through each records
                                    while ($row = mysqli_fetch_array($result)) {
                                        $Id = $row['EmployerId'];
                                        $Name = $row['EmployerName'];
                                        $Area = $row['Area'];
                                        $Email = $row['Email'];
                                        $Mobile = $row['Mobile'];
										?>
                                        <tr>
                                            <td class="style3">
                                                <div align="left" class="style9 style5">
                                                    <?php echo $Id; ?></div>
                                            </td>
                                            <td class="style3">
                                                <div align="left" class="style9 style5">
                                                    <?php echo $Name; ?></div>
                                            </td>
                                            <td class="style3">
                                                <div align="left" class="style9 style5">
                                                    <?php echo $Area; ?></div>
                                            </td>
                                            <td class="style3">
                                                <div align="left" class="style9 style5">
                                                    <?php echo $Email; ?></div>
                                            </td>
											<td class="style3">
                                                <div align="left" class="style9 style5">
                                                    <?php echo $Mobile; ?></div>
                                            </td>
																																			
											<td class="style3">
                                                <div align="left" class="style9 style5"><strong><a href="ApproveEmp.php?EmpId=<?php echo $row['EmployerId'];?>">Approve</a></strong></div>
                                            </td>
											<td class="style3">
                                                <div align="left" class="style9 style5"><strong><a href="DeleteEmp.php?EmpId=<?php echo $row['EmployerId'];?>">Delete</a></strong></div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    // Retrieve Number of records returned
                                    $records = mysqli_num_rows($result);
                                    ?>
                                    <tr>
                                        <td colspan="7" class="style3">
                                            <div align="left"
                                                 class="style12"><?php echo "Total " . $records . " Records"; ?> </div>
                                        </td>
                                    </tr>
                                    <?php
                                    // Close the connection
                                    mysqli_close($con);
                                    ?>
                                </table>
                            </td>
                        </tr>
                    </table>
        </div>
      </div>  
    </section>
	
	
	
	<section class="site-section border-bottom bg-light" id="talent-section">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Talent</h2>
          </div>
        </div>
        <div class="row">

                                <table class="bg-white" width="100%" border="1" bordercolor="#1CB5F1">
                                    <tr>
                                        <th height="32" bgcolor="#1CB5F1" class="style3">
                                            <div align="left" class="style9 style5"><strong>ID</strong></div>
                                        </th>
                                        <th bgcolor="#1CB5F1" class="style3">
                                            <div align="left" class="style9 style5"><strong>Student Name</strong></div>
                                        </th>
                                        <th bgcolor="#1CB5F1" class="style3">
                                            <div align="left" class="style9 style5"><strong>Talent Title</strong></div>
                                        </th>
										<th bgcolor="#1CB5F1" class="style3">
                                            <div align="left" class="style9 style5"><strong>Detail</strong></div>
                                        </th>
                                    </tr>
                                    <?php
                                    // Establish Connection with Database
                                    $con = mysqli_connect("localhost", "root", "", "talent");
                                    // Specify the query to execute
                                    $sql = "select * from Talent where Status='Pending'";
                                    // Execute query
                                    $result = mysqli_query($con,$sql);
                                    // Loop through each records
                                    while ($row = mysqli_fetch_array($result)) {
                                        $Id = $row['TalentId'];
                                        $Name = $row['StudentName'];
                                        $TalentTitle = $row['TalentTitle'];
                                        ?>
                                        <tr>
                                            <td class="style3">
                                                <div align="left" class="style9 style5">
                                                    <?php echo $Id; ?></div>
                                            </td>
                                            <td class="style3">
                                                <div align="left" class="style9 style5">
                                                    <?php echo $Name; ?></div>
                                            </td>
                                            <td class="style3">
                                                <div align="left" class="style9 style5">
                                                    <?php echo $TalentTitle; ?></div>
                                            </td>
                                            <td class="style3">
                                                <div align="left" class="style9 style5"><a href="DetailTal.php?TalId=<?php echo $Id; ?>">Detail</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    // Retrieve Number of records returned
                                    $records = mysqli_num_rows($result);
                                    ?>
                                    <tr>
                                        <td colspan="4" class="style3">
                                            <div align="left"
                                                 class="style12"><?php echo "Total " . $records . " Records"; ?> </div>
                                        </td>
                                    </tr>
                                    <?php
                                    // Close the connection
                                    mysqli_close($con);
                                    ?>
                                </table>



			
        </div>
      </div>  
    </section>


	
	
	
	
	
	<section class="site-section border-bottom bg-white" id="newspost-section">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Post News</h2>
          </div>
        </div>
        <div class="col-12 text-center">		
		
            <form class="bg-light" id="form1" name="form1" method="post" action="InsertNews.php">
              
				<div class="row form-group">               
					<div class="col-md-12">
						<span id="sprytextfield3">
						<label class="text-black"></label> 
						<input type="text" name="txtNews" id="txtNews" class="form-control"/>
						<span class="textfieldRequiredMsg"></span></span>
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-md-12">
						<input type="submit" name="button" id="button" value="Submit" class="btn btn-primary btn-md text-white"/>
					</div>
				</div>
				
			</form>
<script type="text/javascript">
    <!--
    var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
    //-->
</script>

        </div>
      </div>  
    </section>
	
	
	
	<section class="site-section border-bottom bg-light" id="newsposted-section">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Posted News</h2>
          </div>
        </div>
        <div class="row">
		<p>
			<tr>
                <td>
                    <table class="bg-white"width="100%" border="1" bordercolor="#1CB5F1">
                        <tr>
                            <th height="32" bgcolor="#1CB5F1">
                                <div align="left" class="style12 style13 style7 style8">ID</div>
                            </th>
                            <th bgcolor="#1CB5F1">
                                <div align="left" class="style11 style7 style8">News</div>
                            </th>
                            <th bgcolor="#1CB5F1">
                                <div align="left" class="style11 style7 style8">Date</div>
                            </th>
                            <th bgcolor="#1CB5F1">
                                <div align="left" class="style11 style7 style8">Delete</div>
                            </th>
                        </tr>
                                    <?php
                                    // Establish Connection with Database
                                    $con = mysqli_connect("localhost","root","","talent");
                                    // Specify the query to execute
                                    $sql = "select * from news";

                                    // Execute query
                                    $result = mysqli_query($con,$sql);

                                    // Loop through each records
                                    while ($row = mysqli_fetch_array($result)) {
                                        $Id = $row['NewsId'];
                                        $News = $row['News'];
                                        $NewsDate = $row['NewsDate'];
                                        ?>
                                        <tr>
                                            <td>
                                                <div align="left" class="style11 style7 style8"><?php echo $Id; ?></div>
                                            </td>
                                            <td>
                                                <div align="left"
                                                     class="style11 style7 style8"><?php echo $News; ?></div>
                                            </td>
                                            <td>
                                                <div align="left"
                                                     class="style11 style7 style8"><?php echo $NewsDate; ?></div>
                                            </td>
                                            <td>
                                                <div align="left" class="style11 style7 style8"><a
                                                        href="DeleteNews.php?NewsId=<?php echo $Id; ?>">Delete</a></div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    // Retrieve Number of records returned
                                    $records = mysqli_num_rows($result);
                                    ?>
                                    <tr>
                                        <td colspan="5">
                                            <div align="left"
                                                 class="style11 style7 style8"><?php echo "Total " . $records . " Records"; ?> </div>
                                        </td>
                                    </tr>
                                    <?php
                                    // Close the connection
                                    mysqli_close($con);
                                    ?>
                    </table>
                 </td>
            </tr>          

</table>
        </p>
        </div>
      </div>  
    </section>


    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>On Campus Job and Talent Matching Corner is a Social innovation platform that developed for the talented university students and alumni that need part time jobs as source of income.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
				  <li><a href="#home-section" class="smoothscroll">Home</a></li>
                  <li><a href="#student-section" class="smoothscroll">Student</li>
				  <li><a href="#employer-section" class="smoothscroll">Employer</a></li>
				  <li><a href="#talent-section" class="smoothscroll">Talent</a></li>
                  <li><a href="#newspost-section" class="smoothscroll">News</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="https://www.facebook.com/" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="https://twitter.com/login" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="https://www.instagram.com/accounts/login/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="https://www.linkedin.com/" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>

            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is powered <i class="icon-heart text-danger" aria-hidden="true"></i> by <a>OCJ/TMC</a>

            </p>
        
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  
  <script src="js/main.js"></script>

  
    
  </body>
</html>
