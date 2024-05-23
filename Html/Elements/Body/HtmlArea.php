<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlArea extends ContainerBodyTag{

    public function __construct($alt=null, $coords=null, $shape=null, $href=null, $target=null){
        $this->tagName = "area";
        $this->attributes['alt'] = $alt;
        $this->attributes['coords'] = $coords;
        $this->attributes['shape'] = $shape;
        $this->attributes['href'] = $href;
        $this->attributes['target'] = $target;
    }

    // Getter and Setter for alt
    public function getAlt() {
        return $this->attributes['alt'];
    }
    public function setAlt($alt) {
        $this->attributes['alt'] = $alt;
        return $this;
    }

    // Getter and Setter for coords
    public function getCoords() {
        return $this->attributes['coords'];
    }
    public function setCoords($coords) {
        $this->attributes['coords'] = $coords;
        return $this;
    }

    // Getter and Setter for shape
    public function getShape() {
        return $this->attributes['shape'];
    }
    public function setShape($shape) {
        $this->attributes['shape'] = $shape;
        return $this;
    }

    // Getter and Setter for href
    public function getHref() {
        return $this->attributes['href'];
    }
    public function setHref($href) {
        $this->attributes['href'] = $href;
        return $this;
    }

    // Getter and Setter for target
    public function getTarget() {
        return $this->attributes['target'];
    }
    public function setTarget($target) {
        $this->attributes['target'] = $target;
        return $this;
    }
}
