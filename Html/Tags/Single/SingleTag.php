<?php

namespace Html\Tags\Single;

use Html\Tags\Tag;
use Html\Tags\TagInterface;

class SingleTag extends Tag implements TagInterface {

    public function render() {
        $htmlAttributes = '';
        foreach ($this->attributes as $name => $value) {
            if($value == null) continue;
            $htmlAttributes .= " $name=\"$value\"";
        }
        return "\n<{$this->tagName}$htmlAttributes>";
    }
}
