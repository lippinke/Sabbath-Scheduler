<html>
<body>
<?php
	require_once '../config.php';
	
    $db = new SQLite3("../$db_path");
    if(!$db)
    {
        echo "error connecting to database\n";
        exit(-1);
    }
	

	$result = $db->query("SELECT name FROM sqlite_master WHERE type='table';");
	

	echo "<ul>";

	$table = sqlite_fetch_all($query, SQLITE_ASSOC);

	foreach ($table as $entry) {
	    echo 'Name: ' . $entry['name'];
	}

	// while ($table = $result->fetchArray()) {
	

	// 	echo '<li>';
	// 	echo $table['name'];
	
	// 	$resultcol = $db->query("PRAGMA table_info(".$table['name'].");");

	// 	echo "<tr>"
	// 	while ($column = $resultcol->fetchArray()) {
	
	// 		echo "<th>";
	// 		echo $column['name'];
	// 		echo "</th>";
	

	// 	}
	// 	echo "</tr>";
	// 	echo '</li>';
	// }

	echo "</ul>";
?>
</body>
</html>