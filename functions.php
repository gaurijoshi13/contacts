<?php

function connectToDatabase()
{
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=contacts', 'root', '123456');
        return $pdo;
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
}

function dd($var)
{
    var_dump($var);
    exit;
}

function selectAll($table)
{
    $pdo = connectToDatabase();
    
    $query = 'SELECT * FROM ' . $table;

    $statement = $pdo->prepare($query);

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, \Models\Contact::class);
}
