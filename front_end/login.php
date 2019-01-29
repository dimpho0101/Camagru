<?php 

include './includes/header_inc.php';
session_destroy();
 session_start();
try{
$con = new PDO ("mysql:host=localhost;dbname=camagru",$username,$password);
if(isset($_POST['signin'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        //$pass = $_POST['password'];
        $pass = hash('whirlpool', trim($_POST['password']));

        $select = $con->prepare("SELECT * FROM users WHERE username='$username' AND email='$email' AND password='$pass' LIMIT 1");
        $select->setFetchMode(PDO::FETCH_ASSOC);
        $select->execute();
        $data=$select->fetch();
        if ($data) {
            if ($data['verify'])
            {
                $_SESSION['username']=$data['username'];
                $_SESSION['email']=$data['email'];
                $_SESSION['password']=$data['password'];
                header("location: ./dashboard.php"); 
            } else {
                echo "<script type='application/javascript'>alert('Acoount inactive. Please verify account to login');</script>";
                header('location: ./login.php');
                exit();
            }
        } else {
            // echo "you don fucked up";
           echo "<script>alert('invalid email or password');</script>";
            header('location: ./login.php');
            exit();
        }
}
}catch(PDOException $e)
{
echo "error".$e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">
    <title>Sign In</title>
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

        <form id="form" method="POST">
            <input type="text" name="username" placeholder="Insert Username" required>
            <input id="email" type="email" name="Email" placeholder="EMAIL" required>
            <input id="password" type="password" name="password" placeholder="Insert Password" required>
            <input id="submit" type="submit" name="signin" value="SIGN IN">
            <p><a href="forgotpassword.php">Forgot password</p>
        </form>

        <div class="text">
            <p>Don't have an account?
                <br>
                <a href="signup.php" target="_blank">Click here to sign up</a>
            </p>
    </div>
    </div>
    </div>
</body>

</html>