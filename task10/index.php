<?php

include "config.php";
include "libs/SQL.php";
include "libs/PDOHandler.php";

$o = new PDOHandler;

$o->insert('books', ['title', 'description', 'price'], ["'Test'", "'Test desc'", "'123'"])->doQuery();
echo $o->getQuery();


include "templates/index.php";