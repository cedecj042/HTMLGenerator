<?php

namespace CSS\Properties\Display;
use CSS\Properties\CssProperty;

class Content implements CssProperty {
    protected $properties = [];

    public function content($value) {
        $this->properties[] = "content: $value;";
        return $this;
    }
    public function place_content($value) {
        $this->properties[] = "place-content: $value;";
        return $this;
    }

    public function align_content($value) {
        $this->properties[] = "align-content: $value;";
        return $this;
    }

    public function align_items($value) {
        $this->properties[] = "align-items: $value;";
        return $this;
    }

    public function conter_reset($value) {
        $this->properties[] = "content-reset: $value;";
        return $this;
    }

    public function counter_increment($value) {
        $this->properties[] = "counter-increment: $value;";
        return $this;
    }
    
    public function render(): string {
        return implode("\n    ", $this->properties);
    }

}
?>