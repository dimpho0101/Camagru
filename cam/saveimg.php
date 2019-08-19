<?php
    include './includes/header_inc.php';
    session_destroy();
     session_start();

     try{
        // $con = new PDO ("mysql:host=localhost;dbname=camagru",$username,$password);
        if(isset($_POST['img']))
        {
            // echo $_POST['img'];
            $test =  base64_decode($_POST['img']);
            file_put_contents("test.png", $test);
            $test2 = imagecreatefrompng("test.png");
            imagepng($test2, "test.png");
        }
    
    }catch(PDOException $e)
            {
            echo "error".$e->getMessage();
            }
?>