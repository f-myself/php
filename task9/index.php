<?php
include "config.php";
include "HtmlHelper.php";

$assocArr = ["First" => "one lorem ipsum dolor sit amet", 
             "Second" => "two lorem ipsum dolor sit amet", 
             "Third" => "Three lorem ipsum dolor sit amet", 
             "Fourth" => "four lorem ipsum dolor sit amet"];

$indexArr = ["First value", 
             "Second value", 
             "Third value", 
             "Fourth value", 
             "Fifth value"];

$doubleArr = [["First value", "Second value", "Third value"], 
              ["First value", "Second value", "Third value"], 
              ["First value", "Second value", "Third value"]];


include "templates/index.php";