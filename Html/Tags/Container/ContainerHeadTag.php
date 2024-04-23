<?php

namespace Html\Tags\Container;

use Html\Elements\HtmlScript;
use Html\Elements\HtmlText;
use Html\Tags\Single\SingleHeadTag;
use Html\Tags\Tag;

class ContainerHeadTag extends ContainerTag{
    protected $allowedTypes = [
        ContainerHeadTag::class,
        SingleHeadTag::class,
        HtmlText::class,
    ];
    use ContainerTrait;
    
}