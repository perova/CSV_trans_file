<?php


// function checknum($number){
// if ($number > 1) {
	
// 	throw new Exception("Value must be 1 or below");
// }
// return true;
// }

// try{
// 	checknum(10);
// }

// catch(Exception $error) {
//   echo 'Message: ' .$error->getMessage() . "\n";

// }

// echo "Continuing..";

// try{
// 	$file = fopen("none.log", "r");
// }

// catch(Exception $error) {
//   echo 'Message: ' .$error->getMessage() . "\n";
  
// }

// echo "Continuing..";

function any(int $a, int $b) : int{

	$result =  $a+$b;
	return $result;
}

echo any("4", "r");

