<?
	require_once 'config/config.php';
	require_once 'php/db_connect.php';
?>

<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
		<link rel="stylesheet" type="text/css" href="styles/main.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="js/uuser.js"></script>
	</head>

	<body>
	    <div id="outer-wrap">
			<h1>Sabbath Scheduler</h1>

			<a href="" class="btnlink"><div class="button userbtn"> 
						View Sabbath
						</div></a>
			<a href="" class="btnlink"><div class="button userbtn"> 
						View Calendar
						</div></a>
			<a href="" class="btnlink"><div class="button adminbtn"> 
						Add Event
						</div></a>
			<a href="" class="btnlink"><div class="button adminbtn"> 
						View People
						</div></a>
			<a href="" class="btnlink"><div class="button adminbtn"> 
						View Congregations
						</div></a>
			<a href="" class="btnlink"><div class="button adminbtn"> 
						View Roles
						</div></a>
			<a href="" class="btnlink"><div class="button adminbtn"> 
						View Saved Locations
						</div></a>
			<a href="" class="btnlink"><div class="button adminbtn"> 
						View Templates
						</div></a>


		</div>
	</body>
</html>
