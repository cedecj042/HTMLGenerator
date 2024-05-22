<?php

namespace Html\Tags\Single;
use Html\Tags\Tag;

class SingleTag extends Tag{
    
    public function render(){
        $myattributes = $this->renderAttributes();
        return "\n<{$this->tagName}$myattributes>";
    }
}