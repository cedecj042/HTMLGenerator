<?php

namespace Html\Elements\Head;

use Html\Elements\Head\HtmlTitle;
use Html\Tags\Container\ContainerHeadTag;

class HtmlHead extends ContainerHeadTag{

    public function __construct(HtmlTitle $title){
        $this->tagName = "head";
        $this->addChild($title);
    }
}