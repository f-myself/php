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

/* Logic for sessions */
if (saveData($ses, 'new', 'google'))
{
    $sesInput = OK_INPUT;
} else {
    $sesInput = ERR_SES_INPUT;
}

if (!$firstSesData = getData($ses, 'new'))
{
	$firstSesData = ERR_GET_DATA;
}

if (deleteData($ses, 'new'))
{
    $sesDelete = OK_DELETE;
} else {
	$sesDelete = ERR_DELETE;
}

if (!$secondSesData = getData($ses, 'new'))
{
	$secondSesData = ERR_GET_DATA;
}
/* End logic for sessions */


/* Logic for cookies */
if (saveData($coo, 'new', 'google'))
{
    $cooInput = OK_INPUT;
} else {
    $cooInput = ERR_COOKIE_INPUT;
}

if (!$firstCooData = getData($coo, 'new'))
{
	$firstCooData = ERR_GET_DATA;
}

if (deleteData($coo, 'new'))
{
    $cooDelete = OK_DELETE;
} else {
	$cooDelete = ERR_DELETE;
}

if (!$secondCooData = getData($coo, 'new'))
{
	$secondCooData = ERR_GET_DATA;
}
/* End logic for cookies */

/* Logic for ini-files */
if (saveData($ini, 'new', 'google'))
{
    $iniInput = OK_INPUT;
} else {
    $iniInput = ERR_INI_INPUT;
}

if (!$firstIniData = getData($ini, 'new'))
{
	$firstIniData = ERR_GET_DATA;
}

if (deleteData($ini, 'new'))
{
    $iniDelete = OK_DELETE;
} else {
	$iniDelete = ERR_DELETE;
}

if (!$secondIniData = getData($ini, 'new'))
{
	$secondIniData = ERR_GET_DATA;
}
/* End logic for ini-files */

/* Logic for json */
if (saveData($json, 'new1', 'google1'))
{
	saveData($json, 'new2', 'google2');
	saveData($json, 'new3', 'google3');
    $jsonInput = OK_INPUT;
} else {
    $jsonInput = ERR_JSON_INPUT;
}

if (!$firstJsonData = getData($json, 'new1'))
{
	$firstJsonData = ERR_GET_DATA;
}

if (deleteData($json, 'new'))
{
    $jsonDelete = OK_DELETE;
} else {
	$jsonDelete = ERR_DELETE;
}

if (!$secondJsonData = getData($json, 'new'))
{
	$secondJsonData = ERR_GET_DATA;
}
/* End logic for json */

/* Logic for MySQL */
if (saveData($mysql, 'new', 'google'))
{
    $mysqlInput = OK_INPUT;
} else {
    $mysqlInput = ERR_MYSQL_INPUT;
}

if (!$firstMysqlData = getData($mysql, 'new'))
{
	$firstMysqlData = ERR_GET_DATA;
}

if (deleteData($mysql, 'new'))
{
    $mysqlDelete = OK_DELETE;
} else {
	$mysqlDelete = ERR_DELETE;
}

if (!$secondMysqlData = getData($mysql, 'new'))
{
	$secondMysqlData = ERR_GET_DATA;
}
/* End logic for MySQL */

include "templates/index.php";