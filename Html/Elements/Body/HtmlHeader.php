<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlHeader extends ContainerBodyTag {
    
    public function __construct(){
        $this->tagName = "header";
        
    }
}