<?php
// Include the Composer autoloader to load dependencies
require 'vendor/autoload.php';

// Fetch all rows from the 'contacts' table by calling the selectAll function
$rows = selectAll('contacts');

// Include the view file to display the fetched contacts
include 'views/index.view.php';
