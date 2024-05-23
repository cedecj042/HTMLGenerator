<?php 

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlEmbed extends ContainerBodyTag{

    public function __construct($src=null, $type=null, $width=null, $height=null){
        $this->tagName= "embed";
        $this->attributes['src']=$src;
        $this->attributes['type']=$type;
        $this->attributes['width']=$width;
        $this->attributes['height']=$height;
    }

    // Getter for src
    public function getSrc() {
        return $this->attributes['src'];
    }

    // Setter for src
    public function setSrc($src) {
        $this->attributes['src'] = $src;
        return $this;
    }

    // Getter for type
    public function getType() {
        return $this->attributes['type'];
    }

    // Setter for type
    public function setType($type) {
        $this->attributes['type'] = $type;
        return $this;
    }

    // Getter for width
    public function getWidth() {
        return $this->attributes['width'];
    }

    // Setter for width
    public function setWidth($width) {
        $this->attributes['width'] = $width;
        return $this;
    }

    // Getter for height
    public function getHeight() {
        return $this->attributes['height'];
    }

    // Setter for height
    public function setHeight($height) {
        $this->attributes['height'] = $height;
        return $this;
    }
}
