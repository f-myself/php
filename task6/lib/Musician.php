<?php

class Musician implements iMusician
{
    private $name;
    private $bands;
    private $instruments;
    private $type;

    function __construct()
    {
        $this->name = "";
        $this->bands = [];
        $this->instruments = [];
        $this->type = "";
    }
    
    public function setName($name="")
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
    
    public function addInstrument(iInstrument $obj)
    {
        if (array_push($this->instruments, $obj->getName()))
        {
            return true;
        }
        return false;
    }

    public function getInstrument()
    {
        return $this->instruments;
    }
    
    public function assingToBand(iBand $nameBand)
    {
        /* Realize after class Band */
        return true;
    }

    public function setMusicianType($type)
    {
        if ($type)
        {
            $this->type = $type;
            return true;
        }
        return false;
    }

    public function getMusicianType()
    {
        return $this->type;
    }
}