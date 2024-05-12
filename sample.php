<?php

use Html\Elements\Html;
use Html\Elements\HtmlText;
use Html\Elements\Head\HtmlTitle;
use Html\Elements\Body\HtmlBody;
use Html\Elements\Body\HtmlDiv;
use Html\Elements\Head\HtmlHead;
use Html\Elements\Body\HtmlInput;
use Html\Elements\Body\HtmlTable;
use Html\Elements\Body\HtmlA;
use Html\Elements\Body\HtmlImage;
use Html\Elements\Body\HtmlUl;
use Html\Elements\Body\HtmlOl;
use Html\Elements\Body\HtmlLi;
use Html\Elements\Body\HtmlTr;
use Html\Elements\Body\HtmlTh;
use Html\Elements\Body\HtmlTd;

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
$headerRow = new HtmlTr();

$headerCell1 = new HtmlTh();
$headerCell1->setContent(new HtmlText("Example Header"));

$headerRow->addChild($headerCell1);
$table->addChild($headerRow);

$bodyRow = new HtmlTr();
$bodyCell1 = new HtmlTd();
$bodyCell1->setContent(new HtmlText("Example Cell"));

$bodyRow->addChild($bodyCell1);
$table->addChild($bodyRow);

$body->addChild($table);

$ul = new HtmlUl();
$li1 = new HtmlLi();
$li1->setContent(new HtmlText("Item 1"));
$li2 = new HtmlLi();
$li2->setContent(new HtmlText("Item 2"));
$ul->addItem($li1)->addItem($li2);
$body->addChild($ul);

$ol = new HtmlOl();
$li3 = new HtmlLi();
$li3->setContent(new HtmlText("Item A"));
$li4 = new HtmlLi();
$li4->setContent(new HtmlText("Item B"));
$ol->addItem($li3)->addItem($li4);
$body->addChild($ol);


$link = new HtmlA('https://www.w3schools.com', 'Sample Link');
$body->addChild($link);

$image = new HtmlImage();
$image->setSrc('sample.jpg')->setAlt('Description of the image');
$body->addChild($image);
$body->addChild($table);
$body->addChild($link);

$html->addChild($head);
$html->addChild($body);
$html->generate();


// print_r($html->getChild());