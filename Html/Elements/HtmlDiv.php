<?php

namespace Html\Elements;
use Html\Tags\Container\ContainerTags;
class HtmlDiv extends ContainerTags{
    
    public function __construct(){
        $this->tagName = "div";
    }
}