<?php
// Create a for loop that shows all even numbers between 1 and 100 using continue.

for ($i = 1; $i <= 100; $i++) {
    echo $i . PHP_EOL;
    if (($i % 2) == 0) {
    	echo "^ that is an even number." . PHP_EOL;
        continue;
    }
    
}
