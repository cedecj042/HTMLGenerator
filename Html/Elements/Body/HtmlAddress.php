<?php
namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlAddress extends ContainerBodyTag{
    public function __construct(){
        $this->tagName = "address";
        $this->attributes["alt"] =null;
        $this->attributes["coords"] =null;
        $this->attributes["download"] =null;
        $this->attributes["href"] =null;
        $this->attributes["hreflang"] =null;
        $this->attributes["media"] =null;
        $this->attributes["referrerpolicy"] =null;
        $this->attributes["rel"] =null;
        $this->attributes["shape"] =null;
        $this->attributes["target"] =null;
        $this->attributes["type"] =null;

    }
    // Getter for alt
    public function getAlt() {
        return $this->attributes["alt"];
    }

    // Setter for alt
    public function setAlt($value) {
        $this->attributes["alt"] = $value;
    }

    // Getter for coords
    public function getCoords() {
        return $this->attributes["coords"];
    }

    // Setter for coords
    public function setCoords($value) {
        $this->attributes["coords"] = $value;
    }

    // Getter for download
    public function getDownload() {
        return $this->attributes["download"];
    }

    // Setter for download
    public function setDownload($value) {
        $this->attributes["download"] = $value;
    }

    // Getter for href
    public function getHref() {
        return $this->attributes["href"];
    }

    // Setter for href
    public function setHref($value) {
        $this->attributes["href"] = $value;
    }

    // Getter for hreflang
    public function getHreflang() {
        return $this->attributes["hreflang"];
    }

    // Setter for hreflang
    public function setHreflang($value) {
        $this->attributes["hreflang"] = $value;
    }

    // Getter for media
    public function getMedia() {
        return $this->attributes["media"];
    }

    // Setter for media
    public function setMedia($value) {
        $this->attributes["media"] = $value;
    }

    // Getter for referrerpolicy
    public function getReferrerPolicy() {
        return $this->attributes["referrerpolicy"];
    }

    // Setter for referrerpolicy
    public function setReferrerPolicy($value) {
        $this->attributes["referrerpolicy"] = $value;
    }

    // Getter for rel
    public function getRel() {
        return $this->attributes["rel"];
    }

    // Setter for rel
    public function setRel($value) {
        $this->attributes["rel"] = $value;
    }

    // Getter for shape
    public function getShape() {
        return $this->attributes["shape"];
    }

    // Setter for shape
    public function setShape($value) {
        $this->attributes["shape"] = $value;
    }

    // Getter for target
    public function getTarget() {
        return $this->attributes["target"];
    }

    // Setter for target
    public function setTarget($value) {
        $this->attributes["target"] = $value;
    }

    // Getter for type
    public function getType() {
        return $this->attributes["type"];
    }

    // Setter for type
    public function setType($value) {
        $this->attributes["type"] = $value;
    }
}