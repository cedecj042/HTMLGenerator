<?php

namespace CSS\Properties\Miscellaneous;
use CSS\Properties\CssProperty;

class Filter implements CssProperty {
    protected $properties = [];

    public function cursor($value) {
        $this->properties[] = "brightness: $value;";
        return $this;
    }
    public function contrast($value) {
        $this->properties[] = "contrast: $value;";
        return $this;
    }
    public function blur($value) {
        $this->properties[] = "blur: $value;";
        return $this;
    }
    public function grayscale($value) {
        $this->properties[] = "grayscale: $value;";
        return $this;
    }
    public function hue_rotate($value) {
        $this->properties[] = "hue-rotate: $value;";
        return $this;
    }
    public function invert($value) {
        $this->properties[] = "invert: $value;";
        return $this;
    }
    public function saturate($value) {
        $this->properties[] = "saturate: $value;";
        return $this;
    }
    public function sepia($value) {
        $this->properties[] = "sepia: $value;";
        return $this;
    }
    public function render(): string {
        return implode("\n    ", $this->properties);
    }

}
?>