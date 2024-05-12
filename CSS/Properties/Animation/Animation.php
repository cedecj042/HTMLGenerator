<?php

namespace CSS\Properties\Animation;
use CSS\Properties\CssProperty;

class Animation implements CssProperty {
    protected $properties = [];

    public function animation_name($value) {
        $this->properties[] = "animation-name: $value;";
        return $this;
    }

    public function animation_duration($value) {
        $this->properties[] = "animation-duration: $value;";
        return $this;
    }

    public function animation_timing_function($value) {
        $this->properties[] = "animation-timing-function: $value;";
        return $this;
    }
    public function animation_delay($value) {
        $this->properties[] = "animation-delay: $value;";
        return $this;
    }
    public function animation_iteration_count($value) {
        $this->properties[] = "animation-iteration-count: $value;";
        return $this;
    }
    public function animation_direction($value) {
        $this->properties[] = "animation-direction: $value;";
        return $this;
    }
    public function animation_fill_mode($value) {
        $this->properties[] = "animation-fill-mode: $value;";
        return $this;
    }
    
    public function render(): string {
        return implode("\n    ", $this->properties);
    }

}
?>