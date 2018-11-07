<?php
if(isset($_POST["submit"])){
    $hostname='localhost';
    $username='root';
    $password='coding01';
    
    try {
    $dbh = new PDO("mysql:host=$hostname;dbname=myDBPDO",$username,$password);
    
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
    $sql = "INSERT INTO myguests (profilename, passwrd, email)
    VALUES ('".$_POST["name"]."','".$_POST["password"]."','".$_POST["email"]."')";
    // die($sql);
    if ($dbh->query($sql)) {
    echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
    }
    else{
    echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
    }
    
    $dbh = null;
    }
    catch(PDOException $e)
    {
    echo $e->getMessage();
    }
    
}
