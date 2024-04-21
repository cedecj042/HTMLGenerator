<?php

namespace Html\Elements;
use Html\Tags\Container\ContainerTags;

class HtmlBody extends ContainerTags{
    public function __construct(){
        $this->tagName = "body";
    }
}