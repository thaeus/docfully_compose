<?php session_start(); ?>
<?php require_once("includes/functions.php"); ?>
<?php 
	if (!isset($_SESSION['user_id'])) {
		redirect_to("login.php");
	
		
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Internal Frame Video</title>
		
		<link href="css/jquery.bxslider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/nav.css" rel="stylesheet">
		
		<style> iframe{resize: both; }
		</style>

	</head>

	<body background=Backgrounds_Interweaving_gray_and_blue_stripes_095348_.jpg>
	<div id ="Timer">
                
				<!---script>
		//
		//				var countDownDate = localStorage.getItem('startDate');
		//			//	
						//countDownDate = new Date();
					//	localStorage.setItem('startDate', countDownDate);
						
						// Update the count down every 1 second
					//	var x = setInterval(function() {
						 
							// Get todays date and time
					//		var now = new Date().getTime();
						 
							// Find the distance between now an the count down date
					//		var distance = now - countDownDate.getTime();
							
							// Time calculations for days, hours, minutes and seconds
					//		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
					//		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
					//		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
					//		var seconds = Math.floor((distance % (1000 * 60)) / 1000);
						 
							// Output the result in an element with id="demo"
					//		document.getElementById("demo").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
					//	}, 1000);
						<!--/script>
						<p id="demo"></p>
						</div>
		<div id="remote-media"></div>
		<div id="controls">

			<iframe src="https://apprtc.appspot.com/" allow="geolocation; microphone; camera" height="600" width="800" scrolling="no"> </iframe>
			<!iframe  width="400" height="700" rightside  src='chat2/index.html'>
 
		<!/iframe>
		</iframe>
				<!div id="log"><!/div>

		</div>

	<!script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"><!/script>
	<!script src="index.js"><!/script>
	</body>
</html>
