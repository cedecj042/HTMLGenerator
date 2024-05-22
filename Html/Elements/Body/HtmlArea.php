<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlArea extends ContainerBodyTag{

    public function __construct(){
        $this->tagName = "area";
    }
}