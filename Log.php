<?php

class Log {
	public $filename;

	public function logMessage($level, $message) {
    	$date = date('Y-m-d H:i:s');
    	$handle = fopen($this->filename, 'a');
    	$output = $date . $level . $message . PHP_EOL;

    fwrite($handle, $output);
    fclose($handle);
	} 

	public function logInfo($message) {
		$this->logMessage(" INFO", $message);
	}
	public function logError($message) {
		$this->logMessage(" ERROR", $message);
	}
}