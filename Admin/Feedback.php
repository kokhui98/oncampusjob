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
                <li><a href="index.php#home-section" class="nav-link">Home</a></li>
                <li class="has-children">
                  <a class="nav-link">Admin</a>
                  <ul class="dropdown">
                    <li><a href="index.php#admincreate-section" class="nav-link">Create</a></li>
                    <li><a href="index.php#adminlist-section" class="nav-link">List</a></li>                   
                    </li>
				 </ul>
				</li> 
				<li><a href="index.php#student-section" class="nav-link">Student</a></li>                   
                <li><a href="index.php#employer-section" class="nav-link">Employer</a></li>
				<li><a href="index.php#talent-section" class="nav-link">Talent</a></li>
				<li class="has-children">
                  <a class="nav-link">Feedback</a>
                  <ul class="dropdown">
					<li><a href="#visitorfeedback-section" class="nav-link">Visitor</a></li>
                    <li><a href="#studentfeedback-section" class="nav-link">Student</a></li>
                    <li><a href="#employerfeedback-section" class="nav-link">Employer</a></li>                   
                    </li>
                  </ul>
                </li>             
				<li class="has-children">
                  <a class="nav-link">News</a>
                  <ul class="dropdown">
                    <li><a href="index.php#newspost-section" class="nav-link">Post</a></li>
                    <li><a href="index.php#newsposted-section" class="nav-link">Posted</a></li>                   
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






	
	<section class="site-section border-bottom bg-white" id="visitorfeedback-section">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Visitor Feedback</h2>
          </div>
        </div>
		
        <div class="row">
		<div class="col-md-12 mb-5">
		<table class="bg-light" width="100%" border="1">
                        <tr>
                            <th bgcolor="#1CB5F1" class="style3">
                                <div align="left" class="style9 style5"><strong>Feedback</strong></div>
                            </th>
                            <th bgcolor="#1CB5F1" class="style3">
                                <div align="left" class="style12">Date</div>
                            </th>
                        </tr>
                        <?php

                        $con = mysqli_connect("localhost", "root", "", "talent");
                        // Specify the query to execute
                        $sql = "select VisitorFeedback,VisitorFeedbackDate from Visitor_Feedback";
                        // Execute query
                        $result = mysqli_query($con,$sql);
                        // Loop through each records
                        while ($row = mysqli_fetch_array($result)) {
                            $Feedback = $row['VisitorFeedback'];
                            $FDate = $row['VisitorFeedbackDate'];
                            ?>
                            <tr>
                                <td class="style3">
                                    <div align="left" class="style9 style5"><?php echo $Feedback; ?>
                                    </div>
                                </td>
                                <td class="style3">
                                    <div align="left" class="style9 style5"><?php echo $FDate; ?>
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
                                <div align="left" class="style12"><?php echo "Total " . $records . " Records"; ?> </div>
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
	
	
	
	<section class="site-section border-bottom bg-light" id="studentfeedback-section">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Student Feedback</h2>
          </div>
        </div>
		
        <div class="row">
		<div class="col-md-12 mb-5">
		<table class="bg-white" width="100%" border="1">
                        <tr>
                            <th bgcolor="#1CB5F1" class="style3">
                                <div align="left" class="style9 style5"><strong>Feedback</strong></div>
                            </th>
                            <th bgcolor="#1CB5F1" class="style3">
                                <div align="left" class="style12">Date</div>
                            </th>
                        </tr>
                        <?php

                        $con = mysqli_connect("localhost", "root", "", "talent");
                        // Specify the query to execute
                        $sql = "select StudentFeedback,StudentFeedbackDate from Student_Feedback";
                        // Execute query
                        $result = mysqli_query($con,$sql);
                        // Loop through each records
                        while ($row = mysqli_fetch_array($result)) {
                            $Feedback = $row['StudentFeedback'];
                            $FDate = $row['StudentFeedbackDate'];
                            ?>
                            <tr>
                                <td class="style3">
                                    <div align="left" class="style9 style5"><?php echo $Feedback; ?>
                                    </div>
                                </td>
                                <td class="style3">
                                    <div align="left" class="style9 style5"><?php echo $FDate; ?>
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
                                <div align="left" class="style12"><?php echo "Total " . $records . " Records"; ?> </div>
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
	
	
	
	<section class="site-section border-bottom bg-white" id="employerfeedback-section">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Employer Feedback</h2>
          </div>
        </div>
		
        <div class="row">
		<div class="col-md-12 mb-5">
		<table class="bg-light" width="100%" border="1" bordercolor="#1CB5F1">
                        <tr>
                            <th bgcolor="#1CB5F1" class="style3">
                                <div align="left" class="style9 style5"><strong>Feedback</strong></div>
                            </th>
                            <th bgcolor="#1CB5F1" class="style3">
                                <div align="left" class="style12">Date</div>
                            </th>
                        </tr>
                        <?php

                        $con = mysqli_connect("localhost", "root", "", "talent");
                        // Specify the query to execute
                        $sql = "select EmployerFeedback,EmployerFeedbackDate from Employer_Feedback";
                        // Execute query
                        $result = mysqli_query($con,$sql);
                        // Loop through each records
                        while ($row = mysqli_fetch_array($result)) {
                            $Feedback = $row['EmployerFeedback'];
                            $FDate = $row['EmployerFeedbackDate'];
                            ?>
                            <tr>
                                <td class="style3">
                                    <div align="left" class="style9 style5"><?php echo $Feedback; ?>
                                    </div>
                                </td>
                                <td class="style3">
                                    <div align="left" class="style9 style5"><?php echo $FDate; ?>
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
                                <div align="left" class="style12"><?php echo "Total " . $records . " Records"; ?> </div>
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
				  <li><a href="index.php#home-section" class="smoothscroll">Home</a></li>
                  <li><a href="index.php#student-section" class="smoothscroll">Student</li>
				  <li><a href="index.php#employer-section" class="smoothscroll">Employer</a></li>
				  <li><a href="index.php#talent-section" class="smoothscroll">Talent</a></li>
                  <li><a href="index.php#newspost-section" class="smoothscroll">News</a></li>
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
