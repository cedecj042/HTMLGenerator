<?php
namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlTableRow extends ContainerBodyTag {
    public function __construct() {
        $this->tagName = 'tr';
    }
}