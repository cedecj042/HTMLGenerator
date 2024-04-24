<?php

namespace Html\Elements\Head;
use Html\Tags\Single\SingleHeadTag;

class HtmlBase extends SingleHeadTag{

    public function __construct($href=null,$target=null){
        $this->tagName = "base";
        $this->attributes["href"]=$href;
        $this->attributes["target"]=$target;
    }

    public function setHref($href){
        $this->attributes["href"]=$href;
        return $this;
    }
    public function setTarget($target){
        $this->attributes["target"]=$target;
        return $this;
    }
    public function getHref(){
        return $this->attributes["href"];
    }
    public function getTarget(){
        return $this->attributes["target"];
    }
}