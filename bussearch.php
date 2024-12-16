<?php
session_start();
if(!isset($_SESSION['uid'])){
  header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transport </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
     <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container" id="search" >
            <div class="signup-content"style="margin-top:-150px; margin-right:260px;  box-shadow:3px 3px 3px 3px gray; ">
                <form  id="signup-form" class="signup-form" >
                    <h2>Bus search </h2>
                    <div class="form-group">
                        <input type="text" class="form-input" name="from" id="from" placeholder="From "/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="to" id="to" placeholder="To"/>
                    </div>
                      <div class="form-group">
                        <input type="date"  name="date" id="date" />
                    </div>
                    <div class="form-group">
                      <a href="#" class="btn btn-success bussearch">Submit</a>
                    </div>
                </form>
            </div>
        </div>
       
<div class="container-fluid" id="result">
    <div class="card">
        <div class="card-header bg-success">
            <h2 class="text-center">Your Result</h2>
        </div>
        <div class="card-body">
           <div class="card-columns">
            <div id="results"></div>
            
                         <div class='col-md-6'>
                            <h5>Bus NO. :</h5>
                            <h5>From :</h5>
                            <h5>To :</h5>
                            <h5>Time :</h5>
                            <h5>Bus Type :</h5>
                             <h5>Fare :</h5>
                            <h5>Seat available :</h5>
                         </div>
                     </div>
                  </div>
                   
               </div>
              
            
               
           </div>
        </div>
    </div>
</div>
 <div class="container" id="booking">
        <div id="bookingres" style="margin-top:-150px; margin-right:300px; box-shadow:3px 3px 3px 3px gray; "></div>
          


    <!-- JS -->
 <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
     <script src="js/main1.js"></script>
</body>
</html>