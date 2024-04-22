<?php

namespace Html\Tags\SingleTags;
use Html\Tags\Tag;
use Html\Tags\SingleTags\SingleTagsInterface;

class SingleTag extends Tag implements SingleTagsInterface {

    public function render() {
        $htmlAttributes = '';
        foreach ($this->attributes as $name => $value) {
            if($value == null) continue;
            $htmlAttributes .= " $name=\"$value\"";
        }
        return "<{$this->tagName}$htmlAttributes />";
    }
}
