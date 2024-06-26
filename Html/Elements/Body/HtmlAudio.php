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
        $this->attributes["preload"]=$value;
        return $this;
    }
    public function setSource($value){
        $this->attributes["src"]=$value;
        return $this;
    }

    public function getAutoplay() {
        return $this->solo_attributes["autoplay"];
    }
    
    public function getControls() {
        return $this->solo_attributes["controls"];
    }
    
    public function getLoop() {
        return $this->solo_attributes["loop"];
    }
    
    public function getMuted() {
        return $this->solo_attributes["muted"];
    }
    public function getSource() {
        return $this->attributes["src"];
    }
    
    public function getPreload() {
        return $this->attributes["preload"];
    }
        
}