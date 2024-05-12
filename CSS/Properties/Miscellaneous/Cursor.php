<?php

namespace CSS\Properties\Miscellaneous;
use CSS\Properties\CssProperty;

class Cursor implements CssProperty {
    protected $properties = [];

    public function cursor($value) {
        $this->properties[] = "cursor: $value;";
        return $this;
    }
    
    public function render(): string {
        return implode("\n    ", $this->properties);
    }

}
?>