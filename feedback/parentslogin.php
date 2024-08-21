<?php

include("connect.php");

if(isset($_POST['submit']))
{
    extract($_POST);
	   $b=implode(",",$select);

$sql="select * from student where enrollment='$Enrollment_no' and course='$b' ";
$query=$con->query($sql);

if($query->num_rows>0)
{

		$i="insert into parentslogin(wardname,parentname,Contact,Enrollment_no,Course)values('$wardname','$parentname','$Contact','$Enrollment_no','$b')";
        $con->query($i);
		header("location:form/parentsfeedback.php?Enrollment_no=".$Enrollment_no."&course=".$b."");
}

else
{
    ?>
    <script>alert("WARNING ! This Enrollment Number Does Not Exist.")</script>;
    <?php
    //header("location:studentlogin.php");
}


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>VIDYA BHARATI MAHAVIDYALAYA</title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
	/>
	<script>
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!-- Meta tags -->
		<!-- font-awesome icons -->
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<!-- //font-awesome icons -->
	<!--stylesheets-->
	<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
	<!--//style sheet end here-->

<link href="//fonts.googleapis.com/css?family=Barlow:300,400,500" rel="stylesheet">
</head>

<body>


	<h1 class="header-w3ls">
		<img src="images/logo.png"/></h1>

		<div class="art-bothside">
		<div class="Up-sign-form text-center">
		<h2> LOGIN</h2>
		<p>Please Enter Details.</p>
		</div>
		<div class="mid-cls">

				<div class="art-right-w3ls" style="margin-left:25%;">
				<form action=" " method="post">
			<div class="main">

                        <div class="form-left-to-w3l">
							<p>Student Id/Enrollment No.</p>
							<input type="text" name="Enrollment_no" required="">
							<div class="clear"></div>
						</div>

                        <div class="form-left-to-w3l">
							<p>Ward Name</p>
							<input type="text" name="wardname" required="">
							<div class="clear"></div>
						</div>
						<div class="form-left-to-w3l">
							<p>Select Course/Class</p>
							<select name="select[]" style="padding:8px;margin-top: 10px;margin-bottom: 10px; color: #000000; width:100%;" >
                            <option value="D.Pharm">D.Pharm</option>
                            <option value="B.Pharm">B.Pharm</option>
                            <option value="M.Pharm">M.Pharm</option>

                            </select>
							<div class="clear"></div>
						</div>

						<div class="form-left-to-w3l">
							<p>Parent Name</p>
							<input type="text" name="parentname" required="">
							<div class="clear"></div>
						</div>

						<div class="form-left-to-w3l">
							<p>Contact No.</p>
							<input type="text" name="Contact" required="">
							<div class="clear"></div>
						</div>


                <div class="btnn">
				<button type="submit" name="submit">Submit and continue</button><br>
				<div class="clear"></div>
			</div>
             <br>
            <div align="center" style="font-size:16px;"><a href="index.php">Back To Home</a></div>
			</div>

		</form>
		</div>
		</div>
		</div>
			<div class="copy">
		<p>VBCOP &copy;2019. All Rights Reserved.</p>
	</div>

	<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
		</body>
		</html>

