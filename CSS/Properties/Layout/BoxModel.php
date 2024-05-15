<?php

namespace CSS\Properties\Layout;
use CSS\Properties\CssProperty;

class BoxModel implements CssProperty {
    protected $properties = [];

    
    public function width($value) {
        $this->properties[] = "width: $value;";
        return $this;
    }

    public function max_width($value) {
        $this->properties[] = "max-width: $value;";
        return $this;
    }

    public function min_width($value) {
        $this->properties[] = "min-width: $value;";
        return $this;
    }

    public function height($value) {
        $this->properties[] = "height: $value;";
        return $this;
    }

    public function min_height($value) {
        $this->properties[] = "min-height: $value;";
        return $this;
    }

    public function max_height($value) {
        $this->properties[] = "max-height: $value;";
        return $this;
    }

    public function margin($value) {
        $this->properties[] = "margin: $value;";
        return $this;
    }

    public function margin_top($value) {
        $this->properties[] = "margin-top: $value;";
        return $this;
    }

    public function margin_right($value) {
        $this->properties[] = "margin-right: $value;";
        return $this;
    }

    public function margin_bottom($value) {
        $this->properties[] = "margin-bottom: $value;";
        return $this;
    }
    public function margin_left($value) {
        $this->properties[] = "margin-left: $value;";
        return $this;
    }

    public function padding($value) {
        $this->properties[] = "padding: $value;";
        return $this;
    }

    public function padding_top($value) {
        $this->properties[] = "padding-top: $value;";
        return $this;
    }

    public function padding_right($value) {
        $this->properties[] = "padding-right: $value;";
        return $this;
    }

    public function padding_bottom($value) {
        $this->properties[] = "padding-bottom: $value;";
        return $this;
    }

    public function padding_left($value) {
        $this->properties[] = "padding-left: $value;";
        return $this;
    }

    public function border($value) {
        $this->properties[] = "border: $value;";
        return $this;
    }
    public function display($value) {
        $this->properties[] = "display: $value;";
        return $this;
    }
    public function render(): string {
        return implode("\n    ", $this->properties);
    }
    

}
?>