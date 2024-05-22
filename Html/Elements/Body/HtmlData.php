<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlData extends ContainerBodyTag {
    public function __construct(){
        $this->tagName="data";
        $this->attributes["value"]=null;
    }

    public function setValue($value){
        $this->attributes["value"]=$value;
        return $this;
    }
    public function getValue(){
        return $this->attributes["value"];
    }
}