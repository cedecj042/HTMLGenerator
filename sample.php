<?php


require_once('loader.php');

use Html\Elements\Html;
use Html\Elements\HtmlHead;
use Html\Elements\HtmlBody;
use Html\Elements\HtmlInput;
use Html\Elements\HtmlDiv;


$html = new Html("index.html");
$head = new HtmlHead();
$body = new HtmlBody();
$div = new HtmlDiv();
$div->setContent("hey");
$div->addClass("text-white center");
$body->addChild($div);

$div->addClass(new HtmlInput());
$html->addChild($head);
$html->addChild($body);
$html->generate();