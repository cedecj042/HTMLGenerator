<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlMap extends ContainerBodyTag{

    public function __construct($name=null){
        $this->tagName = "map";
        $this->attributes['name']=$name;
    }

    //Getter for name
    public function getName() {
        return $this->attributes['name'];
    }

    // Setter for name
    public function setName($name) {
        $this->attributes['name'] = $name;
        return $this;
    }
}