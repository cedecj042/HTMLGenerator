<?php
require_once("loader.php");

use CSS\CssGenerator;
use CSS\Properties\Box\Border;
use CSS\Properties\Styling\Background;
use CSS\Properties\Styling\Font;
use CSS\Properties\Styling\Text;
use CSS\Properties\Layout\BoxModel;
use CSS\Properties\Layout\Positioning;
use CSS\Properties\Layout\Overflow;
use CSS\Combinators\DescendantSelector;

$cssGenerator = new CssGenerator();
$cssGenerator->addComment('Base Styles for the main sections');

$asterisk = $cssGenerator->addRule('*');
$asterisk->addProperty(
    (new BoxModel())
    ->margin('0px')
    ->padding('0px')
);

$body = $cssGenerator->addRule('body');
$body->addProperties([
    (new BoxModel())
    ->margin_top('20px'),
    (new Background)
    ->background_color('#ccc'),
    (new Font)
    ->font_family('arial, verdana, tahoma, sans-serif')
]);

// $cssGenerator->addComment('section layouts');

$header = $cssGenerator->addRule('#header');
$header->addProperty(
    (new BoxModel())
    ->margin('0 auto')
    ->width('1000px')
    ->min_height('200px')
);

$lefthead = $cssGenerator->addRule('#lefthead');
$lefthead->addProperties([
    (new BoxModel())
    ->height('200px')
    ->width('200px'),
    (new Background())
    ->background('#fff url("../images/libretto2_200px.png") no-repeat'),
    (new Border())
    ->border_top_left_radius('25px'),
    (new Positioning())
    ->float('left')
]);

$righthead = $cssGenerator->addRule('#righthead');
$righthead->addProperties([
    (new BoxModel())
    ->height('200px')
    ->width('800px'),
    (new Background())
    ->background('#fff url("../images/libretto_banner.png") no-repeat'),
    (new Border())
    ->border_top_right_radius('25px'),
    (new Positioning())
    ->float('left')
]);

$mainmenubar = $cssGenerator->addRule('#mainmenubar');
$mainmenubar->addProperties([
    (new BoxModel())
    ->margin('0 auto')
    ->width('1000px')
    ->height('35px'),
    (new Background())
    ->background_color('#fff'),
    (new Border())
    ->border_bottom('2px solid black')
]);

$maincontainer = $cssGenerator->addRule('#maincontainer');
$maincontainer->addProperties([
    (new Overflow())
    ->overflow('hidden'),
    (new BoxModel())
    ->margin('0 auto')
    ->width('1000px')
    ->height('auto'),
    (new Background())
    ->background_color('#fff'),
    (new Border())
    ->border_bottom('1px solid black')
]);

$headline = $cssGenerator->addRule('#headline');
$headline->addProperty(
    (new BoxModel())
    ->width('1000px')
    ->height('350px')   
);

$headleftimg = new DescendantSelector('#headleft', 'img');
$headleftimg->addProperty(
    (new BoxModel())
    ->display('block')
    ->padding_top('40px')
    ->margin('0 auto')
);
$cssGenerator->addRule($headleftimg);

$headleft = $cssGenerator->addRule('#headleft');
$headleft->addProperties([
    (new BoxModel())
    ->width('600px'),
    (new Positioning())
    ->float('left')
]);

$headright = $cssGenerator->addRule('#headright');
$headright->addProperties([
    (new BoxModel())
    ->width('400px'),
    (new Positioning())
    ->float('left')
]);


$left = $cssGenerator->addRule('#left');
$left->addProperties([
    (new BoxModel())
    ->width('300px')
    ->min_height('200px')
    ->height('auto'),
    (new Background())
    ->background_color('#fff'),
    (new Positioning())
    ->float('left')
]);

$right = $cssGenerator->addRule('#right');
$right->addProperties([
    (new BoxModel())
    ->width('700px')
    ->height('auto'),
    (new Background())
    ->background_color('#fff'),
    (new Positioning())
    ->float('left')
]);

$rightblockheadings = new DescendantSelector('#right', '.blockheadings');
$rightblockheadings->addProperties([
    (new BoxModel())
    ->display('block')
    ->padding_left('10px'),
    (new Font())
    ->font_family('"Arial Narrow", arial, sans-serif')
    ->font_size('30px')
    ->color('#fff'),
    (new Background())
    ->background_color('#65A9D6')
]);
$cssGenerator->addRule($rightblockheadings);

$rightplaceholder = new DescendantSelector('#right', '#placeholder');
$rightplaceholder->addProperties([
    (new BoxModel())
    ->margin('0 auto')
    ->height('auto')
    ->width('600px')
    ->padding_top('30px')
]);
$cssGenerator->addRule($rightplaceholder);

$rightsections = new DescendantSelector('#right', '.sections');
$rightsections->addProperties([
    (new BoxModel())
    ->padding('2px')
    ->margin_right('50px')
    ->margin_bottom('50px')
    ->width('220px')
    ->min_height('50px'),
    (new Positioning())
    ->float('left'),
    (new Border())
    ->border_top_left_radius('10px')
    ->border_top_right_radius('10px')
    ->border('1px solid #ccc'),
    (new Font())
    ->font_size('12px')
]);
$cssGenerator->addRule($rightsections);

$rightsectionsp = $cssGenerator->addRule('#right .sections p');
$rightsectionsp->addProperties([
    (new Border())
    ->border_top_left_radius('10px')
    ->border_top_right_radius('10px'),
    (new Background())
    ->background_color('#65A9D6'),
    (new Font())
    ->font_family('"Arial Narrow", arial, sans-serif')
    ->font_size('30px')
    ->color('#fff'),
    (new BoxModel())
    ->padding_left('5px')
    ->height('40px')
]);

$rightsectiontext= new DescendantSelector('#right', '.sectiontext');
$rightsectiontext->addProperty(
    (new Text())
    ->text_align('justify')
);
$cssGenerator->addRule($rightsectiontext);

$footer = $cssGenerator->addRule('#footer');
$footer->addProperties([
    (new BoxModel())
    ->margin('0 auto')
    ->width('1000px')
    ->min_height('200px'),
    (new Background())
    ->background_color('#000'),
    (new Border())
    ->border_bottom_left_radius('25px')
    ->border_bottom_right_radius('25px'),
    (new Positioning())
    ->position('relative')
]);

$headlrightheadlineimpact = new DescendantSelector('#headlright', '.headlineimpact');
$headlrightheadlineimpact->addProperties([
    (new BoxModel())
    ->display('block'),
    (new Font())
    ->font_family('tahoma, sans-serif')
    ->font_size('45px')
    ->font_weight('normal')
    ->color('#00f'),
    (new Text())
    ->text_align('center')
]);
$cssGenerator->addRule($headlrightheadlineimpact);

$headlrightheadlinetext= new DescendantSelector('#headlright', '.headlinetext');
$headlrightheadlinetext->addProperties([
    (new BoxModel())
    ->display('block'),
    (new Font())
    ->font_family('arial, verdana, sans-serif')
    ->font_size('30px')
    ->font_weight('normal')
    ->color('#f00'),
    (new Text())
    ->text_align('center')
]);

$footercopyrighttext= new DescendantSelector('#footer', '#copyrighttext');
$footercopyrighttext->addProperties([
    (new BoxModel())
    ->display('block'),
    (new Text())
    ->text_align('right'),
    (new Font())
    ->font_size('13px')
    ->color('#fff'),
    (new Positioning)
    ->position('absoulute')
    ->bottom('20px')
    ->right('10px')
]);

$cssGenerator->addRule($footercopyrighttext);

$cssContent = $cssGenerator->render();
file_put_contents('styles/libretto.css', $cssContent);