<?php

require_once 'Log.php';

//create a new log object

$log = new Log();
$date = date('Y-m-d H:i:s');
$log->filename ='log-'. $date . '.log';



//log an info message
$log->logInfo(" user logged in");
$log->logInfo(" some other user logged in");


//log error
$log->logError(" Not good");