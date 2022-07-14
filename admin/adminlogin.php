<!doctype html>
<html>
<head>
<meta charset="utf-8">

</head>


<body>

<div id="nav"><!-- #BeginLibraryItem "/Library/navigation.lbi" -->
<a href="../index.php">Home</a> | <a href="aboutus.php">About us</a> | <a href="balanceinquiry.php">Balance inquiry</a> 
| <a href="withdraw.php">Withdraw</a> | <a href="deposit.php">Deposit</a> | <a href="balancetransfer.php">Balance Transfer</a> 
| <a href="login.php">Log-in</a> | <a href="register.php">Register</a> | <a href="search.php">Search</a> | <a href="contactus.php">Contact us</a> 
| <a href="../admin/index.php">Admin</a><!-- #EndLibraryItem --></div>
	<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="pelicanbank"; // Database name 
$tbl_name="admin"; // Table name 

// Connect to server and select databse.
$conn = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($conn, "$db_name")or die("cannot select DB");

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
	//session_start();
	//session_register("myusername");
	//session_register("mypassword"); 
	header("location: users.php");
}
else {
	echo "Wrong Username or Password";
}
?>

</body>
</html>