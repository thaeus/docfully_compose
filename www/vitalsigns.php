<?php session_start(); ?>
<?php require_once("includes/functions.php"); ?>
<?php 
	if (!isset($_SESSION['user_id'])) {
		redirect_to("login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Vital Signs</title>
	<link href="css/jquery.bxslider.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/nav.css" rel="stylesheet" type="text/css">
	<link href="questionaire.php">
	<link href="healthscore.php">
	<link href="vitalsigns.php">
	<style type="text/css">
	   /*<![CDATA[*/
	   fieldset {
	   background-color:lightblue;
	   border:10px solid indigo;
	   margin-bottom:10px;
	   width:720px;
	   margin:auto;
	   }
	   label {
	   width:180px;
	   display:inline-block;
	   text-align:center;
	   vertical-align:;
	   }
	   span {
	   text-align:right;
	   vertical-align:top;
	   }
	   span.rangeLeft {
	   display:inline-block;
	   padding:5px;
	   background:#ff0000;
	   color:indigo;
	   width:45px;
	   text-align:center
	   }
	   span.rangeRight {
	   display:inline-block;
	   background-color:purple;
	   padding:5px;
	   vertical-align:top;
	   color:darkblue;
	   width:45px;
	   text-align:center
	   }
	   label.autoWidth {
	   text-align:right;
	   width:auto;
	   }
	   input[name="gender"]{
	   width:auto;
	   }
	   textarea {
	   width:360px;
	   height:50px;
	   }
	   /*]]>*/
	</style>
</head>
<body background="Backgrounds_Interweaving_gray_and_blue_stripes_095348_.jpg">
	<!---Start Wrapper -->
	<div id="wrapper">
		<!---Start Header -->
		<header>
			<div id="callout">
				<h2><font color="#00FA9A" size="4">&#9742 773.220.7015</font></h2>
			</div>
			<div id="logo">
				<a href="index.html"><img src="images/imageedit_52_9268637590.jpg"></a>
			</div>
		</header><!---End Header -->
		<div class="clearfix"></div><!--- Start Nav & Slider -->
		<div id="banner-wrapper style=">
			<!---Start Nav -->
			<script src="js/jquery-1.11.2.min.js">
			</script> 
			<script src="js/main.js">
			</script>
			<div class="nav-wrap">
				<nav class="navigation">
					<div class="nav">
						<ul class="nav-menu">		
							<li>
								<a href="questionnaire.php"><font color="#483D8B">Questionnaire</font></a>
							</li>
							<li>
								<a href="healthscore.php"><font color="#483D8B">Health Score</font></a>
							</li>
				            <li>
								<a href="videoConf.php"><font color="#483D8B">Video Conference</font></a>
							</li>
							<li>
								<a href="medical.php"><font color="#483D8B">Main</font></a>
							</li>
							<li><a href="logoutMD.php"><font color="#483D8B">Logout</font></a></li>
						</ul>
					</div>
				</nav>
			</div>
			<fieldset>
				<h4><legend>Patient</legend></h4><label for="patient">Upload Picture:</label> <input name="yourImage" required="" type="file"><br>
				<img id="preview" name="preview">
			</fieldset>
			<fieldset>
				<h4><legend>Patient's Details</legend></h4><label for="name">Name:</label> <input name="name" placeholder="Patient's Details" required="" type="text"><br>
				<br>
				<label for="gender">Gender:</label> <input name="gender" required="" type="radio" value="male"> <span id="male">Male</span> <input name="gender" required="" type="radio" value="female"> <span id="female">Female</span><br>
				<br>
				<label for="age">Age:</label> <input max="99" min="18" name="age" required="" type="number" value="18"><br>
				<br>
				<label for="name">Doctor's Name:</label> <input name="name" placeholder="doctor's name" required="" type="text"><br>
				<label for="birthdate">Date of birthdate:</label> <input name="birthdate" placeholder="dd/mm/yyyy" type="date"><br>
				<br>
				<label for="insurance">Medical Insurance:</label> <select name="insurance">
					<option value="blue shield">
						Blue Shield
					</option>
					<option value="anthem blue cross">
						Anthem Blue Cross
					</option>
					<option value="kaiser permanente of CA">
						Kaiser Permanente of CA
					</option>
					<option value="oscar health plan of california">
						Oscar Health Plan of California
					</option>
					<option value="sharp health plan">
						Sharp health Plan
					</option>
					<option value="western health advantage">
						Western Health Advantage
					</option>
				</select><br>
				<br>
			</fieldset>
			<fieldset>
				<h4><legend>Patient's Vital Signs</legend></h4><label for="blood pressure">Blood Pressure:</label> <input name="blood pressure" placeholder="" required="" type="text"><br>
				<label for="blood sugar">Blood Sugar:</label> <input name="blood sugar" placeholder="" required="" type="text"><br>
				<label for="body temperature">Body Temperature:</label> <input name="body temperature" placeholder="" required="" type="text"><br>
				<label for="hand strength">Hand Strength:</label> <input name="hand strength" placeholder="" required="" type="text"><br>
				<label for="pulse ox">Pulse Ox:</label> <input name="pulse ox" placeholder="" required="" type="text"><br>
				<label for="pulse rate">Pulse Rate:</label> <input name="pulse rate" placeholder="" required="" type="text"><br>
				<label for="respiration rate">Respiration Rate:</label> <input name="respiration rate" placeholder="" required="" type="text"><br>
				<label for="weight">Weight:</label> <input name="weight" placeholder="" required="" type="text"><br>
				<br>
			</fieldset>
			<fieldset>
				<h4><legend>Emergency Contact</legend></h4><label for="name">Name:</label> <input name="name" placeholder="" type="name"><br>
				<label for="userEmail">Email:</label> <input name="userEmail" placeholder="Your email" required="" type="email"><br>
				<br>
				<label for="mobile">Mobile:</label> <input name="mobile" placeholder="(xxx)xxx-xxxx" type="tel"><br>
				<br>
				<label for="address">Address:</label> 
				<textarea cols="25" name="address" placeholder="emergency contact address" rows="2"></textarea><br>
				<br>
				<label class="autoWidth" for="contactMethod">Method of contact:</label> <input name="contactMethod" type="checkbox" value="email"> <span class="hover">Email</span> <input name="contactMethod" type="checkbox" value="whatsapp"> <span class="hover">Whatsapp</span> <input name="contactMethod" type="checkbox" value="whatsapp"> <span class="hover">Telephone</span><input name="contactMethod" type="checkbox" value="telephone"><br>
				<div style="text-align:center">
					<input type="submit">
				</div>
			</fieldset>
		</div>
	</div>
</body>
</html>