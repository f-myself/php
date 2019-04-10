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

	private function getValue($key)
	{
		if ($key and $this->checkPermission())
		{
			$result = [];
			$data = file(PATH_JSON);
			foreach ($data as $value) 
			{
				$jsonVal = json_decode($value, true);
				$result[key($jsonVal)] = $jsonVal[key($jsonVal)];
			}
		}

		if ($result[$key])
		{
			return $result[$key];
		}
		return false;
	}

	public function saveData ($key=NULL, $val=NULL)
	{
		if ($this->getValue($key))
		{
			return false;
		}

		if ($key and $val and $this->checkPermission())
		{
			$data[$key] = $val;
			$data = json_encode($data);
			file_put_contents(PATH_JSON, $data . "\n", FILE_APPEND);
			return true;
		}
		return false;
	}

	public function getData ($key)
	{
		if (!$this -> checkPermission())
    	{
    		return false;
    	}
        return $this -> getValue($key);
	}

	public function deleteData($key)
	{
		if ($key and $this->checkPermission())
		{
			$result = [];
			$data = file(PATH_JSON);
			foreach ($data as $value) 
			{
				$jsonVal = json_decode($value, true);
				$result[key($jsonVal)] = $jsonVal[key($jsonVal)];
			}
		}

		if (isset($result[$key]))
		{
			unset($result[$key]);
			file_put_contents(PATH_JSON, json_encode($result) . "\n");
			return true;
		}
		return false;
	}
}