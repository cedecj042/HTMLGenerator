<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlCaption extends ContainerBodyTag{
    public function __construct(){
        $this->tagName = "caption";
    }
}