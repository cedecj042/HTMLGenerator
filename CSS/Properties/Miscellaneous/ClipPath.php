<?php

namespace CSS\Properties\Miscellaneous;
use CSS\Properties\CssProperty;

class ClipPath implements CssProperty {
    protected $properties = [];

    public function shape($value) {
        $this->properties[] = "shape: $value;";
        return $this;
    }
    public function offset($value) {
        $this->properties[] = "offset: $value;";
        return $this;
    }
    
    
    public function render(): string {
        return implode("\n    ", $this->properties);
    }

}
?>