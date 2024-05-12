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
use Html\Elements\Body\HtmlImage;

require_once('loader.php');

$html = new Html("index.html");
$head = new HtmlHead(new HtmlTitle("Hello World"));
$body = new HtmlBody();
$div = new HtmlDiv();
$input = new HtmlInput();

$div->setContent(new HtmlText("Hey"));
$div->addClass("text-white center");
$div->addStyle("border:none;color:white;background-color:blue;");
$div->addChild($input->setPlaceholder('username')->setType("text"));
$body->addChild($div);

$table = new HtmlTable();
$body->addChild($table);

// $row = new ContainerTrTag();

// $cell1 = new SingleTdTag();
// $cell1->setContent('Cell 1 content');
// $row->addChild($cell1);

// $table->addRow([$row]);

$link = new HtmlA('https://www.w3schools.com', 'Sample Link');
$body->addChild($link);

$image = new HtmlImage();
$image->setSrc('sample.jpg')->setAlt('Description of the image');
$body->addChild($image);

$html->addChild($head);
$html->addChild($body);
$html->generate();


// print_r($html->getChild());