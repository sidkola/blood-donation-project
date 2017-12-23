<?php

include('db_connect.php');
  
 
 $name = $_POST['txtFullName'];
 $bgroup = $_POST['dpBloodGroup'];
 $gen = $_POST['dpGender'];
 $dob = $_POST['txtDOB'];
$mno = $_POST['txtMobileNumber'];
 $State = $_POST['dpState'];
 $dis = $_POST['district'];
 $city = $_POST['city'];
$email = $_POST['txtEmailId'];
$add = $_POST['txtPermentAddress'];
$uid = $_POST['txtUserName'];
$pass = $_POST['txtUserPassword'];
  
 	$Customer_id = rand(0,9999);
	
	//SQL Statement for inserting records
	
	$q="INSERT INTO `reg` ( `name`, `bloodgroup` , `gender` , `dob` ,`mobileno`, `State` , `district` , `city`, `email`, `add`, `userid`, `password` ) 
		VALUES (
		 '".$name."','".$bgroup."', '".$gen."', '".$dob."','".$mno."', '".$State."', '".$dis."','".$city."','".$email."','".$add."','".$uid."','".$pass."')";

  //Execute SQL Statement 
  
  mysql_query($q);
  echo mysql_error();
  mysql_close();
  header("location: index.php");
?>