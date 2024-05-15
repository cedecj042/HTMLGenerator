<?php

namespace CSS\Properties\Layout;
use CSS\Properties\CssProperty;

class Overflow implements CssProperty {
    protected $properties = [];

    public function overflow($value) {
        $this->properties[] = "overflow: $value;";
        return $this;
    }

    public function overflow_wrap($value) {
        $this->properties[] = "overflow-wrap: $value;";
        return $this;
    }

    public function overflow_x($value) {
        $this->properties[] = "overflow-x: $value;";
        return $this;
    }

    public function overflow_y($value) {
        $this->properties[] = "overflow-y: $value;";
        return $this;
    }

    public function render(): string {
        return implode("\n    ", $this->properties);
    }

}
?>