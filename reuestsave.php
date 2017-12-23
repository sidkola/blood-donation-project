<?php

include('db_connect.php');
  
 
 $pname = $_POST['txtPatientName'];
 $pbgroup = $_POST['dpBloodGroup'];
 $age = $_POST['txtAge'];
 $date = $_POST['txtWhenYouNeedDate'];
$unit = $_POST['txtHowManyUnits'];
 $mno = $_POST['txtMobileNumber'];
 $hname = $_POST['txtHospitalName'];
 $location = $_POST['txtLocation'];
$add = $_POST['txtPatientAddress'];
$pur= $_POST['txtPurpose'];
  
 	
	
	$q="INSERT INTO `req` ( `pname`, `pbloodgroup` , `age` , `date` ,`unit`, `mobileno` , `hname` , `location`, `add`, `purpose` ) 
		VALUES (
		 '".$pname."','".$pbgroup."', '".$age."', '".$date."','".$unit."', '".$mno."', '".$hname."','".$location."','".$add."','".$pur."')";

  //Execute SQL Statement 
  
  mysql_query($q);
  echo mysql_error();
  mysql_close();
  header("location: index.php");
?>