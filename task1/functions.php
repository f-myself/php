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

function checkSize ($size)
{
	switch ($size) {
		case $size <= 1000:
			return $size . " Bytes";
			break;
		
		case $size > 1000 and $size <= 1000000:
			return round($size / 1000, 2) . " KB";
			break;

		case $size > 1000000:
			return round($size / 1000000, 2) . " MB";
			break;
	}
}

function getFilesInfo ()
{
	$filesInfo = [];

	if (is_dir(DIR_PATH))
	{
		$fileList = scandir(DIR_PATH);
	} 
	else 
	{
		return ERR_NO_FOLDER;
	}

	/** Adding file params **/
	foreach ($fileList as $value) 
	{
		if ($value != "." and $value != "..")
		{
			array_push($filesInfo, array(
				"name" => $value, 
				"size" => checkSize(filesize(DIR_PATH . $value)), 
				"path" => DIR_PATH . $value));
		}
	}
	if (empty($filesInfo))
	{
		return ERR_EMPTY_FOLDER;
	}
	return $filesInfo;
}
