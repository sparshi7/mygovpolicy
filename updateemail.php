<html>
<head>
  <meta charset="UTF-8">
  <title>Update Email</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <link rel="stylesheet"  href="5.css">
            
<style type="text/css">
     a:visited{color:#000000}/*visited link*/
       a:hover {color:#fff;} /*mouse over link*/
    </style>
  
</head>

<body>
  <div class="forgot_password-card">
    <h1>Update Email</h1><br>
  <form name="forgot" method="post" action="updateemailcheck.php">
     <label for="aadhar card no">Aadhar Card No*:</label>
     <input type="number"  style="color: white;" required="on" autocomplete="off" id="aadhar" name="aadhar" value="aadhar" >
	  
	 <label for="DOB">DOB*:</label>
     <input type="date"  style="color: white;" required="on" id="dob" autocomplete="off" name="dob" value="dob">
	 
          <label for="mail">Email*:</label><br/>
          <input type="email" style="color: white; height: 44px;
  font-size: 20px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #333;
  border: 1px solid #333;
  border-top: 1px solid #333;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box; 
 "  required="on" autocomplete="off" id="mail" name="npassword" >

      <br/><br/>

		 
     <input type="submit"  style="color: white;" name="submit" class="forgot_password forgot_password-submit" value="Go">

       <div class="login-help">
     <p><a href="profile.php"><u>Back</u></a></p></div>
    </form>
</div>
</body>  

</html>
