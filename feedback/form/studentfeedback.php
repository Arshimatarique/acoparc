<?php
session_start();
include("../connect.php");

if(isset($_POST['submit']))
{
extract($_POST);

		$sql="insert into student_feedback (enrollment_no,q_1,q_2,q_3,q_4,q_5,q_6,q_7,message,date)values('$enrollment_no','$q_1','$q_2','$q_3','$q_4','$q_5','$q_6','$q_7','$message','".date('Y-m-d')."')";
		$con->query($sql);
		$_SESSION['msg']="Thanks For Your Feedback";
header("location:../index.php");

}

?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Student Feedback Form </title>
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
if(isset($_GET['Enrollment_no']))
{
?>
<body>
	<!--background-->
	<div class="register-form-w3layouts">
		<!-- Form starts here -->

		<form action="" method="POST">
			<input type="hidden" name="enrollment_no" value="<?php echo $_GET['Enrollment_no'];?>">
			<h2 class="sub-heading-agileits">Student Feedback Form</h2>
			<div class="radio-section">
				<h6 style="font-size:14px;"> Q1) How do you find the course contents of your syllabus. </h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_1" required="required" value="A">
						<label for="a-option"> Excellent </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_1" required="required" value="B">
						<label for="b-option"> Good </label>
						<div class="check">
						
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_1" required="required" value="C">
						<label for="a-option"> Satisfactory  useful </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_1" required="required" value="D">
						<label for="b-option"> Inadequate </label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul><br><hr>
                <h6 style="font-size:14px;">  Q2) Do you find that the curriculum prescribed for the Degree is really useful? </h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_2" required="required" value="A">
						<label for="a-option"> Very much useful</label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_2" required="required" value="B">
						<label for="b-option"> Useful</label>
						<div class="check">
						
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_2" required="required" value="C">
						<label for="a-option"> Partially useful</label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_2" required="required" value="D">
						<label for="b-option"> Can’t say</label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul><br><hr>
              <h6 style="font-size:14px;"> Q3) How do you rate the curriculum designed from the point of view of developing social skills?</h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_3" required="required" value="A">
						<label for="a-option">Totally useful </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_3" required="required" value="B">
						<label for="b-option">Partially useful </label>
						<div class="check">
						
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_3" required="required" value="C">
						<label for="a-option">To some extend</label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_3" required="required" value="D">
						<label for="b-option">Inadequate</label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul><br><hr>
               <h6 style="font-size:14px;"> Q4) The course objectives are clearly presented and met:</h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_4" required="required" value="A">
						<label for="a-option"> Strongly agree </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_4" required="required" value="B">
						<label for="b-option"> Agree </label>
						<div class="check">
						
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_4" required="required" value="C">
						<label for="a-option"> Disagree  </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_4" required="required" value="D">
						<label for="b-option">Not agree at all</label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul><br><hr>
              <h6 style="font-size:14px;">  Q5) Does the course imbibe any social value?</h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_5" required="required" value="A">
						<label for="a-option"> Very much </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_5" required="required" value="B">
						<label for="b-option"> To some extend </label>
						<div class="check">
						
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_5" required="required" value="C">
						<label for="a-option"> Partially </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_5" required="required" value="D">
						<label for="b-option"> Not at all </label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul><br><hr>
               <h6 style="font-size:14px;"> Q6) Do the courses foster global competencies among the students? </h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_6" required="required" value="A">
						<label for="a-option"> To great extend</label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_6" required="required" value="B">
						<label for="b-option"> To some extend  </label>
						<div class="check">
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_6" required="required" value="C">
						<label for="a-option"> Not always  </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_6" required="required" value="D">
						<label for="b-option"> Can’t say </label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul><br><hr>
                
                <h6 style="font-size:14px;"> Q7) Did your teacher use the ICT tools available and promote you to do so while imparting instructions on the contents of the curriculum? </h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_7" required="required" value="A">
						<label for="a-option">Strongly agree</label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_7" required="required" value="B">
						<label for="b-option">Agree   </label>
						<div class="check">
						
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_7" required="required" value="C">
						<label for="a-option">Disagree   </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_7" required="required" value="D">
						<label for="b-option">Neutral</label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul><br><hr>
				<div class="clear"></div>
			</div>
			<div class="field-agileinfo-spc form-w3-agile-text">
			<h6 style="font-size:14px; color:#000"> Q8) Record your suggestions/opinions relating to the curriculum you are studying. </h6>
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