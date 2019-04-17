<?php

class PgSQL extends SQL
{
	private $link;
	private $connError;

	public function __construct ()
	{
		parent::__construct();
		if(!$this->link = pg_connect("host=" . DB_HOST . " dbname=" . DB_NAME . " user=" . DB_USER . " password=" . DB_PASSWORD))
		{
			if (!pg_connection_status($this->link) == PGSQL_CONNECTION_BAD)
			{
				$this->connError = ERR_CONNECT_DB;
			}
			$this->connError = pg_connection_status($this->link);
		}
	}

	public function getError()
	{
		return $this->connError;
	}

	public function select()
	{
		if($this->link)
		{
			parent::select();
			$resultSelect = [];
			if(!$result = pg_query($this->link, $this->query))
			{
				return pg_last_error($this->link);
			}
			while ($row = pg_fetch_assoc($result))
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
			if(!pg_query($this->link, $this->query))
			{
				return pg_last_error($this->link);
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
			if(!pg_query($this->link, $this->query))
			{
				return pg_last_error($this->link);
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
			if(!pg_query($this->link, $this->query))
			{
				return pg_last_error($this->link);
			}
			return true;
		}
		return false;
	}


	function __destruct ()
	{
		if($this->link)
		{
			pg_close($this->link);
		}

	}
}