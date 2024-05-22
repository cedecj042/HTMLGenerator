<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlBDO extends ContainerBodyTag{

    public function __construct(){
        $this->tagName = "bdo";
    }
}