<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlBody extends ContainerBodyTag{
    public function __construct(){
        $this->tagName = "body";
    }
}