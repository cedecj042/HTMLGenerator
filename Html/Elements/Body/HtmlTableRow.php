<?php
namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlTr extends ContainerBodyTag {
    public function __construct() {
        $this->tagName = 'tr';
    }
}