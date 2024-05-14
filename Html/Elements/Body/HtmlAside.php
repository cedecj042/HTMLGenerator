<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlAside extends ContainerBodyTag{
    public function __construct(){
        $this->tagName="aside";
    }

}