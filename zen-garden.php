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
$abbreviation_css = (new HtmlAbbreviation())->setTitle('Cascading Stylesheet')->addChild(new HtmlText("CSS"));
$abbreviation_html= (new HtmlAbbreviation())->setTitle('HyperText Markup Language')->addChild(new HtmlText('HTML'));
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
                                ->addChild($abbreviation_css)
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
                        ->addChild($abbreviation_css)
                        ->addChild(new HtmlText('The Zen Garden aims to excite, inspire, and encourage participation. To begin view some of the existing designs in the list. Clicking on any one will load the style sheet into this very page.')))
                ->addChild((new HtmlParagraph())
                        ->addChild($abbreviation_css)
                        ->addChild((new HtmlText(" allows complete and total control over the style of a hypertext document. The only way this can be illustrated in a way that gets people excited is by demonstrating what it can truly be, once the reins are placed in the hands of those able to create beauty from structure. Designers and coders alike have contributed to the beauty of the web; we can always push it further."))))
        )
        ->addChild((new HtmlDiv())->setRole('article')->addClass('participation')->setId('zen-participation')
                ->addChild((new HtmlHeading(3))->addChild(new HtmlText("Participation")))
                ->addChild((new HtmlParagraph())
                        ->addChild(new HtmlText("Strong visual design has always been our focus. You are modifying this page, so strong "))
                        ->addChild($abbreviation_css)
                        ->addChild(new HtmlText(" skills are necessary too, but the example files are commented well enough that even "))
                        ->addChild($abbreviation_css)
                        ->addChild(new HtmlText(' novices can use them as starting points. Please see the '))
                        ->addChild((new HtmlAnchor())->setHref("http://www.mezzoblue.com/zengarden/resources/")->setTitle("A listing of CSS-related resources")
                                ->addChild($abbreviation_css)
                                ->addChild(new HtmlText(" Resource Guide")))
                        ->addChild(new HtmlText(" for advanced tutorials and tips on working with "))
                        ->addChild($abbreviation_css)
                        ->addChild(new HtmlText(".")))
                ->addChild((new HtmlParagraph())
                        ->addChild(new HtmlText('You may modify the style sheet in any way you wish, but not the '))
                        ->addChild($abbreviation_html)
                        ->addChild(new HtmlText(". This may seem daunting at first if you&#8217;ve never worked this way before, but follow the listed links to learn more, and use the sample files as a guide.")))
                ->addChild((new HtmlParagraph())
                        ->addChild(new HtmlText("Download the sample "))
                        ->addChild((new HtmlAnchor())->setHref("/examples/index")->setTitle("This page's source HTML code, not to be modified.")
                                ->addChild(new HtmlText("HTML")))
                        ->addChild(new HtmlText(" and "))
                        ->addChild((new HtmlAnchor())->setHref("/examples/style.css")->setTitle("This page's sample CSS, the file you may modify.")->addChild(new HtmlText("CSS")))
                        ->addChild(new HtmlText(" to work on a copy locally. Once you have completed your masterpiece (and please, don&#8217;t submit half-finished work) upload your "))
                        ->addChild($abbreviation_css)
                        ->addChild(new HtmlText(" file to a web server under your control. "))
                        ->addChild((new HtmlAnchor())->setHref("http://www.mezzoblue.com/zengarden/submit/")->setTitle("Use the contact form to send us your CSS file")->addChild(new HtmlText("Send us a link")))
                        ->addChild(new HtmlText(" to an archive of that file and all associated assets, and if we choose to use it we will download it and place it on our server.")))
                )
        ->addChild((new HtmlDiv())->setRole('article')->addClass('benefits')->setId('zen-benefits')
                ->addChild((new HtmlHeading(3))->addChild(new HtmlText("Benefits")))
                ->addChild((new HtmlParagraph())
                        ->addChild(new HtmlText("Why participate? For recognition, inspiration, and a resource we can all refer to showing people how amazing "))
                        ->addChild($abbreviation_css)
                        ->addChild(new HtmlText(" really can be. This site serves as equal parts inspiration for those working on the web today, learning tool for those who will be tomorrow, and gallery of future techniques we can all look forward to."))        
                )
        )
        ->addChild((new HtmlDiv())->addClass("requirements")->setId("zen-benefits")->setRole("article")
                ->addChild((new HtmlHeading(3))->addChild(new HtmlText("Requirements")))
                ->addChild((new HtmlParagraph())
                        ->addChild(new HtmlText("Where possible, we would like to see mostly "))
                        ->addChild((new HtmlAbbreviation())->setTitle("Cascading Style Sheets, levels 1 and 2")->addChild(new HtmlText("CSS 1 &amp; 2")))
                        )
                ->addChild()
        )
);



$html->addChild($head)->addChild($body);
$html->generate();