<html>
	<head>
		<link href="http://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet" type="text/css"> 
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/jarvis/interface/style.css">
		<meta http-equiv="Refresh" content="30; URL=http://localhost/jarvis/interface/matin.php">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 
	</head>

	<body>
  
		<div class="carre">
			<div id="sphere">
				<img src="sphere1.gif"/>
			</div>
		
			<div id="meteo">
				<span id="meteo"></span>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>		
				<script type="text/javascript" src="meteo.js"></script>
				<script type="text/javascript">window.onload = meteo('meteo');</script>
			</div>
		
			<div id="hr">
				<span id="heure"></span>
				<script type="text/javascript" src="heure.js"></script>
				<script type="text/javascript">window.onload = heure('heure');</script>
			</div>

			<div id="rappel">
				<?php
					include("rappel.php");
				?>
			</div>

			<div id="date">
				<?php
					include("date.php");
				?>
			</div>
			
			<div id="calendrier">
				<?php
					include("calendrier.php");
				?>
			</div>
		</div>
	</body>
</html>
