<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlItalic extends ContainerBodyTag{
    public function __construct(){
        $this->tagName="i";
    }
}