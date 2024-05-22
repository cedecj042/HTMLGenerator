<?php

namespace CSS;

class CssGenerator {
    private $rules = [];
    private $comments = [];


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

    public function addComment($comment) {
        $this->comments[] = "/* " . $comment . " */";
    }

    public function render() {
        $css = "";
        foreach ($this->comments as $comment) {
            $css .= $comment . "\n";
        }
        foreach ($this->rules as $rule) {
            $css .= $rule->render();
        }
        return $css;
    }

    public function generateAndSaveToFile($filePath) {
        $cssContent = $this->render();
        $file = fopen($filePath, 'w');
        if (!$file) {
            throw new \Exception("Failed to open file: {$filePath}");
        }
        if (fwrite($file, $cssContent) === false) {
            fclose($file);
            throw new \Exception("Failed to write to file: {$filePath}");
        }
        fclose($file);
    }
}

