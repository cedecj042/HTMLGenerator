<?php
namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlTableBody extends ContainerBodyTag {
    public function __construct() {
        $this->tagName = 'tbody';
    }
}