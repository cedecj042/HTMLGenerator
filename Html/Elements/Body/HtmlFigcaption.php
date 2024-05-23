<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlFigcaption extends ContainerBodyTag {
    public function __construct(){
        $this->tagName = "figcaption";
    }
}
