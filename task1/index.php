<?php

include "config.php";
include "functions.php";

$statusMessage = NULL;
$tableStatus = NULL;

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	if ($_FILES['ulpoad'])
	{
		if(move_uploaded_file($_FILES['upload']['tmp_name'], DIR_PATH . charsetFileNameToSys(basename($_FILES['upload']['name']))))
		{
			setcookie("statusMessage", OK_FILE_UPLOAD, time() + 2);
			header("Location: index.php");
		} else {
			setcookie("statusMessage", checkErrorUpload($_FILES['upload']['error']), time() + 2);
			header("Location: index.php");
		}
	}
	
	if ($_POST['path']) 
	{
		if(unlink ($_POST['path']))
		{
			setcookie("deleteStatus", OK_DELETED, time() + 2);
			header("Location: index.php");
		} else {
			setcookie("deleteStatus", ERR_DELETED, time() + 2);
			header("Location: index.php");
		}
	}
}

$filesInfo = getFilesInfo();

include "templates/index.php";
