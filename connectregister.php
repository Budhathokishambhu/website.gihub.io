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
$id=$_POST['id'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];	
$username=$_POST['username'];
$password=$_POST['password'];
$code=$_POST['code'];





// Insert data into mysql 
$sql="INSERT INTO $tbl_name( id, name, mobile, email, username, password, code) VALUES('id', '$name', '$mobile', '$email','$username', '$password', 'code')";
$result=mysqli_query($conn, $sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Thank You ! Your account registered Successfully  !.";
echo "<BR>";
echo "<a href='login.php'><button>Back to Login</button></a>";
}

else {
echo "ERROR";
}
?>

</body>
</html>