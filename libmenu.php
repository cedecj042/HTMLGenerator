<?php
require_once("loader.php");

use CSS\CssGenerator;
use CSS\Properties\Box\Border;
use CSS\Properties\Styling\Background;
use CSS\Properties\Styling\Font;
use CSS\Properties\Styling\Text;
use CSS\Properties\Layout\BoxModel;
use CSS\Properties\Layout\Positioning;
use CSS\Combinators\DescendantSelector;

$cssGenerator = new CssGenerator();
$cssGenerator->addComment('Menu Styles');

$mainmenusub1sub2 = $cssGenerator->addRule('#mainmenu, .sub1, .sub2');
$mainmenusub1sub2->addProperty(
    (new Text())
    ->list_style('none')
);

$mainmenuli = new DescendantSelector('#mainmenu', 'li');
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
$cssGenerator->addRule($mainmenuli);

$mainmenua = new DescendantSelector('#mainmenu', 'a');
$mainmenua->addProperties([
    (new Font())
    ->font_weight('bold')
    ->color('#000')
    ->line_height('35px'),
    (new Background())
    ->background_color('#fff'),
    (New Text())
    ->text_decoration('none'),
    (new BoxModel())
    ->display('block')
    ->width('125px')
    ->height('35px')
]);
$cssGenerator->addRule($mainmenua);

$mainmenusub1a = $cssGenerator->addRule('#mainmenu .sub1 a');
$mainmenusub1a->addProperty(
    (new Font())
    ->font_size('12px')
);

$mainmenusub1a->addCommentedProperties([
    (new BoxModel())
    ->margin_top('3px'),
    (new Border())
    ->border('1px solid #000')
]);

$mainmenusub2a = $cssGenerator->addRule('#mainmenu .sub2 a');
$mainmenusub2a->addCommentedProperties([
    (new BoxModel())
    ->margin_left('5px'),
    (new Border())
    ->border('1px solid #000')
]);

$mainmenulihovera = $cssGenerator->addRule('#mainmenu li:hover > a');
$mainmenulihovera->addProperties([
    (new Background())
    ->background_color('#237291'),
    (new Font())
    ->color('#fff')
]);

$mainmenulihoverahover = $cssGenerator->addRule('#mainmenu li:hover a:hover');
$mainmenulihoverahover->addProperties([
    (new Background())
    ->background_color('aqua'),
    (new Font())
    ->color('#000')
]);

$mainmenusub1 = new DescendantSelector('#mainmenu', '.sub1');
$mainmenusub1->addProperties([
    (new BoxModel())
    ->display('none'),
    (new Positioning())
    ->position('absolute')
]);
$cssGenerator->addRule($mainmenusub1);

$mainmenusub2 = new DescendantSelector('#mainmenu', '.sub2');
$mainmenusub2->addProperties([
    (new BoxModel())
    ->display('none'),
    (new Positioning())
    ->position('absolute')
    ->top('0px')
    ->left('127px')
]);
$cssGenerator->addRule($mainmenusub2);

$mainmenulihoversub1 = $cssGenerator->addRule('#mainmenu li:hover .sub1');
$mainmenulihoversub1->addProperty(
    (new BoxModel())
    ->display('block')
);

$mainmenulihoversub2 = $cssGenerator->addRule('#mainmenu li:hover .sub2');
$mainmenulihoversub2->addProperty(
    (new BoxModel())
    ->display('block')
);

$cssContent = $cssGenerator->render();
file_put_contents('styles/libmenu.css', $cssContent);