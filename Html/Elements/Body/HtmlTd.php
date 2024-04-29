<?php
namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;


class HtmlTD extends ContainerBodyTag{
    
    public function __construct(){
        $this->tagName = "td";
        $this->attributes["colspace"]=null;
    }

    public function setColSpace($value){
        $this->attributes["colspace"]=$value;
        return $this;
    }

    public function getColSpace($value){
        return $this->attributes["colspace"];
    }
}