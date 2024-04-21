<?php
use Html\Tag\Tag;

interface   ContainerInterface{
    public function render(Tag $tag);
    public function renderContent();
    
}