<?php 

// Variable and function definitions

class Person {

public $name;
public $age;
public $employed;


public function returnName()
{
	echo $this->name . PHP_EOL;
}

public function getOlder()
{
	return $this->age++;
}

public function echoAge()
{
	echo $this->age . PHP_EOL;
}

public function quitJob() 
{
	$this->employed = false;
}

public function getJob() 
{
	$this->employed = true;
}

public function passAway() 
{
	$this->age = 0;
}

}

// Procedural code

