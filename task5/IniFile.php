<?php

class IniFile implements iWorkData
{
	private $permission;

	function __construct ()
	{
		if (is_file(PATH_INI))
		{
			$this -> permission = substr(sprintf('%o', fileperms(PATH_INI)), -4)[3];
		}
		
	}

	private function checkPermission ()
	{
		if($this -> permission >= 5)
		{
			return true;
		}
		return false;
	}

	private function getVarValue ($key)
	{
		if ($this -> checkPermission() and $key)
		{
			$arrContent = [];
			$fileContent = file(PATH_INI);
			foreach ($fileContent as $value) 
			{
				$val = explode("=", $value);
				$arrContent[$val[0]] = $val[1];
			}
			foreach ($arrContent as $variableKey => $variableVal) 
			{
				if ($key == $variableKey)
				{
					return $variableVal;
				}
			}
		}
		return false;
	}

    public function saveData($key, $val)
    {

    	if ($this -> getVarValue($key))
    	{
    		return false;
    	}

        if ($this -> checkPermission() and $key and $val)
        {
            file_put_contents(PATH_INI, $key . "=" . $val . "\n", FILE_APPEND);
            return true;
        }
        return false;
    }

    public function getData($key)
    {
    	if (!$this -> checkPermission())
    	{
    		return false;
    	}
        return $this -> getVarValue($key);
    }

    public function deleteData($key)
    {
    	if (!$this -> checkPermission())
    	{
    		return false;
    	}
    	if ($key)
    	{
	    	$arrContent = [];
	    	$fileContent = file(PATH_INI);
	    	foreach ($fileContent as $value) 
	    	{
	    		$val = explode("=", $value);
	    		array_push($arrContent, array($val[0] => $val[1]));
	    	}
	    	foreach ($arrContent as $varKey => $varVal) 
	    	{
	    		if ($key == key($varVal))
	    		{
	    			unset($fileContent[$varKey]);
	    		}
	    	}

	    	file_put_contents(PATH_INI, implode("", $fileContent));
	    	return true;
    	}
    	
    	return false;
    }
}