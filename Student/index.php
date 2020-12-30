<?php
session_start();
if(isset($_SESSION['$UserName_std'])){
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
	
	
	<link rel="stylesheet" href="css/cube.css" />
	
    
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
                  <a href="#about-section" class="nav-link">About Us</a>
                  <ul class="dropdown">
                    <li><a href="#news-section" class="nav-link">News</a></li>
                    <li><a href="#contact-section" class="nav-link">Contact Us</a></li>                   
                    </li>
                  </ul>
                </li>
				<li><a href="#profile-section" class="nav-link">Profile</a></li>
				<li class="has-children">
                  <a class="nav-link">Talent</a>
                  <ul class="dropdown">
                    <li><a href="#talentpost-section" class="nav-link">Post</a></li>
                    <li><a href="TalentPosted.php#talentposted-section" class="nav-link">Posted</a></li>                   
                    </li>
                  </ul>
                </li>             
				<li><a href="#feedback-section" class="nav-link">Feedback</a></li>
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
            <h1 class="text-uppercase mb-5" data-aos="fade-up"><i class="icon-heart text-danger" aria-hidden="true"></i> Student <i class="icon-heart text-danger" aria-hidden="true"></i></h1>            
            <div data-aos="fade-up" data-aos-delay="100">
              <a href="#contact-section" class="btn smoothscroll btn-primary mr-2 mb-2">Contact Us</a>
            </div>
          </div>           
        </div>
      </div>
      <a href="#about-section" class="mouse smoothscroll">
        <span class="mouse-icon">
          <span class="mouse-wheel"></span>
        </span>
      </a>
    </div>  



    <section class="site-section border-bottom bg-white" id="about-section">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">About OCJ/TMC</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            	<div class="wrap">
				<div class="cube">			
				<div class="out_front"><img src="images/1.jpeg" class="pic"/></div>
				<div class="out_back"><img src="images/2.jpeg" class="pic"/></div>
				<div class="out_left"><img src="images/3.jpeg" class="pic"/></div>
				<div class="out_right"><img src="images/4.jpeg" class="pic"/></div>
				<div class="out_top"><img src="images/5.jpeg" class="pic"/></div>
				<div class="out_bottom"><img src="images/6.jpeg" class="pic"/></div>
			
				<span class="in_front"><img src="images/7.jpeg" class="in_pic"/></span>
				<span class="in_back"><img src="images/8.jpeg" class="in_pic"/></span>
				<span class="in_left"><img src="images/9.jpeg" class="in_pic"/></span>
				<span class="in_right"><img src="images/10.jpeg" class="in_pic"/></span>
				<span class="in_top"><img src="images/11.jpeg" class="in_pic"/></span>
				<span class="in_bottom"><img src="images/12.jpeg" class="in_pic"/></span>			
				</div>
				</div>
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-4">
              <h3 class="h3 mb-4 text-black">Welcome to On Campus Job and Talent Matching Corner</h3>
              <p>On Campus Job and Talent Matching Corner is a Social innovation platform that developed for the talented university students and alumni that need part time jobs as source of income.</p>
            </div>                                     
            <div class="mb-4">
              <ul class="list-unstyled ul-check success">
                <li>Provide an avenue for university student to market their skills and monetise them</li>
                <li>Register your talent/skill here</li>
              </ul>              
            </div>
            <p><a href="#contact-section" class="smoothscroll btn btn-primary">Contact Us</a></p>      
          </div>
        </div>
      </div>  
    </section>

	
	
	<section class="site-section border-bottom bg-light" id="profile-section">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Profile</h2>
          </div>
        </div>
        <div class="row">
		<?php
$ID=$_SESSION['ID'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","talent");

$sql = "select * from Student_R where StudentId ='".$ID."'  ";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
$row = mysqli_fetch_array($result)
?>

                <table class="p-5 bg-white" width="100%" border="1" cellspacing="2" cellpadding="2">
				  <tr>
                    <td><strong>Student Name:</strong></td>
                    <td><?php echo $row['StudentName'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Area:</strong></td>
                    <td><?php echo $row['Area'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Email:</strong></td>
                    <td><?php echo $row['Email'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Mobile:</strong></td>
                    <td><?php echo $row['Mobile'];?></td>
                  </tr>
                  <tr>
                    <td><strong>User Name:</strong></td>
                    <td><?php echo $row['UserName'];?></td>
                  </tr>  
					
				
									  
                  <div class="row form-group">
					<div class="col-md-12">
						<a class="btn btn-primary btn-md text-white" href="EditProfile.php?StudentId=<?php echo $row['StudentId']; ?>">Edit Profile</a>
					</div>
				  </div>	
                </table>
                <?php
                mysqli_close($con);
                ?>

        </div>
      </div>  
    </section>
	
	
	
	<section class="site-section border-bottom bg-white" id="talentpost-section">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Post Talent</h2>
          </div>
        </div>
		
        <div class="row">
		<div class="col-md-12 mb-5">
		<form class="p-5 bg-light" id="form1" method="post" action="InsertTalent.php" enctype="multipart/form-data">
			<div class="row form-group">
					<div class="col-md-12">
						<a href="ClickMe.php"><strong><u>Click Me</u></strong></a>
					</div>
			</div>
<?php
$ID=$_SESSION['ID'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","talent");

$sql = "SELECT * FROM talentmaster";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 

echo '
			
            <div class="row form-group">               
				<div class="col-md-12">
					<label class="text-black">Talent Title</label>
                        <select name="txtTalentTitle" id="txtTalentTitle" class="form-control"/>   ';
while($row = mysqli_fetch_array($result))   {
	$name = $row["talentName"];
	echo '<option>'.$name.'</option>';
}                     
                            
echo '
                        </select>                   
				</div>
			</div>			';
			
?>
					
			
            <div class="row form-group">               
				<div class="col-md-12">
					<label class="text-black">IG</label> 
					<span id="sprytextfield1">
                    <input type="text" name="txtIG" id="txtIG" class="form-control"/>
                    <span class="textfieldRequiredMsg"></span></span>
				</div>
			</div>
						
            <div class="row form-group">               
				<div class="col-md-12">
					<label class="text-black">Video Embed Link</label>
					<span id="sprytextfield2">
					<input type="text" name="txtTalentVideo" id="txtTalentVideo" class="form-control"/>
					<span class="textfieldRequiredMsg"></span></span>
				</div>
			</div>
						
			<div class="row form-group">               
				<div class="col-md-12">
					<label class="text-black">Resume Embed Link</label> 
					<span id="sprytextfield3">
					<input type="text" name="txtTalentResume" id="txtTalentResume" class="form-control"/>
					<span class="textfieldRequiredMsg"></span></span>
				</div>
			</div>
			
            <div class="row form-group">               
				<div class="col-md-12">
					<label class="text-black">Description</label> 
                    <span id="sprytextarea1">
                    <textarea name="txtDescription" id="txtDescription" cols="25" rows="3"  class="form-control"></textarea>
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
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
        </div>
      </div>  
    </section>
	
	
	
	
	
	
	
	<section class="site-section border-bottom bg-light" id="feedback-section">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Feedback</h2>
          </div>
        </div>
		
        <div class="row">
		<div class="col-md-12 mb-5">
		<form id="form1" method="post" action="InsertStudentFeedback.php">					
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        
						<div class="row form-group">               
							<div class="col-md-12">
								<span id="sprytextarea3">                          
								<textarea placeholder="Write Your Feedback Here" name="txtFeedback" id="txtFeedback" cols="123" rows="5"></textarea>                          
								<span class="textareaRequiredMsg"></span></span>
							</div>
						</div> 
                        
                        <div class="row form-group">
							<div class="col-md-12">
								<input type="submit" name="button2" id="button2" value="Submit" class="btn btn-primary btn-md text-white"/>
							</div>
						</div>  
                        
                      </table>
        </form>
<script type="text/javascript">
<!--
var sprytextarea3 = new Spry.Widget.ValidationTextarea("sprytextarea3");
//-->
</script>
        </div>
      </div>  
    </section>
	
	
	
	<section class="site-section border-bottom bg-white" id="news-section">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">News</h2>
          </div>
        </div>
        <div class="row">
		<p>
                <table class="bg-light" width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
<tr>
<th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>News</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>News Date</strong></div></th>
</tr>
<?php
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","talent");
// Select Database

// Specify the query to execute
$sql = "select * from News";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$News=$row['News'];
$NewsDate=$row['NewsDate'];

?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><?php echo $News;?></div></td>
<td class="style3"><div align="left" class="style9 style5"><?php echo $NewsDate;?></div></td>
</tr>
<?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>

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



    <section class="site-section border-bottom bg-light" id="contact-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Contact Us</h2>
          </div>
        </div>
        <div class="row mb-5">         
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-room d-block h4 text-primary"></span>
              <span>Jalan Ayer Keroh Lama, 75450 Bukit Beruang, Melaka</span>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-phone d-block h4 text-primary"></span>
              <span>1-300-80-0668</span>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-0">
              <span class="icon-mail_outline d-block h4 text-primary"></span>
              <span>OCJ@outlook.com</span>
            </p>
          </div>
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
                  <li><a href="#about-section" class="smoothscroll">About Us</a></li>
				  <li><a href="#profile-section" class="smoothscroll">Profile</a></li>
				  <li><a href="#news-section" class="smoothscroll">News</a></li>
                  <li><a href="#contact-section" class="smoothscroll">Contact Us</a></li>
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

