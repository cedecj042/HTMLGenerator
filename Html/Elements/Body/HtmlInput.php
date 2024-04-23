<?php

namespace Html\Elements\Body;
use Html\Tags\Single\SingleBodyTag;

class HtmlInput extends SingleBodyTag {
    
    public function __construct(){
        $this->tagName = "input";
        $this->attributes['type'] = null;
        $this->attributes['value'] = null;
        $this->attributes['placeholder'] = null;
    }

    public function setType($type) {
        $this->attributes['type'] = $type;
        return $this;
    }

    public function getType() {
        return $this->attributes['type'];
    }

    public function setValue($value) {
        $this->attributes['value'] = $value;
        return $this;
    }

    public function getValue() {
        return $this->attributes['value'];
    }

    // Setter for placeholder attribute
    public function setPlaceholder($placeholder) {
        $this->attributes['placeholder'] = $placeholder;
        return $this;
    }

    public function getPlaceholder() {
        return $this->attributes['placeholder'];
    }

}