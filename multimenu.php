<?php
require_once("loader.php");

use CSS\CssGenerator;
use CSS\Properties\Styling\Background;
use CSS\Properties\Styling\Font;
use CSS\Properties\Layout\BoxModel;
use CSS\Properties\Layout\Positioning;
use CSS\Properties\Styling\Text;
use CSS\Properties\Display\Display;


$cssGenerator = new CssGenerator();

$cssGenerator->addComment('CSS reset rule');

$asterisk = $cssGenerator->addRule('*');
$asterisk->addProperties([
    (new BoxModel())
    ->margin('0')
    ->padding('0')
]);

$body = $cssGenerator->addRule('body');
$body->addProperties([
    (new BoxModel())
    ->margin_top('30px')
    ->margin_left('40px'),
    (new Font())
    ->font_family('arial, verdana, tahoma, sans-serif')
]);

$mainmenusub1sub2 = $cssGenerator->addRule('#mainmenu, .sub1, .sub2');
$mainmenusub1sub2->addProperties([
    (new Text())
    ->list_style('none')
]);

$mainmenu= $cssGenerator->addRule('#mainmenu');
$mainmenu->addCommentedProperties([
    (new Positioning())
    ->position('absolute')
    ->bottom('0')
]);

$mainmenuli = $cssGenerator->addRule('#mainmenu li');
$mainmenuli->addProperties([
    (new BoxModel())
    ->width('125px')
    ->margin_right('4px'),
    (new Positioning())
    ->position('relative')
    ->float('left'),
    (new Text())
    ->text_align('center')
]);

$mainmenua = $cssGenerator->addRule('#mainmenu a');
$mainmenua->addProperties([
    (new Background())
    ->background_color('#ccc'),
    (new Font())
    ->color('#000'),
    (new Text)
    ->text_decoration('none'),
    (new Display())
    ->display('block'),
    (new BoxModel())
    ->width('125px')
    ->height('35px'),
    (new Font())
    ->line_height('35px')
]);

$mainmenusub1a = $cssGenerator->addRule('#mainmenu .sub1 a');
$mainmenusub1a->addProperties([
    (new BoxModel())
    ->margin_top('3px')
]);

$mainmenusub2a = $cssGenerator->addRule('#mainmenu .sub2 a');
$mainmenusub2a->addProperties([
    (new BoxModel())
    ->margin_left('5px')
]);

$mainmenulihovera = $cssGenerator->addRule('#mainmenu li:hover > a');
$mainmenulihovera->addProperties([
    (new Background())
    ->background_color('#237291')
]);

$mainmenulihoverahover = $cssGenerator->addRule('#mainmenu li:hover a:hover');
$mainmenulihoverahover->addProperties([
    (new Background())
    ->background_color('aqua')
]);

$mainmenusub1 = $cssGenerator->addRule('#mainmenu .sub1');
$mainmenusub1->addProperties([
    (new Display())
    ->display('none'),
    (new Positioning())
    ->position('absolute')
]);

$mainmenusub2 = $cssGenerator->addRule('#mainmenu .sub2');
$mainmenusub2->addProperties([
    (new Display())
    ->display('none'),
    (new Positioning())
    ->position('absolute')
    ->top('0px')
    ->left('124px')
]);

$mainmenulihoversub = $cssGenerator->addRule('#mainmenu li:hover .sub1');
$mainmenulihoversub->addProperties([
    (new Display())
    ->display('block')
]);

$mainmenusub1lihoversub2 = $cssGenerator->addRule('#mainmenu .sub1 li:hover .sub2');
$mainmenusub1lihoversub2->addProperties([
    (new Display())
    ->display('block')
]);

$footer = $cssGenerator->addRule('footer');
$footer->addProperties([
    (new Positioning())
    ->position('absolute')
    ->bottom('0'),
    (new BoxModel())
    ->width('100%')
    ->height('30vh'),
    (new Background())
    ->background_color('black')
]);

$copyrightbox = $cssGenerator->addRule('#copyright-box');
$copyrightbox->addProperties([
    (new Positioning())
    ->position('absolute')
    ->bottom('0'),
    (new Text())
    ->text_align('center'),
    (new Font())
    ->color('white'),
    (new BoxModel())
    ->width('100%')
    ->height('1.2rem'),
    (new Font())
    ->line_height('1.2rem')
]);

$cssContent = $cssGenerator->render();
$cssGenerator->generateAndSaveToFile('styles/multimenu.css');