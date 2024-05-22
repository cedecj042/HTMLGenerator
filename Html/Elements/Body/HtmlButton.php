<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlButton extends ContainerBodyTag{

    public function __construct(){
        $this->tagName="button";
        $this->attributes["form"]=null;
        $this->attributes["formaction"]=null;
        $this->attributes["formenctype"]=null;
        $this->attributes["formmethod"]=null;
        $this->solo_attributes["formnovalidate"]=false;
        $this->solo_attributes["autofocus"]=false;
        $this->solo_attributes["disabled"]=false;
        $this->attributes["formtarget"]=null;
        $this->attributes["popovertarget"]=null;
        $this->attributes["popovertargetaction"]=null;
        $this->attributes["name"]=null;
        $this->attributes["type"]=null;
        $this->attributes["value"]=null;
    }
    public function setForm($value) {
        $this->attributes['form'] = $value;
        return $this;
    }
    
    public function setFormAction($value) {
        $this->attributes['formaction'] = $value;
        return $this;
    }
    
    public function setFormEnctype($value) {
        $this->attributes['formenctype'] = $value;
        return $this;
    }
    
    public function setFormMethod($value) {
        $this->attributes['formmethod'] = $value;
        return $this;
    }
    
    public function setFormNoValidate() {
        $this->solo_attributes['formnovalidate'] = true;
        return $this;
    }
    
    public function setAutofocus() {
        $this->solo_attributes['autofocus'] = true;
        return $this;
    }
    
    public function setDisabled() {
        $this->solo_attributes['disabled'] = true;
        return $this;
    }
    
    public function setFormTarget($value) {
        $this->attributes['formtarget'] = $value;
        return $this;
    }
    
    public function setPopOverTarget($value) {
        $this->attributes['popovertarget'] = $value;
        return $this;
    }
    
    public function setPopOverTargetAction($value) {
        $this->attributes['popovertargetaction'] = $value;
        return $this;
    }
    
    public function setName($value) {
        $this->attributes['name'] = $value;
        return $this;
    }
    
    public function setType($value) {
        $this->attributes['type'] = $value;
        return $this;
    }
    
    public function setValue($value) {
        $this->attributes['value'] = $value;
        return $this;
    }
    public function getForm() {
        return $this->attributes['form'];
    }
    
    public function getFormAction() {
        return $this->attributes['formaction'];
    }
    
    public function getFormEnctype() {
        return $this->attributes['formenctype'];
    }
    
    public function getFormMethod() {
        return $this->attributes['formmethod'];
    }
    
    public function getFormNoValidate() {
        return $this->solo_attributes['formnovalidate'];
    }
    
    public function getAutofocus() {
        return $this->solo_attributes['autofocus'];
    }
    
    public function getDisabled() {
        return $this->solo_attributes['disabled'];
    }
    
    public function getFormTarget() {
        return $this->attributes['formtarget'];
    }
    
    public function getPopOverTarget() {
        return $this->attributes['popovertarget'];
    }
    
    public function getPopOverTargetAction() {
        return $this->attributes['popovertargetaction'];
    }
    
    public function getName() {
        return $this->attributes['name'];
    }
    
    public function getType() {
        return $this->attributes['type'];
    }
    
    public function getValue() {
        return $this->attributes['value'];
    }
    
    

}