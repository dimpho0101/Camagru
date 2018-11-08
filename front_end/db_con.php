<?php
$hostname='localhost';
$username='root';
$password='coding01';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=myDBPDO",$username,$password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
