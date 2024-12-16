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
  <title>EASTGOJJAMBUS</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body id="body">
<div id="ticketdate" class="container">
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
             <div class="form-group">
                   <h4 class="form-input form-control">Date  :  <input type="date" class="form-input" id="pdate"/> </h4>
                      
             </div>
            </form>
          </div>
          <div class="card-footer bg-dark">
            <div class="btn btn-danger ticketdate">Submit</div>
          </div>
          
        </div>
         </div>
       </div>
        <div class="col-md-3"></div>
</div>
  <div class="container-fluid mt-5" id="bookeddate">
    <div class="card" >
      <h2 class="text-center ">Passenger Details </h2>
      <div class="card-header bg-info">
        <div class="row">
          <div class="col-md-2">
            <h3 class="text-center text-white">Passenger Name</h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">Seat No </h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">Number of Seat</h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">BIRR</h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">Status</h3>
          </div>
           <div class="col-md-2">
            <h3 class="text-center text-white">Journey Date</h3>
          </div>

        </div>
      </div>
      <div class="card-body bg-dark">
       <div id="bdresult"></div>
      </div>
    </div>
  </div>
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <script src="js/main.js"></script>
  <script src="js/main1.js"></script>

</body>
</html>
