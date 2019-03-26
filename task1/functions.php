<?php

function checkErrorUpload($error)
{
	switch ($error) 
	{
		case '1':
			return ERR_TOO_LARGE;
			break;

		case '2	':
			return ERR_TOO_LARGE;
			break;

		case '3':
			return ERR_NOT_COMPLETELY;
			break;

		case '4':
			return ERR_NO_FILE;
			break;

		case '6':
			return ERR_NO_TMP_DIR;
			break;

		case '7':
			return ERR_DISK_WRITE;
			break;
		
		default:
			return ERR_NO_CODE;
			break;
	}
}

function charsetFileNameToSys($filename)
{
	return mb_convert_encoding($filename, CH_SYS, mb_detect_encoding($filename));
}

function charsetFileNameToUTF8($filename)
{
	return mb_convert_encoding($filename, CH_UTF8, CH_SYS);
}

function getFilesInfo ()
{
	$filesInfo = [];
	if (is_dir(test))
	{
		$fileList = scandir(test);
	} else {
		return "Folder does not exist.";
	}

	if (empty($fileList))
	{
		return "There's no files there";
	}

	/** Adding file names **/
	foreach ($fileList as $value) 
	{
		if ($value != "." and $value != "..")
		{
			array_push($filesInfo, array("name" => charsetFileNameToUTF8($value)));
		}
	}

	print_r($filesInfo);
	/** Adding file sizes **/

	
	
}
