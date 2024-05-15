<?php

namespace CSS\Properties\Styling;
use CSS\Properties\CssProperty;

class Text implements CssProperty {
    protected $properties = [];

    public function text_align($value) {
        $this->properties[] = "text-align: $value;";
        return $this;
    }
    public function text_wrap($value) {
        $this->properties[] = "text-wrap: $value;";
        return $this;
    }

    public function text_decoration($value) {
        $this->properties[] = "text-decoration: $value;";
        return $this;
    }

    public function text_transform($value) {
        $this->properties[] = "text-transform: $value;";
        return $this;
    }
    public function text_shadow($value) {
        $this->properties[] = "text-shadow: $value;";
        return $this;
    }

    public function letter_spacing($value) {
        $this->properties[] = "letter-spacing: $value;";
        return $this;
    }

    public function word_spacing($value) {
        $this->properties[] = "word-spacing: $value;";
        return $this;
    }

    public function list_style_type($value) {
        $this->properties[] = "list-style-type: $value;";
        return $this;
    }

    public function render(): string {
        return implode("\n    ", $this->properties);
    }

}
?>