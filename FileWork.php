<?php

class FileWork 
{
	private $fileContent;
	private $filePerms;

	function __construct ()
	{
		if (is_file(FILE_PATH))
		{
			$this->filePerms = substr(sprintf('%o', fileperms(FILE_PATH)), -4)[3];
		}

		if (is_file(FILE_PATH) and $this->filePerms >= 6)
		{
			$this->fileContent = file(FILE_PATH);
		}
	}
}