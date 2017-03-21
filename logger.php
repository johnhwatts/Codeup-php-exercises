<?php

function logMessage($logLevel, $message) {
	$today = date("Y-m-d H:i:s");
	$filename = 'log-YYYY-MM-DD.log';
    
    $handle = fopen($filename, 'a');

    fwrite($handle, PHP_EOL . "$today $logLevel $message");
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");
