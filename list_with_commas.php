<?php

// List of famous peeps
 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

  // TODO: Convert the string into an array
$physicistsArray = explode(', ', $physicistsString);

 // Converts array into list n1, n2, ..., and n3
  function humanizedList(array $list, $conjunction = 'and') {
  $last = array_pop($list);
  if ($list) {
    return implode(', ', $list) . ' ' . $conjunction . ' ' . $last;
  }
  return $last;
}

// Update your code to list the physicists by first name, in alphabetical order.
sort($physicistsArray);

// Humanize that list
$famousFakePhysicists = humanizedList($physicistsArray);


 // Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;

 ?>