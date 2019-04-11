<?php

/* Pathes to work files */
define('PATH_INI', 'files/variables.ini');
define('PATH_JSON', 'files/file.JSON');

/* Database config */ 
define(DB_HOST, 'localhost');
define(DB_USER, 'root');
define(DB_PASSWORD, '');
define(DB_NAME, 'user6');

/* Success messages */
define(OK_INPUT, "Input success");
define(OK_DELETE, "Data deleted successfully");

/* Error messages for input */
define(ERR_SES_INPUT, "Session not set");
define(ERR_COOKIE_INPUT, "Cookie not set");
define(ERR_INI_INPUT, "INI param not set");
define(ERR_JSON_INPUT, "New json not set");
define(ERR_MYSQL_INPUT, "Can not add values into table");

/* Error messages for getting data  */
define(ERR_GET_DATA, "Data is not exist");

/* Error messages for deleting data */
define(ERR_DELETE, "Data is not deleted");