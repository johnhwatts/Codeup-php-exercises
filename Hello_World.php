<?php
	$greeting = "Hello, World" . PHP_EOL; 
	echo $greeting . " My name is" . " John" . PHP_EOL;

$condition = true;

if(1 < 2) {
	echo "One is less than two." . PHP_EOL;
}

if($firstName === Ben) {
	echo "Hi, Ben!" . PHP_EOL;
} else {
	echo "Howdy, $firstName". PHP_EOL;
}

$isAdmin = false;
$isAuthor = true;

if($isAuthor && !$isAdmin) {
	echo "you are able to change the content of this article" . PHP_EOL;
} else if($isAdmin && !$isAuthor) {
	echo "You can add new users and edit this article" . PHP_EOL;
} else if($isAdmin || $isAuthor) {
	echo "you are able to change the content of the article" . PHP_EOL;
} else {
	echo "You can only read the article" . PHP_EOL;
}