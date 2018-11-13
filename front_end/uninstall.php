<?php
include 'database.php';

try {
    $connection = new PDO("mysql:host=$server;dbname=mydbpdo", $username, $password);
    // PDO can throw exceptions rather than Fatal errors, so let's change the error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DROP TABLE book_tbl;";
    // We can execute the above statement using exec() method from the connection class
    $connection->exec($sql);
    echo "Table -> book_tbl under testDB was dropped successfully";
    }
    catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>