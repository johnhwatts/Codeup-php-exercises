<?php

$a = "I'm outside the scope!";
$b = "I'm outside the scope too!";

function validate($a, $b) {
	if (!is_numeric($a)) {
    	 return "$a is an ERROR: Both arguments must be numbers" . PHP_EOL;
    } elseif (!is_numeric($b)){
    	return "$b is an ERROR: Both arguments must be numbers" . PHP_EOL;
    }
}

function add($a, $b){
    $throwErrorMessage = validate($a, $b);
    if ($throwErrorMessage) {
        return $throwErrorMessage;
    }
    return $a + $b;
       
}

function subtract($a, $b){
    $throwErrorMessage = validate($a, $b);
    if ($throwErrorMessage) {
        return $throwErrorMessage;
    }
        return $a - $b;
    }


function multiply($a, $b){
    $throwErrorMessage = validate($a, $b);
    if ($throwErrorMessage) {
        return $throwErrorMessage;
    }
        return $a * $b;
   
}

function divide($a, $b){
	$throwErrorMessage = validate($a, $b);
    if ($throwErrorMessage) {
        return $throwErrorMessage;
    } elseif ($b == 0) {
    	return "ERROR: Cannot divide by 0" . PHP_EOL;
    } 
       return $a / $b;
}


function modulus($a, $b){
    $throwErrorMessage = validate($a, $b);
    if ($throwErrorMessage) {
        return $throwErrorMessage;
    }
        return $a % $b;
    
}
	

// Add code to test your functions here
echo add(10, "bob") . PHP_EOL;
echo subtract(10, 2) . PHP_EOL;
echo multiply(10, 2) . PHP_EOL;
echo divide(10, 0) . PHP_EOL;
echo modulus(10, 2) . PHP_EOL;

