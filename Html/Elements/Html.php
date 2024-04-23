<?php

namespace Html\Elements;
use Html\Elements\Body\HtmlBody;
use Html\Elements\Head\HtmlHead;
use Html\Tags\Container\ContainerTag;
use Exception;

class Html extends ContainerTag{
    
    protected string $filePath;
    
    public function __construct($filePath){
        $this->tagName = "html";
        $this->filePath = $filePath;
        $this->attributes["xmlns"] = null;
    }

    public function generate() {

        if($this->checkHead() && $this->checkBody()){
            $file = fopen($this->filePath, "w");
            if ($file === false) {
                throw new Exception("Failed to open file for writing.");
            }
            fwrite($file,"<!DOCTYPE html>\n" . $this->render());
            fclose($file);
        }else {
            throw new Exception("Please add head and body!");
        }
    }
    
    public function checkHead(){
        foreach($this->children as $child){
            if ($child instanceof HtmlHead) {
                return true;
            }
        }
        return false;
    }
    public function checkBody(){
        foreach($this->children as $child){
            if ($child instanceof HtmlBody) {
                return true;
            }
        }
        return false;
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
}