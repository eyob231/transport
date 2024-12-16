<?php 
include('../action.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In </title>

    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content" style="margin-right:210px; margin-top:-150px; box-shadow:3px 3px 3px 3px gray; background-color:cornflowerblue; width:500px; border-radius:10px;">
                <form method="POST" id="signup-form" class="signup-form">
                    <h2> Log In </h2>
                     <div class="form-group">
                        <input type="text" class="form-input" name="uname" id="name" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="psw" id="password" placeholder="Password"/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" id="submit" class="form-submit submit" value="Log In"/>
                        <a href="signup.php" class="submit-link submit">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>