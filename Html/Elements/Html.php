<?php

namespace Html\Elements;
use Html\Tags\Container\ContainerTags;
use Exception;

class Html extends ContainerTags{
    
    protected string $filePath;
    
    public function __construct($filePath){
        $this->tagName = "html";
        $this->filePath = $filePath;
    }

    public function generate() {
        $file = fopen($this->filePath, "w");
        if ($file === false) {
            throw new Exception("Failed to open file for writing.");
        }
        fwrite($file, $this->render($this));
        fclose($file);
    }
}