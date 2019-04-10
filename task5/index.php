<?php

include "config.php";
include "iWorkData.php";
include "Session.php";
include "Cookies.php";
include "IniFile.php";
include "Json.php";
include "functions.php";

$ses = new Session;
$coo = new Cookies;
$ini = new IniFile;

if (saveData($ini, 'new', 'google'))
{
    echo "Input success\n";
} else {
    echo "INI not set\n";
}

if ($data = getData($ini, 'new'))
{
    echo $data . "\n"; 
} else {
	echo "Something wrong";
}

if (deleteData($ini, 'new'))
{
    echo "Cookie deleted\n";
} else {
	echo "Not deleted";
}

if ($data = getData($ini, 'new'))
{
    echo $data . "\n";
} else {
	echo "Something wrong";
}

include "templates/index.php";