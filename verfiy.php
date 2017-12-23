<?php

if($_POST['txtusr']=="admin" && $_POST['txtpass']=="123")
{

header("Location:index.php");
}
else
{
header("Location:login.php");
}

?>