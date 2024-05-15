<?php

namespace Html\Elements\Body;
use Html\Tags\Single\SingleBodyTag;

class HtmlBreak extends SingleBodyTag{
    public function __construct(){
        $this->tagName = 'br/';
    }
}