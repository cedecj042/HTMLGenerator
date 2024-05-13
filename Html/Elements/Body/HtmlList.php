<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlList extends ContainerBodyTag {
    public function __construct() {
        $this->tagName = 'li';
        $this->attributes['value'] = null;
    }

    public function setValue($value) {
        $this->attributes['value'] = $value;
        return $this;
    }

    public function getValue() {
        return $this->attributes['value'];
    }
}