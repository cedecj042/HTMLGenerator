<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlBlockqoute extends ContainerBodyTag {
    public function __construct(){
        $this->tagName = "blockqoute";
        $this->attributes["cite"]=null;
    }
    public function getCite(){
        return $this->attributes["cite"];
    }

    public function setCite($value){
        $this->attributes["cite"]=$value;
        return $this;
    }
}