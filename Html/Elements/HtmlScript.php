<?php

namespace Html\Elements;
use Html\Tags\Tag;

class HtmlScript extends Tag{
    public function __construct(){
        $this->tagName = "script";
        $this->attributes["asycn"]=null;
        $this->attributes["crossorigin"]=null;
    }
}