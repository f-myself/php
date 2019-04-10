<?php

class Json implements iWorkData
{
    private $permission;

	function __construct ()
	{
		if (is_file(PATH_JSON))
		{
			$this->permission = substr(sprintf('%o', fileperms(PATH_JSON)), -4)[3];
        }
    }

    private function checkPermission ()
	{
		if($this->permission >= 5)
		{
			return true;
		}
		return false;
	}

    public function saveData ($key, $val)
    {
        if ($this->checkPermission() and $key and $val)
        {
            
        }        
    }

    public function getData ($key)
    {
        return true;
    }

    public function deleteData ($key)
    {
        return true;
    }
}