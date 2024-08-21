<?php
include("connect.php");
session_start();
if(isset($_SESSION['msg']))
{
?>
<script type="text/javascript">alert("<?php echo $_SESSION['msg'];?>");</script>
<?php
unset($_SESSION['msg']);
}

if(isset($_POST['submit']))
{
    extract($_POST);

$enrollment=$con->real_escape_string($enrollment_no);

$sql="select * from student where enrollment='".$enrollment."' and course='".$course."' ";
$query=$con->query($sql);
$result=$query->fetch_array();

$plus2=date('Y-m-d', strtotime($result['admission_year'] .'+2 years'));
$plus4=date('Y-m-d', strtotime($result['admission_year'] .'+4 years'));

if($query->num_rows>0)
{
	if (($course=='D.Pharm' && $plus2 < date('Y-m-d')) || ($course=='B.Pharm' && $plus4 < date('Y-m-d')) || ($course=='M.Pharm' && $plus2 < date('Y-m-d')) )
	{
		if ($course=='B.Pharm')
		{
			$year=$plus4;
		}
		else
		{
			$year=$plus2;
		}
		//insert into alumni/mscchem table and delete from Student table

		$con->query("insert into alumni(enrollment_no,name,contact,email,Course,Year)values('".$enrollment_no."','".$result['name']."','".$result['contact_no']."','','".$course."','".$result['admission_year']."')");

		$con->query("delete from student where enrollment='".$enrollment."' and course='".$course."' ");

		$_SESSION['msg']="Please Give Feedback In Alumni Section !";
    	header("location:studentlogin.php");
	}
	else
	{
		$sql00="select * from session_dates where id='1' ";
		$query00=$con->query($sql00);
		$result00=$query00->fetch_array();

		$sql11="select * from session_dates where id='2' ";
		$query11=$con->query($sql11);
		$result11=$query11->fetch_array();

		$sql1="select * from studentlogin where Enrollment_no='$enrollment' and Course='$course' and Year='$year' and session='first' ";
		$query1=$con->query($sql1);

		$sql2="select * from studentlogin where Enrollment_no='$enrollment' and Course='$course' and Year='$year' and session='second' ";
		$query2=$con->query($sql2);

		if($query1->num_rows==0)
		{
			if(date('Y-m-d') >= $result00['start'] && date('Y-m-d') <=  $result00['end'])
			{

					$i="insert into studentlogin(Enrollment_no,Year,Course,semester,session)values('$enrollment_no','$year','$course','$semester','first')";
					$con->query($i);
					header("location:form/studentfeedback.php?Enrollment_no=".$enrollment_no." ");

			}
			else
			{
				$_SESSION['msg']="Feedback Not Available !";
				header("location:studentlogin.php");
			}

		}
		else if($query2->num_rows==0)
		{
			if(date('Y-m-d') >= $result11['start'] && date('Y-m-d') <=  $result11['end'])
			{

					$i="insert into studentlogin(Enrollment_no,Year,Course,semester,session)values('$enrollment_no','$year','$course','$semester','second')";
					$con->query($i);
					header("location:form/studentfeedback.php?Enrollment_no=".$enrollment_no." ");

			}
			else
			{
				$_SESSION['msg']="Feedback Not Available !";
				header("location:studentlogin.php");
			}
		}
		else
		{
				$_SESSION['msg']="Feedback Already Submitted !";
				header("location:studentlogin.php");
		}
	}
	//fetching session dates



}

else
{
    $_SESSION['msg']="WARNING ! This Student College ID Does Not Exist.";
    header("location:studentlogin.php");
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
<form action=" " method="POST" >
	<h1 class="header-w3ls">
		<img src="images/logo.png"/></h1>

		<div class="art-bothside">
		<div class="Up-sign-form text-center">
		<h2> LOGIN</h2>
		<p> Please Enter Details. </p>
		</div>
		<div class="mid-cls">

				<div class="art-right-w3ls" style="margin-left:25%;">
				<form action="form/studentfeedback.html" method="post">
			<div class="main">
						<div class="form-left-to-w3l">
							<p>Enter Student College ID</p>
							<input type="text" name="enrollment_no" required="">
							<div class="clear"></div>
						</div>
                        <div class="form-left-to-w3l">
							<p style="padding-top:15px; padding-bottom:10px;" >Academic Year</p>
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
							<p style="padding-top:15px; padding-bottom:10px;" >Select Course</p>
							<select name="course" style="padding:10px; color: #000000; width:100%;" >



                            <option value="D.Pharm">D.Pharm</option>
                            <option value="B.Pharm">B.Pharm</option>
                            <option value="M.Pharm">M.Pharm</option>


                            </select>
							<div class="clear"></div>
						</div>


                        <div class="form-left-to-w3l">
							<p style="padding-top:15px; padding-bottom:10px;" >Select Semester</p>
							<select style="padding:10px; color: #000000; width:100%;" name="semester">
                            <option value="SEM-I"> SEM-I</option>
                            <option value="SEM-II"> SEM-II</option>
                            <option value="SEM-III"> SEM-III</option>
                            <option value="SEM-IV"> SEM-IV</option>
                            <option value="SEM-V"> SEM-V</option>
                            <option value="SEM-VI"> SEM-VI</option>
                            <option value="SEM-VII"> SEM-VII</option>
                            <option value="SEM-VIII"> SEM-VIII</option>
                            </select>
							<div class="clear"></div>
						</div>

<div class="btnn">
				<button type="submit" name="submit">Validate</button><br>
				<div class="clear"></div>

			</div>
            <br>
            <div align="center" style="font-size:16px;"><a href="index.php"> Back To Home </a></div>
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



