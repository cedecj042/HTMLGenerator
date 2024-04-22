<?php

require_once('loader.php');

use Html\Elements\Html;
use Html\Elements\HtmlHead;
use Html\Elements\HtmlBody;
use Html\Elements\HtmlInput;
use Html\Elements\HtmlDiv;
use Html\Elements\HtmlText;


$html = new Html("index.html");
$head = new HtmlHead();
$body = new HtmlBody();
$div = new HtmlDiv();
$input = new HtmlInput();

$div->setContent(new HtmlText("Hey"));
$div->addClass("text-white center");

$div->addChild($input->setPlaceholder('username')->setType("text"));
$body->addChild($div);

$html->addChild($head);
$html->addChild($body);
$html->generate();