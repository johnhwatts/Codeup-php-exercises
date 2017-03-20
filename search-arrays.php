<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

// Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names
function checkArray($name, $names) {
       if ((array_search($name, $names)) !== false) {
          echo  "TRUE, $name is in the array." . PHP_EOL;
    } else {
    	echo "FALSE, $name is not in the array." . PHP_EOL;
    }
}

checkArray('Bob', $names);

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().

// function compareArray($name, $compare) {
// 	   if ((array_search($name, $compare)) !== false) {
//           echo  "true" . PHP_EOL;
//     } else {
//     	echo "false" . PHP_EOL;
//     }
// }

// compareArray('Tina', $compare);