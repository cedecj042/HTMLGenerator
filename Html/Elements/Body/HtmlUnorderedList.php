<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlUnorderedList extends ContainerBodyTag {
    public function __construct() {
        $this->tagName = "ul";
    }

    public function addList(HtmlList $item) {
        $this->addChild($item);
        return $this;
    }
}