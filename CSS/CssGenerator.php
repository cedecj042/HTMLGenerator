<?php

namespace CSS;

class CssGenerator {
    private $rules = [];

    public function addRule($rule) {
        if (is_string($rule)) {
            $rule = new CssRule($rule);
            $this->rules[] = $rule;
            return $rule;
        } elseif ($rule instanceof CssRule) {
            $this->rules[] = $rule;
            return $rule;
        } else {
           // throw new InvalidArgumentException("addRule expects a string or an instance of CssRule");
        }
    }

    public function render(): string {
        $css = "";
        foreach ($this->rules as $rule) {
            $css .= $rule->render();
        }
        return $css;
    }
}

