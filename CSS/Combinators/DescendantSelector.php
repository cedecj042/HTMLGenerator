<?php

namespace CSS\Combinators;
use CSS\CssRule;

// class DescendantSelector extends CssRule {
//     public function render(): string {
//         $css = $this->selector. " {\n";
//         foreach ($this->properties as $property) {
//             $css.= "    ". $property->render(). "\n"; // Add semicolon and newline
//         }
//         $css.= "}\n";
//         return $css;
//     }
// }

class DescendantSelector extends CssRule
{
    private $parentSelector;

    public function __construct($parentSelector, $childSelector) {
        $this->parentSelector = $parentSelector;
        $this->selector = $childSelector;
    }

    public function render(): string
    {
        $css = $this->parentSelector . " " . $this->selector . " {\n";
        foreach ($this->properties as $property) {
            $css .= "    " . $property->render() . "\n";
        }
        $css .= "}\n";
        return $css;
    }
}