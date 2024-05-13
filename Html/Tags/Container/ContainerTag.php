<?php

declare(strict_types=1);
namespace Html\Tags\Container;
use Html\Elements\HtmlText;
use Html\Tags\Tag;
use Html\Tags\TagInterface;

class ContainerTag extends Tag implements TagInterface{
    
    protected $children = [];

    public function render(){
        $myattributes = '';
        foreach ($this->attributes as $name => $value) {
            if($value == null){
                continue;
            }
            $myattributes .= " $name=\"$value\"";
        }
        $children = '';
        foreach ($this->children as $tagChild) {
            $children .= $tagChild->render();
        }

        return "<{$this->tagName}$myattributes>\n$children\n</{$this->tagName}>";
    }
    public function getChild(){
        return $this->children;
    }
    public function addChild(Tag $child) {
        array_push($this->children,$child);
        return $this;
    }
    public function setContent(HtmlText $content){
        $this->addChild($content);
        return $this;
    }
}