<?php 
namespace Html\Elements\Head;
use Html\Tags\Single\SingleHeadTag;

class HtmlMeta extends SingleHeadTag{

    public function __construct($charset=null,$content=null,$httpEquiv=null,$name=null){
        $this->tagName= "meta";
        $this->attributes['charset']=$charset;
        $this->attributes['content']=$content;
        $this->attributes['http-equiv']=$httpEquiv;
        $this->attributes['name']=$name;
    }
    public function getCharset() {
        return $this->attributes['charset'];
    }

    // Setter for charset
    public function setCharset($charset) {
        $this->attributes['charset'] = $charset;
        return $this;
    }

    // Getter for content
    public function getContent() {
        return $this->attributes['content'];
    }

    // Setter for content
    public function setContent($content) {
        $this->attributes['content'] = $content;
        return $this;
    }

    // Getter for http-equiv
    public function getHttpEquiv() {
        return $this->attributes['http-equiv'];
    }

    // Setter for http-equiv
    public function setHttpEquiv($httpEquiv) {
        $this->attributes['http-equiv'] = $httpEquiv;
        return $this;
    }

    // Getter for name
    public function getName() {
        return $this->attributes['name'];
    }

    // Setter for name
    public function setName($name) {
        $this->attributes['name'] = $name;
        return $this;
    }
}