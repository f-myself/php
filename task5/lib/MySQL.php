<?php

class MySQL implements iWorkData
{
	private $dbh;

	function __construct ()
	{
		$this->dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
	}

	private function getKeyValues($key)
	{
		$varKeys = [];
		foreach($this->dbh->query('SELECT var_key, var_value from task5') as $row) 
		{
	        $varKeys[$row['var_key']] = $row['var_value'];
		}
		
		if ($varKeys[$key])
		{
			return $varKeys[$key];
		}
		return false;
	}

	public function saveData($key, $val)
	{
		if ($this->getKeyValues($key))
		{
			return false;
		}

		if ($key and $val and $this->dbh->query("INSERT INTO task5 (var_key, var_value) VALUES ('$key', '$val')"))
		{
			return true;
		}
		return false;
	}

	public function getData($key)
	{
		return $this->getKeyValues($key);
	}

	public function deleteData($key)
	{
		if ($key and $this->dbh->query("DELETE FROM task5 WHERE var_key='$key'"))
		{
			return true;
		}
		return false;
	}

	function __destruct ()
	{
		$this->dbh = NULL;
	}
}