<?php


class HtmlText implements HtmlElementInterface {
    protected $text;

    public function __construct($text) {
        $this->text = $text;
    }

    public function addChild(HtmlElementInterface $child) {
        throw new Exception("HtmlText cannot have children.");
    }

    public function setAttribute($name, $value) {
        throw new Exception("HtmlText cannot have attributes.");
    }

    public function render() {
        return htmlspecialchars($this->text);
    }
}