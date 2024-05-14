<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlNavigation extends ContainerBodyTag{

    public function __construct(){
        $this->tagName = "nav";
    }
}