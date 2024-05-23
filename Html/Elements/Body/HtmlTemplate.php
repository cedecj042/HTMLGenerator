<?php
namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlTemplate extends ContainerBodyTag {
    public function __construct() {
        $this->tagName = 'template';
    }
}