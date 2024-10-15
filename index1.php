<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" type="text/css" href="style1.css">



</head>
<style type="text/css">
  #inputbtn:hover {
    cursor: pointer;
  }

  .card {
    background: #f8f9fa;
    border-top-left-radius: 5% 5%;
    border-bottom-left-radius: 5% 5%;
    border-top-right-radius: 5% 5%;
    border-bottom-right-radius: 5% 5%;
  }
</style>

<body>
  <!-- <div class="container-fluid vh-100 p-4">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">

        <a class="navbar-brand js-scroll-trigger" href="index.php"
          style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;">
          <h4><i class="fa fa-user-plus" aria-hidden="true"></i>Medicare</h4>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item" style="margin-right: 40px;">
              <a class="nav-link js-scroll-trigger" href="index.php"
                style="color: white;font-family: 'IBM Plex Sans', sans-serif;">
                Home
              </a>
            </li>

            <li class="nav-item" style="margin-right: 40px;">
              <a class="nav-link js-scroll-trigger" href="services.html"
                style="color: white;font-family: 'IBM Plex Sans', sans-serif;">
                About Us
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact.html"
                style="color: white;font-family: 'IBM Plex Sans', sans-serif;">
                Contact
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav> -->



  <!-- <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
      <div class="row">



        <div class="col-md-7" style="padding-left: 180px; ">
          <div style="-webkit-animation: mover 2s infinite alternate;
    animation: mover 1s infinite alternate;">
            <img src="images/ambulance1.png" alt=""
              style="width: 20%;padding-left: 40px;margin-top: 150px;margin-left: 45px;margin-bottom:15px">
          </div>

          <div style="color: white;">
            <h4 style="font-family: 'IBM Plex Sans', sans-serif;"> We are here for you!</h4>
          </div>

        </div>

        <div class="col-md-4" style="margin-top: 5%;right: 8%">
          <div class="card" style="font-family: 'IBM Plex Sans', sans-serif;">
            <div class="card-body">
              <center>
                <i class="fa fa-hospital-o fa-3x" aria-hidden="true" style="color:#0062cc"></i>
                <br>
                <h3 style="margin-top: 10%">Patient Login</h3><br>
                <form class="form-group" method="POST" action="func.php">
                  <div class="row" style="margin-top: 10%">
                    <div class="col-md-4"><label>Email-ID: </label></div>
                    <div class="col-md-8"><input type="text" name="email" class="form-control"
                        placeholder="enter email ID" required /></div><br><br>
                    <div class="col-md-4" style="margin-top: 8%"><label>Password: </label></div>
                    <div class="col-md-8" style="margin-top: 8%"><input type="password" class="form-control"
                        name="password2" placeholder="enter password" required /></div><br><br><br>
                  </div>
                  <div class="row">
                    <div class="col-md-4" style="padding-left: 160px;margin-top: 10%">
                      <center><input type="submit" id="inputbtn" name="patsub" value="Login" class="btn btn-primary">
                      </center>
                    </div>
                     <div class="col-md-8" style="margin-top: 10%">
                    <a href="index.php" class="btn btn-primary">Back</a></div> 
                  </div>
                </form>
              </center>
            </div>
          </div>
        </div>


      </div>
    </div> -->


  <!-- </div> -->

  <div class="container-fluid vh-100 p-4 position-relative">
    <nav class="navbar navbar-expand-lg navbar-dark mb-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#">Medicare</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item" style="margin-right: 40px;">
              <a class="nav-link js-scroll-trigger" href="index.php" style="color: white;">Home</a>
            </li>

            <li class="nav-item" style="margin-right: 40px;">
              <a class="nav-link js-scroll-trigger" href="services.html" style="color: white;">About
                Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact.html" style="color: white;">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="row mb-3">

      <div class="d-flex justify-content-center align-items-center fs-3 text-light">We are here for you</div>
    </div>

    <div
      class="container border border-dark  rounded-4 bg-body shadow position-absolute top-50 start-50 translate-middle"
      style="height: 65%; width: 35%">
      <div class="row my-2"></div>
      <div class="row my-2">
        <div class="d-flex justify-content-center align-items-center fs-4">Patient Login</div>
        <form class="form-group" method="POST" action="func.php">
          <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="text" name="email" class="form-control"
            placeholder="enter email ID" required />            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            <input type="password" class="form-control"
            name="password2" placeholder="enter password" required />            </div>
          </div>
          <div class="row">
                    <div class="col-md-4" style="padding-left: 160px;margin-top: 10%">
                      <center><input type="submit" id="inputbtn" name="patsub" value="Login" class="btn btn-primary">
                      </center>
                    </div>
                     <div class="col-md-8" style="margin-top: 10%">
                    <a href="index.php" class="btn btn-primary">Back</a></div> 
                  </div>
        </form>
      </div>


</body>

</html>