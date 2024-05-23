<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlEmphasize extends ContainerBodyTag{
    public function __construct(){
        $this->tagName="em";
    }
}