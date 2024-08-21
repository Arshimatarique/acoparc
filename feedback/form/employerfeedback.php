<?php
session_start();
include("../connect.php");
var_dump($_POST);
if(isset($_POST['submit1']))
{
extract($_POST);

		$sql="insert into employer_feedback (employer_name,industry,employee_name,q_1,q_2,q_3,q_4,q_5,message,date)values('".$employer_name."','".$industry."','".$employee_name."','".$q_1."','".$q_2."','".$q_3."','".$q_4."','".$q_5."','".$message."','".date('Y-m-d')."')";
		$con->query($sql);

$_SESSION['msg']="Thanks For Your Feedback!";
		header("location:../index.php");

}

?>
<!DOCTYPE html>

<head>
	<title>Employee Feedback Form</title>
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

<body>
	<!--background-->
	<div class="register-form-w3layouts">
		<!-- Form starts here -->
		<form action="#" method="post">
			<input type="hidden" name="employer_name" value="<?php echo $_POST['employer_name'];?>">
			<input type="hidden" name="industry" value="<?php echo $_POST['industry'];?>">
			<input type="hidden" name="employee_name" value="<?php echo $_POST['employee_name'];?>">
			<h2 class="sub-heading-agileits">Employer Feedback Form</h2>
			<div class="radio-section">
				<h6 style="font-size:14px;"> Q1) Pharmacy knowledge and professional identity ? </h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_1" value="A">
						<label for="a-option"> Low </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_1" value="B">
						<label for="b-option">  Moderate </label>
						<div class="check">
						
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_1" value="C">
						<label for="a-option"> High </label>
						<div class="check"></div>
					</li>
				</ul><br><hr>
                <h6 style="font-size:14px;">  Q2) Leadership skill and pharmaceutical ethics instilled by the institute ? </h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_2" value="A">
						<label for="a-option">Low </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_2" value="B">
						<label for="b-option">  Moderate </label>
						<div class="check">
						
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_2" value="C">
						<label for="a-option"> High </label>
						<div class="check"></div>
					</li>
				</ul><br><hr>
              <h6 style="font-size:14px;"> Q3) Effective communication skill? </h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_3" value="A">
						<label for="a-option">Low </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_3" value="B">
						<label for="b-option">  Moderate </label>
						<div class="check">
						
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_3" value="C">
						<label for="a-option"> High </label>
						<div class="check"></div>
					</li>
				</ul><br><hr>
               <h6 style="font-size:14px;"> Q4) Urge to serve the society ?</h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_4" value="A">
						<label for="a-option">Low </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_4" value="B">
						<label for="b-option">  Moderate </label>
						<div class="check">
						
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_4" value="C">
						<label for="a-option"> High </label>
						<div class="check"></div>
					</li>
				</ul><br><hr>
              <h6 style="font-size:14px;">  Q5) Readiness to work in pharma sector ? </h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_5" value="A">
						<label for="a-option">Low </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_5" value="B">
						<label for="b-option">  Moderate </label>
						<div class="check">
						
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_5" value="C">
						<label for="a-option"> High </label>
						<div class="check"></div>
					</li>
				</ul><br><hr>
               <div class="clear"></div>
			</div>
			<div class="field-agileinfo-spc form-w3-agile-text">
			<h6 style="font-size:14px; color:#000"> Q6) Record your views/suggestions for the further  modifications in the Curriculum. </h6>
                <textarea name="message" placeholder=" Answer Here"></textarea>
			</div>
			<input type="submit" name="submit1" value="Submit">
			
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

</html>