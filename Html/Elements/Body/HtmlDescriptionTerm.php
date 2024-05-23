<?php
namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlDescriptionTerm extends ContainerBodyTag {
    public function __construct() {
        $this->tagName = 'dt';
    }
}