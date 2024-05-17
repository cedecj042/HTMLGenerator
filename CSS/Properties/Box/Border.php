<?php

namespace CSS\Properties\Box;
use CSS\Properties\CssProperty;

class Border implements CssProperty {
    protected $properties = [];

    public function border($value) {
        $this->properties[] = "border: $value;";
        return $this;
    }
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

    public function border_left($value) {
        $this->properties[] = "border-left: $value;";
        return $this;
    }
    public function border_right($value) {
        $this->properties[] = "border-right: $value;";
        return $this;
    }
    public function border_top($value) {
        $this->properties[] = "border-top: $value;";
        return $this;
    }
    public function border_bottom($value) {
        $this->properties[] = "border-bottom: $value;";
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

    public function border_top_left_radius($value) {
        $this->properties[] = "border-top-left-radius: $value;";
        return $this;
    }

    public function border_top_right_radius($value) {
        $this->properties[] = "border-top-right-radius: $value;";
        return $this;
    }

    public function border_bottom_left_radius($value) {
        $this->properties[] = "border-bottom-left-radius: $value;";
        return $this;
    }

    public function border_bottom_right_radius($value) {
        $this->properties[] = "border-bottom-right-radius: $value;";
        return $this;
    }


    public function render(): string {
        return implode("\n    ", $this->properties);
    }

}
?>