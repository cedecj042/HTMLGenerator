<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlUl extends ContainerBodyTag {
    public function __construct() {
        $this->tagName = "ul";
    }

    public function addItem(HtmlLi $item) {
        $this->addChild($item);
        return $this;
    }
}