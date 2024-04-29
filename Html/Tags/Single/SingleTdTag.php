<?php
namespace Html\Tags\Single;
use Html\Tags\Tag;

class SingleTdTag extends Tag {
    protected string $tagName = 'td';
    protected string $content ='';

    public function setContent(string $content) {
        $this->content = $content;
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