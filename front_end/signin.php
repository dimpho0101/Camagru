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

        <form id="form" method="">
            <input id="email" type="email" placeholder="EMAIL" required>
            <input id="password" type="password" placeholder="PASSWORD" required>
            <input id="submit" type="submit" value="SIGN IN">
            <p><a href="forgotpassword.php">Forgot password</p>
        </form>

        <div class="text">
            <p>Don't have an account?
                <br>
                <a href="signup.html" target="_blank">Click here to sign up</a>
            </p>
    </div>
    </div>
    </div>
</body>

</html>