<?php

require_once "./../class/magic_html.php";

$html=new magic_html;

$test=$html->tag("b","Testing...");
$test=$html->tag("center",$test);

$html->body=$test;

echo $html->build();
