<?php

use Html\Elements\Body\HtmlAbbreviation;
use Html\Elements\Body\HtmlAnchor;
use Html\Elements\Body\HtmlBody;
use Html\Elements\Body\HtmlDiv;
use Html\Elements\Body\HtmlHeader;
use Html\Elements\Body\HtmlHeading;
use Html\Elements\Body\HtmlParagraph;
use Html\Elements\Body\HtmlSection;
use Html\Elements\Head\HtmlHead;
use Html\Elements\Head\HtmlLink;
use Html\Elements\Head\HtmlTitle;
use Html\Elements\Head\HtmlMeta;
use Html\Elements\Html;
use Html\Elements\HtmlText;

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

$maindiv = (new HtmlDiv())->addClass('page-wrapper');

$body->setId('css-zen-garden')
->addChild($maindiv
        //Section
        ->addChild((new HtmlSection())->addClass('intro')->setId('zen-intro')
                //Header
                ->addChild((new HtmlHeader())->setRole('banner')
                        ->addChild((new HtmlHeading(1))
                                ->addChild(new HtmlText("CSS Zen Garden")))
                        ->addChild((new HtmlHeading(2))
                                ->addChild(new HtmlText("The beauty of "))
                                        ->addChild((new HtmlAbbreviation())
                                                ->addChild(new HtmlText('WHO')))
                                ->addChild(new HtmlText(' was founded in 1948.')))
                        )
                //Div
                ->addChild((new HtmlDiv())->addClass('summary')->setId('zen-summary')->setRole('article')
                        ->addChild((new HtmlParagraph())
                                ->addChild(new HtmlText('A demonstration of what can be accomplished through '))
                                ->addChild((new HtmlAbbreviation())
                                        ->addChild(new HtmlText('CSS'))->setTitle('Cascading Style Sheets'))
                                ->addChild(new HtmlText('-based design. Select any stlye sheet fromthe list to load it into this page.')))
                        ->addChild((new HtmlParagraph())
                                ->addChild(new HtmlText('Download the example '))
                                ->addChild((new HtmlAnchor())->setHref('/examples/index')->setTitle("This page's source HTML code, not to be modified")
                                        ->addChild(new HtmlText("html file")))
                                ->addChild(new HtmlText(' and '))
                                ->addChild((new HtmlAnchor())->setHref('/examples/styles.css')->setTitle("This page's sample CSS, the file you may modify.")
                                        ->addChild(new HtmlText("css file")))
                               )
                )
));
$maindiv->addChild((new HtmlDiv())->addClass("main supporting")->setId('zen-supporting')->setRole('main')
        ->addChild((new HtmlDiv())->setRole('article')->addClass('explanation')->setId('zen-explanation')
                ->addChild((new HtmlHeading(3))->addChild(new HtmlText('So What is This About?')))
                ->addChild((new HtmlParagraph())->addChild(new HtmlText('There is a continuing need to show the power of '))
                        ->addChild((new HtmlAbbreviation())->setTitle('Cascading Style Sheets')->addChild(new HtmlText('CSS')))
                        ->addChild(new HtmlText('The Zen Garden aims to excite, inspire, and encourage participation. To begin view some of the existing designs in the list. Clicking on any one will load the style sheet into this very page.')))
                ->addChild((new HtmlParagraph())->addChild(new HtmlText('There is a continuing need to show the power of '))
                        ->addChild((new HtmlAbbreviation())->setTitle('Cascading Style Sheets')->addChild(new HtmlText('CSS')))
                        ->addChild(new HtmlText('The Zen Garden aims to excite, inspire, and encourage participation. To begin view some of the existing designs in the list. Clicking on any one will load the style sheet into this very page.')))
        )
        ->addChild((new HtmlDiv())->setRole('article')->addClass('participation')->setId('zen-participation'))
        ->addChild((new HtmlDiv())->setRole('article')->addClass('benefits')->setId('zen-benefits'))
);


$html->addChild($head)->addChild($body);
$html->generate();