<?php

declare(strict_types=1);

namespace Html\Tags\Container;
use Html\Elements\HtmlText;
use Html\Tags\Single\SingleBodyTag;

class ContainerBodyTag extends ContainerTag {
    protected $allowedTypes = [
        ContainerBodyTag::class,
        SingleBodyTag::class,
        HtmlText::class,
    ];

    use ContainerTrait;
    
}

