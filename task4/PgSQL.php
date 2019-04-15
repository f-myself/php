<?php

class PgSQL extends SQL
{
	private $link;
	private $connError;

	public function __construct ()
	{
		parent::__construct();
		if(!$this->link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD))
		{
			if (!mysql_error($this->link))
			{
				$this->connError = ERR_CONNECT_DB;
			}
			$this->connError = mysql_error($this->link);
		}

		if(!mysql_select_db(DB_NAME))
		{
			$this->connError = mysql_error();
		}
	}

	public function getError()
	{
		return $this->connError();
	}

	public function select()
	{
		if($this->link)
		{
			parent::select();
			$resultSelect = [];
			if(!$result = mysql_query($this->query))
			{
				return mysql_error();
			}
			while ($row = mysql_fetch_assoc($result))
			{
				array_push($resultSelect, $row);
			}
			return $resultSelect;
		}
		return false;
	}

	public function insert()
	{
		if($this->link)
		{
			parent::insert();
			if(!mysql_query($this->query))
			{
				return mysql_error();
			}
			return true;
		}
		return false;
	}

	public function delete()
	{
		if($this->link)
		{
			parent::delete();
			if(!mysql_query($this->query))
			{
				return mysql_error();
			}
			return true;
		}
		return false;
	}

	public function update()
	{
		if($this->link)
		{
			parent::update();
			if(!mysql_query($this->query))
			{
				return mysql_error();
			}
			return true;
		}
		return false;
	}


	function __destruct ()
	{
		if($this->link)
		{
			mysql_close($this->link);
		}

	}
}