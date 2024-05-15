<?php

namespace CSS;
use CSS\Properties\CssProperty;

class CssRule {
    protected $selector;
    protected $properties = [];
    protected $nestedRules = [];

    public function __construct($selector) {
        $this->selector = $selector;
    }

    public function addProperty($property) {
        $this->properties[] = $property;
    }

    public function addProperties(array $properties) {
        foreach ($properties as $property) {
            $this->addProperty($property);
        }
    }

    public function render(): string {
        $css = $this->selector . " {\n";
        foreach ($this->properties as $property) {
            $css .= "  " . $property->render() . "\n";
        }
        $css .= "}\n";
        foreach ($this->nestedRules as $rule) {
            $css .= $rule->render();
        }
        return $css;
    }
}

// class CssRule {
//     protected $selector;
//     protected $properties = [];
//     protected $nestedRules = [];

//     public function __construct($selector) {
//         $this->selector = $selector;
//     }

//     public function addProperty($property) {
//         $this->properties[] = $property;
//     }

//     public function addNestedRule($rule) {
//         $this->nestedRules[] = $rule;
//     }

//     public function render(): string {
//         $css = $this->selector . " {\n";
//         foreach ($this->properties as $property) {
//             $css .= "  " . $property->render() . "\n";
//         }
//         $css .= "}\n";
//         foreach ($this->nestedRules as $rule) {
//             $css .= $rule->render();
//         }
//         return $css;
//     }
// }
    


