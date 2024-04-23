<?php

namespace Html\Tags\Container;

use Exception;
use Html\Tags\Tag;

trait ContainerTrait
{
    public function addChild(Tag $child)
    {
        // If the child is not an allowed type, throw an exception
        if (!$this->checkAllowed($child)) {
            throw new Exception("Error on adding types.");
        }
        array_push($this->children, $child);
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