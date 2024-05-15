<?php
require_once("loader.php");

use CSS\CssGenerator;
use CSS\Properties\Animation\Animation;
use CSS\Properties\Layout\Overflow;
use CSS\Properties\Display\Border;
use CSS\Properties\Display\Outline;
use CSS\Properties\Styling\Background;
use CSS\Properties\Styling\Font;
use CSS\Properties\Layout\BoxModel;
use CSS\Properties\Layout\Positioning;
use CSS\Properties\Styling\Text;
use CSS\Properties\Miscellaneous\Miscellaneous;
use CSS\Pseudoclass\ComplexSelector;

$cssGenerator = new CssGenerator();
$font_face = $cssGenerator->addRule('@font-face');
$html = $cssGenerator->addRule('html');
$body = $cssGenerator->addRule('body');
$pagewrapper = $cssGenerator->addRule('.page-wrapper');
$header = $cssGenerator->addRule('header');

$font_face->addProperty(
    (new Font())
    ->font_family('cormorant')
    ->src('"fonts/CormorantGaramond-Regular.ttf"')
);
$font_face->addProperty(
    (new Font())
    ->font_family('cormorantSB')
    ->src('"fonts/CormorantGaramond-SemiBold.ttf"')
);
$font_face->addProperty(
    (new Font())
    ->font_family('oran')
    ->src('"fonts/Oranienbaum-Regular.otf"')
);
$font_face->addProperty(
    (new Font())
    ->font_family('bohemian')
    ->src('"fonts/Bohemian-Soul.otf"')
);

$html->addProperty(
    (new BoxModel())
    ->margin('0')
    ->padding('0')
);

$body->addProperties([
    (new Background())->background_color('#0F2030'),
    (new Font())
        ->font('75% georgia, sans-serif')
        ->line_height('1.88889')
        ->color('#555753'),
    (new BoxModel())
        ->margin('0')
        ->padding('0'),
    (new Overflow())
        ->overflow_x('hidden')
]);

$pagewrapper->addProperties([
    (new BoxModel())
    ->display('grid'),
    (new Positioning())
    ->position('relative')
]);

$header->addProperty(
    (new Animation())
    ->animation('fadeIn 5s')
    ->_webkit_animation('fadeIn5s')
    ->_moz_animation('fadeIn5s')
    ->_o_animation('fadeIn5s')
    ->_ms_animation('fadeIn5s')
);

$headerH2Before = new ComplexSelector('header', 'h2', 'before');
$headerH2Before->addProperty((new Background())->background_color('#ff0000')); 
$cssGenerator->addRule($headerH2Before);

$cssContent = $cssGenerator->render();
file_put_contents('style.css', $cssContent);
