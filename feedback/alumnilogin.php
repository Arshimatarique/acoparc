<?php
    include("connect.php");

if(isset($_POST['submit']))
{
	extract($_POST);

$sql="select * from alumni where enrollment_no='$enrollment_no' ";
$query=$con->query($sql);

if($query->num_rows>0)
{
header("location:form/alumnifeedback.php?enrollment_no=".$enrollment_no."&dob=".$dob."&passing_year=".$passing_year."&email=".$email."&contact=".$contact."&designation=".$designation."&address=".$address." ");
}

else
{
    ?>
    <script>alert("WARNING ! This Enrollment No Does Not Exist.")</script>;
    <?php
    //header("location:alumnilogin.php");
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
<form action="" method="POST" >

	<h1 class="header-w3ls">
		<img src="images/logo.png"/></h1>

		<div class="art-bothside">
		<div class="Up-sign-form text-center">
		<h2> LOGIN</h2>
		<p>Please Enter Details.</p>
		</div>
		<div class="mid-cls">

				<div class="art-right-w3ls" style="margin-left:25%;">
				<form action="form/alumnifeedback.html" method="post">
			<div class="main">
						<div class="form-left-to-w3l">
							<p> Enrollment No</p>
							<input type="text" name="enrollment_no" required="">
							<div class="clear"></div>
						</div>
						<div class="form-left-to-w3l">
							<p> Name</p>
							<input type="text" name="name" required="">
							<div class="clear"></div>
						</div>
                        <div class="form-left-to-w3l">
							<p>Date of Birth</p>
							<input type="text" name="dob" required="">
							<div class="clear"></div>
						</div>
						<div class="form-left-to-w3l">
							<p>Year Of Passing</p>
							<select name="passing_year" style="padding:8px;margin-top: 10px;margin-bottom: 10px; color: #000000; width:100%;" required="">
							<option value="1990 - 91"> 1990 - 91 </option>
                            <option value="1991 - 92"> 1991 - 92 </option>
                            <option value="1992 - 93"> 1992 - 93 </option>
                            <option value="1993 - 94"> 1993 - 94 </option>
                            <option value="1994 - 95"> 1994 - 95 </option>
                            <option value="1995 - 96"> 1995 - 96 </option>
                            <option value="1996 - 97"> 1996 - 97 </option>
                            <option value="1997 - 98"> 1997 - 98 </option>
                            <option value="1998 - 99"> 1998 - 99 </option>
                            <option value="1999 - 00"> 1999 - 00 </option>

                            <option value="2000 - 01"> 2000 - 01 </option>
                            <option value="2000 - 01"> 2001 - 02 </option>
                            <option value="2000 - 01"> 2002 - 03 </option>
                            <option value="2000 - 01"> 2003 - 04 </option>
                            <option value="2000 - 01"> 2004 - 05 </option>
                            <option value="2000 - 01"> 2005 - 06 </option>
                            <option value="2000 - 01"> 2006 - 07 </option>
                            <option value="2000 - 01"> 2007 - 08 </option>
                            <option value="2000 - 01"> 2008 - 09 </option>
                            <option value="2000 - 01"> 2009 - 10 </option>


                            <option value="2010 - 11"> 2010 - 11 </option>
                            <option value="2011 - 12"> 2011 - 12 </option>
                            <option value="2012 - 13"> 2012 - 13 </option>
                            <option value="2013 - 14"> 2013 - 14 </option>
                            <option value="2014 - 15"> 2014 - 15 </option>
                            <option value="2015 - 16"> 2015 - 16 </option>
                            <option value="2016 - 17"> 2016 - 17 </option>
                            <option value="2017 - 18"> 2017 - 18 </option>
							<option value="2018 - 19"> 2018 - 19 </option>
							<option value="2019 - 20"> 2019 - 20 </option>
                            <option value="2019 - 20"> 2020 - 21 </option>
                            <option value="2021 - 22"> 2021 - 22 </option>
                            <option value="2022 - 23"> 2022 - 23 </option>
                            <option value="2023 - 24"> 2023 - 24 </option>
                            <option value="2024 - 25"> 2024 - 25 </option>
                            <option value="2025 - 26"> 2025 - 26 </option>
                            <option value="2026 - 27"> 2026 - 27 </option>
                            <option value="2027 - 28"> 2027 - 28 </option>
                            <option value="2028 - 29"> 2028 - 29 </option>
                            <option value="2029 - 30"> 2029 - 30 </option>

                            </select>
							<div class="clear"></div>
						</div>

                        <div class="form-left-w3l">
                            <p>Email</p>
                            <input type="email" name="email" required="">
						</div>
                        <div class="form-left-to-w3l">
							<p>Contact No.</p>
							<input type="text" name="contact" required="">
							<div class="clear"></div>
						</div>

                        <div class="form-left-to-w3l" style="padding-top:10px;">
							<p> Designation</p>
							<input type="text" name="designation" required="">
							<div class="clear"></div>
						</div>

                        <div class="form-left-to-w3l">
							<p>Address</p>
							<textarea name="address" cols="60" rows="5" required=""></textarea>
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



