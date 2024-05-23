<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlStrong extends ContainerBodyTag{
    public function __construct(){
        $this->tagName="strong";
    }
}