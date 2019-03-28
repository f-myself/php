<?php

class Session implements iWorkData
{
    function __construct ()
    {
        session_start();
    }
    public function saveData($key, $val)
    {
        if ($key and $val)
        {
            $_SESSION[$key] = $val;
            return true;
        }
        return false;
    }

    public function getData($key)
    {
        if ($key)
        {
            return $_SESSION[$key];
        }
        return false;
    }

    public function deleteData($key)
    {
        if ($key)
        {
            unset($_SESSION[$key]);
            return true;
        }
        return false;
    }
}