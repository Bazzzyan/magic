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

