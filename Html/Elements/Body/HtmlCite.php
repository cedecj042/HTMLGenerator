<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlCite extends ContainerBodyTag{
    public function __construct(){
        $this->tagName = "cite";
    }
}