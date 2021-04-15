<?php

session_start();
if ($_SESSION["userId"] == NULL ) {
  header("Location: /Orochi/Login.php?error=PleaseLogin");
  exit();
}
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style2.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh6PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.materialdesignicons.com/5.5.55/css/materialdesignicons.min.css"></script>
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

<div class="section">
<div class="container" id="profileContainer">
<div class="row"> 
<div class="column">  
<div class="card" style="width: 20rem; border-radius :15px; border:0px;" >
  <div class="card-body" id="profCard">
    <div class="text-center" style="padding-bottom:20px">
      <img src="img/user.png" style="text-align: center;"></img>
    </div>
    <h6>Username: <?php echo($_SESSION['userName']); ?></h6>
    <h6>Email: <?php echo($_SESSION['userUid']); ?></h6>
    <h6>Phone:</h6>
  </div>
</div>
</div>
<div class="column" id="profTable">
  <div class="container" >
<table>
            <tr>
                <th>Admission No</th>
                <th>Email</th>
                <th>Branch</th>
                <th>Grievence Type</th>
                <th>Description</th>
                <th>Status</th>
            </tr>
<?php   

$email = $_SESSION['userUid'];
require "includes/dbh.inc.php";
$sql = mysqli_query($conn, "SELECT * FROM academicgrievence WHERE email = '$email'");
$result = $sql;
$result2 = mysqli_query($conn, "SELECT * FROM administrativedecision WHERE email = '$email'");
$result3 = mysqli_query($conn, "SELECT * FROM harassment WHERE email = '$email'");
$result4 = mysqli_query($conn, "SELECT * FROM unfairtreatment WHERE email = '$email'");
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['admissionNo'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['branch'] . "</td>";
echo "<td>" . $row['grievenceType'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "<td>" . $row['status'] . "</td>";
echo "</tr>";
}
while($row = mysqli_fetch_array($result2))
{
echo "<tr>";
echo "<td>" . $row['admissionNo'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['branch'] . "</td>";
echo "<td>" . $row['grievenceType'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "<td>" . $row['status'] . "</td>";
echo "</tr>";
}
while($row = mysqli_fetch_array($result3))
{
echo "<tr>";
echo "<td>" . $row['admissionNo'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['branch'] . "</td>";
echo "<td>" . $row['grievenceType'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "<td>" . $row['status'] . "</td>";
echo "</tr>";
}
while($row = mysqli_fetch_array($result4))
{
echo "<tr>";
echo "<td>" . $row['admissionNo'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['branch'] . "</td>";
echo "<td>" . $row['grievenceType'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "<td>" . $row['status'] . "</td>";
echo "</tr>";
}
?>       
</table>            

</div> 
</div>
</div>
</div>        
</div>
</div>

<!-- Footer-->
<footer class="page-footer">
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