<?php

namespace CSS;

class CssGenerator {
    private $rules = [];

    public function addRule($selector) {
        $rule = new CssRule($selector);
        $this->rules[] = $rule;
        return $rule;
    }

    public function render(): string {
        $css = "";
        foreach ($this->rules as $rule) {
            $css .= $rule->render();
        }
        return $css;
    }
}

