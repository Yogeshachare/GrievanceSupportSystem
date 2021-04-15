<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
 </head>
 <body> 
  <div class="container" id="Table">
  <h3>Matheran</h3>
  <table class="table" id="user_data">
    <thead>
    <tr><th>id</th><th>Username</th><th>License</th><th>Bike Name</th><th>Bike Vin</th><th>Blood Group</th></tr>
    </thead>
    </table>
    <script type="text/javascript" language="javascript" >
 $(document).ready(function(){

var dataTable = $('#user_data').DataTable({
 "processing" : true,
 "serverSide" : true,
 "order" : [],
 "ajax" : {
  url:"fetch.php",
  type:"POST"
 }
});

$('#user_data').on('draw.dt', function(){
 $('#user_data').Tabledit({
  url:'action.php',
  dataType:'json',
  columns:{
   identifier : [0, 'id'],
   editable:[[1, 'username'], [2, 'license'],[3,'bikeName'], [4,'bikeVin'],  [5, 'bloodGroup']]
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