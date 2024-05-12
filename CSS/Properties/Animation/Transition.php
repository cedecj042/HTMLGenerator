<?php

namespace CSS\Properties\Animation;
use CSS\Properties\CssProperty;

class Transition implements CssProperty {
    protected $properties = [];

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
    
    public function render(): string {
        return implode("\n    ", $this->properties);
    }

}
?>