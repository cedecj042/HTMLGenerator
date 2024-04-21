<?php

declare(strict_types=1);
namespace Html;
use Exception;
class Tag {
    protected string $tagName;
    protected $attributes = [
        'class' => [],
        'id' => null,
        'style' => [],
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

    public function addClass($class) {
        if (is_array($class)) {
            $this->attributes['class'] = array_merge($this->attributes['class'], $class);
        } else {
            $this->attributes['class'][] = $class;
        }
    }

    public function getClass() {
        return $this->attributes['class'];
    }

    public function addStyle($style) {
        if (is_array($style)) {
            $this->attributes['style'] = array_merge($this->attributes['style'], $style);
        } else {
            $this->attributes['style'][] = $style;
        }
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
    }

    public function getAttribute($name) {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        } else {
            throw new Exception("Attribute '$name' does not exist.");
        }
    }

}