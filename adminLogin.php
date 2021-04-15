<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.materialdesignicons.com/5.5.55/css/materialdesignicons.min.css"></script>
    
    <script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

</script>
  </head>
<body>
    <!-- Navbar -->  
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light " id="navs">
    <a href="landing.php"><img src="img/flower.png" style="height: 40px; width:40px;"></img></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <div class="mx-auto order-0">  
  <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" style="color: black; font-weight:bold;" href="landing.php">Home <span class="sr-only">(current)</span></a>
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
</nav>

<!-- Breadcrumb -->
<section class="section" id="breadCrumb">
    <div class="container">
    <h1>Admin Login</h1>
    </div>
</section>

<!-- loginForm -->
<section class="section" id="SignInCon">
  <div class="container">
  <div class="row justify-content-sm-center section-34">
    <div class="col-sm-8 col-md-6 col-lg-5">
   <h1>Admin Sign In</h1>
   <hr class="divider bg-madison" id="line1">
   <div class="offset-sm-top-45 text-center">
<!--Bootstrap tabs-->
  <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
  
  <!--Nav tabs-->
  <ul class="nav nav-tabs" id="navTabs">
    <li class="nav-item" role="presentation"><a class="nav-link active show" href="#tabs-login-1" data-toggle="tab">Login</a></li>
  </ul>

  <!--Tab panes-->
  <div class="tab-content">
  <div class="tab-pane fade active show" id="tabs-login-1">
    
  <form id="form" class="text-left" method="POST" action="includes/adminlogin.inc.php" >
  <?php
  if(isset($_GET['error'])){
    if($_GET['error'] == "emptyfields"){
      echo '<div class="alert alert-danger" role="alert">Fill all the 
      fields  
  </div>';

 }
 elseif($_GET['error'] == "invaliduidmail"){
   echo '<div class="alert alert-danger" role="alert">Invalid Username and email
  </div>';  
}
elseif($_GET['error'] == "invaliduid"){
   echo '<div class="alert alert-danger" role="alert">Invalid Username
  </div>';  

}
elseif($_GET['error'] == "invalidmail"){
   echo '<div class="alert alert-danger" role="alert">Invalid Email  
  </div>';
}
elseif($_GET['error'] == "passwordcheck"){
   echo '<div class="alert alert-danger" role="alert">Password does not match
  </div>';
}
elseif($_GET['error'] == "usertaken"){
   echo '<div class="alert alert-danger" role="alert">Username is already taken  
  </div>';

}
}
?>
  <div class="form-group">
    <label>Email:</label>
    <input id="name" type="email" class="form-control" name="mailuid" aria-describedby="emailHelp" required>
  </div>
  <div class="form-group">
    <label>Password:</label>
    <input type="password" class="form-control"  id="psw" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
  </div>
  <button type="submit" class="btn btn-primary" name = "login-submit" id="signUp" >Sign In</button>
  </form>
  </div>
  <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
  
  </div>
   </div>
  </div>
</section>

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
            <p class="footer-bottom-text text-light" id="paraAllRight"> &copy;2020.All Rights Reserved.</p>
      </footer>

      <script type="text/javascript">
    (function(d, m){
        var kommunicateSettings = 
            {"appId":"17992fc11452d4af346600297792ef62","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
/* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
</script>
      

    </body>
</html>