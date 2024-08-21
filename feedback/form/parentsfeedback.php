<?php
session_start();
include("../connect.php");

if(isset($_POST['submit']))
{
extract($_POST);

		if($_GET['course']=='D.Pharm')
		{
			$sql="insert into parents_feedback (enrollment_no,course,q_1,q_2,q_3,q_4,q_5,q_6,q_7,q_8,q_9,q_10,q_11,q_12,q_13,message,date)values('$enrollment_no','".$_GET['course']."','$q_1','$q_2','$q_3','$q_4','$q_5','$q_6','$q_7','$q_8','$q_9','$q_10','$q_11','$q_12','$q_13','$message','".date('Y-m-d')."')";
			$con->query($sql);
		}
		else
		{
			$sql="insert into parents_feedback (enrollment_no,course,q_1,q_2,q_3,q_4,q_5,message,date)values('$enrollment_no','".$_GET['course']."','$q_1','$q_2','$q_3','$q_4','$q_5','$message','".date('Y-m-d')."')";
			$con->query($sql);
		}
		$_SESSION['msg']="Thanks For Your Feedback";
		header("location:../index.php");

}

?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Parents Feedback Form</title>
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
		<form action="" method="post">
			<input type="hidden" name="enrollment_no" value="<?php echo $_GET['Enrollment_no'];?>">
			<h2 class="sub-heading-agileits">Parents Feedback Form</h2>
			<div class="radio-section">
<?php
if($_GET['course']=='D.Pharm')
{
?>
				<h6 style="font-size:14px;"> Q1)   Are you satisfied with the quality of teaching by staff? </h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_1" value="YES" required="">
						<label for="a-option"> YES </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_1" value="NO" required="">
						<label for="b-option"> NO </label>
						<div class="check">
						
						</div>
					</li>
				</ul><br><hr>
				<h6 style="font-size:14px;"> Q2)   Does your ward feel the need of extra tution class apart from the regular teaching in class rooms? </h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_2" value="YES" required="">
						<label for="a-option"> YES </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_2" value="NO" required="">
						<label for="b-option"> NO </label>
						<div class="check">
						
						</div>
					</li>
				</ul><br><hr>
				<h6 style="font-size:14px;"> Q3)   Are you kept informed about your wards progress? </h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_3" value="YES" required="">
						<label for="a-option"> YES </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_3" value="NO" required="">
						<label for="b-option"> NO </label>
						<div class="check">
						
						</div>
					</li>
				</ul><br><hr>
				<h6 style="font-size:14px;"> Q4)   Are you kept informed about attendance of your ward? </h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_4" value="YES" required="">
						<label for="a-option"> YES </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_4" value="NO" required="">
						<label for="b-option"> NO </label>
						<div class="check">
						
						</div>
					</li>
				</ul><br><hr>
				<h6 style="font-size:14px;"> Q5)   Is your ward provided with the latest updation of pharmacyfield other than the regular syllabus? </h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_5" value="YES" required="">
						<label for="a-option"> YES </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_5" value="NO" required="">
						<label for="b-option"> NO </label>
						<div class="check">
						
						</div>
					</li>
				</ul><br><hr>
				<h6 style="font-size:14px;"> Q6)   Are you satisfied with the institutional discipline and culture? </h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_6" value="YES" required="">
						<label for="a-option"> YES </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_6" value="NO" required="">
						<label for="b-option"> NO </label>
						<div class="check">
						
						</div>
					</li>
				</ul><br><hr>
				<h6 style="font-size:14px;"> Q7)   Do you find your ward safe and secure in the college premises? </h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_7" value="YES" required="">
						<label for="a-option"> YES </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_7" value="NO" required="">
						<label for="b-option"> NO </label>
						<div class="check">
						
						</div>
					</li>
				</ul><br><hr>
				<h6 style="font-size:14px;"> Q8)   Are you satisfied with the infrastructure and physical facilities provided by the college? </h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_8" value="YES" required="">
						<label for="a-option"> YES </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_8" value="NO" required="">
						<label for="b-option"> NO </label>
						<div class="check">
						
						</div>
					</li>
				</ul><br><hr>
				<h6 style="font-size:14px;"> Q9)   Do your ward is kept information about various financial scheme provided by Government from time to time ? </h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_9" value="YES" required="">
						<label for="a-option"> YES </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_9" value="NO" required="">
						<label for="b-option"> NO </label>
						<div class="check">
						
						</div>
					</li>
				</ul><br><hr>
				<h6 style="font-size:14px;"> Q10)   Are you satisfied with the placement performance of the institute? </h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_10" value="YES" required="">
						<label for="a-option"> YES </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_10" value="NO" required="">
						<label for="b-option"> NO </label>
						<div class="check">
						
						</div>
					</li>
				</ul><br><hr>
				<h6 style="font-size:14px;"> Q11)   Does institute provide any relaxation or assistance in college fees? </h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_11" value="YES" required="">
						<label for="a-option"> YES </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_11" value="NO" required="">
						<label for="b-option"> NO </label>
						<div class="check">
						
						</div>
					</li>
				</ul><br><hr>
				<h6 style="font-size:14px;"> Q12)   Does the staff recognize and provide the guidance for students with special learning needs? </h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_12" value="YES" required="">
						<label for="a-option"> YES </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_12" value="NO" required="">
						<label for="b-option"> NO </label>
						<div class="check">
						
						</div>
					</li>
				</ul><br><hr>
				<h6 style="font-size:14px;"> Q13)   Would you recommand this institute to other people for Diploma course in pharmacy? </h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_13" value="YES" required="">
						<label for="a-option"> YES </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_13" value="NO" required="">
						<label for="b-option"> NO </label>
						<div class="check">
						
						</div>
					</li>
				</ul><br><hr>
				<div class="clear"></div>
			</div>
			<div class="field-agileinfo-spc form-w3-agile-text">
			<h6 style="font-size:14px; color:#000"> Q 14 )   Record your suggestions for further modification in the curriculum. </h6>
                <textarea name="message" placeholder=" Answer Here"></textarea>
			</div>
<?php
}
else
{
?>
				<h6 style="font-size:14px;"> Q1)   Are the adequate ICTS tools available to deal with the existing curriculum? </h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_1" value="A" required="">
						<label for="a-option"> Excellent </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_1" value="B" required="">
						<label for="b-option"> Good </label>
						<div class="check">
						
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_1" value="C" required="">
						<label for="a-option"> Satisfactory </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_1" value="D" required="">
						<label for="b-option"> Inadequate</label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul><br><hr>
                <h6 style="font-size:14px;">  Q2) Did the curriculum really widen your intellectual horizon? </h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_2" value="A" required="">
						<label for="a-option"> Excellent</label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_2" value="B" required="">
						<label for="b-option"> Good </label>
						<div class="check">
						
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_2" value="C" required="">
						<label for="a-option"> Satisfactory</label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_2" value="D" required="">
						<label for="b-option"> Inadequate </label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul><br><hr>
              <h6 style="font-size:14px;"> Q3) Did the courses, you have studied really help you in developing yoursocial commitment and relationship? </h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_3" value="A" required="">
						<label for="a-option">Excellent </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_3" value="B" required="">
						<label for="b-option">Good </label>
						<div class="check">
						
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_3" value="C" required="">
						<label for="a-option">Satisfactory</label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_3" value="D" required="">
						<label for="b-option"> Inadequate </label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul><br><hr>
               <h6 style="font-size:14px;"> Q4) How did you find the ‘curriculum designed’? Has it really honed your communications skills and enhanced your personality? </h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_4" value="A" required="">
						<label for="a-option"> Very much </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_4" value="B" required="">
						<label for="b-option"> To some extend </label>
						<div class="check">
						
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_4" value="C" required="">
						<label for="a-option"> No at all </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_4" value="D" required="">
						<label for="b-option"> Can’t say</label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul><br><hr>
              <h6 style="font-size:14px;">  Q5)  Do you feel that the curriculum undertaken is capable of enhancing global competencies in your ward? </h6>
                <ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="q_5" value="A" required="">
						<label for="a-option"> Very much </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_5" value="B" required="">
						<label for="b-option">To some extend  </label>
						<div class="check">
						
						</div>
					</li>
                    <li>
						<input type="radio" id="a-option" name="q_5" value="C" required="">
						<label for="a-option">No at all </label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="q_5" value="D" required="">
						<label for="b-option">Neutral </label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul><br><hr>
               <div class="clear"></div>
			</div>
			<div class="field-agileinfo-spc form-w3-agile-text">
			<h6 style="font-size:14px; color:#000"> Q6) Record your suggestions for further modification in the curriculum. </h6>
                <textarea name="message" placeholder=" Answer Here"></textarea>
			</div>
<?php
}
?>
				
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

</html>