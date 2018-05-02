<html >
<head>
  <meta charset="UTF-8">
  <title>Update Employed</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <link rel="stylesheet"  href="5.css">
            
<style type="text/css">
     a:visited{color:#000000}/*visited link*/
       a:hover {color:#fff;} /*mouse over link*/
    </style>
  
</head>

<body>
  <div class="forgot_password-card">
    <h1>Update Employed</h1><br>
  <form name="forgot" method="post" action="updateemployedcheck.php">
     <label for="aadhar card no">Aadhar Card No*:</label>
     <input type="number"  style="color: white;" required="on" autocomplete="off" id="aadhar" name="aadhar" value="aadhar" >
	  
	 <label for="DOB">DOB*:</label>
     <input type="date"  style="color: white;" required="on" id="dob" autocomplete="off" name="dob" value="dob">
	 
        <label>Employee*:</label><br/>
          <input type="radio" required="on"  style="color: white;" id="private" autocomplete="off" value="private" name="npassword"><label for="private" class="light">Private</label><br>
          <input type="radio" required="on"  style="color: white;" id="public" autocomplete="off" value="public" name="npassword"><label for="public" class="light">Public</label><br>     
      <input type="radio" required="on"  style="color: white;" id="no" autocomplete="off" value="no" name="npassword"><label for="no" class="light">None</label><br>
          <br/>

		 
     <input type="submit"  style="color: white;" name="submit" class="forgot_password forgot_password-submit" value="Go">

       <div class="login-help">
     <p><a href="profile.php"><u>Back</u></a></p></div>
    </form>
</div>
</body>  

</html>
