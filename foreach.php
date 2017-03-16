<?php

//Construct a loop that iterates through each value and outputs its type as either integer, float, boolean, array, null, or string.

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
	foreach ($things as $thing) {
		if (is_array($thing)) {
			echo 'Array ( ';
			foreach ($thing as $value) {
    			echo $value, " ";
    		}
    			echo ")" . PHP_EOL; //pushes data following to next
    		} else {
				echo $thing . PHP_EOL;
		}
	}	 



    		//   elseif (is_null($thing)) {
    		// 	echo "null" . PHP_EOL;
    		// } elseif (is_array($thing)) {
    		// 	echo "array" . PHP_EOL;
    		// } elseif (is_bool($thing)) {
    		// 	echo "boolean" . PHP_EOL;
    		// } elseif (is_float($thing)) {
    		// 	echo "float" . PHP_EOL;
    		// } elseif (is_integer($thing)) {
    		// 	echo "integer" . PHP_EOL;
    		// }