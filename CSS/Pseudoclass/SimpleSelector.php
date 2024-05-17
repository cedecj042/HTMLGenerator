<?php

namespace CSS\Pseudoclass;
use CSS\CssRule;

class SimpleSelector extends CssRule
{
    private $element;
    private $pseudoElement;

    public function __construct($selector, $element, $pseudoElement) {
        parent::__construct($selector);
        $this->element = $element;
        $this->pseudoElement = $pseudoElement;
    }

    public function render(): string
    {
        $css = $this->selector . " " . $this->element . ":" . $this->pseudoElement . " {\n";
        foreach ($this->properties as $property) {
            $css .= "    " . $property->render() . "\n";
        }
        $css .= "}\n";
        return $css;
    }
}