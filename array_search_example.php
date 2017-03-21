<?php

$foods = [
		'fruit' => 'apple',
		'meat' => 'chicken',
		'cheese' => 'feta',
		'dessert' => 'key lime pie',
		'veggie' => 'zucchini',
		'bread' => 'honey oat bread',
		'test' => '23'
]

// search bar

if (isset($_GET['search'])) {

	$foodToFind = strtolower($_GET['search']);

	$searchResult = array_search($foodToFind, $foods);

	if (is_string($searchResult)) {
		echo ucfirst($foodToFind) . " is a type of " . $searchResult . ".";
	} else {
		echo "Sorry, no foods were found by that name";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
</head>
<body>

</body>
</html>