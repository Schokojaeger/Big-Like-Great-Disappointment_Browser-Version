<?php
//starts a session or resume an existing session
session_start(); 

//if we want to get the username from the db
/*if(isset($_SESSION["user_id"])){
    $mysqli = require __DIR__ . "/database.php"; 
    $sql = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql); 
    $user = $result->fetch_assoc(); 
} */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--meta http-equiv="X-UA-Compatible" content="ie=edge"-->
    <title>Crush Time</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="js/validation.js" defer></script>
</head>
<body>
<!--Login Button-->
<button class="btn centerButton mobile-btn btn-size" onclick="document.getElementById('login').style.display='block'">Login</button>

<!--Login-->
    <!--Login-->
    <div id="login" class="login-wrap">
        <div class="login-html">
            <button class="close-btn" id="close" onclick="closeLogin()">&times;</button>
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
            <label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up">
            <label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                <!--Sign-In-->
                <form class="sign-in-htm" method="post">

                 <!--Login invalid-->
                    <?php if ($is_invalid): ?>
                    <em>Invalid login</em>
                    <?php endif; ?>


                    <div class="group">
                        <label for="email" class="label">E-Mail</label>
                        <input id="email" type="email" name="email" class="input">
                    </div>
                    <div class="group">
                        <label for="password" class="label">Password</label>
                        <input id="password" type="password" class="input" name="password">
                    </div>
                    <div class="group">
                        <button class="button">Sign In</button>
                    </div>
                    <div class="foot-lnk">
                        <a href="#forgot">Forgot Password?</a>
                    </div>
                </form>


                <!--Sign-Up-->
                <form action="process-signup.php" method="post" class="sign-up-htm" id="signup" novalidate>
                    <div class="group">
                        <label for="name" class="label">Username</label>
                        <input id="name" type="text" class="input" name="name">
                    </div>
                    <div class="group">
                        <label for="password" class="label">Password</label>
                        <input id="password" type="password" class="input" name="password">
                    </div>
                    <div class="group">
                        <label for="password_confirmation" class="label">Repeat Password</label>
                        <input id="password_confirmation" type="password" class="input" name="password_confirmation">
                    </div>
                    <div class="group">
                        <label for="email" class="label">E-mail Address</label>
                        <input id="email" type="email" class="input" name="email">
                    </div>
                    <div class="group">
                        <button class="button">Sign Up</button>
                    </div>
                    <div class="foot-lnk">
                        <label for="tab-1">Already Member?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--Game-->
    <div class="main_story">

        <!--create Function to change the photo, if pictures are added-->
        <div class="photo">bild</div>
        <div id="story"></div>
        <div class="continue-btn">
            <button class="btn btn-size" id="buttonContinue" onclick="buttonChangeContinue()">
                Filler
        </button>
        </div>
        
    </div>

    <div class="decisions">
        <button class="btn btn-fit" id="buttonOne" onclick="buttonChangeOne()"></button>
        <button class="btn btn-fit" id="buttonTwo" onclick="buttonChangeTwo()"></button>
        <button class="btn btn-fit" id="buttonThree" onclick="buttonChangeThree()"></button>
    </div>

    <script src="script.js"></script>
</body>
</html>