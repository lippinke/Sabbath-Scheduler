<?php
	require_once 'config.php';

    $db = new SQLite3($db_path);
    if(!$db)
    {
        echo "error connecting to database\n";
        exit(-1);
    }
?>

<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	</head>

	<body>
	    <div class="container">
			<h1>Sabbath Scheduler Main page</h1>
		</div>
	</body>
</html>