
<?php 
session_start(); 
session_unset(); 
session_destroy(); 
?> 
<html >
<head>
  <meta charset="UTF-8">
  <title>Log-in</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <link rel="stylesheet" type="text/css" href="3.css">
    <style type="text/css">
	   a:visited{color:#000000}/*visited link*/
       a:hover {color:#fff;} /*mouse over link*/
    </style>
  
</head>

<body>
  <div class="login-card">
    <h1 style="color: black;">Log In</h1><br>
  <form name="login" method="POST" action="logincheck.php">
     <label for="aadhar card no" style="color: black;">Aadhar Card No*:</label>
     <input type="number" style="color: white;" autocomplete="off" required="on" id="aadhar" name="aadhar" class="login login-card" >
	 
	 <label for="password" style="color: black;" >Password*:</label>
     <input type="password"  style="color: white;" autocomplete="off" required="on" id="password" name="password" class="login login-card" >
		 
      <br/> <br/>  
     <input type="submit" name="submit" class="login login-submit" value="login">
  </form>
    
  <div class="login-help">
    <a href="4.php"><u>Sign Up</u></a> / <a href="5.php" ><u>Forgot Password?</u></a>
  </div>
</div>

</html>
