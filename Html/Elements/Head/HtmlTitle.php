<?php

namespace Html\Elements\Head;
use Html\Elements\HtmlText;
use Html\Tags\Container\ContainerHeadTag;

class HtmlTitle extends ContainerHeadTag{

    public function __construct($title){
        $this->tagName = "title";
        $this->setContent(new HtmlText($title));
    }
}