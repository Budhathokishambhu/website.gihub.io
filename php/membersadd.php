<!doctype html>
<html><!-- InstanceBegin template="/Templates/maintemplate.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Welcome to Pelican Bank</title>
<!-- InstanceEndEditable -->
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: #f3f3f3;
}

li {
  float: left;
}

li a {
  display: block;
  color: #666;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #ddd;
}

li a.active {
  color: white;
  background-color: #4CAF50;
}
body {
  background-color: #c7f2cc;
}
.container {
  position: relative;
  font-family: Arial;
}

.text-block {
  position: absolute;
  bottom: 20px;
  right: 20px;
 
  color: white;
  padding-left: 20px;
  padding-right: 20px;
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
<div id="main">
  <form action="insertrecords.php" method="post" name="membersadd" id="membersadd">
    <table width="300" border="0" align="center">
      <tbody>
        <tr>
          <td colspan="2" align="center" bgcolor="#72ED9E">Members Add</td>
          </tr>
        <tr>
          <td width="125">Customer ID</td>
          <td width="159"><input type="text" name="cid" id="cid"></td>
        </tr>
        <tr>
          <td>Customer Name</td>
          <td><input type="text" name="cname" id="cname"></td>
        </tr>
        <tr>
          <td>Address</td>
          <td><input type="text" name="caddress" id="caddress"></td>
        </tr>
        <tr>
          <td>Telephone</td>
          <td><input type="text" name="tel" id="tel"></td>
        </tr>
        <tr>
          <td>Mobile</td>
          <td><input type="text" name="mobile" id="mobile"></td>
        </tr>
        <tr>
          <td>E-mail</td>
          <td><input type="email" name="email" id="email"></td>
        </tr>
        <tr>
          <td>User Name</td>
          <td><input type="text" name="username" id="username"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password2" id="password2"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="submit3" id="submit3" value="Add"></td>
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
  <p>&nbsp;</p>
</div>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="footer" -->
<div id="footer"><!-- #BeginLibraryItem "/Library/footer.lbi" -->
<a href="../index.php">Home</a> | <a href="copyright.php">Copyright</a> | <a href="privacypolicy.php">Privacy Policy</a> | <a href="legalissues.php">Legal issues</a> | <a href="helpandsupport.php">Help &amp; Support</a> | <a href="contactus.php">Contact us</a><!-- #EndLibraryItem --></div>
<!-- InstanceEndEditable --></div>
</body>
<!-- InstanceEnd --></html>