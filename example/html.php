<?php

require_once "./../class/magic_html.php";

$cfg['bgcolor']="#111111";
$cfg['text']="#999999";

$body=html("b","Testing...");
$body=html("center",$html);
$body=html("body",$body,$cfg);

$head=html("title","Test");
$head=html("head",$head);

echo html("html",$head.$body);
