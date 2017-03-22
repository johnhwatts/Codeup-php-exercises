<?php 

// Create a command line application to display contacts, add new contact, search contact by name, delete contact

//Main menu

	fwrite(STDOUT, "--- Main Menu ---" . PHP_EOL);
	fwrite(STDOUT, "1. View Contacts." . PHP_EOL);
	fwrite(STDOUT, "2. Add a new contact." . PHP_EOL);
	fwrite(STDOUT, "3. Search a contact by name." . PHP_EOL);
	fwrite(STDOUT, "4. Delete an existing contact." . PHP_EOL);
	fwrite(STDOUT, "5. Exit. Enter an option (1, 2, 3, 4 or 5): " . PHP_EOL);










//Function to parse the contacts

function parseContacts($filename)

{ 
    $contacts = array();
    // Open stream
    $filename = 'contacts.txt';
	$handle = fopen($filename, 'r');
	$contents = trim(fread($handle, filesize($filename)));
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


print_r(parseContacts('contacts.txt'));


//function to display contacts

//function to add contact

//function to search contacts

//function to delete contacts




