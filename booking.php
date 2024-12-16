<?php
session_start();
if(!isset($_SESSION['aname'])){
  header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Transport</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  

  
  <link href="css/style.css" rel="stylesheet">

 
</head>

<body id="body">
<div id="booking" class="container">
    <div class="row">
      <div class="col-md-3"></div>
       <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Enter Bus  Detail</h3>
          </div>
          <div class="card-body bg-dark">
            <form>
             <div class="form-group">
                   <input type="text" class="form-input form-control" name="usn" id="bid" placeholder="Enter Bus Id"/>    
             </div>
            </form>
          </div>
          <div class="card-footer bg-dark">
            <div class="btn btn-danger booking">Submit</div>
          </div>
          
        </div>
         </div>
       </div>
        <div class="col-md-3"></div>
    </div>
  <div class="container-fluid mt-5" id="booked">
    <div class="card" >
      <h2 class="text-center ">Booking Bus Details </h2>
      <div class="card-header bg-info">
        <div class="row">
          <div class="col-md-2">
            <h3 class="text-center text-white">Bus Name</h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">Booked Seat </h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">Vacent Seat</h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">From</h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">To</h3>
          </div>
           <div class="col-md-2">
            <h3 class="text-center text-white">Journey Date</h3>
          </div>

        </div>
      </div>
      <div class="card-body bg-dark">
       <div id="bresult"></div>
      </div>
    </div>
  </div>
 

  
  

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <script src="js/main.js"></script>
  <script src="js/main1.js"></script>

</body>
</html>
