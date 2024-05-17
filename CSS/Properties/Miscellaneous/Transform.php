<?php

namespace CSS\Properties\Miscellaneous;
use CSS\Properties\CssProperty;

class Transform implements CssProperty {
    protected $properties = [];

    public function transform($value) {
        $this->properties[] = "transform: $value;";
        return $this;
    }
    public function origin($value) {
        $this->properties[] = "origin: $value;";
        return $this;
    }
    public function rotate($value) {
        $this->properties[] = "rotate: $value;";
        return $this;
    }
    public function scale($value) {
        $this->properties[] = "scale: $value;";
        return $this;
    }
    public function translate($value) {
        $this->properties[] = "translate: $value;";
        return $this;
    }
    public function skew($value) {
        $this->properties[] = "skew: $value;";
        return $this;
    }
    public function z_index($value) {
        $this->properties[] = "z-index: $value;";
        return $this;
    }

    public function _webkit_transform($value) {
        $this->properties[] = "-webkit-transform: $value;";
        return $this;
    }

    public function _moz_transform($value) {
        $this->properties[] = "-moz-transform: $value;";
        return $this;
    }
    public function _o_transform($value) {
        $this->properties[] = "-o-transform: $value;";
        return $this;
    }
    
    public function render(): string {
        return implode("\n    ", $this->properties);
    }
}
?>