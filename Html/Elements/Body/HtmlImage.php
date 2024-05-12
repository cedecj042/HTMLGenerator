<?php

namespace Html\Elements\Body;

use Html\Tags\Single\SingleBodyTag;

class HtmlImage extends SingleBodyTag {
    public function __construct() {
        $this->tagName = 'image';
        $this->attributes['src'] = null;
        $this->attributes['alt'] = null;
        $this->attributes['crossorigin'] = null;
        $this->attributes['height'] = null;
        $this->attributes['width'] = null;
        $this->attributes['ismap'] = null;
        $this->attributes['loading'] = null;
        $this->attributes['longdesc'] = null;
        $this->attributes['referrerpolicy'] = null;
        $this->attributes['sizes'] = null;
        $this->attributes['src']  = null;
        $this->attributes['srcset'] = null;
        $this->attributes['usemap'] = null;

    }

    public function setSrc($src) {
        $this->attributes['src'] = $src;
        return $this;
    }

    public function getSrc() {
        return $this->attributes['src'];
    }

    public function setAlt($alt) {
        $this->attributes['alt'] = $alt;
        return $this;
    }

    public function getAlt() {
        return $this->attributes['alt'];
    }

    public function setCrossOrigin($crossorigin) {
        $this->attributes['crossorigin'] = $crossorigin;
        return $this;
    }

    public function getCrossOrigin() {
        return $this->attributes['crossorigin'];
    }

    public function setHeight($height) {
        $this->attributes['height'] = $height;
        return $this;
    }

    public function getHeight() {
        return $this->attributes['height'];
    }

    public function setWidth($width) {
        $this->attributes['width'] = $width;
        return $this;
    }

    public function getWidth() {
        return $this->attributes['width'];
    }

    public function setIsmap($ismap) {
        $this->attributes['ismap'] = $ismap;
        return $this;
    }

    public function getIsmap() {
        return $this->attributes['ismap'];
    }

    public function setLoading($loading) {
        $this->attributes['loading'] = $loading;
        return $this;
    }

    public function getLoading() {
        return $this->attributes['loading'];
    }

    public function setLongdesc($longdesc) {
        $this->attributes['longdesc'] = $longdesc;
        return $this;
    }

    public function getLongdesc() {
        return $this->attributes['longdesc'];
    }

    public function setReferrerpolicy($referrerpolicy) {
        $this->attributes['referrerpolicy'] = $referrerpolicy;
        return $this;
    }

    public function getReferrerpolicy() {
        return $this->attributes['referrerpolicy'];
    }

    public function setSizes($sizes) {
        $this->attributes['sizes'] = $sizes;
        return $this;
    }

    public function getSizes() {
        return $this->attributes['sizes'];
    }

    public function setSrcset($srcset) {
        $this->attributes['srcset'] = $srcset;
        return $this;
    }

    public function getSrcset() {
        return $this->attributes['srcset'];
    }
    

    public function setUsemap($usemap) {
        $this->attributes['usemap'] = $usemap;
        return $this;
    }

    public function getUsemap() {
        return $this->attributes['usemap'];
    }

}