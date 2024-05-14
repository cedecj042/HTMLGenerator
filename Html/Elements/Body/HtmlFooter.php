<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;


class HtmlFooter extends ContainerBodyTag{

    public function __construct(){
        $this->tagName = "footer";
    }
}