<?php
use Html\HtmlBody\HtmlBody\HtmlBody;

require_once('loader.php');

$html = new Html("index.html");
$head = new HtmlHead();
$body = new HtmlBody();
$html->setHead($head)->setBody($body);


$title = new HtmlTag("title");
$title->addChild(new HtmlText('My Page Title'));

$head->addChild($title);
$body = new HtmlTag('body');
$p = new HtmlTag('p');
$p->addClass("text-white");
$p->addClass("center");
$p->addChild(new HtmlText('Hello, world!'));
$body->addChild($p);
$html->addChild($head);
$html->addChild($body);

$generator = new HtmlGenerator('sample.html');
$generator->generate($html);