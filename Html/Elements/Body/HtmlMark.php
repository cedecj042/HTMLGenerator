<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlMark extends ContainerBodyTag{
    public function __construct(){
        $this->tagName="mark";
    }
}