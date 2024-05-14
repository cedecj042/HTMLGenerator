<?php

namespace Html\Elements\Body;
use ErrorException;
use Html\Tags\Container\ContainerBodyTag;

class HtmlHeading extends ContainerBodyTag {
    public function __construct($heading_value) {
        $this->tagName= "h". $heading_value;
        if ($heading_value <= 0 or $heading_value > 6) {
            throw new ErrorException("Heading not available.");
        }
    }
}