<?php

namespace CSS\Properties\Box;
use CSS\Properties\CssProperty;

class Outline implements CssProperty {
    protected $properties = [];

    public function outline_width($value) {
        $this->properties[] = "outline-width: $value;";
        return $this;
    }

    public function outline_style($value) {
        $this->properties[] = "outline-style: $value;";
        return $this;
    }

    public function outline_color($value) {
        $this->properties[] = "outline-color: $value;";
        return $this;
    }
    
    public function render(): string {
        return implode("\n    ", $this->properties);
    }

}
?>