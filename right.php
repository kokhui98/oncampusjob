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
	
        <form name="form1" method="post" action="login.php">
		<h1>Login</h1>
			<div>
			<img src="images/right.png" class="pic"/>
			</div>
                  <table width="100%" border="0">
			<div>           
				<span id="sprytextfield1">
					<input type="text" placeholder="Username" name="txtUser" id="txtUser">
						<span class="textfieldRequiredMsg">*</span></span>
			</div>
            <div>
                <span id="sprytextfield2">
                    <input type="password" placeholder="Password" name="txtPass" id="txtPass">
						<span class="textfieldRequiredMsg">*</span></span>
            </div>

				<div>
                        <select name="cmbUser" id="cmbUser" class="form-control">
                          <option value="Employer">Employer</option>
                          <option value="Student" selected="selected">Student</option>
                          </select>                      
                </div>
				
                <div align="center">
                          <input type="submit" name="button" id="button" value="Login">
                </div>

                <div align="center">
					<a href="index.php"><strong>Back</strong></a>
				</div>
                  </table>
      </form><!-- form -->
        
    </section><!-- content -->
</div><!-- container -->
</body>
</html>
        <script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>
