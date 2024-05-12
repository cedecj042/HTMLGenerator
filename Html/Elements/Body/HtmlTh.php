<?php
namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlTh extends ContainerBodyTag{
    public function __construct() {
        $this->tagName = "th";
        $this->attributes["colspan"]=null;
        $this->attributes["rowspan"]=null;
        $this->attributes["headers"]=null;
        $this->attributes["scope"]=null;
        $this->attributes["abbr"]=null;
    }

    public function setColspan($colspan) {
        $this->attributes["colspan"] = $colspan;
        return $this;
    }

    public function getColspan() {
        return $this->attributes["colspan"];
    }

    public function setRowspan($rowspan) {
        $this->attributes["rowspan"] = $rowspan;
        return $this;
    }

    public function getRowspan() {
        return $this->attributes["rowspan"];
    }

    public function setHeaders($headers) {
        $this->attributes["headers"] = $headers;
        return $this;
    }

    public function getHeaders() {
        return $this->attributes["headers"];
    }

    public function setScope($scope) {
        $this->attributes["scope"] = $scope;
        return $this;
    }

    public function getScope() {
        return $this->attributes["scope"];
    }

    public function setAbbr($abbr) {
        $this->attributes["abbr"] = $abbr;
        return $this;
    }

    public function getAbbr() {
        return $this->attributes["abbr"];
    }
}