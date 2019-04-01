<?php

class Musician implements iMusician
{
    private $name;
    private $instruments;
    private $type;

    function __construct()
    {
        $this->name = "";
        $this->instruments = [];
        $this->type = "";
    }
    
    public function setName($name)
    {
        return true;
    }

    public function getName()
    {
        return $this->name;
    }
    
    public function addInstrument(iInstrument $obj)
    {
        if (array_push($this->instruments, array('Instrument' => $obj->getName())))
        {
            return true;
        }
        return false;
    }

    public function getInstrument()
    {
        
    }
}