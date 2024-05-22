<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlCanvas extends ContainerBodyTag{
    public function __construct(){
        $this->tagName = "canvas";
        $this->attributes["height"]=null;
        $this->attributes["width"]=null;
    }
    public function setHeight($value) {
        $this->attributes['height'] = $value;
        return $this;
    }
    
    public function setWidth($value) {
        $this->attributes['width'] = $value;
        return $this;
    }
    public function getHeight() {
        return $this->attributes['height'];
    }
    
    public function getWidth() {
        return $this->attributes['width'];
    }
        
}