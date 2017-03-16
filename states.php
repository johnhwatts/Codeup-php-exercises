<?php

$states = [
	        'AL' => 'Alabama',
	        'AK' => 'Alaska',
	        'AZ' => 'Arizona',
	        'AR' => 'Arkansas',
	        'CA' => 'California',
	        'CO' => 'Colorado',
	        'CT' => 'Connecticut',
	        'DE' => 'Delaware',
	        'DC' => 'District of Columbia',
	        'FL' => 'Florida',
	        'GA' => 'Georgia',
	        'HI' => 'Hawaii',
	        'ID' => 'Idaho',
	        'IL' => 'Illinois',
	        'IN' => 'Indiana',
	        'IA' => 'Iowa',
	        'KS' => 'Kansas',
	        'KY' => 'Kentucky',
	        'LA' => 'Louisiana',
	        'ME' => 'Maine',
	        'MD' => 'Maryland',
	        'MA' => 'Massachusetts',
	        'MI' => 'Michigan',
	        'MN' => 'Minnesota',
	        'MS' => 'Mississippi',
	        'MO' => 'Missouri',
	        'MT' => 'Montana',
	        'NE' => 'Nebraska',
	        'NV' => 'Nevada',
	        'NH' => 'New Hampshire',
	        'NJ' => 'New Jersey',
	        'NM' => 'New Mexico',
	        'NY' => 'New York',
	        'NC' => 'North Carolina',
	        'ND' => 'North Dakota',
	        'OH' => 'Ohio',
	        'OK' => 'Oklahoma',
	        'OR' => 'Oregon',
	        'PA' => 'Pennsylvania',
	        'PR' => 'Puerto Rico',
	        'RI' => 'Rhode Island',
	        'SC' => 'South Carolina',
	        'SD' => 'South Dakota',
	        'TN' => 'Tennessee',
	        'TX' => 'Texas',
	        'VI' => 'US Virgin Islands',
	        'UT' => 'Utah',
	        'VT' => 'Vermont',
	        'VA' => 'Virginia',
	        'WA' => 'Washington',
	        'WV' => 'West Virginia',
	        'WI' => 'Wisconsin',
	        'WY' => 'Wyoming'
	  		];

// Using the following associative array, produce a script that does the following:
// 	- Outputs only the states with an "x" character in the state name
// 	- Outputs all the states without the letter "a" in their name
// 	- Outputs the states and abbreviations of all the states starting with vowels.

// foreach ($states as $stateAbbr => $stateValue) {
// 	if (strpos($stateValue, 'x')) {
// 		echo "$stateAbbr: $stateValue" . PHP_EOL;	
// 	} elseif (!strpos($stateValue, 'a')) {
// 		echo "$stateAbbr: $stateValue" . PHP_EOL;
// 	} elseif ($stateValue[0] == 'A' || 
// 			  $stateValue[0] == 'E' ||
// 			  $stateValue[0] == 'I' ||
// 			  $stateValue[0] == 'O' ||
// 			  $stateValue[0] == 'U') {
// 		echo "$stateAbbr: $stateValue" . PHP_EOL;
// 	}
// }

// Exercises Part 2
// Use a foreach to make a new array containing states that start with and end with vowels
	// call the array $statesStartingAndEndingWithVowels
	// echo "These are states starting and ending with vowels"
	// then echo each state name in this new array

$statesStartingAndEndingWithVowels = [];

foreach ($states as $stateAbbr => $stateValue) {
	$length = strlen($stateValue);

	if (($stateValue[0] == 'A' || 
		$stateValue[0] == 'E' ||
		$stateValue[0] == 'I' ||
		$stateValue[0] == 'O' ||
		$stateValue[0] == 'U') 

		&&

		($stateValue[$length-1] == 'a' || 
		$stateValue[$length-1] == 'e' ||
		$stateValue[$length-1] == 'i' ||
		$stateValue[$length-1] == 'o' ||
		$stateValue[$length-1] == 'u')) {

		array_push($statesStartingAndEndingWithVowels, $stateValue);
	}
}

foreach ($statesStartingAndEndingWithVowels as $statesStartEndVowel) {
	echo $statesStartEndVowel . PHP_EOL;
}

// use a foreach to construct a new array containing states with names that are more than one word.
	// call the array $statesWithMoreThanOneWordNames
	// echo "These are the states with more than one word in their name"
	// then echo each state name below

// use a foreach to construct a new array of all the states with "North" "East" "South" or "West"
	// call the array $arrayOfCardinalStates
	// echo "These are states with north, south, east, or west in their name"

