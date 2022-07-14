<!doctype html>
<html><!-- InstanceBegin template="file:///E|/Templates/maintemplate.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Welcome to ABC Bank</title>
<style>
body {
  background-color: #c7f2cc;
}
</style>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div id="wrapper"><!-- InstanceBeginEditable name="Header" -->
  <div id="header"><!-- #BeginLibraryItem "/Library/Header.lbi" --><img src="../images/index.jpg" width="100%" height="150" alt=""/></div>
<div id="nav"><!-- #BeginLibraryItem "/Library/navigation.lbi" -->
<a href="../index.php">Home</a> | <a href="aboutus.php">About us</a> | <a href="balanceinquiry.php">Balance inquiry</a> | <a href="withdraw.php">Withdraw</a> | <a href="deposit.php">Deposit</a> | <a href="balancetransfer.php">Balance Transfer</a> | <a href="login.php">Log-in</a> | <a href="register.php">Register</a> | <a href="search.php">Search</a> | <a href="contactus.php">Contact us</a> | <a href="../admin/index.php">Admin</a><!-- #EndLibraryItem --></div>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="sidebar" -->

  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="maincontents" -->
<div id="main"> 
		<?php
            include('db_connect.php');
            $sql = "SELECT * FROM customer";
            $result = $connect->query($sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo 'customerID: '.$row['customerID'];
                echo '<br/> Name: '.$row['customerName'];
                echo '<br/> Address: '.$row['customerAddress'];
                echo '<br/> tel: '.$row['tel'];
                echo '<br/> mobile: '.$row['mobile'];
				echo '<br/> email: '.$row['email'];	
				echo '<br/> username: '.$row['userName'];	
				echo '<br/> password: '.$row['password'];	
                echo '<br/><br/>';

                }
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?>

  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="footer" -->
<div id="footer">
  <p><!-- #BeginLibraryItem "/Library/footer.lbi" -->Home | Copyright | Privacy Policy	| Legal Issues | Help and Support | Contact us <!-- #EndLibraryItem --></p>
  <p>&nbsp;</p>
</div>
<!-- InstanceEndEditable --></div>
</body>
<!-- InstanceEnd --></html>