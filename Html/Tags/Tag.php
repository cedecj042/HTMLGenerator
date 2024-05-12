<?php

declare(strict_types=1);
namespace Html\Tags;
use Exception;

class Tag {
    protected string $tagName ="";
    protected $attributes = [
        'class' => "",
        'id' => null,
        'style' => null,
        'hidden' => null,
        'contenteditable' => null,
        'dir' => null,
        'draggable' => null,
        'enterkeyhint' => null,
        'inert' => null,
        'inputmode' => null,
        'lang' =>null,
        'tabindex' => null,
        'title' => null,
        'translate' => null,
        'names' => null
    ];

    public function getTagName(){
        return $this->tagName;
    }

    public function addClass($value){
        if(isset($this->attributes["class"])){
            $this->attributes["class"] .= " " . $value;
        } else {
            $this->attributes["class"] = $value;
        }
        return $this;
    }

    public function getClass() {
        if (isset($this->attributes["class"])) {
            return explode(" ", $this->attributes["class"]);
        } else {
            return [];
        }
    }
    
    public function addStyle($value){
        if(isset($this->attributes["style"])){
            $this->attributes["style"] .= " " . $value;
        } else {
            $this->attributes["style"] = $value;
        }
        return $this;
    }

    public function getStyle() {
        return $this->attributes['style'];
    }

    public function setAttribute($name, $value) {
        if (array_key_exists($name, $this->attributes)) {
            $this->attributes[$name] = $value;
        } else {
            throw new Exception("Attribute '$name' does not exist.");
        }
        return $this;
    }

    public function getAttribute($name) {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        } else {
            throw new Exception("Attribute '$name' does not exist.");
        }
    }

}