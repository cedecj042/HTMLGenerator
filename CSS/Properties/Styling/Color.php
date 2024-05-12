<?php

namespace CSS\Properties\Styling;
use CSS\Properties\CssProperty;

class Color implements CssProperty {
    protected $properties = [];

    public function color($value) {
        $this->properties[] = "color: $value;";
        return $this;
    }

    public function background_color($value) {
        $this->properties[] = "background-color: $value;";
        return $this;
    }

    public function border_color($value) {
        $this->properties[] = "border-color: $value;";
        return $this;
    }

    public function render(): string {
        return implode("\n    ", $this->properties);
    }

}
?>