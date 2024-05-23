<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlVideo extends ContainerBodyTag{

    public function __construct(){
        $this->tagName="video";
        $this->solo_attributes["autoplay"]=false;
        $this->solo_attributes["controls"]=false;
        $this->solo_attributes["loop"]=false;
        $this->solo_attributes["muted"]=false;
        $this->attributes["preload"]=null;
        $this->attributes["src"]=null;
        $this->attributes["width"]=null;
        $this->attributes["height"]=null;
        $this->attributes["poster"]=null;
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
    public function setPoster($value){
        $this->attributes["poster"]=$value;
        return $this;
    }

    public function setHeight($value){
        $this->attributes['height']=$value;
        return $this;
    }
    public function setWidth($value){
        $this->attributes['width']=$value;
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
    public function getPoster(){
        return $this->attributes["poster"];
    }

    public function getHeight(){
        return $this->attributes['height'];
    }
    public function getWidth(){
        return $this->attributes['width'];
    }
}
