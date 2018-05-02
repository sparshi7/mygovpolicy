<?php 
if ($_POST['submit'] == "Go"){
		echo "Hello";
		//Collect POST values 
		$validationFlag = false;
		$nemail = $_POST['nemail'];
		$nphone = $_POST['nphone'];
		$narea = $_POST['narea'];
		$nincome = $_POST['nincome'];
		$nstudent = $_POST['nstudent'];
		$nemployee = $_POST['nemployee'];
		if($_POST['nemail'] ||  $_POST['nphone'] || $_POST['narea'] || $_POST['nincome'] || $_POST['nstudent'] || $_POST['nemployee']){$validationFlag = true;}
		if($validationFlag = true){ 
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
										$c1=0;
										$c2=0;
										$c3=0;
										$c4=0;
										$c5=0;
										$c6=0;
													if($_POST['nemail']){ 
													$u1 = "UPDATE profile SET email = '$nemail' WHERE aadhar_no=".$_SESSION['aadhar'] ;
													$r1=mysql_query($u1);													
													$c1=1; 
													} 
													else{echo mysql_error() . '<br>'; }
													if($_POST['nphone']){ 
													$u2 = "UPDATE profile SET phone = '$nphone' WHERE aadhar_no=".$_SESSION['aadhar'] ; 
													$r2=mysql_query($u2);
													$c2=1;
													} 
													else{echo mysql_error() . '<br>'; }
													if($_POST['narea']){ 
													$u3 = "UPDATE profile SET area = '$narea' WHERE aadhar_no=".$_SESSION['aadhar'] ; 
													$r3=mysql_query($u3);
													$c3=1;
													} 
													else{echo mysql_error() . '<br>'; }
													if($_POST['nincome']){ 
													$u4 = "UPDATE profile SET email = '$nincome' WHERE aadhar_no=".$_SESSION['aadhar'] ; 
													 $r4=mysql_query($u4);
													 $c4=1;
													} 
													else{echo mysql_error() . '<br>'; }
													if($_POST['nstudent']){ 
													$u5 ="UPDATE profile SET student = '$nstudent' WHERE aadhar_no=".$_SESSION['aadhar'] ; 
													 $r5=mysql_query($u5);
													 $c5=1;
													} 
													else{echo mysql_error() . '<br>'; }
													if($_POST['nemployed']){ 
													$u6 = "UPDATE profile SET employed = '$nemployee' WHERE aadhar_no=".$_SESSION['aadhar'] ; 
													 $r6=mysql_query($u6);
													 $c6=1;
													}
													else{echo mysql_error() . '<br>'; }													
													
													
													
													
													if($c1==1 || $c2==1 ||$c3==1 || $c4==1 || $c5==1 || $c6==1)
													{
 
																		
																		header('location:f1loggedin.php'); 
																	 
													}
													else{
														echo "Nothing to update!!";
														header("location: update.php");
																						
														
													}
											 
										
										} 
								 
		
		 
		} 
		else{ 
					header("location: 3.php"); 
					exit(); 
		} 
?>
