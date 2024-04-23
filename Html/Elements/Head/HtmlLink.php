<?php

namespace Html\Elements\Head;
use Html\Tags\Single\SingleTag;

class HtmlLink extends SingleTag{

    public function __construct(){
        $this->tagName = "link";
        
    }
}