<?php

use Html\Elements\Body\HtmlAnchor;
use Html\Elements\Body\HtmlBody;
use Html\Elements\Body\HtmlBreak;
use Html\Elements\Body\HtmlImage;
use Html\Elements\Body\HtmlList;
use Html\Elements\Body\HtmlParagraph;
use Html\Elements\Body\HtmlSection;
use Html\Elements\Body\HtmlSpan;
use Html\Elements\Body\HtmlUnorderedList;
use Html\Elements\Head\HtmlHead;
use Html\Elements\Head\HtmlLink;
use Html\Elements\Head\HtmlMeta;
use Html\Elements\Head\HtmlTitle;
use Html\Elements\Html;
use Html\Elements\HtmlText;

require_once("loader.php");


$menu_array= ['Home','Reading'=>['Novels','Hardbound','Paperback','Comics','Categories'],'Featured','Orders','Dead &amp; Offers'];


$ul = (new HtmlUnorderedList())->setId("mainmenu");



foreach ($menu_array as $key => $value) {
    
    if (is_array($value)) {
        $li = (new HtmlList())->addChild((new HtmlAnchor())->setHref("#")->addChild(new HtmlText($key)));
        $subul = (new HtmlUnorderedList())->addClass("sub1");
        foreach ($value as $sublist) {
            if (is_array($sublist)) {
                $subli = (new HtmlList())->addChild((new HtmlAnchor())->setHref("#")->addChild(new HtmlText($sublist[0])));
                $subul->addChild($subli);
            } else {
                $subli = (new HtmlList())->addChild((new HtmlAnchor())->setHref("#")->addChild(new HtmlText($sublist)));
                $subul->addChild($subli);
            }
        }
        $li->addChild($subul);
    }else {
        $li = (new HtmlList())->addChild((new HtmlAnchor())->setHref("#")->addChild(new HtmlText($menu_array[$key])));
    }
    $ul->addChild($li);
}

$section_array=[
    'Literature'=>'&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
    qui officia deserunt mollit anim id est laborum.&quot;',
    'Arts'=>'&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
    qui officia deserunt mollit anim id est laborum.&quot;',
    'Drama'=>'&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
    qui officia deserunt mollit anim id est laborum.&quot;',
    'Science/Fiction'=>'&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
    qui officia deserunt mollit anim id est laborum.&quot;',
    'Horror'=>'&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
    qui officia deserunt mollit anim id est laborum.&quot;',
    'Love Story'=>'&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
    qui officia deserunt mollit anim id est laborum.&quot;'];

$section = (new HtmlSection())->setId("placeholder");
$count=1;
foreach($section_array as $key => $value){
    $section->addChild((new HtmlSection())->addClass("sections")
        ->addChild((new HtmlParagraph())->addChild(new HtmlText($key)))
        ->addChild((new HtmlSpan())->addClass("sectiontext")
            ->addChild(new HtmlText($value))
        )
    );
    if ($count %2 == 0 && $count != count($array)){
        $section->addChild((new HtmlBreak()));
        $count++;
    }
}

$html = new Html("index.html");
$head = new HtmlHead(new HtmlTitle("Hello World"));
$body = new HtmlBody();

$head->addChild((new HtmlMeta())->setCharset("UTF-8"))
->addChild((new HtmlMeta())->setName("author")->setContent("Roderick A. Bandalan"))
->addChild((new HtmlLink())->setRel("stylesheet")->setType("text/css")->setHref("styles/libretto.css"))
->addChild((new HtmlLink())->setRel("stylesheet")->setType("text/css")->setHref("styles/libmenu.css"));


$body->addChild((new HtmlSection())->setId("header")
    ->addChild((new HtmlSection())->setId("lefthead"))
    ->addChild((new HtmlSection())->setId("righthead"))
)->addChild((new HtmlSection())->setId("mainmenubar")
    ->addChild($ul)
)->addChild((new HtmlSection())->setId("maincontainer")
    ->addChild((new HtmlSection())->setId("headline")
        ->addChild((new HtmlSection())->setId("headlleft")
            ->addChild((new HtmlImage())->setSrc("images/hunger_games_trilogy.jpg")->setTitle("The Hunger Games Trilogy")->setAlt("The Hunger Games Trilogy"))
        )
        ->addChild((new HtmlSection())->setId("headlright")
            ->addChild(new HtmlBreak())
            ->addChild(new HtmlBreak())
            ->addChild((new HtmlSpan())->addClass("headlineimpact")->addChild(new HtmlText("Special Offer!!!")))
            ->addChild(new HtmlBreak())
            ->addChild((new HtmlSpan())->addClass("headlinetext")->addChild(new HtmlText("Limited stocks only!!!")))
            ->addChild(new HtmlBreak())
        )
    )
    ->addChild((new HtmlSection())->setId("left"))
    ->addChild((new HtmlSection())->setId("right")
        ->addChild((new HtmlSpan())->addClass("blockheadings")->addChild(new HtmlText("Book News")))
        ->addChild($section)
    )
)->addChild((new HtmlSection())->setId("footer")
    ->addChild((new HtmlSpan())->setId("copyrighttext")->addChild(new HtmlText("Copyright &copy; International Web Development, All rights reserved 2013")))
);  

$html->addChild($head)->addChild($body);
$html->generate();