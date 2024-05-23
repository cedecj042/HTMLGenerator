<?php
namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlHorizontalRule extends ContainerBodyTag {
    public function __construct() {
        $this->tagName = 'hr/';
    }
}