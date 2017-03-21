<?php

function parseContacts($filename)

{ 
    $contacts = array();
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$person = explode("\n", $contents);
	fclose($handle);

	foreach ($person as $contact) {
		$info = explode("|", $contact);
		$info[1] = substr($info[1], 0, 3) . "-" . substr($info[1], 3, 3) . "-" . substr($info[1], 6);
      	$eachContact = [
        'name' => $info[0],
        'number' => $info[1]
      ];
      $contacts[] = $eachContact;
    };
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
