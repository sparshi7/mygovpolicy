<html >
<head>
  <meta charset="UTF-8">
  <title>Update Area</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <link rel="stylesheet"  href="5.css">
            
<style type="text/css">
     a:visited{color:#000000}/*visited link*/
       a:hover {color:#fff;} /*mouse over link*/
    </style>
  
</head>

<body>
  <div class="forgot_password-card">
    <h1>Update Area</h1><br>
  <form name="forgot" method="post" action="updateareacheck.php">
     <label for="aadhar card no">Aadhar Card No*:</label>
     <input type="number"  style="color: white;" required="on" autocomplete="off" id="aadhar" name="aadhar" value="aadhar" >
	  
	 <label for="DOB">DOB*:</label>
     <input type="date"  style="color: white;" required="on" id="dob" autocomplete="off" name="dob" value="dob">
	 
	<label>Area*:</label><br/>
          <input type="radio" required="on"  style="color: white;" id="rural" value="rural" autocomplete="off" name="npassword"><label for="rural" class="light">Rural</label><br>
          <input type="radio" required="on"  style="color: white;" id="urban" value="urban" autocomplete="off" name="npassword"><label for="urban" class="light">Urban</label>     
      
      <br/><br/>

		 
     <input type="submit"  style="color: white;" name="submit" class="forgot_password forgot_password-submit" value="Go">

       <div class="login-help">
     <p><a href="profile.php"><u>Back</u></a></p></div>
    </form>
</div>
</body>  

</html>
