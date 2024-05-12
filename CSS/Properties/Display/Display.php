<?php

namespace CSS\Properties\Display;
use CSS\Properties\CssProperty;

class Display implements CssProperty {
    protected $properties = [];

    public function display($value) {
        $this->properties[] = "display: $value;";
        return $this;
    }

    public function visibility($value) {
        $this->properties[] = "visibility: $value;";
        return $this;
    }

    public function opacity($value) {
        $this->properties[] = "opacity: $value;";
        return $this;
    }
    
    public function render(): string {
        return implode("\n    ", $this->properties);
    }

}
?>