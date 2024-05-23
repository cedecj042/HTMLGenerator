<?php
namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlSearch extends ContainerBodyTag {
    public function __construct() {
        $this->tagName = 'search';
    }
}