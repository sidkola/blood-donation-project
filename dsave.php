<?php

include('db_connect.php');
  
 $bgroup = $_POST['dpBloodGroup'];
 $name = $_POST['dname'];
$unit = $_POST['unit'];
  $dt = $_POST['dt'];
$mno = $_POST['mnum'];
 $state = $_POST['state'];
 $dis = $_POST['dist'];
 $city = $_POST['city'];


	
	//$q="INSERT INTO `donarreg` ( `bloodgroup`, `state` , `district` , `city` ,`name`, `unit` , `date`, `mobileno` ) 
		
	//VALUES ('".$bgroup."', '".$state."', '".$dis."', '".$city."', '".$name."', '".$unit."', '".$dt."','".$mno."')";
$sq="insert into donarreg values ('$bgroup','$state','$dis','$city','$name',$unit,'$dt','$mno')";

  //Execute SQL Statement 
  $res=mysql_query($sq);
if($res>0)
	echo "addedd";
else 
	echo "error";
  echo mysql_error();
  mysql_close();

  $res=mysql_query($sq);
  echo mysql_error();
  mysql_close();
  header("location: index.php");
?>