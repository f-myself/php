<?php
include "config.php";
include "FileWork.php";

$fileWork = new FileWork;

if (!$countString = $fileWork->getAmountStringContent())
{
    $statusMessage = ERR_FILE_PERM;
}

if (!$fileWork->replaceString(2, "<b>I've change this string.</b>"))
{
    return $statusMessage = ERR_FILE_INPUT;
}
if (!$fileWork->replaceString(4, "<b>And this one too.</b>"))
{
    return $statusMessage = ERR_FILE_INPUT;
}

if (!$fileWork->replaceSymb(0, 5, "*"))
{
    return $statusMessage = ERR_FILE_INPUT;
}

include "template/index.php";