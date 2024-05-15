<?php

namespace CSS\Properties\Miscellaneous;
use CSS\Properties\CssProperty;

class Miscellaneous implements CssProperty {
    protected $properties = [];

    public function opacity($value) {
        $this->properties[] = "opacity: $value;";
        return $this;
    }
    public function box_shadow($value) {
        $this->properties[] = "box-shadow: $value;";
        return $this;
    }
    public function text_shadow($value) {
        $this->properties[] = "text-shadow: $value;";
        return $this;
    }
    // public function src($value) {
    //     $this->properties[] = "src: $value;";
    //     return $this;
    // }
    public function render(): string {
        return implode("\n    ", $this->properties);
    }


}
?>