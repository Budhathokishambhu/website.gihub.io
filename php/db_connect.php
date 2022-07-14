<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ABC Bank</title>
</head>

<body>
	<?php 
 
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "pelicanbank"; 
 
// create connection 
$connect = new mysqli($host, $username, $password, $dbname); 
 
// check connection 
if($connect->connect_error) {
    die("connection failed : " . $connect->connect_error);
} else {
   // echo "Successfully Connected";
}
 
?>
</body>
</html>