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

}