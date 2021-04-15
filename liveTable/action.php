<?php
include('database_connection.php');

if($_POST['action'] == 'edit')
{
 $data = array(
  ':username'  => $_POST['username'],
  ':license'  => $_POST['license'],
  ':bikeName'   => $_POST['bikeName'],
  ':bikeVin'   => $_POST['bikeVin'],
  ':bloodGroup'   => $_POST['bloodGroup'],
  ':id'    => $_POST['id']
 );

 $query = "
 UPDATE matheran 
 SET username = :username, 
 license = :license, 
 bikeName = :bikeName,
 bikeVin = :bikeVin,
 bloodGroup = :bloodGroup 
 WHERE id = :id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM matheran 
 WHERE id = '".$_POST["id"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>