<?php 

	$filename = "fruits.txt";
	$fruits = ['apple', 'strawberry', 'kiwi', 'grape', 'mango'];

	$names = ['Fer', 'Luis', 'Ryan', 'Justin'];

	function write($filename, $array) {
		$handle = fopen($filename, 'a');

		foreach ($array as $itemInArray) {
			fwrite($handle, PHP_EOL . $itemInArray);
		}

		fwrite($handle, "this is the end" . PHP_EOL); 

		fclose($handle);
	}

	write($filename, $fruits);
	write('instructors.txt', $names);

?>