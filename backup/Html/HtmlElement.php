<?php

class HtmlTag extends HtmlTags implements HtmlElementInterface {
    protected $tagName;
    protected $attributes = [];
    protected $children = [];


    public function addChild(HtmlElementInterface $child) {
        $this->children[] = $child;
    }
    public function render() {
        $attributes = '';
        foreach ($this->attributes as $name => $value) {
            $attributes .= " $name=\"$value\"";
        }
        $children = '';
        foreach ($this->children as $child) {
            $children .= $child->render();
        }
        
        return "\n<{$this->tagName}$attributes>$children</{$this->tagName}>";
    }

    public function addClass($value){
        if(isset($this->attributes["class"])){
            $this->attributes["class"] .= " " . $value;
        } else {
            $this->attributes["class"] = $value;
        }
    }
    public function setID($value){
        $this->attributes["id"] = $value;
    }
    
}
