<!doctype html>
<html><!-- InstanceBegin template="/Templates/maintemplate.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<style>
body {
  background-color: #c7f2cc;
}
form {
	border: 5px;
	float:center;
	}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
  
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.login {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
	 float: left;
  }
}
</style>
</head>

<body>
<div id="wrapper"><!-- InstanceBeginEditable name="header" -->
  <div id="header"><!-- #BeginLibraryItem "/Library/header.lbi" -->
<img src="../images/index.jpg" width="100%" height="150" alt=""/></div>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="navigation" -->
<div id="nav"><!-- #BeginLibraryItem "/Library/navigation.lbi" -->
<a href="../index.php">Home</a> | <a href="aboutus.php">About us</a> | 
<a href="balanceinquiry.php">Balance inquiry</a> | <a href="withdraw.php">Withdraw</a> |
 <a href="deposit.php">Deposit</a> | <a href="balancetransfer.php">Balance Transfer</a> |
 <a href="login.php">Log-in</a> | <a href="register.php">Register</a> | <a href="search.php">Search</a> 
 | <a href="contactus.php">Contact us</a> | <a href="../admin/index.php">Admin</a><!-- #EndLibraryItem --></div>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="sidebar" -->

<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="maincontents" -->
  
<div id="main">
  <form action="/php/userlogin.php" method="post">
  <div class="imgcontainer"> <img src="../images/login.png" width="100px" height="100px" align="center" />

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw"><a href="">Forgot Password</a> <a href="../php/register.php">Register</a></span>
  </div>
</form>
</div>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="footer" -->
<div id="footer"><!-- #BeginLibraryItem "/Library/footer.lbi" -->
<a href="../index.php">Home</a> | <a href="copyright.php">Copyright</a> | <a href="privacypolicy.php">Privacy Policy</a> | <a href="legalissues.php">Legal issues</a> | <a href="helpandsupport.php">Help &amp; Support</a> | <a href="contactus.php">Contact us</a><!-- #EndLibraryItem --></div>
<!-- InstanceEndEditable --></div>
</body>
<!-- InstanceEnd --></html>