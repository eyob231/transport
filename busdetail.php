<?php 
include('../action.php');
 if(!isset($_SESSION['aname'])){
   header('location:admin.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transport</title>

    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container" >
            <div class="signup-content" style="margin-right:210px; margin-top:-150px; box-shadow:3px 3px 3px 3px gray; background-color:cornflowerblue; width:500px; border-radius:10px;">
                <form method="POST" id="signup-form" class="signup-form">
                    <h2>Bus details </h2>
                    <div class="form-group">
                        <input type="text" class="form-input" name="bname" id="name" placeholder="Bus Name"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="bno" id="name" placeholder="Bus No"/>
                    </div>
                     <div class="form-group">
                        <input type="text" class="form-input" name="from" id="name" placeholder="From"/>
                    </div>
                     <div class="form-group">
                        <input type="text" class="form-input" name="to" id="name" placeholder="To"/>
                    </div>
                     <div class="form-group">
                        <input type="text" class="form-input" name="time" id="name" placeholder="Bus timming"/>
                    </div>
                     <div class="form-group">
                        <input type="text" class="form-input" name="sno" id="name" placeholder="Number of seat"/>
                    </div>
                     <div class="form-group">
                        <input type="text" class="form-input" name="fare" id="name" placeholder="Birr"/>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" name="bus" id="submit" class="form-submit submit" value="Submit"/>
                    </div>
                </form>
            </div>
        </div>

    </div>
<footer style="background-color:#a3ebd5;
  margin-bottom:-5px;
  height:120px;">
    <a  style="text-decoration: none;
    margin-left:100px;
    color:blue; padding:10px;padding-top:-200px;"href="#">home</a>
    <a style="text-decoration: none;
    margin-left:100px;
    color:blue;padding:10px;padding-top:-200px;"href="#">about</a>
    <a style="text-decoration: none;
    margin-left:100px;
    color:blue;padding:30px;padding-top:-200px;"href="#">contact us</a>
    <marquee style="margin-bottom:-70px;"behavior="" direction="left">cope and right</marquee>
  </footer>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>