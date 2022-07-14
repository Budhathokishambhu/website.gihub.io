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
$db_name="pelicanbank"; // Database name 
$tbl_name="customer"; // Table name 

// Connect to server and select database.
$conn = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($conn, "$db_name")or die("cannot select DB");

// Get values from form 
$cid=$_POST['cid'];	
$cname=$_POST['cname'];
$add=$_POST['caddress'];
$tel=$_POST['tel'];
$mob=$_POST['mobile'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password2'];


// Insert data into mysql 
$sql="INSERT INTO $tbl_name(customerID, customerName, customerAddress, tel, mobile, email, userName, password) VALUES('$cid','$cname', '$add', '$tel', '$mob', '$email', '$username', '$password')";
$result=mysqli_query($conn, $sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='membersadd.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?>

</body>
</html>