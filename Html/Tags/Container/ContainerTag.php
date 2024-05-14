<?php

declare(strict_types=1);
namespace Html\Tags\Container;

use Html\Elements\Body\HtmlAbbreviation;
use Html\Elements\Body\HtmlAnchor;
use Html\Elements\Body\HtmlHeading;
use Html\Elements\HtmlText;
use Html\Tags\Single\SingleBodyTag;
use Html\Tags\Single\SingleHeadTag;
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
            if(($tagChild instanceof HtmlText) or ($tagChild instanceof SingleBodyTag) or ($tagChild instanceof SingleHeadTag) 
                or ($tagChild instanceof HtmlAbbreviation) or ($tagChild instanceof HtmlAnchor)){
                $children .= $tagChild->render();
            }else{
                $children .="\n". $tagChild->render()."\n";
            }
        }
        
        return "<{$this->tagName}$myattributes>$children</{$this->tagName}>";
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