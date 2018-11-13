<?php
include 'db_con.php';
if(isset($_POST["submit"])){
    try {
        $sql = "INSERT INTO myguests (profilename, email, passwrd, confirmpasswrd)
        VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["password"]."', '".$_POST["cpassword"]."')";
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

// header('Refresh:0; url=dashboard.php');
