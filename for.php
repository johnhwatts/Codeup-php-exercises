<?php
// input: A pair of numbers: min and max for a range
do {
	fwrite(STDOUT, 'Enter the start of the range: '); 
	$start = trim(fgets(STDIN));
} while(!is_numeric($start));

do {
	fwrite(STDIN, 'Enter the end of the range: ');
	$end = trim(fgets(STDIN));
} while(!is_numeric($end));

// input: User chooses increment
do {
	fwrite(STDIN, 'Enter increment: ');
$increment = trim(fgets(STDIN));
} while(!is_numeric($increment));

// if end is less than start, swap values
if ($end < $start) {
	$oldEnd = $end;
	$oldStart = $start;
	$start = $oldEnd;
	$end = $oldStart;
}
// /*initialization*/ 
if (is_numeric($increment)) {
	// loop with user chosen increment
		for ($i = $start; $i <= $end; $i+=$increment) {
		echo $i . PHP_EOL;
	} 	
} else if (!is_numeric($increment)) {
	// Default increment to 1 if no input.
		for ($i = $start; $i <= $end; $i++) {
		echo $i . PHP_EOL;
	} 	
} else {
	echo "input not valid";
}



