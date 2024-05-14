<?php

use CSS\CssGenerator;
use CSS\Properties\Styling\Background;
use Html\Elements\Body\HtmlAnchor;
use Html\Elements\Html;
use Html\Elements\HtmlText;
use Html\Elements\Head\HtmlTitle;
use Html\Elements\Body\HtmlBody;
use Html\Elements\Body\HtmlDiv;
use Html\Elements\Head\HtmlHead;
use Html\Elements\Body\HtmlInput;
use Html\Elements\Body\HtmlTable;
use Html\Elements\Body\HtmlImage;
use Html\Elements\Body\HtmlList;
use Html\Elements\Body\HtmlOrderedList;
use Html\Elements\Body\HtmlTableData;
use Html\Elements\Body\HtmlTableHeader;
use Html\Elements\Body\HtmlTableRow;
use Html\Elements\Body\HtmlUnorderedList;

require_once('loader.php');

$html = new Html("index.html");
$head = new HtmlHead(new HtmlTitle("Hello World"));
$body = new HtmlBody();
$div = new HtmlDiv();
$input = new HtmlInput();
$link = new HtmlAnchor('https://www.w3schools.com', 'Example Link');

$cssGenerator = new CssGenerator();
$containerRule = $cssGenerator->addRule('.container');
$containerRule->addProperty(
    (new Background())
        ->background_color('#f0f0f0')
        ->background_repeat('no-repeat')
        ->background_size('cover')
        ->background_position('center')
);

$div->setContent(new HtmlText("Hey"));
$div->addClass("text-white center");
$div->addStyle("border:none;color:white;background-color:blue;");
$div->addChild($input->setPlaceholder('username')->setType("text"));
$body->addChild($div);

$table = new HtmlTable();
$headerRow = new HtmlTableRow();

$headerCell1 = new HtmlTableHeader();
$headerCell1->setContent(new HtmlText("Example Header"));

$headerRow->addChild($headerCell1);
$table->addChild($headerRow);

$bodyRow = new HtmlTableRow();
$bodyCell1 = new HtmlTableData();
$bodyCell1->setContent(new HtmlText("Example Cell"))->addClass("container");

$bodyRow->addChild($bodyCell1);
$table->addChild($bodyRow);

$body->addChild($table);

$ul = new HtmlUnorderedList();
$li1 = new HtmlList();
$li1->setContent(new HtmlText("Item 1"));
$li2 = new HtmlList();
$li2->setContent(new HtmlText("Item 2"));
$ul->addList($li1)->addList($li2);
$body->addChild($ul);

$ol = new HtmlOrderedList();
$li3 = new HtmlList();
$li3->setContent(new HtmlText("Item A"));
$li4 = new HtmlList();
$li4->setContent(new HtmlText("Item B"));
$ol->addChild($li3)->addChild($li4);
$body->addChild($ol);


$link = new HtmlAnchor('https://www.w3schools.com', 'Sample Link');
$body->addChild($link);

$image = new HtmlImage();
$image->setSrc('sample.jpg')->setAlt('Description of the image');
$body->addChild($image);
$body->addChild($table);
$body->addChild($link);

$html->addChild($head);
$html->addChild($body);
$html->generate();
file_put_contents('style.css', $cssGenerator->render());

// print_r($html->getChild());