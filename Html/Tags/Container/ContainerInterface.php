<?php
namespace Html\Tags\Container;
use Html\Tag;

interface ContainerInterface{
    public function render(Tag $tag);
    public function renderContent();
    
}