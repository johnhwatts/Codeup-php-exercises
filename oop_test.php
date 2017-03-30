<?php

require_once "Person.php";

$thisGuy = new Person();

$thisGuy->name = 'Bob';
$thisGuy->age = "43";
$thisGuy->employed = "";

$thisGuy->returnName();

$thisGuy->echoAge();

$thisGuy->getJob();
var_dump($thisGuy->employed);

$thisGuy->getOlder();

$thisGuy->echoAge();

$thisGuy->passAway();

$thisGuy->echoAge();