<?php

namespace Html\Elements\Body;


use Html\Tags\Container\ContainerBodyTag;
use Html\Elements\HtmlText;

class HtmlAnchor extends ContainerBodyTag {
    public function __construct($href = null, $text = null) {
        $this->tagName = 'a';
        $this->attributes["href"] = null;
        $this->attributes["download"] = null;
        $this->attributes["media"] = null;
        $this->attributes["type"] = null;
        $this->attributes["target"]=null;

        if($href !== null) {
            $this->setHref($href);
        }
        if ($text !== null) {
            $this->setText($text);
        }
    }

    public function setHref($href) {
        $this->attributes['href'] = $href;
        return $this;
    }

    public function setDownload($value) {
        $this->attributes['download'] = $value;
        return $this;
    }

    public function getDownload() {
        return $this->attributes['download'];
    }

    public function setMedia($value) {
        $this->attributes['media'] = $value;
        return $this;
    }

    public function getMedia() {
        return $this->attributes['media'];
    }

    public function setType($value) {
        $this->attributes['type'] = $value;
        return $this;
    }

    public function getType() {
        return $this->attributes['type'];
    }
    public function setTarget($value){
        $this->attributes["target"]=$value;
        return $this;
    }

    public function getTarget(){
        return $this->attributes["target"];
    }
}