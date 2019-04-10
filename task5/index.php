<?php

include "config.php";
include "lib/iWorkData.php";
include "lib/Session.php";
include "lib/Cookies.php";
include "lib/IniFile.php";
include "lib/Json.php";
include "lib/MySQL.php";
include "lib/functions.php";

$ses = new Session;
$coo = new Cookies;
$ini = new IniFile;
$json = new Json;
$mysql = new MySQL;

if (saveData($mysql, 'new', 'google'))
{
    echo "Input success\n";
} else {
    echo "INI not set\n";
}

if ($data = getData($mysql, 'new'))
{
    echo $data . "\n"; 
} else {
	echo "Something wrong";
}

if (deleteData($mysql, 'new'))
{
    echo "Cookie deleted\n";
} else {
	echo "Not deleted";
}

if ($data = getData($mysql, 'new'))
{
    echo $data . "\n";
} else {
	echo "Something wrong";
}

include "templates/index.php";