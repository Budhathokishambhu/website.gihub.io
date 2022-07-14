<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to ABC Bank</title>
</head>

<body>
<div id="main">
<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="pelicanbank"; // Database name 
$tbl_name="customer"; // Table name
	

// Connect to server and select databse.
$connect = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($connect, "$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($conn, $myusername);
$mypassword = mysqli_real_escape_string($conn, $mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($conn, $sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
	// Register $myusername, $mypassword and redirect to file "login_success.php"
	session_start();
	session_register("myusername");
	session_register("mypassword"); 
	header("location: users.php");
}
else {
	echo "Wrong Username or Password";
}
?>



</div>	
</body>
</html>
