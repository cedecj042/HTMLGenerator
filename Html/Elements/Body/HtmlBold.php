<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlBold extends ContainerBodyTag{
    public function __construct(){
        $this->tagName="b";
    }
}