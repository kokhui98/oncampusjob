<?php
session_start();
if(isset($_SESSION['$UserName'])){
	header('location:Admin/index.php');
} 
if(isset($_SESSION['$UserName_emp'])){
	header('location:Employer/index.php');
} 
if(isset($_SESSION['$UserName_std'])){
	header('location:Student/index.php');
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
   
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextFarea.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
             [
			 		[//Name
						["minlen=1",
		"Please Enter Name"
						  ]
					
                     ],

                   [//Area
						["minlen=1",
		"Please Enter Area"
						  ] 					  				
                   ],
				   [//Email
						  
						["minlen=1",
		"Please Enter Email "
						  ], 
						  ["email",
		"Please Enter valid email "
						  ]  
                   ],
				   [//Mobile
						   ["num",
		"Please Enter valid Mobile "
						  ],
						  ["minlen=10",
		"Please Enter valid Mobile "
						  ] 	  
                   ],

				
				   [//User
						  ["minlen=1",
		"Please Enter UserName "
						  ]
						 
						  
                   ],
				   [//Password
						["minlen=1",
		"Please Enter Password "
						  ]  
						  
						  
                   ],
				    [//Que
						  
						
                   ],
				    [//Answer
						  
						  ["minlen=1",
		"Please Enter Answer "
						  ]
						  
                   ]
				   
            ];
</SCRIPT>


    
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
                  </ul>
                </li>
				<li class="has-children">
                    <a href="#top1-section">Top of The Month</a>
                    <ul class="dropdown">
                      <li><a href="#top1-section">Top One</a></li>
                      <li><a href="#top2-section">Top Two</a></li>
                      <li><a href="#top3-section">Top Three</a></li>
                    </ul>
				</li>
				<li><a href="#studentr-section" class="nav-link">Student</a></li>
				<li><a href="#employerr-section" class="nav-link">Employer</a></li>
				<li><a href="Forget.php" class="nav-link">Forget Password</a></li>
				<li><a href="right.php" class="nav-link">Login</a></li>
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
            <h1 class="text-uppercase mb-5" data-aos="fade-up">On Campus Job and Talent Matching Corner</h1>            
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



    <section class="site-section border-bottom bg-light" id="about-section">    
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
				<div class="out_back"><img src="images/3.jpeg" class="pic"/></div>
				<div class="out_left"><img src="images/5.jpeg" class="pic"/></div>
				<div class="out_right"><img src="images/7.jpeg" class="pic"/></div>
				<div class="out_top"><img src="images/9.jpeg" class="pic"/></div>
				<div class="out_bottom"><img src="images/11.jpeg" class="pic"/></div>
			
				<span class="in_front"><img src="images/2.jpeg" class="in_pic"/></span>
				<span class="in_back"><img src="images/4.jpeg" class="in_pic"/></span>
				<span class="in_left"><img src="images/6.jpeg" class="in_pic"/></span>
				<span class="in_right"><img src="images/8.jpeg" class="in_pic"/></span>
				<span class="in_top"><img src="images/10.jpeg" class="in_pic"/></span>
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
	
	
	
	<section class="site-section" id="top1-section">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Top One</h2>
          </div>
        </div>
       </div>
	   
	   <div class="container"> 
		  <div>
            <div class="item-wrap fancybox">                         
			<iframe width="1100" height="620" src="https://www.youtube.com/embed/8Rsl_n7ROWE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>		  		  
        </div>      
    </section>
	
	
	
	<section class="site-section" id="top2-section">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Top Two</h2>
          </div>
        </div>
       </div>
	   
	   <div class="container"> 		  
          <div>		  
            <div class="item-wrap fancybox">              
            <iframe width="1100" height="620" src="https://www.youtube.com/embed/53JBTXKyTGA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                     
            </div>
          </div>		  
        </div>      
    </section>
	
	
	
	<section class="site-section" id="top3-section">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Top Three</h2>
          </div>
        </div>
       </div>
	   
	   <div class="container"> 
		  <div>
            <div class="item-wrap fancybox">                         
          <div>
            <div class="img-fluid">             
		    <iframe width="1100" height="620" src="https://www.youtube.com/embed/Hp0fH3Tizl0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                       
            </div>
          </div>		  
        </div>      
    </section>
	
	
	
	<section class="site-section border-bottom bg-light" id="studentr-section">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Student Registration</h2>
          </div>
        </div>
		
        <div class="row">
		<div class="col-md-12 mb-5">
		<form class="p-5 bg-white" action="StudentInsert.php" method="post" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                  
                    <div class="row form-group">               
						<div class="col-md-12">
							<label class="text-black">Student Name</label> 
							<span id="sprytextfield1">
							<input type="text" name="txtName" id="txtName" class="form-control"/>
							<span class="textfieldRequiredMsg"></span></span>
						</div>
					</div>					
					
                    <div class="row form-group">               
						<div class="col-md-12">
							<label class="text-black">Area</label>
							<span id="sprytextfield2">
							<input type="text" name="txtArea" id="txtArea" class="form-control"/>
							<span class="textfieldRequiredMsg"></span></span></td>
						</div>
					</div>					
					
                    <div class="row form-group">               
						<div class="col-md-12">
							<label class="text-black">Email</label>
							<span id="sprytextfield3">
							<input type="text" name="txtEmail" id="txtEmail" class="form-control"/>
							<span class="textfieldRequiredMsg"></span></span></td>
						</div>
					</div>
					
					
                    <div class="row form-group">               
						<div class="col-md-12">
							<label class="text-black">Mobile</label>
							<span id="sprytextfield4">
                        <input type="text" name="txtMobile" id="txtMobile" class="form-control"/>
                      <span class="textfieldRequiredMsg"></span></span>
						</div>
					</div>
					
                    <div class="row form-group">               
						<div class="col-md-12">
							<label class="text-black">User Name</label>
							<span id="sprytextfield5">
							<input type="text" name="txtUserName" id="txtUserName" class="form-control"/>
							<span class="textfieldRequiredMsg"></span></span></td>
						</div>
					</div>
					
                    <div class="row form-group">               
						<div class="col-md-12">
							<label class="text-black">Password</label>
							<span id="sprytextfield6">
							<input type="password" name="txtPassword" id="txtPassword" class="form-control"/>
							<span class="textfieldRequiredMsg"></span></span>
						</div>
					</div>
					
                     <div class="row form-group">               
						<div class="col-md-12">
							<label class="text-black">Sequrity Question</label>
							<select name="cmbQue" id="cmbQue" class="form-control">
								<option>What is Your Pet Name?</option>
								<option selected="selected">Who is Your Favourite Person?</option>
								<option>What is the Name of Your First School?</option>
                            </select>
						</div>
					</div>
					
                    <div class="row form-group">               
						<div class="col-md-12">
							<label class="text-black">Answer</label>
							<span id="sprytextfield7">
							<input type="text" name="txtAnswer" id="txtAnswer" class="form-control"/>
							<span class="textfieldRequiredMsg"></span></span></td>
						</div>
					</div>
					
					
                    <div class="row form-group">
						<div class="col-md-12">
							<input type="submit" name="button2" id="button2" value="Submit" class="btn btn-primary btn-md text-white"/>
						</div>
					</div>                 
                 </form>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
//-->
</script>
        </div>
      </div>  
    </section>
	
	
	
	<section class="site-section" id="employerr-section">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Employer Registration</h2>
          </div>
        </div>
		
        <div class="row">
		<div class="col-md-12 mb-5">
		<form class="p-5 bg-light" action="EmployerInsert.php" method="post" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                  
                    <div class="row form-group">               
						<div class="col-md-12">
							<label class="text-black">Employer Name</label> 
							<span id="sprytextfield8">
							<input type="text" name="txtName" id="txtName" class="form-control"/>
							<span class="textfieldRequiredMsg"></span></span>
						</div>
					</div>					
					
                    <div class="row form-group">               
						<div class="col-md-12">
							<label class="text-black">Area</label>
							<span id="sprytextfield9">
							<input type="text" name="txtArea" id="txtArea" class="form-control"/>
							<span class="textfieldRequiredMsg"></span></span></td>
						</div>
					</div>					
					
                    <div class="row form-group">               
						<div class="col-md-12">
							<label class="text-black">Email</label>
							<span id="sprytextfield10">
							<input type="text" name="txtEmail" id="txtEmail" class="form-control"/>
							<span class="textfieldRequiredMsg"></span></span></td>
						</div>
					</div>
					
					
                    <div class="row form-group">               
						<div class="col-md-12">
							<label class="text-black">Mobile</label>
							<span id="sprytextfield11">
                        <input type="text" name="txtMobile" id="txtMobile" class="form-control"/>
                      <span class="textfieldRequiredMsg"></span></span>
						</div>
					</div>
					
                    <div class="row form-group">               
						<div class="col-md-12">
							<label class="text-black">User Name</label>
							<span id="sprytextfield12">
							<input type="text" name="txtUserName" id="txtUserName" class="form-control"/>
							<span class="textfieldRequiredMsg"></span></span></td>
						</div>
					</div>
					
                    <div class="row form-group">               
						<div class="col-md-12">
							<label class="text-black">Password</label>
							<span id="sprytextfield13">
							<input type="password" name="txtPassword" id="txtPassword" class="form-control"/>
							<span class="textfieldRequiredMsg"></span></span>
						</div>
					</div>
					
                     <div class="row form-group">               
						<div class="col-md-12">
							<label class="text-black">Sequrity Question</label>
							<select name="cmbQue" id="cmbQue" class="form-control">
								<option>What is Your Pet Name?</option>
								<option selected="selected">Who is Your Favourite Person?</option>
								<option>What is the Name of Your First School?</option>
                            </select>
						</div>
					</div>
					
                    <div class="row form-group">               
						<div class="col-md-12">
							<label class="text-black">Answer</label>
							<span id="sprytextfield14">
							<input type="text" name="txtAnswer" id="txtAnswer" class="form-control"/>
							<span class="textfieldRequiredMsg"></span></span></td>
						</div>
					</div>
					
					
                    <div class="row form-group">
						<div class="col-md-12">
							<input type="submit" name="button2" id="button2" value="Submit" class="btn btn-primary btn-md text-white"/>
						</div>
					</div>                 
                 </form>
<script type="text/javascript">
<!--
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10");
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11");
var sprytextfield12 = new Spry.Widget.ValidationTextField("sprytextfield12");
var sprytextfield13 = new Spry.Widget.ValidationTextField("sprytextfield13");
var sprytextfield14 = new Spry.Widget.ValidationTextField("sprytextfield14");
//-->
</script>
        </div>
      </div>  
    </section>
	
	
	
	<section class="site-section border-bottom bg-light" id="news-section">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">News</h2>
          </div>
        </div>
        <div class="row">
		<p>
                <table class="bg-white"width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
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



    <section class="site-section border-bottom bg-white" id="contact-section" data-aos="fade">
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
		
	    <div class="row">
		<div class="col-md-12 mb-5" >
		<form class="p-5 bg-light" id="form1" method="post" action="InsertVisitorFeedback.php">	
			<h2 class="h4 text-black mb-5">Feedback Form</h2> 
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        
						<div class="row form-group">               
							<div class="col-md-12">
								<span id="sprytextarea1">                          
								<textarea class="form-control" placeholder="Write Your Feedback Here" name="txtFeedback" id="txtFeedback" cols="123" rows="5"></textarea>                          
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
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
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
				  <li><a href="#top1-section" class="smoothscroll">Top of The Month</a></li>
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
