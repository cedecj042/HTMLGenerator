<?php

namespace CSS\Properties\Layout;
use CSS\Properties\CssProperty;

class BoxModel implements CssProperty {
    protected $properties = [];

    public function width($value) {
        $this->properties[] = "width: $value;";
        return $this;
    }

    public function height($value) {
        $this->properties[] = "height: $value;";
        return $this;
    }

    public function margin($value) {
        $this->properties[] = "margin: $value;";
        return $this;
    }

    public function padding($value) {
        $this->properties[] = "padding: $value;";
        return $this;
    }

    public function border($value) {
        $this->properties[] = "border: $value;";
        return $this;
    }
    public function render(): string {
        return implode("\n    ", $this->properties);
    }
    

}
?>