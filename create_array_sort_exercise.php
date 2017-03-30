<?php

//Write a function to take in an array of letters and output it in alphabetical order without using PHP sort functions.

$testArray = ['e', 'a', 'g', 'c', 'i', 'd', 'f', 'b', 'h'];



function sortIt($array) {
	//create new empty array
	$newArray = [];

	//create an array of all letters
	$alphabet = range('a', 'z');

	//Given an inputted array, return a new array of the same letters in alphabetical order

	//Iterate over the array of all letters and test if each is present in the passed in array
	foreach ($alphabet) as $vowel {
	// if the letter is in the array, add it to the new array
		$vowel = ['a', 'e', 'i', 'o', 'u'];
		$number = array_search($vowel, $array);

			if (is_numeric($number) == true){
				$newArray[] = $array[$number];
			}
}
//Return the new array
return $newArray;

}
//Test the function and print the results to the command line
$output = sortIt($testArray);
print_r($output);