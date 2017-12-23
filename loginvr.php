<?php
session_start();
session_destroy();
$user = "";
$pass = "";
$msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	include 'sql.php';

	$user = $_POST['uname'];
	$pass = $_POST['pword'];
		
	//unwanted HTML (scripting attacks)
	$user = htmlspecialchars($user);
	$pass = htmlspecialchars($pass);
	
	$SQL = "SELECT * FROM info";
	$result = mysql_query($SQL);
	while ($db_field = mysql_fetch_assoc($result)) {
		$a = $db_field['username'];
		$b = $db_field['password'];
		$pos = $db_field['position'];
		if(($user == $a) AND ($pass == $b)){
			if($pos == "admin"){
				session_start();
				$_SESSION['username'] = $user;
				$_SESSION['admin'] = "log";
				mysql_close($db_handle);
				header("Location: admin.php");
				break;
			}
			
		}
	}
	$msg = "Check username and/or password.";
			header("Location: admin.php");	
mysql_close($db_handle);
}
?>