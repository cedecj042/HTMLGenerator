<?php
namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlTableFooter extends ContainerBodyTag {
    public function __construct() {
        $this->tagName = 'tfoot';
    }
}