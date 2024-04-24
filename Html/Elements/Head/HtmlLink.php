<?php

namespace Html\Elements\Head;
use Html\Tags\Single\SingleHeadTag;

class HtmlLink extends SingleHeadTag{

    public function __construct(){
        $this->tagName = "link";
        $this->attributes['crossorigin'] = null;
        $this->attributes['href'] = null;
        $this->attributes['hreflang'] = null;
        $this->attributes['media'] = null;
        $this->attributes['referrerpolicy'] = null;
        $this->attributes['rel'] = null;
        $this->attributes['sizes'] = null;
        $this->attributes['title'] = null;
        $this->attributes['type'] = null;
    }

    public function setCrossorigin($value) {
        $this->attributes['crossorigin'] = $value;
        return $this;
    }

    public function setHref($value) {
        $this->attributes['href'] = $value;
        return $this;
    }

    public function setHreflang($value) {
        $this->attributes['hreflang'] = $value;
        return $this;
    }

    public function setMedia($value) {
        $this->attributes['media'] = $value;
        return $this;
    }

    public function setReferrerpolicy($value) {
        $this->attributes['referrerpolicy'] = $value;
        return $this;
    }

    public function setRel($value) {
        $this->attributes['rel'] = $value;
        return $this;
    }

    public function setSizes($value) {
        $this->attributes['sizes'] = $value;
        return $this;
    }

    public function setTitle($value) {
        $this->attributes['title'] = $value;
        return $this;
    }

    public function setType($value) {
        $this->attributes['type'] = $value;
        return $this;
    }

    // Getters
    public function getCrossorigin() {
        return $this->attributes['crossorigin'];
    }

    public function getHref() {
        return $this->attributes['href'];
    }

    public function getHreflang() {
        return $this->attributes['hreflang'];
    }

    public function getMedia() {
        return $this->attributes['media'];
    }

    public function getReferrerpolicy() {
        return $this->attributes['referrerpolicy'];
    }

    public function getRel() {
        return $this->attributes['rel'];
    }

    public function getSizes() {
        return $this->attributes['sizes'];
    }

    public function getTitle() {
        return $this->attributes['title'];
    }

    public function getType() {
        return $this->attributes['type'];
    }
}