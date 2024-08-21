<?php
session_start();
include("../connect.php");

if(isset($_POST['submit']))
{
extract($_POST);

		$sql="INSERT INTO `alumni_feedback`(`enrollment_no`, `dob`, `passing_year`, `email`, `contact`, `designation`, `address`, `q_1`, `q_2`, `q_3`, `q_4`, `q_5`, `q_6`, `q_7`, `message`, `date`) VALUES ('".$enrollment_no."','".$dob."','".$passing_year."','".$email."','".$contact."','".$designation."','".$address."','".$q_1."','".$q_2."','".$q_3."','".$q_4."','".$q_5."','".$q_6."','".$q_7."','".$message."','".date('Y-m-d')."')";
		

		$con->query($sql);
		$_SESSION['msg']="Thanks For Your Feedback";
		header("location:../index.php");

}

?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Alumni Feedback Form</title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="OP Registration Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tags -->
	<!-- Stylesheet -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- //Stylesheet -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet">
	<!--//fonts-->
</head>
<?php
if(isset($_GET['enrollment_no']))
{
?>
<body>
	<!--background-->
	<div class="register-form-w3layouts">
		<!-- Form starts here -->
		<form action="#" method="post">
	<input type="hidden" name="enrollment_no" value="<?php echo $_GET['enrollment_no'];?>">
	<input type="hidden" name="dob" value="<?php echo $_GET['dob'];?>">
	<input type="hidden" name="passing_year" value="<?php echo $_GET['passing_year'];?>">
	<input type="hidden" name="email" value="<?php echo $_GET['email'];?>">
	<input type="hidden" name="contact" value="<?php echo $_GET['contact'];?>">
	<input type="hidden" name="designation" value="<?php echo $_GET['designation'];?>">
	<input type="hidden" name="address" value="<?php echo $_GET['address'];?>">
			<h2 class="sub-heading-agileits">Alumni Feedback Form</h2>
			<div class="radio-section">
				<h6 style="font-size:14px;"> Q1) How do you rate development activities organised by department for overall development of student? </h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_1" required="" value="A">
						<label for="a-option"> Low </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_1" required="" value="B">
						<label for="b-option"> Moderate </label>
						<div class="check">
						
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_1" required="" value="C">
						<label for="a-option"> High </label>
						<div class="check"></div>
					</li>
				</ul><br><hr>
                <h6 style="font-size:14px;">  Q2) Were / Are you grievance handled by institute properly? </h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_2" required="" value="A">
						<label for="a-option"> Low</label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_2" required="" value="B">
						<label for="b-option"> Moderate</label>
						<div class="check">
						
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_2" required="" value="C">
						<label for="a-option"> High</label>
						<div class="check"></div>
					</li>
				</ul><br><hr>
              <h6 style="font-size:14px;"> Q3) Did you find the subject knowledge provided during the course helpful in your professional working? </h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_3" required="" value="A">
						<label for="a-option">Low </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_3" required="" value="B">
						<label for="b-option">Moderate</label>
						<div class="check">
						
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_3" required="" value="C">
						<label for="a-option">High</label>
						<div class="check"></div>
					</li>
				</ul><br><hr>
               <h6 style="font-size:14px;"> Q4) Do you find the content beyond the syllabus provided during the course helpful in bridging the gap between curriculum and recent professional working helpful in your professional working? </h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_4" required="" value="A">
						<label for="a-option"> Low </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_4" required="" value="B">
						<label for="b-option"> Moderate </label>
						<div class="check">
						
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_4" required="" value="C">
						<label for="a-option"> High </label>
						<div class="check"></div>
					</li>
				</ul><br><hr>
              <h6 style="font-size:14px;">  Q5) Do you feel proud to be associated with Vidyabharati College of Pharmacy as an Alumni? </h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_5" required="" value="A">
						<label for="a-option">Low </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_5" required="" value="B">
						<label for="b-option">Moderate </label>
						<div class="check">
						
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_5" required="" value="C">
						<label for="a-option">High </label>
						<div class="check"></div>
					</li>
				</ul><br><hr>
               <h6 style="font-size:14px;"> Q6) Are you willing to contribute for the development of the institute?  </h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_6" required="" value="A">
						<label for="a-option">Low </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_6" required="" value="B">
						<label for="b-option">Moderate  </label>
						<div class="check">
						
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_6" required="" value="C">
						<label for="a-option">High </label>
						<div class="check"></div>
					</li>
				</ul><br><hr>
               <h6 style="font-size:14px;"> Q7) How will you rate the institute for PEO attainment?  </h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_7" required="" value="A">
						<label for="a-option">Low </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_7" required="" value="B">
						<label for="b-option">Moderate  </label>
						<div class="check">
						
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_7" required="" value="C">
						<label for="a-option">High </label>
						<div class="check"></div>
					</li>
				</ul><br><hr>
				<div class="clear"></div>
			</div>
			<div class="field-agileinfo-spc form-w3-agile-text">
			<h6 style="font-size:14px; color:#000"> Q8) Record your views/suggestions on the modifications to be made in the curriculum in near future. </h6>
                <textarea name="message" placeholder=" Answer Here" maxlength="500"></textarea>
			</div>
			<input type="submit" name="submit" value="Submit">
			
			<div class="clear"></div>
		</form>
		<!--// Form starts here -->
	</div>
	<!--copyright-->
	<div class="copyright">
		<p>VBMV &copy;2018. All Rights Reserved.</p>
	</div>
	<!--//copyright-->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- Calendar Js -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar Js -->

</body>
<?php
}
?>
</html>