<?php 

// Create a command line application to display contacts, add new contact, search contact by name, delete contact

//Main menu




//Function to parse the contacts

function parseContacts($file)
{ 
    $contacts = array();
    // Open stream
    $filename = $file;
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contents = trim($contents);
	// Close stream
    fclose($handle);

	$person = explode("\n", $contents);
	
	// Explode each array element into an associative array of name and number key values 
	foreach ($person as $contact) {
		$info = explode("|", $contact);
		$info[1] = substr($info[1], 0, 4) . "-" . substr($info[1], 3, 3) . "-" . substr($info[1], 6);
      	$eachContact = [
	        "name" => $info[0],
	        "number" => $info[1]
      	];
      $contacts[] = $eachContact;
    }
    
    return $contacts;
}


// print_r(parseContacts('contacts.txt'));


//function to display contacts appropriately

function displayContacts ($contactsArray) {
	echo str_pad('Name', 16);
	echo " | ";
	echo " Phone Number";
	echo "\n";
	echo "----------------------------------" . PHP_EOL;
		foreach ($contactsArray as $key => $contact) {
		 	echo str_pad($contact['name'], 16) . " | " . $contact['number'] . PHP_EOL;
		 }
} 


//function to add contact

function addContact($newContactName, $newContactNumber, $filename) {
	$handle = fopen($filename, 'a');
	fwrite($handle, $newContactName ." | " . $newContactNumber); 
	fclose($handle);
}

//function to search contacts
function searchContacts($contactsArray, $contactSearch) {
	$results = [];
	foreach ($contactsArray as $key => $contact) { 
    	if (stripos($contact["name"], $contactSearch) !== false) {
    		array_push($results, $contact);
        } 
	} return $results;
}


//function to delete contacts
function deleteContacts() {

}


//Loop to return the functions

function mainMenu($file) {
	fwrite(STDOUT, "--- Main Menu ---" . PHP_EOL);	
	fwrite(STDOUT, "1. View Contacts." . PHP_EOL);
	fwrite(STDOUT, "2. Add a new contact." . PHP_EOL);
	fwrite(STDOUT, "3. Search a contact by name." . PHP_EOL);
	fwrite(STDOUT, "4. Delete an existing contact." . PHP_EOL);
	fwrite(STDOUT, "5. Exit. Enter an option (1, 2, 3, 4 or 5): " . PHP_EOL);
	
	$input = trim(fgets(STDIN));
	$result = parseContacts($file);
	
	switch($input) {
		case 1:
			displayContacts($result);
			break;
		case 2:
			fwrite(STDOUT, "Enter name for new contact" . PHP_EOL);
			$newContactName = trim(fgets(STDIN));
			fwrite(STDOUT, "Enter number for new contact" . PHP_EOL);
			$newContactNumber = trim(fgets(STDIN));
			addContact(PHP_EOL . $newContactName, $newContactNumber, $file);
			break;
		case 3:
			fwrite(STDOUT, "Enter name of contact to search" . PHP_EOL);
			$contactSearch = trim(fgets(STDIN));
			displayContacts(searchContacts($result, $contactSearch));
			break;
		case 4:
			deleteContact();
			break;
	}
}

mainMenu('contacts.txt');











