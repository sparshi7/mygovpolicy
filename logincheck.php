<?php 
if ($_POST['submit'] == 'login'){ 
		//Collect POST values 
		$aadhar = $_POST['aadhar']; 
		//echo $aadhar;
		$password = $_POST['password'];
		if($aadhar && $password){ 
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
										$qry="SELECT aadhar_num FROM profile WHERE aadhar_num ='$aadhar' AND password = '$password'"; 
										//Execute query 
										$result=mysql_query($qry); 
										if($result==FALSE)
														echo mysql_error() . '<br>';
										else{
													//Check whether the query was successful or not 
													$count = mysql_num_rows($result);
														
									
													//if query was successful it should fetch 1 matching record from the table. 
													if( $count == 1){ 
																		//Login successful set session variables and redirect to main page. 
																		session_start(); 
																		$_SESSION['IS_AUTHENTICATED'] = 1; 
																		$_SESSION['aadhar'] = $aadhar; 
																		header('location:f1loggedin.php'); 
																	} 
													else{ 
																//Login failed
																echo '<center>Incorrect aadhar number or Password !!!</center><br/><br/>'; 
																include('3.php'); 
																exit(); 
														} 
										}
								} 
		
		} 
		else{ 
					header("location: 3.php"); 
					exit(); 
		} 
		
?>
