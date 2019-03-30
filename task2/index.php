<?php

include "Calculator.php";
include "config.php";

$calc = new Calculator();

// Set numbers for calc
if($calc -> setNum1("500"))
{
	$setNum1Res = OK_NUM1;
} else {
	$setNum1Res = ERR_NAN;
}

if ($calc -> setNum2(35))
{
	$setNum2Res = OK_NUM2;
} else {
	$setNum2Res = ERR_NAN;
}

// Get numbers of calc
if(!$num1 = $calc -> getNum1())
{
	$num1 = ERR_NUM1;
}

if (!$num2 = $calc -> getNum2())
{
	$num2 = ERR_NUM2;
}

// Set memory value
if ($calc -> setMemory("50"))
{
	$setMemRes = OK_MEMSET;
} else {
	$setMemRes = ERR_NAN;
}

// Get memory value into variable
if (!$mem = $calc -> getMemory())
{
	$mem = ERR_MEMSET;
}

// Geting results of simple operations
$sumRes 	= $calc -> sum();
$subRes 	= $calc -> substract();
$multRes 	= $calc -> multiply();
$divRes 	= $calc -> division();

// Get results for one num operations: provide $num1
$convertRes	= $calc -> numConvert();
$sqRootRes	= $calc -> squareRoot();
$percentRes	= $calc -> getPercent(25); // 25 - how much % from $num1
$oneDivRes	= $calc -> oneDivide();


include "template/index.php";