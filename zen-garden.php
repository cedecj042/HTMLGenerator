<?php

use Html\Elements\Body\HtmlAbbreviation;
use Html\Elements\Body\HtmlAnchor;
use Html\Elements\Body\HtmlAside;
use Html\Elements\Body\HtmlBody;
use Html\Elements\Body\HtmlBreak;
use Html\Elements\Body\HtmlDiv;
use Html\Elements\Body\HtmlFooter;
use Html\Elements\Body\HtmlHeader;
use Html\Elements\Body\HtmlHeading;
use Html\Elements\Body\HtmlList;
use Html\Elements\Body\HtmlNav;
use Html\Elements\Body\HtmlNavigation;
use Html\Elements\Body\HtmlParagraph;
use Html\Elements\Body\HtmlSection;
use Html\Elements\Body\HtmlSpan;
use Html\Elements\Body\HtmlUnorderedList;
use Html\Elements\Head\HtmlHead;
use Html\Elements\Head\HtmlLink;
use Html\Elements\Head\HtmlTitle;
use Html\Elements\Head\HtmlMeta;
use Html\Elements\Html;
use Html\Elements\HtmlText;

require_once('loader.php');

$designs = [
        "Mid Century Modern" => [
            "designer" => "Andrew Lohman",
            "designer_link" => "http://andrewlohman.com/",
            "design_num"=>"221"
        ],
        "Garments" => [
            "designer" => "Dan Mall",
            "designer_link" => "http://danielmall.com/",
            "design_num"=>"/220"
        ],
        "Steel" => [
            "designer" => "Steffen Knoeller",
            "designer_link" => "http://steffen-knoeller.de",
            "design_num"=>"219"
        ],
        "Apothecary" => [
            "designer" => "Trent Walton",
            "designer_link" => "http://trentwalton.com",
            "design_num"=>"218"
        ],
        "Screen Filler" => [
            "designer" => "Elliot Jay Stocks",
            "designer_link" => "http://elliotjaystocks.com/",
            "design_num"=>"217"
        ],
        "Fountain Kiss" => [
            "designer" => "Jeremy Carlson",
            "designer_link" => "http://jeremycarlson.com",
            "design_num"=>"216"
        ],
        "A Robot Named Jimmy" => [
            "designer" => "meltmedia",
            "designer_link" => "http://meltmedia.com/",
            "design_num"=>"215"
        ],
        "Verde Moderna" => [
            "designer" => "Dave Shea",
            "designer_link" => "http://www.mezzoblue.com/",
            "design_num"=>"214"
        ]
    ];
$designList = new HtmlUnorderedList();
foreach ($designs as $designName => $details) {
        $designAnchor = (new HtmlAnchor())->addClass("design-name")->setHref("/".$details['design_num']."/")->addChild(new HtmlText($designName));
        $designerAnchor = (new HtmlAnchor())->addClass("designer-name")->setHref($details['designer_link'])->addChild(new HtmlText($details['designer']));
        $list = (new HtmlList())->addChild($designAnchor)->addChild(new HtmlText(" by "))->addChild($designerAnchor);
        $designList->addChild($list);
}


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
                        ->addChild(new HtmlText(". This may seem daunting at first if you've never worked this way before, but follow the listed links to learn more, and use the sample files as a guide.")))
                ->addChild((new HtmlParagraph())
                        ->addChild(new HtmlText("Download the sample "))
                        ->addChild((new HtmlAnchor())->setHref("/examples/index")->setTitle("This page's source HTML code, not to be modified.")
                                ->addChild(new HtmlText("HTML")))
                        ->addChild(new HtmlText(" and "))
                        ->addChild((new HtmlAnchor())->setHref("/examples/style.css")->setTitle("This page's sample CSS, the file you may modify.")->addChild(new HtmlText("CSS")))
                        ->addChild(new HtmlText(" to work on a copy locally. Once you have completed your masterpiece (and please, don't submit half-finished work) upload your "))
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
                        ->addChild((new HtmlAbbreviation())->setTitle("Cascading Style Sheets, levels 1 and 2")
                                ->addChild(new HtmlText("CSS 1 and 2")))
                        ->addChild(new HtmlText(" usage. "))
                        ->addChild((new HtmlAbbreviation())->setTitle("Cascading Style Sheets, levels 3 and 4")
                                ->addChild(new HtmlText("CSS 3 and 4")))
                        ->addChild(new HtmlText(" should be limited to widely-supported elements only, or strong fallbacks should be provided. The CSS Zen Garden is about functional, practical "))
                        ->addChild($abbreviation_css)
                        ->addChild(new HtmlText(" and not the latest bleeding-edge tricks viewable by 2% of the browsing public. The only real requirement we have is that your "))
                        ->addChild($abbreviation_css)
                        ->addChild(new HtmlText("validates."))
                        )
                ->addChild((new HtmlParagraph())
                        ->addChild(new HtmlText("Luckily, designing this way shows how well various browsers have implemented "))
                        ->addChild($abbreviation_css)
                        ->addChild(new HtmlText(" by now. When sticking to the guidelines you should see fairly consistent results across most modern browsers. Due to the sheer number of user agents on the web these days &#8212; especially when you factor in mobile &#8212; pixel-perfect layouts may not be possible across every platform. That's okay, but do test in as many as you can. Your design should work in at least IE9+ and the latest Chrome, Firefox, iOS and Android browsers (run by over 90% of the population)."))
                )
                ->addChild((new HtmlParagraph())
                        ->addChild(new HtmlText("We ask that you submit original artwork. Please respect copyright laws. Please keep objectionable material to a minimum, and try to incorporate unique and interesting visual themes to your work. We're well past the point of needing another garden-related design."))
                )
                ->addChild((new HtmlParagraph())
                        ->addChild(new HtmlText("This is a learning exercise as well as a demonstration. You retain full copyright on your graphics (with limited exceptions, see "))
                        ->addChild((new HtmlAnchor())->setHref("http://www.mezzoblue.com/zengarden/submit/guidelines/")->addChild(new HtmlText("submission guidelines")))
                        ->addChild(new HtmlText(", but we ask you release your "))
                        ->addChild($abbreviation_css)
                        ->addChild(new HtmlText(" under a Creative Commons license identical to the "))
                        ->addChild((new HtmlAnchor())->setHref("http://creativecommons.org/licenses/by-nc-sa/3.0/")->setTitle("View the Zen Garden's license information.")->addChild(new HtmlText("one on this site")))
                        ->addChild(new HtmlText(" so that others may learn from your work."))
                )
                ->addChild((new HtmlParagraph())
                        ->setRole("contentinfo")
                        ->addChild(new HtmlText("By "))
                        ->addChild((new HtmlAnchor())->setHref("http://www.mezzoblue.com/")->addChild(new HtmlText("Dave Shea")))
                        ->addChild(new HtmlText(". Bandwidth graciously donated by "))
                        ->addChild((new HtmlAnchor())->setHref("http://www.mediatemple.net/")->addChild(new HtmlText("mediatemple")))
                        ->addChild(new HtmlText(". Now available: "))
                        ->addChild((new HtmlAnchor())->setHref("http://www.amazon.com/exec/obidos/ASIN/0321303474/mezzoblue-20/")->addChild(new HtmlText("Zen Garden, the book")))
                        ->addChild(new HtmlText("."))
                )
        )
        ->addChild((new HtmlFooter())
                ->addChild((new HtmlAnchor())->setHref("http://validator.w3.org/check/referer")->setTitle("Check the validity of this site’s HTML")->addClass("zen-validate-html")->addChild(new HtmlText("HTML")))
                ->addChild((new HtmlAnchor())->setHref("http://jigsaw.w3.org/css-validator/check/referer")->setTitle("Check the validity of this site’s CSS")->addClass("zen-validate-css")->addChild(new HtmlText("HTML")))
                ->addChild((new HtmlAnchor())->setHref("http://creativecommons.org/licenses/by-nc-sa/3.0/")->setTitle("View the Creative Commons license of this site: Attribution-NonCommercial-ShareAlike.")->addClass("zen-license")->addChild(new HtmlText("CC")))
                ->addChild((new HtmlAnchor())->setHref("https://github.com/mezzoblue/csszengarden.com")->setTitle("Fork this site on Github")->addClass("zen-github")->addChild(new HtmlText("GH")))
                )
);

$maindiv->addChild((new HtmlAside())->addClass("sidebar")->setRole("complementary")
        ->addChild((new HtmlDiv())->addClass("wrapper")
                ->addChild((new HtmlDiv())->addClass("design-selection")->setId("design-selection")
                        ->addChild((new HtmlHeading(3))->addClass("select")->addChild(new HtmlText("Select a Design:")))
                        ->addChild((new HtmlNavigation())
                                ->addChild($designList)
                        )
                )
                ->addChild((new HtmlDiv())->addClass("design-archives")->setId("design-archives")
                        ->addChild((new HtmlHeading(3))->addChild(new HtmlText("Archives:")))
                        ->addChild((new HtmlNavigation())
                                ->addChild((new HtmlUnorderedList())
                                        ->addChild((new HtmlList())->addClass("next")
                                                ->addChild((new HtmlAnchor())->setHref("/214/page1")
                                                        ->addChild(new HtmlText("Next Designs"))
                                                        ->addChild((new HtmlSpan())->addClass("ïndicator")->addChild(new HtmlText("›")))
                                                )
                                        )
                                        ->addChild((new HtmlList())->addClass("viewall")
                                                ->addChild((new HtmlAnchor())->setHref("http://www.mezzoblue.com/zengarden/alldesigns/")->setTitle("View every submission to the Zen Garden.")
                                                        ->addChild(new HtmlText("View All Designs"))
                                                )
                                        )
                                )
                        )        
                )
                ->addChild((new HtmlDiv())->addClass("zen-resources")->setId("zen-resources")
                        ->addChild((new HtmlHeading(3))->addClass("resources")->addChild(new HtmlText("Resources:")))
                        ->addChild((new HtmlUnorderedList())
                                ->addChild((new HtmlList())->addClass("view-css")
                                        ->addChild((new HtmlAnchor())->setHref("style.css")->setTitle("View the sources CSS file of the currently-viewed design.")->addChild(new HtmlText("View This Design's "))->addChild($abbreviation_css))
                                )
                                ->addChild((new HtmlList())->addClass("css-resources")
                                        ->addChild((new HtmlAnchor())->setHref("http://www.mezzoblue.com/zengarden/resources/")->setTitle("Links to great sites with information on using CSS.")->addChild($abbreviation_css)->addChild(new HtmlText(" Resources")))
                                )
                                ->addChild((new HtmlList())->addClass("zen-faq")
                                        ->addChild((new HtmlAnchor)->setHref("http://www.mezzoblue.com/zengarden/faq/")->setTitle("A list of Frequently Asked Questions about the Zen Garden.")->addChild((new HtmlAbbreviation())->setTitle("Frequently Asked Questions")->addChild(new HtmlText("FAQ"))))
                                )
                                ->addChild((new HtmlList())->addClass("zen-submit")
                                        ->addChild((new HtmlAnchor())->setHref("http://www.mezzoblue.com/zengarden/submit/")->setTitle("Send in your own CSS file.")->addChild(new HtmlText("Submit a Design"))) 
                                )
                                ->addChild((new HtmlList())->addClass("zen-translations")
                                        ->addChild((new HtmlAnchor())->setHref("http://www.mezzoblue.com/zengarden/translations/")->setTitle("View translated versions of this page.")->addChild(new HtmlText("Translations")))
                                )
                        )
                )
        )
);

for($i = 1; $i <= 6; $i++){
        $div = (new HtmlDiv())->addClass("extra".$i)->setRole('presentation');
        $body->addChild($div);
}
$maindiv->addChild(new HtmlBreak());

$html->addChild($head)->addChild($body);
$html->generate();