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

    private function starChecker ($value)
    {
        if (stripos($value, "*") === false)
        {
            return true;
        }
        return false;
    }

    public function setField ($field=NULL)
    {
        if ($field and $this->starChecker($field))
        {
            $field = trim(strip_tags($field));
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
        if ($tableName and $this->starChecker($tableName))
        {
            $tableName = trim(strip_tags($tableName));
            $this->tableName = $tableName;
            return true;
        }
        return false;
    }

    public function getTableName ()
    {
        return $this->tableName;
    }

    public function setCondition ($condition)
    {
        if ($condition and $this->starChecker($condition))
        {
            $condition = trim(strip_tags($condition));
            array_push($this->conditions, $condition);
            return true;
        }
        return false;
    }

    public function getConditions ()
    {
        return $this->conditions;
    }

    public function setValue ($value)
    {
        if ($value)
        {
            $value = trim(strip_tags($value));
            array_push($this->values, "'$value'");
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
            array_push($this->query, "SELECT $fields");
        }

        if ($this->tableName)
        {
            array_push($this->query, "FROM $this->tableName");
        }

        if ($this->conditions)
        {
            $conditions = implode(", ", $this->conditions);
            array_push($this->query, "WHERE $conditions");
        }

        if ($this->limit)
        {
            array_push($this->query, "LIMIT $this->limit");
        }

        return implode(" ", $this->query);
    }

    public function insert()
    {
        if ($this->tableName)
        {
            array_push($this->query, "INSERT INTO $this->tableName");
        }

        if ($this->fields)
        {
            $fields = implode(", ", $this->fields);
            array_push($this->query, "($fields)");
        }

        if ($this->values)
        {
            $values = implode(", ", $this->values);
            array_push($this->query, "VALUES ($values)");
        }

        return implode(" ", $this->query);
    }

    public function delete()
    {
        if ($this->tableName)
        {
            array_push($this->query, "DELETE FROM $this->tableName");
        }

        if ($this->conditions)
        {
            $conditions = implode(", ", $this->conditions);
            array_push($this->query, "WHERE $conditions");
        }

        return implode(" ", $this->query);
    }

    public function update()
    {
        if ($this->tableName)
        {
            array_push($this->query, "UPDATE $this->tableName");
        }
        if ($this->fields and $this->values)
        {
            array_push($this->query, "SET");
            $count = count($this->fields);
            foreach ($this->fields as $key => $field) {
                if($key != $count--)
                {
                    array_push($this->query, "$field = {$this->values[$key]},");
                } else {
                    array_push($this->query, "$field = {$this->values[$key]}");
                }
            }
        }
        if ($this->conditions)
        {
            $conditions = implode(", ", $this->conditions);
            array_push($this->query, "WHERE $conditions");
        }
        return implode(" ", $this->query);
    }
}