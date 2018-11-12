<?php
        session_start();
        try{
            $con = new PDO ("mysql:host=localhost;dbname=mydbpdo", "root", "coding01");
            if(isset($_POST['signup'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $cpassword = $_POST['cpasword'];

            }
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style_sign.css">
</head>
<style>
    .container {
        text-align: center;
    }
    
    img {
        margin-top: 27%;
    }
</style>

<body>
    <header>
        <div class="container">
            <div id="logo">
                <h1><span class="highlight">C</span>a<span class="highlight">m</span>a<span class="highlight">g</span>r<span class="highlight">u</span></h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#home">Camagru</a></li>
                    <li><a href="feed.html" target="_blank">Feed</a></li>
                    <li><a href="signin.html" target="_blank">Sign in</a></li>
                    <li><a href="about.html" target="_blank">About</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <div id="img">
            <img src="https://res.cloudinary.com/dljvavcko/image/upload/v1539518111/Screen_Shot_2018-10-14_at_13.54.56.png" height="100px" width="100px">
        </div>
        <div class="text">
            <p>Sign in to create, discover and connect <br> with the global community.</p>
        </div>
        <header>MINIMALISTIC FORM</header>

        <form id="form" action="welcome.php" method="post" onsubmit="return Validate()" name="vform">
        <div id="username_div">
            <input name="name" id="name" type="text" placeholder="CREATE PROFILE NAME">
            <div id="name_error" class="val_error"></div>
        </div>
        <div id="email_div">
            <input name="email" id="name" type="email" placeholder="EMAIL">
            <div id="email_error" class="val_error"></div> 
        </div>
        <div id="password_div">
            <input name="password" id="password" type="password" placeholder="PASSWORD">
            <div id="password_error" class="val_error"></div>
        </div>
        <div id="pass_confirm_div">
            <input name="cpassword" id="password" type="password" placeholder="CONFIRM PASSWORD">
            <div id="password_error"></div>
        </div>
        <div>
            <input id="submit" name="submit" type="submit" value="SIGN UP">
        </div>
        </form>

       </html>