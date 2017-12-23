<?php

if($_POST['txtusr']=="admin" && $_POST['txtpass']=="123")
{

header("Location:home.php");
}
else
{
header("Location:index.php");
}

?>