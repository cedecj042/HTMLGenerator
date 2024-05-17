<?php

namespace CSS\Pseudoclass;

use CSS\CssRule;class Keyframes extends CssRule {
    private $frames = [];

    public function __construct($name) {
        parent::__construct($name);
    }

    public function addFrame($percentage, $properties) {
        $this->frames[$percentage] = $properties;
    }

    public function render(): string {
        $css = "@keyframes " . $this->selector . " {\n";
        foreach ($this->frames as $percentage => $properties) {
            $css .= "  " . $percentage . " {\n";
            foreach ($properties as $property) {
                $css .= "    " . $property->render() . "\n";
            }
            $css .= "  }\n";
        }
        $css .= "}\n";
        return $css;
    }
}