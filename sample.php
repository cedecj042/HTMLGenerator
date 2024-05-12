<?php

use Html\Elements\Html;
use Html\Elements\HtmlText;
use Html\Elements\Head\HtmlTitle;
use Html\Elements\Body\HtmlBody;
use Html\Elements\Body\HtmlDiv;
use Html\Elements\Head\HtmlHead;
use Html\Elements\Body\HtmlTable;
use Html\Elements\Body\HtmlInput;
use Html\Elements\Body\HtmlA;

require_once('loader.php');

$html = new Html("index.html");
$head = new HtmlHead(new HtmlTitle("Hello World"));
$body = new HtmlBody();
$div = new HtmlDiv();
$input = new HtmlInput();
$link = new HtmlA('https://www.w3schools.com', 'Example Link');

$div->setContent(new HtmlText("Hey"));
$div->addClass("text-white center");
$div->addStyle("border:none;color:white;background-color:blue;");
$div->addChild($input->setPlaceholder('username')->setType("text"));
$body->addChild($div);

$table = new HtmlTable();
// $row = new ContainerTrTag();

// $cell1 = new SingleTdTag();
// $cell1->setContent('Cell 1 content');
// $row->addChild($cell1);

// $table->addRow([$row]);

$body->addChild($table);
$body->addChild($link);

$html->addChild($head);
$html->addChild($body);
$html->generate();


// print_r($html->getChild());