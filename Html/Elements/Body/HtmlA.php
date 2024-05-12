<?php

namespace Html\Elements\Body;


use Html\Tags\Container\ContainerBodyTag;
use Html\Elements\HtmlText;

class HtmlA extends ContainerBodyTag {
    public function __construct ($href = null, $text = null) {
        $this->tagName = 'a';
        $this->attributes["href"] = null;
        $this->attributes["download"] = null;
        $this->attributes["media"] = null;
        $this->attributes["type"] = null;

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

    public function setText($text) {
        $this->setContent(new HtmlText ($text));
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
}