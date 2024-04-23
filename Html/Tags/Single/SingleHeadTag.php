<?php

namespace Html\Tags\Single;
use Html\Tags\Tag;

class SingleHeadTag extends Tag {

    public function render() {
        $htmlAttributes = '';
        foreach ($this->attributes as $name => $value) {
            if($value == null) continue;
            $htmlAttributes .= " $name=\"$value\"";
        }
        return "\n<{$this->tagName}$htmlAttributes>";
    }
}
