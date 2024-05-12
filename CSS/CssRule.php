<?php

namespace CSS;
use CSS\Properties\CssProperty;

class CssRule {
    protected $selector;
    protected $properties = [];

    public function __construct($selector) {
        $this->selector = $selector;
    }

    public function addProperty(CssProperty $property) {
        $this->properties[] = $property;
    }

    public function render(): string {
        $css = $this->selector . " {\n";
        foreach ($this->properties as $property) {
            $css .= "    " . $property->render() . "\n"; // Add semicolon and newline
        }
        $css .= "}\n";
        return $css;
    }
    
}

?>
