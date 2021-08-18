<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  <body style="background-color:#C0C0C0;">
      <div class="container-fluid" style="background-color:#1f487c;">
      <img src="img/logo.png" class="img-fluid pt-2" width="90" height="85">
      <center><img src="img/frontt.jpg" class="img-fluid pt-2" width="1000" height="500"></center>
      <!-- Introduction section -->
      </div>
      <!-- Activity section -->
            <div class="row activity text-center" style="background-color:#C0C0C0;">
                  <div class="col-md act">
                    <br>
                    <img src="img/transfer.png" class="img-fluid" width="210" height="210">
                    <br>
                    <a href="transfermoney.php"><button style="background-color:#b90b0b;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <br>
                    <img src="img/history.png" class="img-fluid" width="210" height="210">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color:#b90b0b;">Transaction History</button></a>
                  </div>
            </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy Done by <b>SRIMUKESH T</b> <br></p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>