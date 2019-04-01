<?php

class Band implements iBand
{
    private $name;
    private $genres;
    private $musicians;

    function __construct ()
    {
        $this->name = "";
        $this->genres = [];
        $this->musicians = [];
    }

    public function setName($name="")
    {
        if($name)
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

    public function setGenre($genre)
    {
        if ($genre)
        {
            array_push($this->genres, $genre);
            return true;
        }
        return true;
    }

    public function getGenre()
    {
        return $this->genres;
    }

    public function addMusician(iMusician $obj)
    {
        if (array_push($this->musicians, $obj))
        {
            return true;
        }
        return false;
    }

    public function getMusician()
    {
        return $this->musicians;
    }
}