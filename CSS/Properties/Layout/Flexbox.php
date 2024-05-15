<?php

namespace CSS\Properties\Layout;
use CSS\Properties\CssProperty;

class FlexBox implements CssProperty {
    protected $properties = [];

    public function display($value) {
        $this->properties[] = "display: $value;";
        return $this;
    }

    public function flex_direction($value) {
        $this->properties[] = "flex-direction: $value;";
        return $this;
    }

    public function justify_content($value) {
        $this->properties[] = "justify-content: $value;";
        return $this;
    }

    public function flex_wrap($value) {
        $this->properties[] = "flex-wrap: $value;";
        return $this;
    }
    public function flex_grow($value) {
        $this->properties[] = "flex-grow: $value;";
        return $this;
    }
    public function flex_shrink($value) {
        $this->properties[] = "flex-shrink: $value;";
        return $this;
    }
    public function flex_basis($value) {
        $this->properties[] = "flex-basis: $value;";
        return $this;
    }
    
    public function align_items($value) {
        $this->properties[] = "align-items: $value;";
        return $this;
    }
    public function align_self($value) {
        $this->properties[] = "align-self: $value;";
        return $this;
    }
    public function align_content($value) {
        $this->properties[] = "align-content: $value;";
        return $this;
    }

    public function box_sizing($value) {
        $this->properties[] = "box-sizing: $value;";
        return $this;
    }


    public function render(): string {
        return implode("\n    ", $this->properties);
    }

}
?>