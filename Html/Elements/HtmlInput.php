<?php

namespace Html\Elements;
use Html\Tags\Single\SingleTag;

class HtmlInput extends SingleTag{
    
    public function __construct(){
        $this->tagName = "input";
    }
}