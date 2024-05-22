<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlVideo extends ContainerBodyTag{

    public function __construct($src=null, $controls=null, $autoplay=null, $loop=null, $muted=null, $poster=null, $preload=null, $width=null, $height=null){
        $this->tagName = "video";
        $this->attributes['src'] = $src;
        $this->attributes['controls'] = $controls;
        $this->attributes['autoplay'] = $autoplay;
        $this->attributes['loop'] = $loop;
        $this->attributes['muted'] = $muted;
        $this->attributes['poster'] = $poster;
        $this->attributes['preload'] = $preload;
        $this->attributes['width'] = $width;
        $this->attributes['height'] = $height;
    }

    // Getter and Setter for src
    public function getSrc() {
        return $this->attributes['src'];
    }
    public function setSrc($src) {
        $this->attributes['src'] = $src;
        return $this;
    }

    // Getter and Setter for controls
    public function getControls() {
        return $this->attributes['controls'];
    }
    public function setControls($controls) {
        $this->attributes['controls'] = $controls;
        return $this;
    }

    // Getter and Setter for autoplay
    public function getAutoplay() {
        return $this->attributes['autoplay'];
    }
    public function setAutoplay($autoplay) {
        $this->attributes['autoplay'] = $autoplay;
        return $this;
    }

    // Getter and Setter for loop
    public function getLoop() {
        return $this->attributes['loop'];
    }
    public function setLoop($loop) {
        $this->attributes['loop'] = $loop;
        return $this;
    }

    // Getter and Setter for muted
    public function getMuted() {
        return $this->attributes['muted'];
    }
    public function setMuted($muted) {
        $this->attributes['muted'] = $muted;
        return $this;
    }

    // Getter and Setter for poster
    public function getPoster() {
        return $this->attributes['poster'];
    }
    public function setPoster($poster) {
        $this->attributes['poster'] = $poster;
        return $this;
    }

    // Getter and Setter for preload
    public function getPreload() {
        return $this->attributes['preload'];
    }
    public function setPreload($preload) {
        $this->attributes['preload'] = $preload;
        return $this;
    }

    // Getter and Setter for width
    public function getWidth() {
        return $this->attributes['width'];
    }
    public function setWidth($width) {
        $this->attributes['width'] = $width;
        return $this;
    }

    // Getter and Setter for height
    public function getHeight() {
        return $this->attributes['height'];
    }
    public function setHeight($height) {
        $this->attributes['height'] = $height;
        return $this;
    }
}
