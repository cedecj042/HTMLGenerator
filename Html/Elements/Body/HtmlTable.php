<?php

namespace Html\Elements\Body;
use Html\Tags\Container\ContainerBodyTag;

class HtmlTable extends ContainerBodyTag {
    protected $rows = [];

    public function __construct() {
        $this->tagName = "table";
    }

    public function addRow($rowData) {
        $this->rows[] = $rowData;
        return $this;
    }

    public function render() {
        $attributes = $this->renderAttributes();
        $tableContent = '';

        foreach ($this->rows as $row) {
            $tableContent .= "<tr>$row</tr>\n";
        }
        return "<{$this->tagName}{$attributes}>\n$tableContent</{$this->tagName}>";
    }

    protected function renderAttributes() {
        $attributes = '';
        foreach ($this->attributes as $name => $value) {
            if ($value !== null) {
                $attributes .= " $name=\"$value\"";
            }
        }
        return $attributes;
    }

}