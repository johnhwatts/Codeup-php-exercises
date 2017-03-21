<?php

// List of famous peeps
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// TODO: Convert the string into an array
$physicistsArray = explode(', ', $physicistsString);

// Converts array into list n1, n2, ..., and n3
  function humanizedList(array $list, $conjunction = 'and') {
  $lastValue = array_pop($list);
  if ($list) {
    return implode(', ', $list) . ' ' . $conjunction . ' ' . $lastValue;
  }
  return $lastValue;
}

// Humanize that list

// sort($physicistsArray);
$famousFakePhysicists = humanizedList($physicistsArray);


 // Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;


// Create a second parameter to make alphabetical sorting optional.

echo "Type (Y) to sort in alphabetical order" . PHP_EOL;

$input = strtoupper(trim(fgets(STDIN)));

if($input == 'Y'){
    sort($physicistsArray);
      echo "Array in Alphabetical Order: {$famousFakePhysicists}." . PHP_EOL;
}else{
	echo "No changes made." . PHP_EOL;
}

// Update your code to list the physicists by first name, in alphabetical order.
// sort($physicistsArray);


 ?>