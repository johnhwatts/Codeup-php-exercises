<?php
// Create a for loop that shows all even numbers between 1 and 100 using continue.

// for ($i = 1; $i <= 100; $i++) {
//     echo $i . PHP_EOL;
//     if (($i % 2) == 0) {
//     	echo "^ that is an even number." . PHP_EOL;
//         continue;
//     }
    
// }

// Create another for loop that counts from 1 to 100, but stops after 10 using break.

for ($i = 1; $i <= 100; $i++) {
    echo $i . PHP_EOL;
    if ($i == 10) {
        break;
    }
    
}
