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

    public function addComment($comment) {
        $this->properties[] = "/* " . $comment . " */";
    }

    public function addCommentedProperties($properties) {
        foreach ($properties as $property => $value) {
            if (is_object($value)) {
                // Check if the object has a render method, otherwise use __toString if available
                if (method_exists($value, 'render')) {
                    $value = $value->render();
                } elseif (method_exists($value, '__toString')) {
                    $value = $value->__toString();
                } else {
                    throw new \Exception("Object of class " . get_class($value) . " cannot be converted to string");
                }
            }
            $this->properties[] = "/* {$property}: {$value}; */";
        }
    }

    // public function render(): string {
    //     $css = $this->selector . " {\n";
    //     foreach ($this->properties as $property) {
    //         $css .= "  " . $property->render() . "\n";
    //     }
    //     $css .= "}\n";
    //     foreach ($this->nestedRules as $rule) {
    //         $css .= $rule->render();
    //     }
    //     return $css;
    // }

    public function render(): string {
        $css = $this->selector . " {\n";
        foreach ($this->properties as $property) {
            if (is_object($property) && method_exists($property, 'render')) {
                $css .= "  " . $property->render() . "\n";
            } else {
                // Assume $property is a string and directly append it
                $css .= "  " . $property . "\n";
            }
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
    


