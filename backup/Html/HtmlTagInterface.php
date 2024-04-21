<?php


interface HtmlElementInterface {
    public function addChild(HtmlElementInterface $child);
    public function render();
}