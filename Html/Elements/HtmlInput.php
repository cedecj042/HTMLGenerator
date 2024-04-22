<?php

namespace Html\Elements;
use Html\Tags\Single\SingleTag;

class HtmlInput extends SingleTag {
    
    public function __construct(){
        $this->tagName = "input";
        // Initialize specific attributes for the input tag
        $this->attributes['type'] = null;
        $this->attributes['value'] = null;
        $this->attributes['placeholder'] = null;
        // Add more specific attributes as needed
    }

    // Setter for type attribute
    public function setType($type) {
        $this->attributes['type'] = $type;
        return $this;
    }

    // Getter for type attribute
    public function getType() {
        return $this->attributes['type'];
    }

    // Setter for value attribute
    public function setValue($value) {
        $this->attributes['value'] = $value;
        return $this;
    }

    // Getter for value attribute
    public function getValue() {
        return $this->attributes['value'];
    }

    // Setter for placeholder attribute
    public function setPlaceholder($placeholder) {
        $this->attributes['placeholder'] = $placeholder;
        return $this;
    }

    // Getter for placeholder attribute
    public function getPlaceholder() {
        return $this->attributes['placeholder'];
    }

}