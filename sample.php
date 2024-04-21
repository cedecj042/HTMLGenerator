<?php

require_once('loader.php');

use Html\Elements\Html;
use Html\Elements\HtmlHead;
use Html\HtmlBody\HtmlBody\HtmlBody;


$html = new Html("index.html");
$head = new HtmlHead();
$body = new HtmlBody();
$html->addChild($head);
$html->addChild($body);

$html->generate();