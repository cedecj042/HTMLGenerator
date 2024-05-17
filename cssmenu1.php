<?php
require_once("loader.php");

use CSS\CssGenerator;
use CSS\Properties\Box\Border;
use CSS\Properties\Styling\Background;
use CSS\Properties\Styling\Font;
use CSS\Properties\Styling\Text;
use CSS\Properties\Layout\BoxModel;
use CSS\Properties\Layout\Positioning;
use Css\Pseudoclass\SimpleSelector;
use CSS\Combinators\DescendantSelector;

$cssGenerator = new CssGenerator();
$asterisk = $cssGenerator->addRule('*');
$body = $cssGenerator->addRule('body');
$mainmenu = $cssGenerator->addRule('#mainmenu');
$cssGenerator->addComment('CSS Reset Rule');

$asterisk->addProperty(
    (new BoxModel())
    ->margin('0px')
    ->padding('0px')
);

$body->addProperties([
    (new BoxModel())
    ->margin_top('20px')
    ->margin_left('20px'),
    (new Font())
    ->font_family('verdana, arial, sans-serif')
]);

$mainmenu->addProperty(
    (new Text())
    ->list_style('none')
);

$mainmenuli = new DescendantSelector('#mainmenu', 'li');
$mainmenuli->addProperties([
    (new Background())
    ->background_color('#174557'),
    (new BoxModel())
    ->width('125px'),
    (new Text())
    ->text_align('center'),
    (new Positioning())
    ->float('left'),
    (new Border())
    ->border_left('1px solid #237291')
    ->border_right('1px solid #D5E1E6')
]);
$cssGenerator->addRule($mainmenuli);

$mainmenuli = new DescendantSelector('#mainmenu', 'a');
$mainmenuli->addProperties([
    (new Font())
    ->color('#fff')
    ->line_height('40px'),
    (new Text())
    ->text_decoration('none'),
    (new BoxModel())
    ->display('block')
    ->width('125px')
    ->height('40px')
]);
$cssGenerator->addRule($mainmenuli);

$mainmenuahover = new SimpleSelector('#mainmenu', 'a', 'hover');
$mainmenuahover->addProperties([
    (new Background())
    ->background_color('#237291')
]);
$cssGenerator->addRule($mainmenuahover);

$mainmenuaactive = new SimpleSelector('#mainmenu', 'a', 'active');
$mainmenuaactive->addProperties([
    (new Background())
    ->background_color('#f00')
]);
$cssGenerator->addRule($mainmenuaactive);


$cssContent = $cssGenerator->render();
file_put_contents('styles/cssmenu1.css', $cssContent);