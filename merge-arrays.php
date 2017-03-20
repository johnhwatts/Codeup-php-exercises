<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

// Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names
// function checkArray($array, $name) {
//     if (array_search($name, $array) !== false) {
//         return  TRUE;
//     } else {
//     	return FALSE;
//     }
// }

// echo checkArray($names, 'Bob');

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().


// function compareArrays($listOfNames, $arrayToCompare) {
// 	$c = 0; //counter variable

// 	foreach ($listOfNames as $name) {
// 		if(checkArray($arrayToCompare, $name)){
// 			$c++;
// 		}
// 	}

// 	return $c;
// }

// echo "Repeated " . compareArrays($names, $compare) . " times" . PHP_EOL;

// Write a function called combine_arrays() that will take in two array values as parameters and return a new array with values from both.

function combine_arrays($array1, $array2) {
	$newArray = [];

	foreach ($array1 as $key => $name) {
			if($name == $array2[$key]) {
				array_push($newArray, $name);
			} else {
				array_push($newArray, $name);
				array_push($newArray, $array2[$key]);
			}
		
	}
	return $newArray;
}
print_r (combine_arrays($names, $compare));