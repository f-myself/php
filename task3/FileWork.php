<?php

class FileWork 
{
	private $sourceFileContent;
	private $saveToFileContent;
	private $sourceFilePerms;
	private $saveToFilePerms;

	function __construct ()
	{
		if (is_file(FILE_PATH) and is_file(FILE_TO_SAVE))
		{
			$this->sourceFilePerms = substr(sprintf('%o', fileperms(FILE_PATH)), -4)[3];
			$this->saveToFilePerms = substr(sprintf('%o', fileperms(FILE_TO_SAVE)), -4)[3];
		}

		if (is_file(FILE_PATH) and $this->sourceFilePerms >= 6)
		{
			$this->sourceFileContent = file(FILE_PATH);
		}

		if (is_file(FILE_TO_SAVE) and $this->sourceFilePerms >= 6)
		{
			$this->saveToFileContent = file(FILE_TO_SAVE);
		}
	}

	private function sourceChecker()
	{
		if($this->sourceFileContent and 
			is_file(FILE_PATH) and 
			$this->sourceFilePerms >= 6)
		{
			return true;
		}
		return false;
	}

	private function saveToChecker()
	{
		if(is_file(FILE_TO_SAVE) and $this->saveToFilePerms >= 6)
		{
			return true;
		}
		return false;
	}

	public function getAmountStringContent()
	{
		if ($this->sourceChecker())
		{
			return count($this->sourceFileContent);
		}
		return false;
	}

	public function getAmountSymbContent($stringNum)
	{
		if ($this->sourceChecker() and is_numeric($stringNum))
		{
			return strlen($this->sourceFileContent[$stringNum]);
		}
		return false;
	}

	public function getSourceString ($stringNum=NULL)
	{
		if (is_numeric($stringNum) and $this->sourceChecker())
		{
			return $this->sourceFileContent[$stringNum];
		}
		return false;
	}

	public function getSourceSymb($stringNum=NULL, $symbNum=NULL)
	{
		if (is_numeric($stringNum) and 
			is_numeric($symbNum) and 
			$this->sourceChecker())
		{
			return $this->sourceFileContent[$stringNum][$symbNum];
		}
	}

		public function getSaveToString ($stringNum=NULL)
	{
		if (is_numeric($stringNum) and $this->saveToChecker())
		{
			return $this->saveToFileContent[$stringNum];
		}
		return false;
	}

	public function getSaveToSymb($stringNum=NULL, $symbNum=NULL)
	{
		if (is_numeric($stringNum) and 
			is_numeric($symbNum) and 
			$this->saveToChecker())
		{
			return $this->saveToFileContent[$stringNum][$symbNum];
		}
	}

	public function replaceString($stringNum=NULL, $value=NULL)
	{
		if ($this->sourceChecker() and 
			$this->saveToChecker() and
			is_numeric($stringNum))
		{
			if (empty($this->saveToFileContent))
			{
				$this->saveToFileContent = $this->sourceFileContent;
			}
			$this->saveToFileContent[$stringNum] = $value . "\n";
			$text = implode("", $this->saveToFileContent);
			file_put_contents(FILE_TO_SAVE, $text);
			return true;
		}
		return false;
	}

	public function replaceSymb($stringNum, $symbNum, $value)
	{
		if ($this->sourceChecker() and 
			$this->saveToChecker() and
			is_numeric($stringNum) and
			is_numeric($symbNum))
		{
			if (empty($this->saveToFileContent))
			{
				$this->saveToFileContent = $this->sourceFileContent;
			}
			$this->saveToFileContent[$stringNum][$symbNum] = $value;
			$text = implode("", $this->saveToFileContent);
			file_put_contents(FILE_TO_SAVE, $text);
			return true;
		}
		return false;
	}

	function __destruct ()
	{
		return true;
	}
}