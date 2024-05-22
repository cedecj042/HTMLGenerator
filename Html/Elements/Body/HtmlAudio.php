<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlAudio extends ContainerBodyTag{
    public function __construct(){
        $this->tagName="audio";
        $this->solo_attributes["autoplay"]=false;
        $this->solo_attributes["controls"]=false;
        $this->solo_attributes["loop"]=false;
        $this->solo_attributes["muted"]=false;
        $this->attributes["preload"]=null;
        $this->attributes["src"]=null;
    }

    public function setAutoplay(){
        $this->solo_attributes["autoplay"]=true;
        return $this;
    }
    public function setControls(){
        $this->solo_attributes["controls"]=true;
        return $this;
    }

    public function setLoop(){
        $this->solo_attributes["loop"]=true;
        return $this;
    }
    public function setMuted(){
        $this->solo_attributes["muted"]=true;
        return $this;
    }

    public function setPreload($value){
        $this->solo_attributes["preload"]=$value;
        return $this;
    }
    public function setSource($value){
        $this->solo_attributes["src"]=$value;
        return $this;
    }
    
}