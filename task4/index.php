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
if ($mysql->setValue('John Doe')) //set value for Name column on mysql
{
	$status = ERR_SET_VALUE;
} 
if ($mysql->setValue('Unknown human, age 30-40')) //set value for Description column on mysql
{
	$status = ERR_SET_VALUE;
} 

if ($pg->setValue('John Doe')) //set value for Name column on postgresql
{
	$status = ERR_SET_VALUE;
} 
if ($pg->setValue('Unknown human, age 30-40')) //set value for Description column on postgresql
{
	$status = ERR_SET_VALUE;
} 


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
$mysql->clearFields();
$pg->clearFields();
$mysql->clearValues();
$pg->clearValues();

if (!$mysql->setField('name'))
{
	$status = ERR_SET_FIELDS;
}

if (!$pg->setField('name'))
{
	$status = ERR_SET_FIELDS;
}

if (!$mysql->setValue('Vasya Pupkin'))
{
	$status = ERR_SET_VALUE;
} 

if (!$pg->setValue('Vasya Pupkin'))
{
	$status = ERR_SET_VALUE;
} 

if (!$pg->update())
{
	$mysqlUpdateResult = ERR_UPDATE;
}

if (!$pg->update())
{
	$pgUpdateResult = ERR_UPDATE;
}
/* End of updating data */

/* Delete data */
$mysql->clearConditions ()

if (!$mysql->setCondition("name='Vasya Pupkin'"))
{
	$status = ERR_SET_COND;
}

if (!$mysql->delete())
{
	$mysqlDeleteResult = ERR_DELETE
}


/* End of deleting data */

include "templates/index.php";