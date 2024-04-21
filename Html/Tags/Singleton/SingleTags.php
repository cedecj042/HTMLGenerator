<?php

namespace Html\Tags\SingleTags;
use Html\Tag;
use Html\Tags\SingleTags\SingleTagsInterface;

class SingleTag extends Tag implements SingleTagsInterface {

    public function render() {
        $attributes = '';
        foreach ($this->attributes as $name => $value) {
            if($value == null) continue;
            $attributes .= " $name=\"$value\"";
        }
        return "<{$this->tagName}$attributes />";
    }
}
