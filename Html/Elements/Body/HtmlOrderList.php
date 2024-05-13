<?php
namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlOrderedList extends ContainerBodyTag {
    public function __construct() {
        $this->tagName = 'ol';
    }

    public function addList(HtmlList $list) {
        $this->addChild($list);
        return $this;
    }
}