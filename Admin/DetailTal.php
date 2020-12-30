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
		<h1>Detail Information</h1>
			<div>
			<img src="images/talent.png" class="pic"/>
			</div>

               <?php
$ID=$_GET['TalId'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","talent");

// Specify the query to execute
$sql = "select * from Talent where TalentId ='".$ID."'  ";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
$row = mysqli_fetch_array($result)
?>
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td>Student Name:</td>
                    <td><?php echo $row['StudentName'];?></td>
                  </tr>
                  <tr>
                    <td>Talent Title:</td>
                    <td><?php echo $row['TalentTitle'];?></td>
                  </tr>
                  <tr>
                    <td>IG:</td>
                    <td><?php echo $row['IG'];?></td>
                  </tr>
                  <tr>
                    <td>Video Link:</td>
                    <td><?php echo $row['TalentVideo'];?></td>
                  </tr>
				  <tr>
                    <td>Resume Link:</td>
                    <td><?php echo $row['TalentResume'];?></td>
                  </tr>
				  <tr>
                    <td>Description:</td>
                    <td><?php echo $row['Description'];?></td>
                  </tr>
                  <tr>
                    <td><strong><a href="ApproveTal.php?TalId=<?php echo $row['TalentId'];?>">Approve Talent</a></strong></td>
                    <td><strong><a href="DeleteTal.php?TalId=<?php echo $row['TalentId'];?>">Delete Talent</a></strong></td>
                  </tr>			 
                </table>
                <?php
                mysqli_close($con);
                ?>
      </form><!-- form -->

    </section><!-- content -->
</div><!-- container -->
</body>
</html>
