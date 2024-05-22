<?php

namespace Html\Elements;
use Html\Tags\Container\ContainerTag;

class HtmlScript extends ContainerTag{
    public function __construct(){
        $this->tagName = "script";
        $this->attributes["async"]=null;
        $this->attributes["crossorigin"]=null;
        $this->attributes["defer"]=null;
        $this->attributes["integrity"]=null;
        $this->attributes["nomodule"]=null;
        $this->attributes["referrerpolicy"]=null;
        $this->attributes["src"]=null;
        $this->attributes["type"]=null;

    }

    public function setAsync($value){
        $this->attributes["async"]=$value;
        return $this;
    }

    public function getAsync(){
        return $this->attributes["async"];
    }

    public function setCrossorigin($value){
        $this->attributes["crossorigin"]=$value;
        return $this;
    }

    public function getCrossorigin(){
        return $this->attributes["crossorigin"];
    }

    public function setDefer($value){
        $this->attributes["defer"]=$value;
        return $this;
    }

    public function getDefer(){
        return $this->attributes["defer"];
    }

    public function setIntegrity($value){
        $this->attributes["integrity"]=$value;
        return $this;
    }

    public function getIntegrity(){
        return $this->attributes["integrity"];
    }

    public function setNomodule($value){
        $this->attributes["nomodule"]=$value;
        return $this;
    }

    public function getNomodule(){
        return $this->attributes["nomodule"];
    }

    public function setReferrerpolicy($value){
        $this->attributes["referrerpolicy"]=$value;
        return $this;
    }

    public function getReferrerpolicy(){
        return $this->attributes["referrerpolicy"];
    }

    public function setSrc($value){
        $this->attributes["src"]=$value;
        return $this;
    }

    public function getSrc(){
        return $this->attributes["src"];
    }

    public function setType($value){
        $this->attributes["type"]=$value;
        return $this;
    }

    public function getType(){
        return $this->attributes["type"];
    }
}