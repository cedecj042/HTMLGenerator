<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlSpan extends ContainerBodyTag{

    public function __construct(){
        $this->tagName="span";
    }
}