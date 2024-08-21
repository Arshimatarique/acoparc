<?php
session_start();
if(isset($_SESSION['msg']))
{
?>
<script type="text/javascript">alert("<?php echo $_SESSION['msg'];?>");</script>
<?php
unset($_SESSION['msg']);
}
include("connect.php");
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
						<form action="form/employerfeedback.php" method="POST">
							<div class="main">

								<div class="form-left-to-w3l">
								<p>Employer Name</p>
								<input type="text" name="employer_name" required="">
								<div class="clear"></div>
								</div>

								<div class="form-left-to-w3l">
								<p>Name of Industry</p>
								<input type="text" name="industry" required="">
								<div class="clear"></div>
								</div>


								<div class="form-left-to-w3l">
								<p>Employee Name</p>
								<input type="text" name="employee_name" required="">
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
				<p>VVBCOP &copy;2019. All Rights Reserved.</p>
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





