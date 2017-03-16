<?php 
//this is an associative array inside an associative array
$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

// Construct a loop that iterates through each book and then each book's keys and values. Have it output the book's title, then list the key value pairs for the data about each book.

foreach ($books as $book => $bookInfo) {
		if ($bookInfo['published'] >= 1950) { // Update your loop to only show books that were written after 1950.

			echo $book . PHP_EOL;

		foreach ($bookInfo as $bookInfoKey => $bookInfoValue) {
			echo "\t$bookInfoKey: $bookInfoValue" . PHP_EOL; // Include tab to make it display clearer
	    }

	    echo PHP_EOL; //added an empty line to make it read clearer
	}
}



