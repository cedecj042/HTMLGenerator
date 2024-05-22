<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlSource extends ContainerBodyTag{

    public function __construct($src=null, $type=null, $media=null){
        $this->tagName = "source";
        $this->attributes['src'] = $src;
        $this->attributes['type'] = $type;
        $this->attributes['media'] = $media;
    }

    // Getter and Setter for src
    public function getSrc() {
        return $this->attributes['src'];
    }
    public function setSrc($src) {
        $this->attributes['src'] = $src;
        return $this;
    }

    // Getter and Setter for type
    public function getType() {
        return $this->attributes['type'];
    }
    public function setType($type) {
        $this->attributes['type'] = $type;
        return $this;
    }

    // Getter and Setter for media
    public function getMedia() {
        return $this->attributes['media'];
    }
    public function setMedia($media) {
        $this->attributes['media'] = $media;
        return $this;
    }
}
