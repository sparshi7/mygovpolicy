<?php 
if ($_POST['submit'] == 'signup'){ 
		//Collect POST values 
		$aadhar = $_POST['aadhar']; 
		//echo $aadhar;
		$email=$_POST['email'];
		$dob=$_POST['dob'];
		$dob=preg_replace('#(\d{2})/(\d{2})/(\d{4})\s(.*)#','$3-$2-$1 $4',$dob);
		//$dob = preg_replace( "/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/i", "$3-$2-$1", $_POST['dob']);
		//echo $dob;
		$phone=$_POST['phone'];
		$area=$_POST['area'];
		$income=$_POST['income'];
		$student=$_POST['student'];
		$employee=$_POST['employee'];
		$category=$_POST['category'];
		$password = $_POST['password'];
		if($aadhar && $email &&$dob &&$phone && $area && $income && $student && $employee && $category && $password){ 
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
										$q1="SELECT aadhar_no from aadhar where aadhar_no = '$aadhar' and dob= '$dob'";
										$r1=mysql_query($q1);
										$q2="SELECT aadhar_num from profile where aadhar_num = '$aadhar' and dob= '$dob'";
										$r2=mysql_query($q2);
										$c1=mysql_num_rows($r1);
										$c2=mysql_num_rows($r2);
										/*if($r1==FALSE)
														echo mysql_error() . '<br>';*/
										//else{
												
												if($c1==1){
													if($c2==1)
																{  echo '<center><div style="color: #000;">User already exists !!!</div></center><br/><br/>'; 
																			include("4.php"); 
																			exit();
																}
																else {
															$qry="INSERT into profile (aadhar_num,password,category,income,area,phone,mail_id,student,employed,dob) values ('$aadhar','$password','$category','$income','$area','$phone','$email','$student','$employee','$dob')"; 
															$r=mysql_query($qry);
															
															/*if($r==FALSE)
																echo mysql_error() . '<br>';*/
															//else {
															
															//Execute query 
															//$result=mysql_query($qry); 
															//Check whether the query was successful or not 
													
																								
															//if query was successful it should fetch 1 matching record from the table. 
																//Login successful set session variables and redirect to main page. 
																
															session_start(); 
																				$_SESSION['IS_AUTHENTICATED'] = 1; 
																				$_SESSION['aadhar'] = $aadhar; 
																				header('location:f1loggedin.php'); }
																				
																				
																				
														//	}											 
													
											 
														}
										//}
														else {
															echo '<center><div style="color: #000;">Incorrect aadhar card number or date of birth !!</div></center><br/><br/>';
															include('4.php');
														//
												}
										
								} 
		
		} 
		else{  
					header("location: 4.php"); 
					exit(); 
		} 
?>
