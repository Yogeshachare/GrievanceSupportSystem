<?php
$success = "";
$error_message = "";
require 'includes/dbh.inc.php';
if(!empty($_POST["submit_email"])) {
	require 'includes/dbh.inc.php';
	$result = mysqli_query($conn,"SELECT * FROM users WHERE Email_id='" . $_POST["email"] . "'");
	$count  = mysqli_num_rows($result);
	if($count < 1) {
    $result = mysqli_query($conn, "INSERT INTO users (username, Email_id, pwd) VALUES ('','".$_POST["email"]."','')");
		// generate OTP
		$otp = rand(100000,999999);
		// Send OTP
		require_once("includes/mail_function.php");
		$mail_status = sendOTP($_POST["email"],$otp);
		
		if($mail_status == 1) {
			$result = mysqli_query($conn,"INSERT INTO otp_expiry(otp,is_expired,create_at) VALUES ('" . $otp . "', 0, '" . date("Y-m-d H:i:s"). "')");
			$current_id = mysqli_insert_id($conn);
			
				$success=1;
			
		}
	} else {
		$error_message = "Email already taken!";
	}
}
if(!empty($_POST["submit_otp"])) {
	require 'includes/dbh.inc.php';
	$result = mysqli_query($conn,"SELECT * FROM otp_expiry WHERE otp='" . $_POST["otp"] . "' AND is_expired!=1 AND NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR)");
	$count  = mysqli_num_rows($result);
	if(!empty($count)) {
		$result = mysqli_query($conn,"UPDATE otp_expiry SET is_expired = 1 WHERE otp = '" . $_POST["otp"] . "'");
		$success = 2;	
	} else {
		$success =1;
		$error_message = "Invalid OTP!";
	}	
}
if(!empty($_POST["signup-submit"])){
  require 'includes/dbh.inc.php';
  $email = $_POST['mail'];
  $username = $_POST['uid'];
  $password = $_POST['pwd'];
  $confirmpwd = $_POST['confirm-pwd'];
  if (empty($username) || empty($email) || empty($password) || empty($confirmpwd)) {
    header("Location: /Orochi/Login.php?error=emptyfields&uid=".$username."&email=".$email); 
  }
  elseif ($password !== $confirmpwd) {
    header("Location: /Orochi/Login.php?error=passwordcheck&uid =".$username."&mail=".$email);
  }else{
    $sql = "SELECT Email_id FROM users WHERE Email_id= ?";
    	$stmt = mysqli_stmt_init($conn);
    	if (!mysqli_stmt_prepare($stmt,$sql)) {
    		header("Location: ../Login.php?error=sqlerror1");
    		exit();
    		
    	}
    	else{
    		mysqli_stmt_bind_param($stmt, "s" , $email);
    		mysqli_stmt_execute($stmt);
    		mysqli_stmt_store_result($stmt);
    		$resultCheck = mysqli_stmt_num_rows($stmt);
    		if ($resultCheck < 1) {
    			header("Location: /Orochi/Login.php?error=emailNotValid=".$email);
    		} 
    	    else{
    		    $sql = "UPDATE users SET username = ? , pwd= ? WHERE Email_id = '$email'";
    		    $stmt = mysqli_stmt_init($conn);
    		    if (!mysqli_stmt_prepare($stmt,$sql)) {
    		    header("Location: /Orochi/Login.php?error=sqlerror2");   	
            }
    	    else{
    	    	$hashedpwd = password_hash($password , PASSWORD_DEFAULT);
    		    mysqli_stmt_bind_param($stmt, "ss" , $username, $hashedpwd);
    		    mysqli_stmt_execute($stmt);
    		    header("Location: /Orochi/Login.php?signup=success");
            exit();
    	    }
        }
      }
    }
} 

?>

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
    <h1>Login/Register</h1>
    </div>
</section>

<!-- loginForm -->
<section class="section" id="SignInCon">
  <div class="container" >
  <div class="row justify-content-sm-center section-34" id="shadowContainer">
    <div class="col-sm-8 col-md-6 col-lg-5" >
   <h1>Sign In or Sign Up</h1>
   <hr class="divider bg-madison" id="line1">
   <div class="offset-sm-top-45 text-center">
<!--Bootstrap tabs-->
  <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
  
  <!--Nav tabs-->
  <ul class="nav nav-tabs" id="navTabs">
    <li class="nav-item" role="presentation"><a class="nav-link active show" href="#tabs-login-1" data-toggle="tab">Login</a></li>
    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-login-2" data-toggle="tab">Registration</a></li>
  </ul>

  <!--Tab panes-->
  <div class="tab-content">
  <div class="tab-pane fade active show" id="tabs-login-1">
    
  <form id="form" class="text-left" method="POST" action="includes/login.inc.php" >
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
  
  <div class="tab-pane fade" id="tabs-login-2">
  <?php
  if(isset($_GET['error'])){
    if($_GET['error'] == "emptyfields"){
      echo '<div class="alert alert-danger" role="alert">Fill all the 
      fields  
  </div>';

 }
 elseif($_GET['error'] == "InvalidMail"){
   echo '<div class="alert alert-danger" role="alert">Invalid email
  </div>';  
}
elseif($_GET['error'] == "invaliduid"){
   echo '<div class="alert alert-danger" role="alert">Invalid Username
  </div>';  

}
elseif($_GET['error'] == "emailNotValid"){
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
<?php
if(isset($_GET['signup'])){
    if($_GET['signup'] == "success"){
      echo '<div class="alert alert-success" role="alert">Success  
  </div>';
  }
 } 
?>
  <form name="frmUser" method="POST" class = "text-left" action="">
		<?php 
			if(!empty($success == 1)) { 
		?>
    <div>
    <div class="from-group">
		<label>Enter OTP</label>
		<p style="color:#31ab00;">Check your email for the OTP</p>
			
			<input name="otp" placeholder="One Time Password" class="from-control" required>
      </div>
    <button type="submit" id="signUp" name="submit_otp" value="Submit" class="btn btn-primary">Submit</button>
  
		<?php 
			} else if ($success == 2) {
        ?>
        <?php
  if(isset($_GET['error'])){
    if($_GET['error'] == "emptyfields"){
      echo '<div class="alert alert-danger" role="alert">Fill all the 
      fields  
  </div>';

 }
 elseif($_GET['error'] == "InvalidMail"){
   echo '<div class="alert alert-danger" role="alert">Invalid email
  </div>';  
}
elseif($_GET['error'] == "invaliduid"){
   echo '<div class="alert alert-danger" role="alert">Invalid Username
  </div>';  

}
elseif($_GET['error'] == "emailNotValid"){
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
    <p style="color:red;">Please Enter Same Email</p>
    <input type="email" id="name" name="mail" class="form-control" aria-describedby="emailHelp" required>
  </div>      
		<div class="from-group">
    <label>User Name:</label>
    <input class="form-control" name="uid" type="text" required >
    </div>
    <div class="from-group">
    <label>Password</label>
    <input type="password" id="psw" name="pwd" class="form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
  </div>
  <div class="form-group">
    <label>Confirm Password</label>
  <input type="password" name="confirm-pwd" class="form-control" required>
</div>
<button type="submit" name = "signup-submit" class="btn btn-primary" id="signUp" value="Submit">Sign up</button>
		<?php
			}
			else {
		?>
		<div class="form-group">
    <label>Enter Your Email:</label>
    <input id="name" type="email" class="form-control" name="email" aria-describedby="emailHelp" required>
  </div>
		<button type="submit" id="signUp" name="submit_email" value="Submit" class="btn btn-primary">Submit</button>
		<?php 
			}
		?>
	</div>
  </form>
  
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