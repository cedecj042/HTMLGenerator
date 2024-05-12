<?php

namespace CssGenerator\RuleType;
use CSS\CssRule;

class GeneralSiblingSelector extends CssRule {
    public function render(): string {
        $css = $this->selector. "~* ". $this->selector. " {\n";
        foreach ($this->properties as $property) {
            $css.= "    ". $property->render(). "\n"; // Add semicolon and newline
        }
        $css.= "}\n";
        return $css;
    }
}
