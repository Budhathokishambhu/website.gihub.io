<!doctype html>
<html><!-- InstanceBegin template="/Templates/maintemplate.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
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
  <div class="container"><!-- #BeginLibraryItem "/Library/header.lbi" -->
<img src="images/index.jpg" height="150px" alt="logo" style="width:100%;"/><div class="text-block">
    <h1>Welcome To ABC Bank</h1></div>
</div>	
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="navigation" -->

<ul>
<li><a class="active" href="index.php">Home</a></li><li><a href="php/aboutus.php">About us</a> </li><li><a href="php/balanceinquiry.php">Balance inquiry</a></li><li><a href="php/withdraw.php">Withdraw</a> </li><li>
 <a href="php/deposit.php">Deposit</a> </li><li> <a href="php/balancetransfer.php">Balance Transfer</a> </li><li> <a href="php/login.php">Log-in</a> 
 </li> <li><a href="php/register.php">Register</a> </li><li> <a href="php/search.php">Search</a> </li> <li><a href="php/contactus.php">Contact us</a></li>
 <li><a href="admin/index.php">Admin</a></li><!-- #EndLibraryItem -->
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="sidebar" -->
</ul>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="sidebar" -->
</br>
<div id="sidebar">
  <form action="php/search.php" method="post" name="search" id="search">
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
  <p> <img src="images/aa.jpg" align="right" height="300px"> </p>
   <p> ABC bank is one of the most trusted Bank in Australia. It provides customers with huge range of functions. It provides customers with high interest rate. Now a days its becoming
popular among the people.</P>
<p>Mission & Vision</p>
<p>At Bank of Sydney we are committed to being Australia's leading people-focused bank. We aspire to deliver quality services and products that meet our customers financial needs
while delivering an exceptional experience. Our position in the retail market has gone from strength to strength with above-market home loan and deposit growth with our digital 
achievements over the past several months have enabled us to improve our interactions 
with customers wherever they may be - remotely or in our branches.   </p>
  <p>&nbsp;</p>
  <form action="php/login.php" method="post" name="login" id="login">
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
          <td><a href="php/register.php">Register</a></td>
          <td><input type="submit" name="submit2" id="submit2" value="Login"></td>
        </tr>
      </tbody>
    </table>
  </form>
 
</div>
</br>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="maincontents" -->

<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="footer" -->
<div id="footer"><!-- #BeginLibraryItem "/Library/footer.lbi" -->
<a href="index.php">Home</a> | <a href="php/copyright.php">Copyright</a> | <a href="php/privacypolicy.php">Privacy Policy</a> | <a href="php/legalissues.php">Legal issues</a> | <a href="php/helpandsupport.php">Help &amp; Support</a> | <a href="php/contactus.php">Contact us</a><!-- #EndLibraryItem --></div>
<!-- InstanceEndEditable --></div>
</body>
<!-- InstanceEnd --></html>