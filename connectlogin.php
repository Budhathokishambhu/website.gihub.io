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
$tbl_name="contactform"; // Table name 

// Connect to server and select database.
$conn = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($conn, "$db_name")or die("cannot select DB");

// Get values from form 
$name=$_POST['name'];	
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$message=$_POST['message'];



// Insert data into mysql 
$sql="INSERT INTO $tbl_name(name, email, mobile, message) VALUES('$name','$email', '$mobile', '$message')";
$result=mysqli_query($conn, $sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Thank You ! Your message sent successfully !.";
echo "<BR>";
echo "<a href='contact.php'><button>Back to Website</button></a>";
}

else {
echo "ERROR";
}
?>

</body>
</html>