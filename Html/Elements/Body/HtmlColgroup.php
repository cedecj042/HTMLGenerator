<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlColgroup extends ContainerBodyTag {
    public function __construct(){
        $this->tagName="colgroup";
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