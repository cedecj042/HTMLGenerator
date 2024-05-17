<?php

namespace CSS\Properties\Animation;
use CSS\Properties\CssProperty;

class Transition implements CssProperty {
    protected $properties = [];

    public function transition($value) {
        $this->properties[] = "transition: $value;";
        return $this;
    }

    public function transition_property($value) {
        $this->properties[] = "transition-property: $value;";
        return $this;
    }

    public function transition_duration($value) {
        $this->properties[] = "transition-duration: $value;";
        return $this;
    }

    public function transition_timing_function($value) {
        $this->properties[] = "transition-timing-function: $value;";
        return $this;
    }
    public function transition_delay($value) {
        $this->properties[] = "transition-delay: $value;";
        return $this;
    }

    public function _o_transition($value) {
        $this->properties[] = "-o-transition: $value;";
        return $this;
    }

    public function _moz_transition($value) {
        $this->properties[] = "-moz-transition: $value;";
        return $this;
    }
    public function _webkit_transition($value) {
        $this->properties[] = "-webkit-transition: $value;";
        return $this;
    }

    public function _webkit_box_shadow($value) {
        $this->properties[] = "-webkit-box-shadow: $value;";
        return $this;
    }

    public function _moz_box_shadow($value) {
        $this->properties[] = "-moz-box-shadow: $value;";
        return $this;
    }

    public function _webkit_border_radius($value) {
        $this->properties[] = "-webkit-border-radius: $value;";
        return $this;
    }
    
    public function _moz_border_radius($value) {
        $this->properties[] = "-moz-border-radius: $value;";
        return $this;
    }
    
    public function render(): string {
        return implode("\n    ", $this->properties);
    }
}
