<?php

namespace Html\Elements\Head;
use Html\Tags\Single\SingleHeadTag;

class HtmlLink extends SingleHeadTag{

    public function __construct(){
        $this->tagName = "link";
        
    }
}