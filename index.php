<?php
	require_once 'config/config.php';
	require_once 'php/db_connect.php';
?>

<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>

	<body>
	    <div id="outer-wrap">
			<h1>Sabbath Scheduler</h1>

			<a href=""><div class="button user"> 
						View Sabbath
						</div></a>
			<a href=""><div class="button user"> 
						View Calendar
						</div></a>
			<a href=""><div class="button admin"> 
						Add Event
						</div></a>
			<a href=""><div class="button admin"> 
						View People
						</div></a>
			<a href=""><div class="button admin"> 
						View Congregations
						</div></a>
			<a href=""><div class="button admin"> 
						View Roles
						</div></a>
			<a href=""><div class="button admin"> 
						View Saved Locations
						</div></a>
			<a href=""><div class="button admin"> 
						View Templates
						</div></a>


		</div>
	</body>
</html>