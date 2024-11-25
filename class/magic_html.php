<?php

class magic_html
{
    public $head="";
    public $title="";
    public $body="";

    function tag($name, $content="", $att=array())
    {
        $html="<".$name.">";
        $html.=$content;
        $html.="</".$name.">";
        return $html;
    }

    function build()
    {
        $html="<html>";
        $html.="<head>";
        $html.="</head>";
        $html.=$this->body;
        $html.="</html>";
        return $html;
    }
}
