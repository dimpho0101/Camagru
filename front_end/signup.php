<?php
   include './includes/header_inc.php';
   if ($_SERVER['REQUEST_METHOD'] === 'POST') { //server if the request type is a post
    if (isset($_POST['uname'], $_POST['email'], $_POST['password'])) { //check if all variables are set
        $uname = htmlentities(trim($_POST['uname']), ENT_QUOTES, 'UTF-8');
        $email = htmlentities(trim($_POST['email']), ENT_QUOTES, 'UTF-8');
        $password = hash('whirlpool', trim($_POST['password']));
        $token = md5(md5(time().$email.rand(0,9999)));
        
        //check if user exists
        $sql = $conn->prepare("SELECT COUNT(*) FROM users WHERE `email` = ? OR `username` = ?");
        $sql->execute(array($email, $uname));
        if ($sql->fetchColumn()){
            echo 'Email and/or username already exists';
        } else{
            //insert the data into the database
            $stmt = $conn->prepare("INSERT INTO `users`(`username`, `email`, `password`, `verify_token`) VALUES(?,?,?,?)");
            $stmt->execute(array($uname, $email, $password,$token));
            //if ($stmt->rowCount()){
                $localhost= "localhost:8081/backend";
                $subject = "Comfirmation process";
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
                $headers .= 'From: <diputu@42.FR>' . "\r\n";
                $message = '
                <html>
                    <head>
                        <title>' . $subject . '</title>
                    </head>
                    <body>
                        Hello ' . htmlspecialchars($uname) . ' </br>
                        sign up request has been recieved to finish the  subscribtion process please click the link below </br>
                        <a href="http://' . $localhost . '/verify.php?email=' .$email. '&token=' . $token. '">confirm email</a>
                    </body>
                </html>
                ';
                mail($email, $subject, $message, $headers);
                header('location: open.php?msg="Registration Successful. Check Your Email To Verify Your Account"');
                // echo "<script>alert('Please check your email to verify your account');</script>";

                echo 'Please check your email to verify your account';
            //} else{
              //  echo "There was an error creating account";
            //}
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no ">
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

        <form id="form" method="post" >
            <input name="uname" id="uname" type="text" placeholder="CREATE PROFILE NAME" required>
            <input name="email" id="name" type="email" placeholder="EMAIL" required>
            <input name="password" id="password" type="password" placeholder="PASSWORD"required>
            <input id="submit" name="submit" type="submit" value="SIGN UP">
        </form>

       </html>