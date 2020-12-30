<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">

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
              
                <form id="form2" method="post" action="ForPass.php">
				<h1>Forget Password</h1>
					<div>
					<img src="images/forget.png" class="pic"/>
					</div>
					<table width="100%" border="0">
                          <input type="radio" name="rdUser" value="Student" id="rdUser_0" />Student</label> 
						  <br><br>
                          <input type="radio" name="rdUser" value="Employer" id="rdUser_1" />Employer</label>
                    <br></br>
					<div>           
						<span id="sprytextfield3">
						<input type="text" placeholder="Username" name="txtUserName" id="txtUserName" />
						<span class="textfieldRequiredMsg">*</span></span>
					</div>
					<br>
					<div>
                      <select name="cmbQue" id="cmbQue" class="form-control">
                        <option selected="selected">What is Your Pet Name?</option>
                        <option>Who is Your Favourite Person?</option>
                        <option>What is the Name of Your First School?</option>
                      </select>
                    </div>					
					<br>
                    <div>
						<span id="sprytextfield4">                       
                        <input type="text" placeholder="Answer" name="txtAnswer" id="txtAnswer"/>                       
                        <span class="textfieldRequiredMsg">*</span></span>
                    </div>
					
                    <div align="center">
                        <input type="submit" name="button" id="button" value="Submit"/>
                    </div> 

					<div align="center">
						<a href="index.php"><strong>Back</strong></a>
				    </div>
				
					</table>
              </form>

    </section><!-- content -->
</div><!-- container -->
</body>
</html>

<script type="text/javascript">
<!--
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
//-->
</script>

