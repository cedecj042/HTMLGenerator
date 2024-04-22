<?php
namespace Html\Tags\Container;
use Html\Tags\Tag;

interface ContainerInterface{
    public function render();
    public function renderContent();
    
}