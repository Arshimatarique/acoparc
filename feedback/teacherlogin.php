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
if(isset($_POST['submit']))
{
    extract($_POST);
$sql="select * from teacherdata where Dob='$dob' ";
$query=$con->query($sql);

if($query->num_rows>0)
{

        $sql00="select * from session_dates where session='".$session."' ";
		$query00=$con->query($sql00);
		$result00=$query00->fetch_array();

		$sql1="select * from teacherlogin where dob='".$dob."' and year='".$year."' and session='".$session."' ";
		$query1=$con->query($sql1);

		if($query1->num_rows==0)
		{
			if(date('Y-m-d') >= $result00['start'] && date('Y-m-d') <=  $result00['end'])
			{

				$a=$con->query("insert into teacherlogin(name,Designation,Department,class,year,session,dob)values('$name','$Designation','$Department','$class','$year','$session','$dob')");

				$sql1="select * from teacherlogin order by id desc ";
				$query1=$con->query($sql1);
				$result1=$query1->fetch_array();
				header("location:form/teacherfeedback.php?id=".$result1['id']." ");

			}
			else
			{
				$_SESSION['msg']="Feedback Not Available !";
				header("location:teacherlogin.php");
			}

		}
		else
		{
				$_SESSION['msg']="Feedback Already Submitted !";
				header("location:teacherlogin.php");
		}


}

else
{

   	$_SESSION['msg']="WARNING ! This Account No Does Not Exist.";
    header("location:teacherlogin.php");
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
	<form action=" " method="POST">
		<h1 class="header-w3ls">
			<img src="images/logo.png"/></h1>

			<div class="art-bothside">
				<div class="Up-sign-form text-center">
					<h2> LOGIN</h2>
					<p>Please Enter Details.</p>
				</div>
				<div class="mid-cls">

					<div class="art-right-w3ls" style="margin-left:25%;">
						<form action="form/teacherfeedback.html" method="post">
							<div class="main">

								<div class="form-left-to-w3l">
								<p>Full Name</p>
								<input type="text" name="name" required="">
								<div class="clear"></div>
								</div>

								<div class="form-left-to-w3l">
								<p>Designation</p>
								<input type="text" name="Designation" required="">
								<div class="clear"></div>
								</div>

								<div class="form-left-to-w3l">
								<p>Department</p>
								<input type="text" name="Department" required="">
								<div class="clear"></div>
								</div>

								<div class="form-left-to-w3l">
								<p>Class (You teach)</p>
								<input type="text" name="class" required="">
								<div class="clear"></div>
								</div>

								<div class="form-left-to-w3l">
								<p style="padding-bottom:10px;" >Academic Year</p>
								<select style="padding:10px; color: #000000; width:100%;" name="year">
								<option value="2018 - 19"> 2018 - 19</option>
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

								<div class="form-left-to-w3l">
								<p style="padding-top:15px; padding-bottom:10px;" >Academic Session</p>
								<select style="padding:10px; color: #000000; width:100%;" name="session">
								<option style="padding:10px;" value="first"> First</option>
								<option style="padding:10px;" value="second"> Second </option>
								</select>
								<div class="clear"></div>
								</div>
								<!--
								<div class="form-left-to-w3l">
								<p style="padding-top:15px; padding-bottom:10px;" > D.O.J.</p>
								<input type="date" name="doj" required="" style="padding:10px; color: #000000; width:94%;">
								<div class="clear"></div>
								</div> -->
								<div class="form-left-to-w3l">
								<p style="padding-top:15px; " > Salary Acc No.</p>
								<input type="text" name="dob" required="">
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





