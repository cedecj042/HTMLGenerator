<?php

namespace Html\Elements;

class HtmlText {
    protected $text;

    public function __construct($text) {
        $this->text = $text;
    }
    public function render() {
        return htmlspecialchars($this->text);
    }
}