<?php

declare(strict_types=1);
use Html\Tag\Tag;


class ContainerTags extends Tag{
    
    protected string $content;

    public function render(Tag $tag){
        $attributes = '';
        foreach ($this->attributes as $name => $value) {
            $attributes .= " $name=\"$value\"";
        }

        $children = '';
        foreach ($this->child as $tagChild) {
            $children .= $tagChild->render();
        }

        return "<{$this->tagName}$attributes> $children</{$this->tagName}>";
    }
    public function setContent(string $content){
        $this->content = $content;
        return $this;
    }
    public function renderContent(){
        return htmlspecialchars($this->content);
    }
}