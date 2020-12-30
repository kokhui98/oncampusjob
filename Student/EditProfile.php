<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>

    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />

<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
             [

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

				

				   [//Password
						["minlen=1",
		"Please Enter Password "
						  ]  
						  
						  
                   ],

				   
            ];
</SCRIPT>

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
<html lang="en"> <!--<![endif]-->

	<head>
		<meta charset="utf-8">
			<title>On Campus Job And Talent Matching Corner</title>
			<link rel="stylesheet" type="text/css" href="css/login.css" />
	</head>

<body>
<div class="container">
    <section id="content">
	
	


               <?php
$ID=$_SESSION['ID'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","talent");

// Specify the query to execute
$sql = "select * from Student_R where StudentId ='".$ID."'  ";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
$row = mysqli_fetch_array($result)
?>
		<form name="form1" method="post" action="UpdateProfile.php" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data">
			<h1>Edit Profile</h1>
				<div>
				<img src="images/profile.png" class="pic"/>
				</div>
				<table width="100%" border="1" cellspacing="2" cellpadding="2">
					


				  
					<div>           
						<span id="sprytextfield3">
						<input placeholder="Area" name="txtArea" type="text" id="txtArea" value="<?php echo $row['Area'];?>" />
						<span class="textfieldRequiredMsg">*</span></span>
					</div>
				  
					<div>           
						<span id="sprytextfield4">
						<input placeholder="Email" name="txtEmail" type="text" id="txtEmail" value="<?php echo $row['Email'];?>" />
						<span class="textfieldRequiredMsg">*</span></span>
					</div>
				  
					<div>           
						<span id="sprytextfield5">
						<input placeholder="Mobile" name="txtMobile" type="text" id="txtMobile" value="<?php echo $row['Mobile'];?>" />
						<span class="textfieldRequiredMsg">*</span></span>
					</div>
				  
					<div>           
						<span id="sprytextfield6">
						<input placeholder="Password" name="txtPassword" type="password" id="txtPassword" value="<?php echo $row['Password'];?>" />
						<span class="textfieldRequiredMsg">*</span></span>
					</div>
                  
					<div align="center">
						<input type="submit" name="button" id="button" value="Submit" />
                    </div>
					
					<div align="center">
						<a href="index.php#profile-section"><strong>Back</strong></a>
				    </div>
				  
                </table>
		</form>


<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
//-->
</script>
</body>
</html>
