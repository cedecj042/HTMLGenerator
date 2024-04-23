<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlDiv extends ContainerBodyTag{
    
    public function __construct(){
        $this->tagName = "div";
    }
}