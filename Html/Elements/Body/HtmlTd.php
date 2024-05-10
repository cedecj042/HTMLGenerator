<?php
namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;


class HtmlTD extends ContainerBodyTag{
    
    public function __construct(){
        $this->tagName = "td";
        $this->attributes["colspan"]=null;
        $this->attributes["rowspan"]=null;
        $this->attributes["headers"]=null;
        // $this->attributes["class"]=null;
        // $this->attributes["style"]=null;
        // $this->attributes["scope"]=null;
        // $this->attributes["abbr"]=null;
        // $this->attributes["axis"]=null;
        // $this->attributes["align"]=null;
        // $this->attributes["bgcolor"]=null;
        // $this->attributes["char"]=null;
        // $this->attributes["charoff"]=null;
        // $this->attributes["valign"]=null;
        // $this->attributes["nowrap"]=null;
        // $this->attributes["height"]=null;
        // $this->attributes["width"]=null;
    }

    public function setColSpan($value){
        $this->attributes["colspan"]=$value;
        return $this;
    }

    public function getColSpan(){
        return $this->attributes["colspan"];
    }

    public function setRowSpan($value){
        $this->attributes["rowspan"]=$value;
        return $this;
    }

    public function getRowSpan(){
        return $this->attributes["rowspan"];
    }

    // public function setHeaders($value){
    //     $this->attributes["headers"]=$value;
    // }

    // public function getHeaders(){
    //     return $this->attributes["headers"];
    // }

    // public function setClass($value){
    //     $this->attributes["class"]=$value;
    //     return $this;
    // }

    // public function getClass(){
    //     return $this->attributes["class"];
    // }
    // public function setStyle($value){
    //     $this->attributes["style"]=$value;
    //     return $this;
    // }

    // public function getStyle(){
    //     return $this->attributes["style"];
    // }

    // public function setScope($value){
    //     $this->attributes["scope"]=$value;
    //     return $this;
    // }

    // public function getScope(){
    //     return $this->attributes["scope"];
    // }

    // public function setAbbr($value){
    //     $this->attributes["abbr"]=$value;
    //     return $this;
    // }

    // public function getAbbr(){
    //     return $this->attributes["abbr"];
    // }

    // public function setAxis($value) {
    //     $this->attributes["axis"] = $value;
    //     return $this;
    // }
    
    // public function getAxis() {
    //     return $this->attributes["axis"];
    // }
    
    // public function setAlign($value) {
    //     $this->attributes["align"] = $value;
    //     return $this;
    // }
    
    // public function getAlign() {
    //     return $this->attributes["align"];
    // }
    
    // public function setBgColor($value) {
    //     $this->attributes["bgcolor"] = $value;
    //     return $this;
    // }
    
    // public function getBgColor() {
    //     return $this->attributes["bgcolor"];
    // }
    
    // public function setChar($value) {
    //     $this->attributes["char"] = $value;
    //     return $this;
    // }
    
    // public function getChar() {
    //     return $this->attributes["char"];
    // }
    
    // public function setCharOff($value) {
    //     $this->attributes["charoff"] = $value;
    //     return $this;
    // }
    
    // public function getCharOff() {
    //     return $this->attributes["charoff"];
    // }
    
    // public function setValign($value) {
    //     $this->attributes["valign"] = $value;
    //     return $this;
    // }
    
    // public function getValign() {
    //     return $this->attributes["valign"];
    // }
    
    // public function setNoWrap($value) {
    //     $this->attributes["nowrap"] = $value;
    //     return $this;
    // }
    
    // public function getNoWrap() {
    //     return $this->attributes["nowrap"];
    // }
    
    // public function setHeight($value) {
    //     $this->attributes["height"] = $value;
    //     return $this;
    // }
    
    // public function getHeight() {
    //     return $this->attributes["height"];
    // }
    
    // public function setWidth($value) {
    //     $this->attributes["width"] = $value;
    //     return $this;
    // }
    
    // public function getWidth() {
    //     return $this->attributes["width"];
    // }
    
}