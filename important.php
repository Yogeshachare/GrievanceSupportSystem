<?php

    include_once 'includes/dbh.inc.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
  </head>
  <body style="background-image: linear-gradient(#FFCD40, #EA408F); padding-bottom:350px;">

<!-- side Nav -->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="landing.php">Home</a>
  <a href="important.php">Urgent</a>
  <a href="administrative.php">Administrative</a>
  <a href="harassment.php">Harassment</a>
  <a href="unfairTreatment.php">Unfair Treatment</a>
  <a href="about_us/about.php">About</a>
  <a href="#">Contact us</a>
</div>

<span style="font-size:30px;cursor:pointer; color:white " onclick="openNav()">&#9776;</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
  
<div class="container text-center" style="padding:20px;">
<img src="img/pillai logo.png" alt="..." id="secondLogo"> 
<h2 style="color:brown; font-family: Times New Roman, Times, serif;">PILLAI COLLEGE OF ENGINEERING</h2>
</div>
</div>
</div>



<!--Urgent Table -->
<div class="container" id="Table">
  <h3>Urgent Grievence</h3>
  <table class="table" id="user_data">
    <thead>
    <tr><th>id</th><th>Admisson No</th><th>Email</th><th>Branch</th><th>Description</th><th>Status</th></tr>
    </thead>
    </table>
    <script type="text/javascript" language="javascript" >
 $(document).ready(function(){

var dataTable = $('#user_data').DataTable({
 "processing" : true,
 "serverSide" : true,
 "order" : [],
 "ajax" : {
  url:"fetchUrg.php",
  type:"POST"
 }
});

$('#user_data').on('draw.dt', function(){
 $('#user_data').Tabledit({
  url:"actionUrg.php",
  dataType:"json",
  columns:{
   identifier : [0, 'id'],
   editable:[[1, 'admissionNo'], [2, 'email'],[3,'branch'], [4,'description'],  [5, 'status', '{"pending":"pending","completed":"completed","Not Completed":"Not completed"}']]
  },
  restoreButton:false,
  onSuccess:function(data, textStatus, jqXHR)
  {
   if(data.action == 'delete')
   {
    $('#' + data.id).remove();
    $('#user_data').DataTable().ajax.reload();
   }
  }
 });
});
 
}); 
</script>
</div>

  </body>