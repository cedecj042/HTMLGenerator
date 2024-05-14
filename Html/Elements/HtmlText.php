<?php

namespace Html\Elements;
use Html\Tags\Tag;

class HtmlText extends Tag{
    protected $text;

    public function __construct($text) {
        $this->tagName = 'text';
        $this->text = $text;
    }
    public function render() {
        return htmlspecialchars($this->text);
    }
}