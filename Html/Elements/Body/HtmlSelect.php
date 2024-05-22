<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlSelect extends ContainerBodyTag{
    public function __construct(){
        $this->tagName="select";
    }
    
}