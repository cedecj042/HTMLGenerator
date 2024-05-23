<?php
namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlSummary extends ContainerBodyTag {
    public function __construct() {
        $this->tagName = 'summary';
    }
}