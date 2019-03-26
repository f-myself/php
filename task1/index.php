<?php

include "config.php";
include "functions.php";

$statusMessage = NULL;
$tableStatus = NULL;

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	if(move_uploaded_file($_FILES['upload']['tmp_name'], DIR_PATH . charsetFileNameToSys(basename($_FILES['upload']['name']))))
	{
		$statusMessage = OK_FILE_UPLOAD;
	} else {
		$statusMessage = checkErrorUpload($_FILES['upload']['error']);
	}
}
echo "<pre>";
echo getFilesInfo();
echo "</pre>";


include "templates/index.php";
