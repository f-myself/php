<?php

class SQL 
{
    private $fields;
    private $query;
    private $tableName;
    private $conditions;
    private $values;
    private $limit;

    function __construct ()
    {
        $this->fields = [];
        $this->query = [];
        $this->tableName = "";
        $this->conditions = [];
        $this->values = [];
        $this->limit = 1;
    }

    public function setFields ($field=NULL)
    {
        if ($field)
        {
            array_push($this->fields, $field);
            return true;
        }
        return false;
    }

    public function getFields ()
    {
        return $this->fields;
    }

    public function setTableName ($tableName=NULL)
    {
        if ($tableName)
        {
            $this->tableName = $tableName;
            return true;
        }
        return false;
    }

    public function getTableName ()
    {
        return $this->tableName;
    }

    public function setConditions ($condition)
    {
        if ($condition)
        {
            array_push($this->conditions, $condition);
            return true;
        }
        return false;
    }

    public function getConditions ()
    {
        return $this->conditions;
    }

    public function setValues ($value)
    {
        if ($value)
        {
            array_push($this->values, $value);
            return true;
        }
        return false;
    }

    public function getValues ()
    {
        return $this->values;
    }

    public function setLimit ($limit)
    {
        if (is_numeric($limit))
        {
            $this->limit = $limit;
            return true;
        }
        return false;
    }

    public function getLimit ()
    {
        return $this->limit;
    }

    public function select()
    {
        if ($this->fields)
        {
            $fields = implode(", ", $this->fields);
            
        }

        if ($this->tableName)
        {
            
        }
    }

    public function insert()
    {
        return true;
    }

    public function delete()
    {
        return true;
    }

    public function update()
    {
        return true;
    }
}