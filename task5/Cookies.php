<?php

class Cookies implements iWorkData
{
    public function saveData($key, $val)
    {
        if ($key and $val)
        {
            setcookie($key, $val);
            return true;
        }
        return false;
    }

    public function getData($key)
    {
        if ($key)
        {
            return $_COOKIE[$key];
        }
        return false;
    }

    public function deleteData($key)
    {
        if ($key and isset($_COOKIE[$key]))
        {
                unset($_COOKIE[$key]);
                setcookie('Hello', null, -1, '/');
                return true;
            return true;
        }
        return false;
    }
}