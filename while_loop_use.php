<?php

$name = "John";

//while loops check the condition in the parentheses first
//if(condition), run the code in the body, then check the condtion again,
//if(condition)

while($name === "John") {
	echo "Why don't you change your name!" . PHP_EOL;

	$name = "Bob"; //changing the value breaks out of the infinite loop
} 

echo "You changed your name to $name" . PHP_EOL;