<?php
	include 'database.inc.php';
	$admissionNo=$_POST['admissionNo'];
	$email=$_POST['email'];
	$branch=$_POST['branch'];
    $grievence=$_POST['grievence'];
    $descript=$_POST['descript'];
	$sql = "INSERT INTO urgent(admissionNo,email,branch,grievenceType,description) 
	VALUES ('$admissionNo','$email','$branch','$grievence','$descript')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>