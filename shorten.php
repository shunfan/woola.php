<?php

require("config.php");

$date = date("Y-m-d H:i:s");  
$original_url = mysql_real_escape_string($_POST["original_url"]);

// judge if the link has "http://" or "https://".
if(strstr($original_url,"http://")){
	$true_url = true;
}
elseif(strstr($original_url,"https://")){
	$true_url = true;
}
else{
	$true_url = false;
}

if(!$true_url){
	$original_url = 'http://' . $original_url . '';	
}

$judge_short_repeat = true;

// if the short link generated has already been used, it will random the short link again.
while($judge_short_repeat){

	$random = rand(100000,999999);
	$short_url = base_convert($random,18,36);
	$short_url = strtoupper($short_url);  
	$judge_short_repeat = mysql_query("SELECT * FROM redirect WHERE short_url = '$short_url'");
	$judge_short_repeat = mysql_fetch_row($judge_short_repeat);

}

// judge if the original link has already exist in the database
$judge_original_repeat = mysql_query("SELECT * FROM redirect WHERE original_url = '$original_url'");
$judge_original_repeat = mysql_fetch_row($judge_original_repeat);

if(!$judge_original_repeat){

	mysql_query("INSERT INTO $DB_TABLE (original_url, short_url, date) VALUES ('$original_url', '$short_url', '$date')");
		
}
else{

	$result = mysql_query("SELECT * FROM redirect WHERE original_url = '$original_url'");
	$row = mysql_fetch_array($result);
	$short_url = $row['short_url'];
	
}

session_start();
$_SESSION['short_url'] = $short_url;
	
header("location:/");

?>