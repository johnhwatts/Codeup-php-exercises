<?php

function parseContacts($filename)

{ 
    $contacts = array();
    // Open stream
    $filename = 'contacts.txt';
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contents = trim($contents);
	// Close stream
    fclose($handle);

	$person = explode("\n", $contents);
	
	// Explode each array element into an associative array of name and number key values 
	foreach ($person as $contact) {
		$info = explode("|", $contact);
		$info[1] = substr($info[1], 0, 3) . "-" . substr($info[1], 3, 3) . "-" . substr($info[1], 6);
      	$eachContact = [
	        "name" => $info[0],
	        "number" => $info[1]
      	];
      $contacts[] = $eachContact;
    }
    
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
