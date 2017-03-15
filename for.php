<?php
// input: A pair of numbers: min and max for a range
fwrite(STDOUT, 'Enter the start of the range: '); 
$start = trim(fgets(STDIN));

fwrite(STDIN, 'Enter the end of the range: ');
$end = trim(fgets(STDIN));

// input: User chooses increment
fwrite(STDIN, 'Enter increment: ');
$increment = trim(fgets(STDIN));

/*initialization*/ 
//loop with user chosen increment
for ($i = $start; $i <= $end; $i+=$increment) {
		echo $i . PHP_EOL;
	// }
} 


