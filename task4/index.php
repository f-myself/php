<?php

include "config.php";
include "SQL.php";
include "MySQL.php";

$sql = new MySQL;

$sql->setField("*");
//$sql->setField("description");

$sql->setTableName("task4");
//$sql->setCondition("name='Vasya'");
$sql->setValue("John");
$sql->setValue("Bastard of Eddard Stark");

//$mysql = new MySQL;
$sql->setLimit(20);

var_dump($sql->insert()) ;





//echo $sql->getLimit();



//$q = $sql->update();

//echo $q;

/*$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$result = mysqli_query($link, $q))
{
	echo mysqli_error($link);
}
if (!$array = mysqli_fetch_all($result, MYSQLI_ASSOC))
{
	echo mysqli_error($link);
}
mysqli_close($link);
print_r($array);*/




include "templates/index.php";