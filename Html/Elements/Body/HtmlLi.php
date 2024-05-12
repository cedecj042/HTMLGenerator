<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlLi extends ContainerBodyTag {
    public function __construct() {
        $this->tagName = 'li';
        $this->attributes['value'] = null;
    }

    public function setValue($value) {
        return $this->attributes['value'] = $value;
    }

    public function getValue() {
        return $this->attributes['value'];
    }
}