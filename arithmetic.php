<?php

$a = "I'm outside the scope!";
$b = "I'm outside the scope too!";

function add($a, $b)
{
    return $a + $b;
    echo $b . PHP_EOL; //This will never run because the variable is outside the scope.
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

function modulus($a, $b) 
{
	return $a % $b;
	echo $a . PHP_EOL; //This will never run because the variable is outside the scope.
}

// Add code to test your functions here
echo add(10, 2) . PHP_EOL;
echo subtract(10, 2) . PHP_EOL;
echo multiply(10, 2) . PHP_EOL;
echo divide(10, 2) . PHP_EOL;
echo modulus(10, 2) . PHP_EOL;

