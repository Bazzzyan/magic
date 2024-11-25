<?php

function html($name, $content="", $a=array())
{
    $html="<".$name;
    foreach ($a as $param => $value)
    {
        $html.=" $param='$value'";
    }
    $html.=">";
    if($content!="")
    {
        $html.=$content."</".$name.">";
    }
    return $html;
}

$cfg['bgcolor']="#111111";
$cfg['text']="#999999";

$body=html("b","Testing...");
$body=html("center",$body);
$body=html("body",$body,$cfg);

$head=html("title","Test");
$head=html("head",$head);

echo html("html",$head.$body);
