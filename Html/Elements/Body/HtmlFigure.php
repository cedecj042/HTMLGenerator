<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlFigure extends ContainerBodyTag {
    public function __construct(){
        $this->tagName = "figure";
    }
}
