<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="family"; // Database name 
$tbl_name="connectregister"; // Table name 

// Connect to server and select database.
$conn = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($conn, "$db_name")or die("cannot select DB");

// Get values from form 
	
$username=$_POST['username'];
$password=$_POST['password'];

// Insert data into mysql 
$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result=mysqli_query($conn, $sql);

$count=mysqli_num_rows($result);

if($count==1){
	
	header("location:user.php");
}
else {
	echo "Wrong Username or Password ";
	echo "<BR>";
	echo "<a href='login.php'><button>Back to Login</button></a>";
}
?>

</body>
</html>