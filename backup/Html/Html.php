<?php

namespace Html\Html;
use Exception;
use Html\HtmlBody\HtmlBody\HtmlBody;
use Html\HtmlHead\HtmlHead\HtmlHead;
use GlobalTags;


class HTML extends GlobalTags{

    protected HtmlHead $head;
    protected HtmlBody $body;
    protected $filePath;

    public function __construct($filePath) {
        $this->filePath = $filePath;
    }

    public function setHead(HtmlHead $head){
        $this->head=$head;
        return $this;
    }
    public function setBody(HtmlBody $body){
        $this->body = $body;
        return $this;
    }

    public function generate() {
        $file = fopen($this->filePath, "w");
        if ($file === false) {
            throw new Exception("Failed to open file for writing.");
        }
        fwrite($file, $this->render());
        fclose($file);
    }

}