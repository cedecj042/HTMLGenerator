<?php
use Html\Elements\Body\HtmlBody;
use Html\Elements\Body\HtmlDiv;
use Html\Elements\Body\HtmlSection;
use Html\Elements\Head\HtmlHead;
use Html\Elements\Head\HtmlLink;
use Html\Elements\Head\HtmlTitle;
use Html\Elements\Head\HtmlMeta;
use Html\Elements\Html;

require_once('loader.php');


$html = new Html("index.html");
$head = new HtmlHead(new HtmlTitle("Hello World"));
$body = new HtmlBody();

//Setting up head
$head->addChild(new HtmlMeta('utf-8'))
->addChild((new HtmlLink())->setRel('stylesheet')->setMedia('screen')->setHref('style.css'))
->addChild((new HtmlLink())->setRel('alternate')->setType('application/rss+xml')->setTitle('RSS')->setHref('http://www.csszengarden.com/zengarden.xml'))
->addChild((new HtmlMeta())->setName('viewport')->setContent('width=device-width,initial-scale=1.0'))
->addChild((new HtmlMeta())->setName('description')->setContent('A demonstration of what can be accomplished visually through CSS-based design.'))
->addChild((new HtmlMeta())->setName('robots')->setContent('all'));

$body->setId('css-zen-garden')
->addChild((new HtmlDiv())->addClass('page-wrapper')
        ->addChild((new HtmlSection())->addClass('intro')->setId('zen-intro')));


$html->addChild($head)->addChild($body);
$html->generate();