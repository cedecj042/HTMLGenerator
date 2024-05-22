<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlArticle extends ContainerBodyTag{
    public function __construct(){
        $this->tagName="article";
    }
}