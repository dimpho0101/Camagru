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
            <input name="password" id="password" type="password" placeholder="CONFIRM PASSWORD">
            <div id="password_error"></div>
        </div>
        <div>
            <input id="submit" name="submit" type="submit" value="SIGN UP">
        </div>
        </form>

        <script type="text/javascript">
            var username = document.forms['vform']['username'];
            var email = document.forms['vform']['email'];
            var password = document.forms['vform']['password'];

            var name_error = document.getElementById('name_error');
            var email_error = document.getElementById('email_error');
            var password_error = document.getElementById('password_error'); 

            username.addEventListener('blur', nameVerify, true);
            email.addEventListener('blur', emailVerify, true);
            password.addEventListener('blur', passwordVerify, true);

            function Validate() {
            if (name.value == "") {
            name.style.border = "1px solid red";
            document.getElementById('username_div').style.color = "red";
            name_error.textContent = "name is required";
            name.focus();
            return false;
        }

                if (email.value == "") {
                    email.style.border = "1px solid red";
                    email_error.textContent = "email is required";
                    email.focus();
                    return false;
                }
            }

                if (password.value == "") {
                    password.style.border = "1px solid red";
                    password_error.textContent = "password is required";
                    password.focus();
                    return false;
                }
            }

            if (password.value == "") {
                password.style.border = "1px solid red";
                document.getElementById('password_div').style.color = "red";
                password_confirm.style.border = "1px solid red";
                password_error.textContent = "Password is required";
                password.focus();
                return false;
  }

            function nameVerify(){
                if(name.value !=""){
                    name.style.border = "1px solid #5E6E66";
                    name_error.innerHTML = "";
                    return true;
                }
            }

            function emailVerify(){
                if(email.value !=""){
                    email.style.border = "1px solid #5E6E66";
                    email_error.innerHTML = "";
                    return true;
                }
            }

            function passwordVerify(){
                if(password.value !=""){
                    password.style.border = "1px solid #5E6E66";
                    password_error.innerHTML = "";
                    return true;
                }
            }

            if (password.value === password_confirm.value) {
  	         password.style.border = "1px solid #5e6e66";
  	         document.getElementById('pass_confirm_div').style.color = "#5e6e66";
  	         password_error.innerHTML = "";
  	         return true;
        }
}
            
        </script>