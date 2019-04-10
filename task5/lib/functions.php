<?php

function saveData (iWorkData $obj, $key = NULL, $val = NULL)
{
        if ($obj and $obj -> saveData($key, $val))
        {
            return true;
        }
    return false;
}

function getData ($obj=NULL, $key = NULL)
{
    if ($obj and $data = $obj -> getData($key))
    {
        return $data;
    }
    return false;
}

function deleteData ($obj=NULL, $key = NULL)
{
    if ($obj and $data = $obj -> deleteData($key))
    {
        return true;
    }
    return false;
}