<?php

declare(strict_types=1);
namespace Html\Tags;

class Tag
{
    protected string $tagName = "";
    protected $attributes = [
        'class' => "",
        'id' => null,
        'style' => null,
        'contenteditable' => null,
        'dir' => null,
        'draggable' => null,
        'enterkeyhint' => null,
        'inputmode' => null,
        'lang' => null,
        'tabindex' => null,
        'title' => null,
        'translate' => null,
        'role' => null
    ];
    protected $solo_attributes = [
        'inert' => false,
        'hidden' => false,
        'popover' => false
    ];

    public function getTagName()
    {
        return $this->tagName;
    }

    public function addClass($value)
    {
        if (isset($this->attributes["class"])) {
            $this->attributes["class"] .= " " . $value;
        } else {
            $this->attributes["class"] = $value;
        }
        return $this;
    }

    public function getClass()
    {
        if (isset($this->attributes["class"])) {
            return explode(" ", $this->attributes["class"]);
        } else {
            return [];
        }
    }

    public function addStyle($value)
    {
        if (isset($this->attributes["style"])) {
            $this->attributes["style"] .= " " . $value;
        } else {
            $this->attributes["style"] = $value;
        }
        return $this;
    }

    public function getStyle()
    {
        return $this->attributes['style'];
    }

    public function setId($value)
    {
        $this->attributes['id'] = $value;
        return $this; // Return $this for method chaining
    }

    public function setHidden()
    {
        $this->solo_attributes['hidden'] = true;
        return $this; // Return $this for method chaining
    }

    public function setContentEditable($value)
    {
        $this->attributes['contenteditable'] = $value;
        return $this; // Return $this for method chaining
    }

    public function setDir($value)
    {
        $this->attributes['dir'] = $value;
        return $this; // Return $this for method chaining
    }

    public function setDraggable($value)
    {
        $this->attributes['draggable'] = $value; // Update only the 'draggable' attribute
        return $this; // Return $this for method chaining
    }

    public function setEnterKeyHint($value)
    {
        $this->attributes['enterkeyhint'] = $value;
        return $this; // Return $this for method chaining
    }

    public function setInert()
    {
        $this->solo_attributes['inert'] = true;
        return $this; // Return $this for method chaining
    }

    public function setInputMode($value)
    {
        $this->attributes['inputmode'] = $value;
        return $this; // Return $this for method chaining
    }

    public function setLang($value)
    {
        $this->attributes['lang'] = $value;
        return $this; // Return $this for method chaining
    }

    public function setTabIndex($value)
    {
        $this->attributes['tabindex'] = $value;
        return $this; // Return $this for method chaining
    }

    public function setTitle($value)
    {
        $this->attributes['title'] = $value;
        return $this; // Return $this for method chaining
    }

    public function setTranslate($value)
    {
        $this->attributes['translate'] = $value;
        return $this; // Return $this for method chaining
    }


    public function setRole($value)
    {
        $this->attributes['role'] = $value;
        return $this; // Return $this for method chaining
    }
    public function setPopover()
    {
        $this->solo_attributes['popover'] = true;
        return $this; // Return $this for method chaining
    }

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function getHidden()
    {
        return $this->solo_attributes['hidden'];
    }

    public function getContentEditable()
    {
        return $this->attributes['contenteditable'];
    }

    public function getDir()
    {
        return $this->attributes['dir'];
    }

    public function getDraggable()
    {
        return $this->attributes['draggable'];
    }

    public function getEnterKeyHint()
    {
        return $this->attributes['enterkeyhint'];
    }

    public function getInert()
    {
        return $this->solo_attributes['inert'];
    }

    public function getInputMode()
    {
        return $this->attributes['inputmode'];
    }

    public function getLang()
    {
        return $this->attributes['lang'];
    }

    public function getTabIndex()
    {
        return $this->attributes['tabindex'];
    }

    public function getTitle()
    {
        return $this->attributes['title'];
    }

    public function getTranslate()
    {
        return $this->attributes['translate'];
    }

    public function getRole()
    {
        return $this->attributes['role'];
    }
    public function getPopover()
    {
        return $this->solo_attributes['popover'];

    }

    public function renderAttributes()
    {
        $myattributes = '';
        foreach ($this->attributes as $name => $value) {
            if ($value == null) {
                continue;
            }
            $myattributes .= " $name=\"$value\"";
        }
        foreach ($this->solo_attributes as $name => $value) {
            if ($value === false) {
                continue;
            }
            $myattributes .= " $name";
        }
        return $myattributes;
    }

}