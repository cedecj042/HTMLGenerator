<?php

declare(strict_types=1);

class HtmlTags {

    protected array $class;
    protected string $id;
    protected bool $hidden;
    protected string $style;

    protected $attributes = ["class" => $this->sclass, "id" => $this->sid, "hidden" => $this->shidden, "style" => $this->style ];

    public function getClass() {
        return $this->class;
    }
    public function setClass($class) {
        $this->class = isset($this->class) ? $this->class . " " . $class : $class;
    }
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getHidden() {
        return $this->hidden;
    }

    public function setHidden($hidden) {
        $this->hidden = $hidden;
    }
    
    public function getStyle() {
        return $this->style;
    }
    public function setStyle($style) {
        $this->style = isset($this->style) ? $this->style . ";" . $style : $style;
    }

}