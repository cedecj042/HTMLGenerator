<?php
require_once("loader.php");

use CSS\CssGenerator;
use CSS\Properties\Layout\Overflow;
use CSS\Properties\Box\Border;
use CSS\Properties\Styling\Background;
use CSS\Properties\Styling\Font;
use CSS\Properties\Layout\BoxModel;
use CSS\Properties\Layout\Positioning;
use CSS\Properties\Styling\Text;
use CSS\Properties\Miscellaneous\Miscellaneous;
use CSS\Properties\Animation\Transition;
use css\Properties\Display\Display;
use CSS\Properties\Miscellaneous\Transform;

$cssGenerator = new CssGenerator();

$cssGenerator->addComment('================================================================ 
This copyright notice must be untouched at all times.
Copyright (c) stu nicholls - cssplay.co.uk. All rights reserved.
===================================================================');


$menuHolder = $cssGenerator->addRule('.menuHolder');
$menuHolder->addProperties([
    (new BoxModel())
    ->width('650px')
    ->height('31px'),
    (new Positioning())
    ->position('relative'),
    (new BoxModel())
    ->margin_left('10px')
]);

$menumenuul = $cssGenerator->addRule('.menu, .menu ul');
$menumenuul->addProperties([
    (new BoxModel())
    ->padding('0')
    ->margin('0'),
    (new Text())
    ->list_style('none'),
    (new Positioning())
    ->position('relative'),
    (new Font())
    ->font_family('arial, sans-serif')
]);

$menu = $cssGenerator->addRule('.menu');
$menu->addProperties([
    (new BoxModel())
    ->width('650px')
    ->height('30px'),
    (new Overflow())
    ->overflow('hidden'),
    (new Positioning())
    ->position('absolute')
    ->left('0')
    ->top('0')
]);



$menuli = $cssGenerator->addRule('.menu li');
$menuli->addProperties([
    (new Positioning())
    ->float('left')
    ->position('relative')
    ->z_index('10')
]);

$menulia = $cssGenerator->addRule('.menu li a');
$menulia->addProperties([
    (new Positioning())
    ->float('left')
    ->position('relative')
    ->z_index('20'),
    (new Display())
    ->display('block'),
    (new BoxModel())
    ->height('31px')
    ->padding('0, 10px'),
    (new Font())
    ->line_height('30px')
    ->color('#ddd')
    ->font_size('12px'),
    (new Text())
    ->text_decoration('none'),
    (new Background())
    ->background('url(slidemenu/back.png) no-repeat center top')
]);

$menulifirsta = $cssGenerator->addRule('.menu li.first a');
$menulifirsta->addProperties([
    (new Background())
    ->background('url(slidemenu/back.png) no-repeat left top')
]);

$menulipad = $cssGenerator->addRule('.menu li.pad');
$menulipad->addProperties([
    (new BoxModel())
    ->width('90px')
    ->height('31px')
]);

$menulipadb = $cssGenerator->addRule('.menu li.pad b');
$menulipadb->addProperties([
    (new Display())
    ->display('block'),
    (new BoxModel())
    ->height('31px')
    ->width('90px'),
    (new Background())
    ->background('url(slidemenu/back.png) no-repeat right top')
]);

$menuul = $cssGenerator->addRule('.menu ul');
$menuul->addProperties([
    (new BoxModel())
    ->width('180px')
    ->height('auto'),
    (new Positioning())
    ->position('absolute')
    ->top('-130px'),
    (new Transition())
    ->transition('0.8s ease-in-out')
    ->_o_transition('0.8s ease-in-out')
    ->_moz_transition('0.8s ease-in-out')
    ->_webkit_transition('all 0.8s ease-in-out'),
    (new Transform())
    ->z_index('1'),
    (new BoxModel())
    ->padding('10px 0'),
    (new Background())
    ->background('#000'),
    (new Transition())
    ->_webkit_box_shadow('2px 2px 3px rgba(0, 0, 0, 0.5)')
    ->_moz_box_shadow('2px 2px 3px rgba(0, 0, 0, 0.5)'),
    (new Miscellaneous())
    ->box_shadow('2px 2px 3px rgba(0, 0, 0, 0.5)'),
    (new Transition())
    ->_webkit_border_radius('8px')
    ->_moz_border_radius('8px'),
    (new Border())
    ->border_radius('8px')
]);

$menuulli = $cssGenerator->addRule('.menu ul li');
$menuulli->addProperty(
    (new BoxModel())
    ->width('180px')
);

$menuullia = $cssGenerator->addRule('menu ul li a');
$menuullia->addProperties([
    (new BoxModel())
    ->width('160px')
    ->height('20px'),
    (new Font())
    ->line_height('20px'),
    (new Background())
    ->background('transparent')
]);

$menuhover = $cssGenerator->addRule('.menu:hover');
$menuhover->addProperties([
    (new BoxModel())
    ->height('200px')
]);

$menuahover = $cssGenerator->addRule('.menu a:hover');
$menuahover->addProperties([
    (new Font())
    ->color('#0cf')
]);

$menulihovera = $cssGenerator->addRule('.menu li:hover > a');
$menulihovera->addProperties([
    (new Font())
    ->color('#0cf')
]);

$menulihoverul = $cssGenerator->addRule('.menu li:hover ul');
$menulihoverul->addProperty(
    (new Transform())
    ->_webkit_transform('translate(0,161px)')
    ->_moz_transform('translate(0,161px)')
    ->_o_transform('translate(0,161px)')
    ->transform('translate(0,161px)')
);


$cssContent = $cssGenerator->render();
file_put_contents('styles/cssmenu2.css', $cssContent);