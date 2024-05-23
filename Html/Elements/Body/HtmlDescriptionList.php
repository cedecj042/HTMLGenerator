<?php
namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlDescriptionList extends ContainerBodyTag {
    public function __construct() {
        $this->tagName = 'dl';
    }
}