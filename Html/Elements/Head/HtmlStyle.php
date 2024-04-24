<?php

namespace Html\Elements\Head;
use Html\Tags\Container\ContainerHeadTag;

class HtmlStyle extends ContainerHeadTag{

    public function __construct(){
        $this->tagName = "head";
        $this->attributes["media"]=null;
        $this->attributes["type"]=null;
    }

    public function setMedia($value){
        $this->attributes["media"]=$value;
    }

    public function setType($value){
        $this->attributes["type"]=$value;
    }
    public function getMedia(){
        return $this->attributes["media"];
    }
    public function getType(){
        return $this->attributes["type"];
    }
}