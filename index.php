<?php

function trans(){
	
	$myfile = fopen("users.csv", "r") or die("Unable to open file!");
	while (!feof($myfile)) {
		$data[] =explode(",",fgets($myfile));
	}
	fclose($myfile);

	$myfile = fopen("emails.csv", "w") or die("Unable to open file!");
	$id=1;
	foreach ($data as $key) {
		$row = $id++ . "," .$key[0]."@php.lt," . $key[1];
		fwrite($myfile, $row);
	}
	fclose($myfile);

}
array_shift($argv);
$funcName = array_shift($argv);

call_user_func_array($funcName, $argv);
