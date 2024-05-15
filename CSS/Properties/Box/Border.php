<?php

namespace CSS\Properties\Box;
use CSS\Properties\CssProperty;

class Border implements CssProperty {
    protected $properties = [];

    public function border_width($value) {
        $this->properties[] = "border-width: $value;";
        return $this;
    }

    public function border_style($value) {
        $this->properties[] = "border-style: $value;";
        return $this;
    }

    public function border_color($value) {
        $this->properties[] = "border-color: $value;";
        return $this;
    }

    public function border_radius($value) {
        $this->properties[] = "border-radius: $value;";
        return $this;
    }

    public function border_collapse($value) {
        $this->properties[] = "border-collapse: $value;";
        return $this;
    }

    public function empty_cells($value) {
        $this->properties[] = "empty-cells: $value;";
        return $this;
    }

    public function caption_side($value) {
        $this->properties[] = "caption-side: $value;";
        return $this;
    }

    public function table_layout($value) {
        $this->properties[] = "table-layout: $value;";
        return $this;
    }

    public function render(): string {
        return implode("\n    ", $this->properties);
    }

}
?>