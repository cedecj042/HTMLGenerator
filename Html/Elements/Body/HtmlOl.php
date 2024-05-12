<?php
namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlOl extends ContainerBodyTag {
    public function __construct() {
        $this->tagName = 'ol';
    }

    public function addItem(HtmlLi $item) {
        $this->addChild($item);
        return $this;
    }
}