<?php
session_start();
if(!isset($_SESSION['uid'])){
  header('location:registration/login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EASTGOJJAMBUS</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  

  

  
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  
  <link href="css/style.css" rel="stylesheet">

 
</head>

<body id="body">
<div class="container">

  <div id="results"></div>
  <div class='card'>
    <div class='card-header bg-info'>
      <h3 class='text-center'>Ticket Detail</h3>
    </div>
    <div class='card-body bg-dark'>
      <div class='card bg-dark '>
         <h2  class='text-center text-white'>Passenger Detail</h2><hr>
       <div class='row'>
         <div class='col-md-6'>
           <h4 class=' text-white'>Passenger Name :</h4>
           <h4 class='text-white'>Card No :</h4>
           <h4 class='text-white'>Age :</h4>
           <h4 class='text-white'>Email :</h4>
         </div> 
         <div class='col-md-6'>
           <h4 class=' text-white'>Passenger Name :</h4>
           <h4 class='text-white'>Card No :</h4>
           <h4 class='text-white'>Age :</h4>
           <h4 class='text-white'>Email :</h4>
         </div>
       </div>
      </div>
      <div class='card bg-dark '>
         <h2  class='text-center text-white'>Bus Detail</h2><hr>
       <div class='row'>
         <div class='col-md-6'>
           <h4 class=' text-white'>Bus Name :</h4>
           <h4 class='text-white'>Bus No :</h4>
           <h4 class='text-white'>Time :</h4>
           <h4 class='text-white'>From :</h4>
          <h4 class='text-white'>To :</h4>
         </div> 
         <div class='col-md-6'>
           <h4 class=' text-white'>Passenger Name :</h4>
           <h4 class='text-white'>Card No :</h4>
           <h4 class='text-white'>Age :</h4>
           <h4 class='text-white'>Email :</h4>
          <h4 class='text-white'>Email :</h4>
         </div>
       </div>
      </div>
       <div class='card bg-dark '>
         <h2  class='text-center text-white'>Ticket Detail</h2><hr>
       <div class='row'>
         <div class='col-md-6'>
           <h4 class=' text-white'>Number Of Seat :</h4>
           <h4 class='text-white'>Seat No :</h4>
           <h4 class='text-white'>Status :</h4>
           <h4 class='text-white'>Fare :</h4>
           <h4 class='text-white'>Journey Date :</h4>
          <h4 class='text-white'>Booking Date :</h4>
         </div> 
         <div class='col-md-6'>
           <h4 class=' text-white'>Passenger Name :</h4>
           <h4 class='text-white'>Card No :</h4>
           <h4 class='text-white'>Age :</h4>
           <h4 class='text-white'>Email :</h4>
          <h4 class='text-white'>Email :</h4>
          <h4 class='text-white'>Email :</h4>
         </div>
       </div>
      </div>
    </div>
    <div class='card-footer bg-info'>
     <a href='profile.php' class='btn btn-outline-danger'>Home</a>
    </div>
  </div>----->
</div>
  
 

  
 

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <script src="js/main.js"></script>
  <script src="js/main1.js"></script>

</body>
</html>
