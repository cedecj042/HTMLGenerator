<?php
namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;


class HtmlParagraph extends ContainerBodyTag{
    
    public function __construct(){
        $this->tagName = "p";
    }

}