<?php
// Include the Composer autoloader to load dependencies
require 'vendor/autoload.php';

// Check if the form has been submitted with an 'id'
if (isset($_POST['id'])) {
    // Retrieve the 'id' from the POST request
    $id = $_POST['id'];

    // Establish a connection to the database
    $pdo = connectToDatabase();

    // Prepare the SQL DELETE query, using a named placeholder for safety
    $query = "DELETE FROM contacts WHERE id = :id";
    $statement = $pdo->prepare($query); // Prepare the SQL statement

    // Bind the 'id' parameter to the query
    $statement->bindParam(':id', $id);
    
    // Execute the DELETE statement
    $statement->execute();

    // Redirect to the index page after successful deletion
    header('Location: index.php');
    exit; // Ensure no further code is executed after redirection
}
