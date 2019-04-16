<?php

include "config.php";
include "SQL.php";
include "MySQL.php";
include "PgSQL.php";

/* Create Objects */ 
$mysql = new MySQL;
if ($myslq->getError())
{
	$status = $myslq->getError();
}
$pg = new PgSQL;
if ($pg->getError())
{
	$status = $pg->getError();
}
/* End of creating Objects */

/* Set some default params */
if(!$mysql->setTableName(DB_TABLE_NAME) or 
   !$pg->setTableName(DB_TABLE_NAME))
{
	$status = ERR_SET_TABLE_NAME;
}

if (!$mysql->setField('name') or !$myslq->setField('description'))
{
	$status = ERR_SET_FIELDS;
}

if (!$pg->setField('name') or !$pg->setField('description'))
{
	$status = ERR_SET_FIELDS;
}
/* End of setting */

/* Inserting data */
$mysql->setValue('John Doe'); //set value for Name column on mysql
$mysql->setValue('Unknown human, age 30-40'); //set value for Description column on mysql

$pg->setValue('John Doe'); //set value for Name column on postgresql
$pg->setValue('Unknown human, age 30-40'); //set value for Description column on postgresql


if (!$mysql->insert())
{
	$mysqlInsertStatus = ERR_INSERT;
} else {
	$mysqlInsertStatus = OK_INSERT;
}

$mysqlInsertQuery = $myslq->getQuery();

if (!$pg->insert())
{
	$pgInsertStatus = ERR_INSERT;
} else {
	$pgInsertStatus = OK_INSERT;
}

$pgInsertQuery = $pg->getQuery();
/* End of inserting */

/* Selecting data */
if (!$mysql->setCondition("name='John Doe'"))
{
	$status = ERR_SET_COND;
}

if (!$mysqlSelectResult = $mysql->select())
{
	$mysqlSelectResult = ERR_SELECT;
}

$mysqlSelectQuery = $mysql->getQuery();

if (!$pg->setCondition("name='John Doe'"))
{
	$status = ERR_SET_COND;
}

if (!$pgSelectResult = $pg->select())
{
	$pgSelectResult = ERR_SELECT;
}

$pgSelectQuery = $pg->getQuery();
/* End of selecting data */

/* Update data */
if ($mysql->update())
{
	
}

/* End of updating data */

include "templates/index.php";