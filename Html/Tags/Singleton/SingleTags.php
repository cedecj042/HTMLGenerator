<?php

namespace Html\Tags\SingleTags\SingleTag;
use Html\Tag\Tag;
use Html\Tags\SingleTags\SingleTagsInterface\SingleTagsInterface;

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
