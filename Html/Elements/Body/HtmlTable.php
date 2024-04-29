<?php

namespace Html\Elements\Body;

class HtmlTable {
    protected $rows = [];

    public function __construct() {

    }

    public function addRow($rowData) {
        $this->rows[] = $rowData;
        return $this;
    }

    public function render() {
        $html = "<table\n>";
        foreach ($this->rows as $rowData) {
            $html .= "<tr>\n";
            foreach ($rowData as $cellData) {
                $html .= "<td>{$cellData}</td>\n";
            }
            $html .= "<tr>\n";
        }
        $html .= "</table>\n";
        return $html;
    }
}