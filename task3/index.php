<?php
include "config.php";
include "FileWork.php";

$fileWork = new FileWork;

$countString = $fileWork->getAmountStringContent();

$fileWork->replaceString(2, "<b>I've change this string.</b>");
$fileWork->replaceString(4, "<b>And this one too.</b>");

$fileWork->replaceSymb(0, 5, "*");

include "template/index.php";