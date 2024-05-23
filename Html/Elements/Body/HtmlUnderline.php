<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlUnderline extends ContainerBodyTag{
    public function __construct(){
        $this->tagName="u";
    }
}