<?php
$customerFile = fopen("users.csv", "r") or die("Err!");
$emailsFile = fopen("emails.csv", "w") or die("Err!");
for ($id=1; !feof($customerFile); $id++) { 
	$c = explode(",",rtrim(fgets($customerFile), "\n"));
 	fwrite($emailsFile, $id . "," . $c[0] . "@php.lt," . $c[1] . "\n");
}
fclose($customerFile);
fclose($emailsFile);