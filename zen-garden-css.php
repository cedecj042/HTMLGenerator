<?php

require_once("loader.php");

use CSS\CssGenerator;
use CSS\Properties\Display\Border;
use CSS\Properties\Display\Outline;
use CSS\Properties\Styling\Background;
use CSS\Properties\Styling\Color;
use CSS\Properties\Styling\Font;
use CSS\Properties\Styling\Text;

$cssGenerator = new CssGenerator();
$font_face = $cssGenerator->addRule('@font-face');
$html = $cssGenerator->addRule('html');
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
    (new Html())
    ->margin('0')
    ->padding('0')
);
file_put_contents('style.css', $cssGenerator->render());