<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlAbbreviation extends ContainerBodyTag{

    public function __construct(){
        $this->tagName ="abbr";
    }
}