<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlWordBreak extends ContainerBodyTag{
    public function __construct(){
        $this->tagName="wbr";
    }
}