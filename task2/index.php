<?php

include "Calculator.php";
include "config.php";

$obj = new Calculator();

$obj -> setNum1("10");
$obj -> setNum2(10);

echo $obj -> getNum1() . " + " . $obj -> getNum2() . " = " . $obj -> sum();

//