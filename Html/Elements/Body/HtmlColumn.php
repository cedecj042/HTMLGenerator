<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlColumn extends ContainerBodyTag {
    public function __construct(){
        $this->tagName="col";
        $this->attributes["span"]=null;
    }

    public function setSpan($value){
        $this->attributes["span"]=$value;
        return $this;
    }
    public function getSpan(){
        return $this->attributes["span"];
    }
}