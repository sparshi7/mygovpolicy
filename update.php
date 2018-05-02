
<?php 
session_start(); 
session_unset(); 
session_destroy(); 
?> 
<html >
<head>
  <meta charset="UTF-8">
  <title>Update Profile</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  
               
    
	 
<link rel="stylesheet" type="text/css" href="update.css">
<style type="text/css">
     a:visited{color:#000000}/*visited link*/
       a:hover {color:#fff;} /*mouse over link*/
    </style>
	

  
</head>

<body>

  <form name="update" method="POST" action="updatecheck.php">
    <h1>Update your profile</h1><br>
  
  <fieldset>
  
          <label for="mail">New Email:</label><br/><br/>
          <input type="email"  id="nmail" name="nemail" >
     
          <label for="phone">New Moblie Number:</label><br/><br/>
          <input type="number"  id="nphone" name="nphone" >
          
          <label>Area:</label>
          <input type="radio"  id="nrural" value="nrural" name="narea"><label for="nrural" class="light">Rural</label><br>
          <input type="radio" id="nurban" value="nurban" name="narea"><label for="nurban" class="light">Urban</label>     
		  
		  <br/><br/>
		  
		  <label>Income:</label>
          <input type="radio"  id="nless" value="nless" name="nincome"><label for="less" class="light"><=2.25 lakh</label><br>
          <input type="radio"  id="nmore" value="nmore" name="nincome"><label for="more" class="light">>2.25 lakh</label>
		   
		   <br/><br/>
		  <label>Student:</label>
          <input type="radio"  id="nyes" value="nyes" name="nstudent"><label for="nyes" class="light">Yes</label><br>
          <input type="radio"  id="nno" value="nno" name="nstudent"><label for="nno" class="light">No</label>     
		   
		   <br/><br/>
		   
		  <label>Employee:</label>
          <input type="radio"  id="nprivate" value="nprivate" name="nemployee"><label for="nprivate" class="light">Private</label><br>
          <input type="radio"  id="npublic" value="npublic" name="nemployee"><label for="npublic" class="light">Public</label><br>     
		  <input type="radio"  id="nno" value="nno" name="nemployee"><label for="nno" class="light">None/Other</label>
          <br/><br/>
		  </fieldset>
		 
     
	 <button type="submit" name="submit" class="signup signup-submit" value="Go">Go</button>

  
       <div class="login-help">
     <p><a href="f1loggedin.php"><u>Back</u></a></p></div>
    </form>

</body>  

</html>
