<?php
use Html\Elements\HtmlDiv;

require_once('loader.php');

use Html\Elements\Html;
use Html\Elements\HtmlHead;
use Html\Elements\HtmlBody;


$html = new Html("index.html");
$head = new HtmlHead();
$body = new HtmlBody();
$div = new HtmlDiv();
$div->setContent("hey");
$div->addClass("text-white center");
$body->addChild($div);
$html->addChild($head);
$html->addChild($body);
$html->generate();