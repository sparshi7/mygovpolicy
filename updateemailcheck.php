<?php 
//Start the session to see if the user is authencticated user. 
session_start(); 
//Check if the session variable for user authentication is set, if not redirect to login page. 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
//include the menu 
//require('menu.php');


} 
else{ 
header('location:3.php'); 
exit(); 
}  ?>
<?php 
if ($_POST['submit'] == 'Go'){ 
    //Collect POST values 
    $aadhar = $_POST['aadhar'];
    //echo $aadhar;
    $dob=$_POST['dob'];
    $dob=preg_replace('#(\d{2})/(\d{2})/(\d{4})\s(.*)#','$3-$2-$1 $4',$dob);
    $npassword = $_POST['npassword'];
    if($aadhar && $dob && $npassword){ 
                    //Connect to mysql server 
                    $link = @mysql_connect('localhost', 'root', ''); 
                    //Check link to the mysql server 
                    if(!$link) { 
                            die('Failed to connect to server: ' . mysql_error()); 
                           } 
                    //Select database 
                    $db = mysql_select_db('posses'); 
                    if(!$db) { 
                        die("Unable to select database"); 
                        } 
                    //Create query (if you have a Logins table the you can select login id and password from there)
                    $q1="select * from aadhar where aadhar_no='$aadhar' and dob='$dob'";
                    $r1=mysql_query($q1);
                    $c1=mysql_num_rows($r1);
                    if($c1==1){
                          $qry="update profile set mail_id='$npassword' where aadhar_num='$aadhar'"; 
                          $r=mysql_query($qry);
                          
                          if($r==FALSE)
                            echo mysql_error() . '<br>';
                          else 
                          {
                          //Execute query 
                          //$result=mysql_query($qry); 
                          //Check whether the query was successful or not 
                          //$count = mysql_num_rows($result);
                                            
                          //if query was successful it should fetch 1 matching record from the table. 
                            //Login successful set session variables and redirect to main page. 
                          //          session_start(); 
                          //          $_SESSION['IS_AUTHENTICATED'] = 1; 
                          //          $_SESSION['aadhar'] = $aadh
                                    header('location: profile.php'); 
                                   
                          }
                       
                    }
                    else{ 
                          //Login failed 
                          include('updateemail.php'); 
                          echo '<center>Incorrect aadhar number or date of birth !!!<center>'; 
                          
                    } 
                } 
    
     
    } 
    else{ 
          header("location: profile.php"); 
          
    } 
?>
