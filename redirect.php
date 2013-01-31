<?php

require("config.php");

$slug = $_GET["slug"];
$result = mysql_query("SELECT * FROM redirect WHERE short_url='$slug'");

while($row = mysql_fetch_array($result)){
	$original_url = $row['original_url'];
}

if(!$original_url){
	header("location:/");
}

mysql_query("UPDATE redirect SET hits = hits + 1 WHERE short_url = '$slug'");

echo '<script>window.location.href="' . $original_url . '";</script>';

?>