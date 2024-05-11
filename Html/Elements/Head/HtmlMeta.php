<?php 
use Html\Tags\Single\SingleHeadTag;

class HtmlMeta extends SingleHeadTag{

    public function __construct(){
        $this->tagName= "meta";
        $this->attributes['charset']=null;
        $this->attributes['content']=null;
        $this->attributes['http-equiv']=null;
        $this->attributes['name']=null;
    }
    public function getCharset() {
        return $this->attributes['charset'];
    }

    // Setter for charset
    public function setCharset($charset) {
        $this->attributes['charset'] = $charset;
    }

    // Getter for content
    public function getContent() {
        return $this->attributes['content'];
    }

    // Setter for content
    public function setContent($content) {
        $this->attributes['content'] = $content;
    }

    // Getter for http-equiv
    public function getHttpEquiv() {
        return $this->attributes['http-equiv'];
    }

    // Setter for http-equiv
    public function setHttpEquiv($httpEquiv) {
        $this->attributes['http-equiv'] = $httpEquiv;
    }

    // Getter for name
    public function getName() {
        return $this->attributes['name'];
    }

    // Setter for name
    public function setName($name) {
        $this->attributes['name'] = $name;
    }
}