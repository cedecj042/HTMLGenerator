<?php

declare(strict_types=1);
namespace Html\Tags\Container;
use Html\Tags\Tag;

class ContainerTags extends Tag implements ContainerInterface{
    
    protected string $content = '';
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

        // Check if content is empty
        $content = $this->content ? $this->renderContent() : '';

        return "<{$this->tagName}$myattributes>$children$content</{$this->tagName}>";
    }
    public function getChild(){
        return $this->children;
    }
    public function addChild(Tag $child) {
        array_push($this->children,$child);
    }
    public function setContent(string $content){
        $this->content = $content;
        return $this;
    }
    public function renderContent(){
        return htmlspecialchars($this->content);
    }
}