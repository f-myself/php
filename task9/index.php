<?php
include "config.php";
include "HtmlHelper.php";

// Set example arrays for building HTML-elements
$assocArr = ["First" => "one lorem ipsum dolor sit amet", 
             "Second" => "two lorem ipsum dolor sit amet", 
             "Third" => "Three lorem ipsum dolor sit amet", 
             "Fourth" => "four lorem ipsum dolor sit amet"];

$indexArr = ["First value", 
             "Second value", 
             "Third value", 
             "Fourth value", 
             "Fifth value"];

$doubleArr = [["First value", "Second value", "Third value", "Fourth value", "Fifth value"], 
              ["First value", "Second value", "Third value", "Fourth value", "Fifth value"], 
              ["First value", "Second value", "Third value", "Fourth value", "Fifth value"]];

// Results of HTML Helper operations
if (!$simpleSelect = HtmlHelper::makeSelect("single",  $indexArr))
{
    $statusMessage =  ERR_BUILD_SELECT;
}

if (!$multiSelect = HtmlHelper::makeSelect("multi",  $indexArr))
{
    $statusMessage =  ERR_BUILD_SELECT;
}

if (!$table = HtmlHelper::table($indexArr, $doubleArr, $indexArr))
{
    $statusMessage =  ERR_BUILD_TABLE;
}

if (!$markedList = HtmlHelper::makeList("ul", $indexArr))
{
    $statusMessage =  ERR_BUILD_LIST;
}

if (!$numList = HtmlHelper::makeList("ol", $indexArr))
{
    $statusMessage =  ERR_BUILD_LIST;
}

if (!$defList = HtmlHelper::definitionList($assocArr))
{
    $statusMessage =  ERR_BUILD_LIST;
}

if (!$radio = HtmlHelper::radiobuttonsGroup("buttons", $indexArr))
{
    $statusMessage =  ERR_BUILD_RADIO;
}

if (!$checkboxes = HtmlHelper::checkboxes("checkIt", $indexArr))
{
    $statusMessage =  ERR_BUILD_CHECKBOXES;
}


include "templates/index.php";