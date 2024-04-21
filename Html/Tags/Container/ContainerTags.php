<?php

declare(strict_types=1);
namespace Html\Tags\Container;
use Html\Tag;


class ContainerTags extends Tag{
    
    protected string $content;
    protected $children = [];
    public function render(Tag $tag){
        $attributes = '';
        foreach ($this->attributes as $name => $value) {
            $attributes .= " $name=\"$value\"";
        }

        $children = '';
        foreach ($this->children as $tagChild) {
            $children .= $tagChild->render();
        }

        return "<{$this->tagName}$attributes> $children</{$this->tagName}>";
    }
    public function getChild(){
        return $this->children;
    }
    public function addChild(Tag $child) {
        array_push($children,$child);
    }
    public function setContent(string $content){
        $this->content = $content;
        return $this;
    }
    public function renderContent(){
        return htmlspecialchars($this->content);
    }
}