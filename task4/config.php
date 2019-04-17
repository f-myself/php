<?php

define(DB_HOST, 'localhost');
define(DB_USER, 'user6');
define(DB_PASSWORD, 'user6');
define(DB_NAME, 'user6');
define(DB_TABLE_NAME, 'task4');

/* Error messages */
define(ERR_CONNECT_DB, "Cannot connect database. Check username or password");
define(ERR_SET_TABLE_NAME, "Cannot set table name");
define(ERR_SET_FIELDS, "Cannot set fields. Please, check fields for errors");
define(ERR_SET_COND, "Cannot set condition");
define(ERR_SET_VALUE, "Cannot set value");
define(ERR_INSERT, "Cannot insert data");
define(ERR_SELECT, "Nothing to select");
define(ERR_UPDATE, "Cannot update data");
define(ERR_DELETE, "Cannot delete data");

/* OK messages */
define(OK_INSERT, "Data inserted Successfully");
define(OK_UPDATE, "Data updated Successfully");
define(OK_DELETE, "Data deleted Successfully");