<?php

namespace CSS\Properties\Layout;
use CSS\Properties\CssProperty;

class Positioning implements CssProperty {
    protected $properties = [];

    public function position($value) {
        $this->properties[] = "position: $value;";
        return $this;
    }

    public function top($value) {
        $this->properties[] = "top: $value;";
        return $this;
    }

    public function right($value) {
        $this->properties[] = "right: $value;";
        return $this;
    }

    public function bottom($value) {
        $this->properties[] = "bottom: $value;";
        return $this;
    }

    public function left($value) {
        $this->properties[] = "left: $value;";
        return $this;
    }

    public function z_index($value) {
        $this->properties[] = "z-index: $value;";
        return $this;
    }
    public function render(): string {
        return implode("\n    ", $this->properties);
    }

}
?>