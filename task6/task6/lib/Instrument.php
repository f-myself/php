<?php

class Instrument implements iInstrument
{
    private $name;
    private $category;

    function __construct()
    {
        $this->name = "";
        $this->category = "";
    }

    function setName($name="")
    {
        if ($name)
        {
            $this->name = $name;
            return true;
        }
        return false;
    }

    public function getName()
    {
        return $this->name;
    }

    function setCategory($category="")
    {
        if ($category)
        {
            $this->category = $category;
            return true;
        }
        return false;
    }

    public function getCategory()
    {
        return $this->category;
    }
}