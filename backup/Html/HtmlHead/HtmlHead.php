<?php


namespace Html\HtmlHead\HtmlHead;
use GlobalTags;

class HtmlHead extends GlobalTags{

    protected $tagName;

    protected $child = [];
    public function __construct(){
        $this->tagName = "head";
    }


    public function addChild(){

    }

}