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
        <p id="demo"></p>
		<script src = 'chat2/timer.js' >		
		<div id="remote-media"></div>
        <div id="controls">
					
                        <iframe src="https://apprtc.appspot.com/" allow = "geolocation; microphone; camera" height="600" width
="800" scrolling="no"> </iframe>
                        <iframe  width="400" height="700" rightside  src='chat2/index.html'>
                        </iframe>
                        <!div id="log"><!/div>
                </div>
        <!script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"><!/script>
    </body>
    </html>
