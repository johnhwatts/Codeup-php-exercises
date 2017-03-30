<?php

// Create a class called Arnold

class Arnold {


	// Define a property called someQuote

	public $someQuote;


	// Define a method called flex()

	public function flex()
	{
		echo "Flexing muscles!";
	}

	// Define a method called sayQuote() that echo's the someQoute

	public function sayQuote()
	{
		$this->flex();
	}



	
}



// ***The following code should normally be in a seperate file***

// Instantiate a Arnold object

$commando = new Arnold();

// Set someQuote to "Get to da CHOPPA!"

$commando->someQuote = "Get to da CHOPPA!";

// Call sayQuote() method


$commando->sayQuote();