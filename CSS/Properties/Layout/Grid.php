<?php

namespace CSS\Properties\Layout;
use CSS\Properties\CssProperty;

class Grid implements CssProperty {
    protected $properties = [];

    public function display($value) {
        $this->properties[] = "display: $value;";
        return $this;
    }

    public function grid_template_columns($value) {
        $this->properties[] = "grid-template-columns: $value;";
        return $this;
    }

    public function grid_template_rows($value) {
        $this->properties[] = "grid-template-rows: $value;";
        return $this;
    }

    public function grid_gap($value) {
        $this->properties[] = "grid-gap: $value;";
        return $this;
    }

    public function grid_auto_flow($value) {
        $this->properties[] = "grid-auto-flow: $value;";
        return $this;
    }
    public function render(): string {
        return implode("\n    ", $this->properties);
    }

}
?>