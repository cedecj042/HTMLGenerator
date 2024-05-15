<?php

namespace CSS\Pseudoclass;
use CSS\CssRule;

class PseudoClassSelector extends CssRule
{
    private $pseudoClass;

    public function __construct($selector, $pseudoClass) {
        parent::__construct($selector);
        $this->pseudoClass = $pseudoClass;
    }

    public function render(): string
    {
        $css = $this->selector . "::" . $this->pseudoClass . " {\n";
        foreach ($this->properties as $property) {
            $css .= "    " . $property->render() . "\n";
        }
        $css .= "}\n";
        return $css;
    }
}