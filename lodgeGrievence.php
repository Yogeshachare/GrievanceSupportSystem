<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.materialdesignicons.com/5.5.55/css/materialdesignicons.min.css"></script>
    <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
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
        <a class="nav-link" style="color: black; font-weight:bold;" href="profile.php">Profile</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" style="color: black; font-weight:bold;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Login.php">User</a>
          <a class="dropdown-item" href="adminLogin.php">Admin</a>
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
    <h1 id="h1taginGrievence">Lodge Grievence</h1>
    </div>
</section>

<!-- Form -->
<section class="section" id="SignInCon">
  <div class="container">
  <div class="row justify-content-sm-center section-34">
    <div class="col-sm-10 col-lg-8 text-lg-left">
   <h1 style="text-align: center;">Talk To us</h1>
   <hr class="divider bg-madison" id="line1">
   <div class="offset-sm-top-45 text-center">

   <form id="fupForm" class=" needs-validation text-left" method="POST" novalidate>
  <div class="row">
    <div class="col">
    <label>Admission No:</label>
      <input type="text" class="form-control" id="admissionNo">
    </div>
    <div class="col">
    <label>Email:</label>
    <input type="email" class="form-control" name="mailuid" aria-describedby="emailHelp" id="email" required>
    <div class="invalid-feedback">
        Please provide a valid Email.
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
    <label>Branch:</label>
      <input type="text" class="form-control" name="branch" id="branch">
    </div>
    <div class="col">
    <label for="inputState">Grievence:</label>
      <select id="grievence" class="form-control" name="grievenceType">
        <option value="academicgrievence" selected>Academic Grievence</option>
        <option value="administrativedecision">Administrative Decision</option>
        <option value="harassment">Harassment</option>
        <option value="unfairtreatment">Unfair Treatment</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Describe Grievence:</label>
    <textarea class="form-control" id="description" rows="3" placeholder="Briefly describe your Grievence" name="grievencedescip"></textarea>
  </div>
  <button onclick = "textAnalysis()">submit</button>
</form>
<script>

class ModifiedSuffixTrie{
    constructor(string) {
        this.root = {};
        this.populateSuffixTrie(string);
    }

    populateSuffixTrie(string){
        for(let i = 0; i < string.length; i++){
            this.insertIntoSuffixTrie(i,string);
        }
    }

    insertIntoSuffixTrie(i,string){
        let node = this.root;
        for(let j = i; j < string.length; j++){
            const letter = string[j];
            if (!(letter in node)) node[letter] = {};
            node = node[letter];
        }
    }

    contains(string){
        let node = this.root;
        for (const letter of string){
            if (!(letter in node)) return false;
            node = node[letter]
        }
        return true;
    }
}
  
function textAnalysis(){
  var sentence = document.getElementById("description").value;
  description = sentence.toLowerCase();
  String(description);
  var words = ["assault","disturbance","ragged","harass","bullying"];
  var i = 0;
  const modifiedSuffix = new ModifiedSuffixTrie(description);
  while (i < words.length){
	  const modi = modifiedSuffix.contains(words[i]);
    if (modi){
      $(document).ready(function() {

      var admissionNo = $('#admissionNo').val();
      var email =  $('#email').val();
      var branch = $('#branch').val();
      var grievence = $('#grievence').val();
      var descript = $('#description').val();
        $.ajax({
        url: "urgent.inc.php",
        type: "POST",
        data: {
          admissionNo: admissionNo,
          email: email,
          branch: branch,
          grievence: grievence,
          descript: descript				
        },
        cache: false,
        success: function(dataResult){
        var dataResult = JSON.parse(dataResult);
        if(dataResult.statusCode==200){
          $('#fupForm').find('input:text').val('');
          $("#success").show();
          $('#success').html('Data added successfully !'); 						
        }
        else if(dataResult.statusCode==201){
           alert("Error occured !");
        }
        
      }
    });
});
  break;
    }
  else{
    i++;
  }
}
$(document).ready(function() {

var admissionNo = $('#admissionNo').val();
var email =  $('#email').val();
var branch = $('#branch').val();
var grievence = $('#grievence').val();
var descript = $('#description').val();
$.ajax({
  url: "grievence.inc.php",
  type: "POST",
  data: {
    admissionNo: admissionNo,
    email: email,
    branch: branch,
    grievence: grievence,
    descript: descript				
  },
  cache: false,
  success: function(dataResult){
  var dataResult = JSON.parse(dataResult);
  if(dataResult.statusCode==200){
    $('#fupForm').find('input:text').val('');
    $("#success").show();
    $('#success').html('Data added successfully !'); 						
  }
  else if(dataResult.statusCode==201){
    alert("Error occured !");
  } 
}
});
});
}
</script>
    </div>
  </div>
  </div>
  </div>
</section> 

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