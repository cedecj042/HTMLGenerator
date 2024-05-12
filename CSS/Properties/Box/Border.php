<?php

namespace CSS\Properties\Display;
use CSS\Properties\CssProperty;

class Border implements CssProperty {
    protected $properties = [];

    public function border_width($value) {
        $this->properties[] = "border-width: $value;";
        return $this;
    }

    public function border_style($value) {
        $this->properties[] = "border-style: $value;";
        return $this;
    }

    public function border_color($value) {
        $this->properties[] = "border-color: $value;";
        return $this;
    }

    public function border_radius($value) {
        $this->properties[] = "border-radius: $value;";
        return $this;
    }

    public function render(): string {
        return implode("\n    ", $this->properties);
    }

}
?>