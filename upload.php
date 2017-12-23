<?php

if(move_uploaded_file($_FILES["myfile"]["tmp_name"],'upload/'.$_FILES["myfile"]["name"]))
{
	echo "File Uploded Sucessfully";
}
else
{
	echo "Loading fail";
}
?>