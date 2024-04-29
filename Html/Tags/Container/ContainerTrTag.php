<?php

namespace Html\Tags\Container;

use Html\Tags\Tag;

class ContainerTrTag extends Tag {
    protected string $tagName = 'tr';
    protected array $children = [];
    protected string $content = '';

    public function addChild(Tag $child) {
        $this->children[] = $child;
        return $this;
    }
    public function render() {
        $htmlAttributes = '';
        foreach ($this->attributes as $name => $value) {
            if ($value === null) {
                continue;
            }
            $htmlAttributes .= " $name=\"$value\"";
        }
        return "\n<{$this->tagName}$htmlAttributes>{$this->content}</{$this->tagName}>";
    }
}