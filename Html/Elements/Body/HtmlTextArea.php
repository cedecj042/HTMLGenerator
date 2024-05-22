<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlTextArea extends ContainerBodyTag{

    public function __construct($name=null, $rows=null, $cols=null, $placeholder=null){
        $this->tagName = "textarea";
        $this->attributes['name'] = $name;
        $this->attributes['rows'] = $rows;
        $this->attributes['cols'] = $cols;
        $this->attributes['placeholder'] = $placeholder;
    }

    // Getter and Setter for name
    public function getName() {
        return $this->attributes['name'];
    }
    public function setName($name) {
        $this->attributes['name'] = $name;
        return $this;
    }

    // Getter and Setter for rows
    public function getRows() {
        return $this->attributes['rows'];
    }
    public function setRows($rows) {
        $this->attributes['rows'] = $rows;
        return $this;
    }

    // Getter and Setter for cols
    public function getCols() {
        return $this->attributes['cols'];
    }
    public function setCols($cols) {
        $this->attributes['cols'] = $cols;
        return $this;
    }

    // Getter and Setter for placeholder
    public function getPlaceholder() {
        return $this->attributes['placeholder'];
    }
    public function setPlaceholder($placeholder) {
        $this->attributes['placeholder'] = $placeholder;
        return $this;
    }
}
