<?php

namespace CSS\Properties\Styling;
use CSS\Properties\CssProperty;

class Background implements CssProperty {
    protected $properties = [];

    public function background($value) {
        $this->properties[] = "background: $value;";
        return $this;
    }
    public function background_color($value) {
        $this->properties[] = "background-color: $value;";
        return $this;
    }

    public function background_image($value) {
        $this->properties[] = "background-image: $value;";
        return $this;
    }

    public function background_repeat($value) {
        $this->properties[] = "background-repeat: $value;";
        return $this;
    }

    public function background_size($value) {
        $this->properties[] = "background-size: $value;";
        return $this;
    }

    public function background_position($value) {
        $this->properties[] = "background-position: $value;";
        return $this;
    }
    public function background_attachment($value) {
        $this->properties[] = "background-attachment: $value;";
        return $this;
    }

    public function render(): string {
        return implode("\n    ", $this->properties);
    }

}
?>