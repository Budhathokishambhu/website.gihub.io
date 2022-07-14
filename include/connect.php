<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];


// Connect to server and select databse.
$conn = new mysqli('localhost', 'root', '', 'family');

if($conn->connect_error){
	die('Connection Fail :  ' .$conn->connect_error);

}else{
	$stmt = $conn->prepare("insert into contactform(name, email, mobile, message ) values(?, ?, ?, ?, )");

	$stmt->bind_param("ssis", $name, $email, $mobile, $message);

	$stmt->execute();
	echo "Registration Successful, please go back for new register . Thank you !";
	$stmt->close();
	$conn->close();

}



 ?>