<?php

require("config.php");

$slug = $_GET["slug"];
$result = mysql_query("SELECT * FROM redirect WHERE short_url='$slug'");

// Find the original link through the database
while($row = mysql_fetch_array($result)){
	$original_url = $row['original_url'];
}

// If the original link doesn't exist, go index
if(!$original_url){
	header("location:/");
}

// Record the hint
mysql_query("UPDATE redirect SET hits = hits + 1 WHERE short_url = '$slug'");

// redirect to the original link
echo '<script>window.location.href="' . $original_url . '";</script>';

?>