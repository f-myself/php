<?php

include "config.php";
include "functions.php";

$statusMessage = NULL;
$tableStatus = NULL;

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	if ($_FILES)
	{
		$uploadResult = fileUpload($_FILES);
		setcookie("statusMessage", $uploadResult, time() + 2);
		header("Location: index.php");
	}
	
	if ($_POST['path'])
	{
		$deleteResult = deleteFile($_POST);
		setcookie("deleteStatus", $deleteResult, time() + 2);
		header("Location: index.php");
	}
}

$filesInfo = getFilesInfo();

include "templates/index.php";
