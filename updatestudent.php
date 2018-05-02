<html >
<head>
  <meta charset="UTF-8">
  <title>Update Student</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <link rel="stylesheet"  href="5.css">
            
<style type="text/css">
     a:visited{color:#000000}/*visited link*/
       a:hover {color:#fff;} /*mouse over link*/
    </style>
  
</head>

<body>
  <div class="forgot_password-card">
    <h1>Update Student</h1><br>
  <form name="forgot" method="post" action="updatestudentcheck.php">
     <label for="aadhar card no">Aadhar Card No*:</label>
     <input type="number"  style="color: white;" required="on" autocomplete="off" id="aadhar" name="aadhar" value="aadhar" >
	  
	 <label for="DOB">DOB*:</label>
     <input type="date"  style="color: white;" required="on" id="dob" autocomplete="off" name="dob" value="dob">
	 
           <label>Student*:</label><br/>
          <input type="radio" required="on"  style="color: white;" id="yes" value="yes" autocomplete="off" name="npassword"><label for="yes" class="light">Yes</label><br>
          <input type="radio" required="on"  style="color: white;" id="no" value="no" autocomplete="off" name="npassword"><label for="no" class="light">No</label>     
       
       <br/><br/>
       

		 
     <input type="submit"  style="color: white;" name="submit" class="forgot_password forgot_password-submit" value="Go">

       <div class="login-help">
     <p><a href="profile.php"><u>Back</u></a></p></div>
    </form>
</div>
</body>  

</html>
