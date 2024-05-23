<?php
namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlTableHead extends ContainerBodyTag {
    public function __construct() {
        $this->tagName = 'thead';
    }
}