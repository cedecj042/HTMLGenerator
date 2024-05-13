<?php

namespace Html\Tags\Container;

use Exception;
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
    // public function addChild(Tag $child)
    // {
    //     // If the child is not an allowed type, throw an exception
    //     // echo $child->tagName;
    //     if ($child instanceof HtmlTitle && $this->hasTitle()) {
    //         throw new Exception("Only one title tag is allowed in the head section.");
    //     }
    //     if (!$this->checkAllowed($child)) {
    //         throw new Exception("Error on adding types.");
    //     }
    //     array_push($this->children, $child);
    //     return $this;
    // }
    private function hasTitle() {
        foreach ($this->children as $child) {
            echo $child;
            if ($child instanceof HtmlTitle) {
                return true;
            }
        }
        return false;
    }
    public function checkAllowed(Tag $child)
    {
        // Check if the child is an instance of any of the allowed types
        foreach ($this->allowedTypes as $type) {
            if ($child instanceof $type) {
                return true;
            }
        }
    }
}