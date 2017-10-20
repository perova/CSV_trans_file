<?php

date_default_timezone_set('Europe/Vilnius');
set_error_handler("customError");

function customError($error_level,$error_message,
	$error_file,$error_line,$error_context){

	echo "Klaida ivyko:" ." " . date("Y-m-d H:i:s") ."\n";
	echo $error_file . "@" . $error_line  ."\n";
	echo $error_message . "\n";
	$row = date("Y-m-d H:i:s") . " " . $error_file. " " . $error_line . " " . $error_message;

	$myfile = fopen("error.log", "a") or die("Unable to open file!");

	fwrite($myfile, $row);
	fclose($myfile);
}

echo $a;