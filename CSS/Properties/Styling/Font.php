<?php

namespace CSS\Properties\Styling;
use CSS\Properties\CssProperty;

class Font implements CssProperty {
    protected $properties = [];

    public function font($value) {
        $this->properties[] = "font: $value;";
        return $this;
    }
    public function font_family($value) {
        $this->properties[] = "font-family: $value;";
        return $this;
    }

    public function font_size($value) {
        $this->properties[] = "font-size: $value;";
        return $this;
    }

    public function font_weight($value) {
        $this->properties[] = "font-weight: $value;";
        return $this;
    }

    public function font_style($value) {
        $this->properties[] = "font-style: $value;";
        return $this;
    }

    public function line_height($value) {
        $this->properties[] = "line-height: $value;";
        return $this;
    }
    public function src($value) {
        $this->properties[] = "src: $value;";
        return $this;
    }
    public function color($value) {
        $this->properties[] = "color: $value;";
        return $this;
    }

    public function render(): string {
        return implode("\n    ", $this->properties);
    }

}
?>