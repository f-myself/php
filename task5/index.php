<?php

include "iWorkData.php";
include "Session.php";
include "Cookies.php";
include "functions.php";

$ses = new Session;
$coo = new Cookies;

if (saveData($coo, 'CooName', 'CooValue'))
{
    echo "Cookie saved\n";
} else {
    echo "C not set\n";
}

if ($data = getData($coo, 'CooName'))
{
    
}





include "templates/index.php";