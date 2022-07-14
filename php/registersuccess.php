<!doctype html>
<html><!-- InstanceBegin template="/Templates/maintemplate.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Welcome to ABC Bank</title>
<!-- InstanceEndEditable -->
<style>
body {
  background-color: #c7f2cc;
}
</style>
</head>

<body>
<div id="wrapper"><!-- InstanceBeginEditable name="header" -->
  <div id="header"><!-- #BeginLibraryItem "/Library/header.lbi" -->
<img src="../images/index.jpg" width="100%" height="150px" alt=""/></div>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="navigation" -->
<div id="nav"><!-- #BeginLibraryItem "/Library/navigation.lbi" -->
<a href="../index.php">Home</a> | <a href="aboutus.php">About us</a> | <a href="balanceinquiry.php">Balance inquiry</a> | <a href="withdraw.php">Withdraw</a> | <a href="deposit.php">Deposit</a> | <a href="balancetransfer.php">Balance Transfer</a> | <a href="login.php">Log-in</a> | <a href="register.php">Register</a> | <a href="search.php">Search</a> | <a href="contactus.php">Contact us</a> | <a href="../admin/index.php">Admin</a><!-- #EndLibraryItem --></div>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="sidebar" -->
<div id="sidebar">
  <form action="search.php" method="post" name="search" id="search">
    <table width="200" border="1">
      <tbody>
        <tr>
          <td colspan="2" bgcolor="#716BFB">Search</td>
        </tr>
        <tr>
          <td><input name="searchtext" type="text" id="searchtext" size="15"></td>
          <td><input type="submit" name="submit" id="submit" value="search"></td>
        </tr>
      </tbody>
    </table>
  </form>
  <p>&nbsp;</p>
  <form action="login.php" method="post" name="login" id="login">
    <table width="200" border="1">
      <tbody>
        <tr>
          <td colspan="2" bgcolor="#6761F7">Log-in</td>
        </tr>
        <tr>
          <td>user name</td>
          <td><input name="username" type="text" id="username" size="15"></td>
        </tr>
        <tr>
          <td>password</td>
          <td><input name="password" type="password" id="password" size="15"></td>
        </tr>
        <tr>
          <td><a href="register.php">Register</a></td>
          <td><input type="submit" name="submit2" id="submit2" value="Login"></td>
        </tr>
      </tbody>
    </table>
  </form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="maincontents" -->
<div id="main"><?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pelicanbank";

//check whether data with the name usename has been submitted
if (isset($_POST['username'])) {
//variables to hold our submitted data with post
$cid = $_POST['cid'];
$cname = $_POST['cname'];
$add = $_POST['caddress'];
$tel = $_POST['tel'];
$mob = $_POST['mob'];
$email = $_POST['email'];
$username = $_POST['uname'];
$password = md5($_POST['password']);
//our sql statement that we will execute
$sql = "INSERT INTO `customer` (`customerID`,  `customerName`, `address`, `telephone`, `mobile`,  `email`, `username`, `password`) VALUES (‘$cid’, ‘$cname’, ‘$add’, ‘$tel’, ‘$mob’, '$email', '$username', '$password')";
//Executing the sql query with the connection
$re = mysqli_query($con, $sql);
//Check to see whether request was true or false
if ($re) {
echo "Successfully Registered";
}else {
echo "An Error Occured";
}
}
?>
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
$cid = $_POST['cid'];
$cname = $_POST['cname'];
$add = $_POST['caddress'];
$tel = $_POST['tel'];
$mob = $_POST['mob'];
$email = $_POST['email'];
$username = $_POST['uname'];
$password = $_POST['password'];


// Insert data into mysql 
$sql = "INSERT INTO 'customer' ('customerID',  'customerName', 'customerAddress', 'tel', 'mobile',  'email', 'userName', 'password') VALUES ('$cid', '$cname', '$add', '$tel', '$mob', '$email', '$username', '$password')";
$result=mysqli_query($conn, $sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='insert.php'>Back to main page</a>";
}

else {
echo "ERROR, call nirmal";
}
?>
</div>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="footer" -->
<div id="footer"><!-- #BeginLibraryItem "/Library/footer.lbi" -->
<a href="../index.php">Home</a> | <a href="copyright.php">Copyright</a> | <a href="privacypolicy.php">Privacy Policy</a> | <a href="legalissues.php">Legal issues</a> | <a href="helpandsupport.php">Help &amp; Support</a> | <a href="contactus.php">Contact us</a><!-- #EndLibraryItem --></div>
<!-- InstanceEndEditable --></div>
</body>
<!-- InstanceEnd --></html>