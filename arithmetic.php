<?php

$a = "I'm outside the scope!";
$b = "I'm outside the scope too!";


function add($a, $b){
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return "ERROR: Both arguments must be numbers" . PHP_EOL;
    }
}

function subtract($a, $b){
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        return "ERROR: Both arguments must be numbers" . PHP_EOL;
    }
}

function multiply($a, $b){
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
        return "ERROR: Both arguments must be numbers" . PHP_EOL;
    }
}

function divide($a, $b){
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        return "ERROR: Both arguments must be numbers" . PHP_EOL;
    }
}

function modulus($a, $b){
    if (is_numeric($a) && is_numeric($b)) {
        return $a % $b;
    } else {
        return "ERROR: Both arguments must be numbers" . PHP_EOL;
    }
}
	

// Add code to test your functions here
echo add(10, 2) . PHP_EOL;
echo subtract(10, 2) . PHP_EOL;
echo multiply(10, 2) . PHP_EOL;
echo divide(10, 2) . PHP_EOL;
echo modulus(10, 2) . PHP_EOL;

