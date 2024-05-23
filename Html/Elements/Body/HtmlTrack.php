<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlTrack extends ContainerBodyTag{

    public function __construct($kind=null, $src=null, $srclang=null, $label=null, $default=null){
        $this->tagName = "track";
        $this->attributes['kind'] = $kind;
        $this->attributes['src'] = $src;
        $this->attributes['srclang'] = $srclang;
        $this->attributes['label'] = $label;
        $this->attributes['default'] = $default;
    }

    // Getter and Setter for kind
    public function getKind() {
        return $this->attributes['kind'];
    }
    public function setKind($kind) {
        $this->attributes['kind'] = $kind;
        return $this;
    }

    // Getter and Setter for src
    public function getSrc() {
        return $this->attributes['src'];
    }
    public function setSrc($src) {
        $this->attributes['src'] = $src;
        return $this;
    }

    // Getter and Setter for srclang
    public function getSrclang() {
        return $this->attributes['srclang'];
    }
    public function setSrclang($srclang) {
        $this->attributes['srclang'] = $srclang;
        return $this;
    }

    // Getter and Setter for label
    public function getLabel() {
        return $this->attributes['label'];
    }
    public function setLabel($label) {
        $this->attributes['label'] = $label;
        return $this;
    }

    // Getter and Setter for default
    public function getDefault() {
        return $this->attributes['default'];
    }
    public function setDefault($default) {
        $this->attributes['default'] = $default;
        return $this;
    }
}
