<?php

namespace Html\Tags\Container;

use Exception;
use Html\Elements\Head\HtmlTitle;
// use Html\Elements\HtmlScript;
use Html\Elements\HtmlScript;
use Html\Elements\HtmlText;
use Html\Tags\Single\SingleHeadTag;
use Html\Tags\Tag;

class ContainerHeadTag extends ContainerTag{
    protected $allowedTypes = [
        ContainerHeadTag::class,
        SingleHeadTag::class,
        HtmlText::class,
        HtmlScript::class
    ];
    use ContainerTrait;

    private function hasTitle() {
        foreach ($this->children as $child) {
            echo $child;
            if ($child instanceof HtmlTitle) {
                return true;
            }
        }
        return false;
    }
}