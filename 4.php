<?php 
session_start(); 
session_unset(); 
session_destroy(); 
?> <html><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up </title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="4.css">
		
               
    
<style type="text/css">
     a:visited{color:#000000}/*visited link*/
       a:hover {color:#fff;} /*mouse over link*/
    </style>
    </head>
    <body>

      <form name="signup" method="POST" action="signup_after.php">
      
        <h1 style="color: black;">Sign Up</h1>
        
        <fieldset>
          <label for="aadhar card no" style="color: black;">Aadhar Card No*:</label>
          <input type="number"  style="color: white;" required="on" id="aadhar" autocomplete="off" name="aadhar" value="aadhar">
          
          <label for="mail" style="color: black;">Email*:</label>
          <input type="email" style="color: white;"  required="on" autocomplete="off" id="mail" name="email" >
          
          <label for="dob" style="color: black;">DOB*:</label>
          <input required="on"  style="color: white;" id="dob" name="dob" autocomplete="off" type="date" value='dob'/> 
		   
		  <label for="phone" style="color: black;">Phone*:</label>
          <input type="number"  style="color: white;" required="on" id="phone" autocomplete="off" name="phone" value="phone">

          <label style="color: black;">Area*:</label>
          <input type="radio" required="on"  style="color: white;" id="rural" value="rural" autocomplete="off" name="area"><label for="rural" class="light" style="color: black;">Rural</label><br>
          <input type="radio" required="on"  style="color: white;" id="urban" value="urban" autocomplete="off" name="area"><label for="urban" class="light" style="color: black;">Urban</label>     
		  
		  <br/><br/>
		  
		  <label style="color: black;">Income*:</label>
          <input type="radio" required="on"  style="color: white;" id="less" value="less" autocomplete="off" name="income"><label for="less" class="light" style="color: black;"><=2.25 lakh</label><br>
          <input type="radio" required="on"  style="color: white;" id="more" value="more" autocomplete="off" name="income"><label for="more" class="light" style="color: black;">>2.25 lakh</label>
		   
		   <br/><br/>
		  <label style="color: black;">Student*:</label>
          <input type="radio" required="on"  style="color: black;" id="yes" value="yes" autocomplete="off" name="student"><label for="yes" class="light" style="color: black;">Yes</label><br>
          <input type="radio" required="on"  style="color: black;" id="no" value="no" autocomplete="off" name="student"><label for="no" class="light" style="color: black;">No</label>     
		   
		   <br/><br/>
		   
		  <label style="color: black;">Employee*:</label>
          <input type="radio" required="on"  style="color: black;" id="private" autocomplete="off" value="private" name="employee"><label for="private" class="light" style="color: black;">Private</label><br>
          <input type="radio" required="on"  style="color: black;" id="public" autocomplete="off" value="public" name="employee"><label for="public" class="light" style="color: black;">Public</label><br>     
		  <input type="radio" required="on"  style="color: black;" id="no" autocomplete="off" value="no" name="employee"><label for="no" class="light" style="color: black;">None</label><br>
          <br/>

          <label for="category" style="color: black;">Category*:</label>
          <select id="category"  style="color: white;" required="on" autocomplete="off" name="category" value="category">
          <optgroup>
            <option value="gen">GEN </option>
            <option value="obc">OBC </option>
            <option value="sc">SC </option>
            <option value="st">ST </option></optgroup></select>
		  
		  <label for="password" style="color: black;">Password*:</label>
          <input type="password"  style="color: white;" autocomplete="off" required="on" id="password" name="password" >
		  </fieldset>
		 <button type="submit" class="signup signup-submit"  name= "submit" value="signup">Sign Up</button>

      
             <div class="login-help">
        <p><a href="3.php">Already a member?</a></p>  </div>
      </form>
    </body>
</html>