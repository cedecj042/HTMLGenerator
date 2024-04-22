<?php

namespace Html\Tags\Single;
use Html\Tags\Tag;
use Html\Tags\Single\SingleTagInterface;

class SingleTag extends Tag implements SingleTagInterface {

    public function render() {
        $htmlAttributes = '';
        foreach ($this->attributes as $name => $value) {
            if($value == null) continue;
            $htmlAttributes .= " $name=\"$value\"";
        }
        return "<{$this->tagName}$htmlAttributes />";
    }
}
