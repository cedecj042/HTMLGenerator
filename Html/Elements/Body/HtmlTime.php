<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlTime extends ContainerBodyTag{

    public function __construct($datetime=null, $pubdate=null){
        $this->tagName = "time";
        $this->attributes['datetime'] = $datetime;
        $this->attributes['pubdate'] = $pubdate;
    }

    // Getter and Setter for datetime
    public function getDatetime() {
        return $this->attributes['datetime'];
    }
    public function setDatetime($datetime) {
        $this->attributes['datetime'] = $datetime;
        return $this;
    }

    // Getter and Setter for pubdate
    public function getPubdate() {
        return $this->attributes['pubdate'];
    }
    public function setPubdate($pubdate) {
        $this->attributes['pubdate'] = $pubdate;
        return $this;
    }
}
