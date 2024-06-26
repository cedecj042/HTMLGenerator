<?php

namespace Html\Elements;
use Html\Elements\Body\HtmlBody;
use Html\Elements\Head\HtmlHead;
use Exception;
use Html\Tags\Tag;

class Html extends Tag{
    
    protected string $filename;
    protected HtmlHead $head;
    protected HtmlBody $body;
    
    public function __construct($filename){
        $this->tagName = "html";
        $this->filename = $filename . ".html";
        $this->attributes["xmlns"] = null;
    }

    public function generate() {

        if($this->head != null && $this->body != null){
            $file = fopen($this->filename, "w");
            if ($file === false) {
                throw new Exception("Failed to open file for writing.");
            }
            fwrite($file,"<!DOCTYPE html>\n");
            fwrite($file,"<{$this->tagName}>\n");
            fwrite($file,(string)$this->head->render()."\n");
            fwrite($file,(string)$this->body->render());
            fwrite($file,"\n</{$this->tagName}>");
            fclose($file);
        }else {
            throw new Exception("Please add head and body!");
        }
    }
    
    public function setXMLNS($url){
        $pattern = "/(?:(?:https|https):\/\/)www\.[\w]+\.(?:com|net)((\/|\w)+)?/";
        if (preg_match($pattern, $url)) {
            $this->attributes["xmlns"] = $url; 
        } else {
            throw new Exception("This is not a url");
        }
        return $this;
    }

    public function setHead(HtmlHead $head){
        $this->head = $head;
        return $this;
    }
    public function setBody(HtmlBody $body){
        $this->body = $body;
        return $this;
    }
}