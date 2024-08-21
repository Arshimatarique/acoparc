<?php
session_start();
include("../connect.php");

if(isset($_POST['submit']))
{
extract($_POST);

		$sql="insert into teacher_feedback (teacher_id,q_1,q_2,q_3,q_4,q_5,q_6,message,date)values('$id','$q_1','$q_2','$q_3','$q_4','$q_5','$q_6','$message','".date('Y-m-d')."')";
		$con->query($sql);
		$_SESSION['msg']="Thanks For Your Feedback";
		header("location:../index.php");

}

?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Teacher Feedback Form </title>
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
if(isset($_GET['id']))
{
?>
<body>
	<!--background-->
	<div class="register-form-w3layouts">
		<!-- Form starts here -->
		<form action="" method="post">
			<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
			<h2 class="sub-heading-agileits">Teacher Feedback Form</h2>
			<div class="radio-section">
				<h6 style="font-size:14px;"> Q1) Do you feel that the syllabus is designed in a way to clarify the teaching goals? </h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_1"  value="A" required>
						<label for="a-option"> Excellent </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_1"  value="B" required>
						<label for="b-option"> Good </label>
						<div class="check">
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_1"  value="C" required>
						<label for="a-option"> Average  </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_1"  value="D" required>
						<label for="b-option"> Poor </label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul><br><hr>
                <h6 style="font-size:14px;">  Q2) Is your syllabussufficient and efficient to bridge the gap between industry standards, current global scenario and academics?</h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_2"  value="A" required>
						<label for="a-option"> Excellent </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_2"  value="B" required>
						<label for="b-option"> Good </label>
						<div class="check">
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_2"  value="C" required>
						<label for="a-option"> Average  </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_2"  value="D" required>
						<label for="b-option"> Poor </label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul><br><hr>
              <h6 style="font-size:14px;"> Q3) Is the timely coverage of syllabus possible in the allotted number of teaching hours?</h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_3"  value="A" required>
						<label for="a-option"> Excellent </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_3"  value="B" required>
						<label for="b-option"> Good </label>
						<div class="check">
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_3"  value="C" required>
						<label for="a-option"> Average  </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_3"  value="D" required>
						<label for="b-option"> Poor </label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul><br><hr>
               <h6 style="font-size:14px;"> Q4) Are the sufficient references and books available for the effective teaching of the modules in the curriculum prescribed?</h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_4"  value="A" required>
						<label for="a-option"> Excellent </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_4"  value="B" required>
						<label for="b-option"> Good </label>
						<div class="check">
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_4"  value="C" required>
						<label for="a-option"> Average  </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_4"  value="D" required>
						<label for="b-option"> Poor </label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul><br><hr>
              <h6 style="font-size:14px;"> Q5)Are the evaluation methods suggested sufficient for proper assessment of the performance of the students?</h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_5"  value="A" required>
						<label for="a-option"> Excellent </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_5"  value="B" required>
						<label for="b-option"> Good </label>
						<div class="check">
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_5"  value="C" required>
						<label for="a-option"> Average  </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_5"  value="D" required>
						<label for="b-option"> Poor </label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul><br><hr>
               <h6 style="font-size:14px;"> Q6) Is the syllabus at par compare to that of other universities in the country? </h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_6"  value="A" required>
						<label for="a-option"> Excellent </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_6"  value="B" required>
						<label for="b-option"> Good </label>
						<div class="check">
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_6"  value="C" required>
						<label for="a-option"> Average  </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_6"  value="D" required>
						<label for="b-option"> Poor </label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul><br><hr>
                
				<div class="clear"></div>
			</div>
			<div class="field-agileinfo-spc form-w3-agile-text">
			<h6 style="font-size:14px; color:#000"> Q7) Record your views/suggestions for the further modifications in the Curriculum  </h6>
                <textarea name="message" placeholder=" Answer Here"></textarea>
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