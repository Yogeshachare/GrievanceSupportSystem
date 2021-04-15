<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </head>
<body>
    <!--pillai Logo -->
    <div style="text-align: center;">
        <img src="img/pillai logo.png" alt="" id="logo">
    </div> 

    <!-- Navbar -->  
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light " id="navs">
    <a href="index.php"><img src="img/flower.png" style="height: 40px; width:40px;"></img></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <div class="mx-auto order-0">  
  <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" style="color: black; font-weight:bold;" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="color: black; font-weight:bold;" href="#">Link</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" style="color: black; font-weight:bold;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="color: black; font-weight:bold;" href="about_us/aboutus.php" tabindex="-1">About us</a>
      </li>
    </ul>
  </div>
  <ul class="nav justify-content-end ">
  <li class="nav-item">
    <a class="nav-link" style="color: black; font-weight:bold;" href="Login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>
  </li>
  </ul>
</nav>

<!--Carousel -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/pic5_campus.jpg" class="d-block w-100" height="700px" alt="...">
      <div class="carousel-caption d-sm-block" id="carouseltext">
        <h1>To Lodge Grievance or Check Status</h1>
        <a class="btn btn-primary" style="background-color: #33007e;" href="lodgeGrievence.php" role="button">Lodge Grievence</a>
        <a class="btn btn-primary" style="background-color: #33007e;" href="CheckStatus.php" role="button">Check Status</a>
            </div>
    </div>
</div>
</div>

<!-- Cards -->
<div class="container" id="cards">
<div class="row">
  <div class="column">
  <div class="card" style="width: 16rem; height:23rem;">
  <img src="img/tick.png" style="width:auto; height:200px;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Success</h5>
    <h3 class="card-title">0</h3>
    
  </div>
</div>
    </div>

  <div class="column">
  <div class="card" style="width: 16rem; height:23rem;">
  <img src="img/pending.png" style="width:auto; height:200px;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pending</h5>
    <h3 class="card-title">0</h3>
  </div>
</div>
    </div>
  
  <div class="column">
  <div class="card" style="width: 16rem; height:23rem;">
  <img src="img/wrong.png" style="width:auto; height:200px;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Not Completed</h5>
    <h3 class="card-title">0</h3>
  </div>
</div>
  </div>
</div>
</div>

<!-- Footer-->
<footer class="page-footer">
<hr class="divider bg-madison" id="hr">   
<div class="container section-xs block-after-divider">
<div class="row row-50 justify-content-xl-between justify-content-sm-center">
            <div class="col-sm-10 col-lg-5 col-xl-4" id="footerLogo">
            <div class="image-container">  
          <img src="img/pillai logo.png" >
            </div>
        </div>  
        <div class="col-sm-10 col-lg-5 col-xl-4 text-xl-left">
          <h5>Contact Us</h5>
          <hr class="divider" id="hhrr">
          <div class="unit-left">
          <i class="fa fa-phone"></i>
          <a href="tel:#"> 1800019687,</a>
          <a href="tel:#"> 332452837446</a> 
          </div>
          <div style="padding-top:10px;">
          <i class="fa fa-map-pin"></i>
          <a href="#"> Dr. K.M.Vasudevan Pillai Campus, Plot No.10, &nbsp;&nbsp;&nbsp;&nbsp;Sector 16, New Panvel, Navi Mumbai, &nbsp;&nbsp;&nbsp;&nbsp;Maharashtra 410206</a>
          </div>
          <div style="padding-top:10px; padding-bottom:10px;">
          <i class="fa fa-envelope"></i>
          <a href="mailto:#"> pcacs@mes.ac.in</a>
          </div>
          </div> 
          <div class="col-sm-10 col-lg-8 col-xl-4 text-xl-left">
            <h5 id="follHead">Follow us</h5>
            <hr class="divider" id="line3">
            <div id="follow">
            <a href="#"><i class="fa fa-facebook"></i>&nbsp; Facebook</a>
            </div>
            <div id="follow">
            <a href="#"><i class="fa fa-twitter"></i>&nbsp; Twitter</a>
            </div>
            <div id="follow">
            <a href="#"><i class="fa fa-linkedin"></i>&nbsp; Linkedin</a>
            </div>
            <div id="follow">
            <a href="#"><i class="fa fa-instagram"></i>&nbsp; Instagram</a>
            </div>
          </div>
              </div>
            </div>
            <p class="text-light" id="paraAllRight"> &copy;2020.All Rights Reserved.</p>
      </footer>

</body>
</html>