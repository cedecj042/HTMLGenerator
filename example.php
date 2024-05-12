<?php
require_once 'CssGenerator.php';
require_once 'Properties/CssProperty.php';

require_once 'Properties/Animation/Animation.php';
require_once 'Properties/Animation/Transition.php';

require_once 'Properties/Box/Border.php';
require_once 'Properties/Box/Outline.php';

require_once 'Properties/Display/Content.php';
require_once 'Properties/Display/Display.php';

require_once 'Properties/Layout/BoxModel.php';
require_once 'Properties/Layout/Flexbox.php';
require_once 'Properties/Layout/Grid.php';
require_once 'Properties/Layout/Positioning.php';

require_once 'Properties/Miscellaneous/ClipPath.php';
require_once 'Properties/Miscellaneous/Cursor.php';
require_once 'Properties/Miscellaneous/Filter.php';
require_once 'Properties/Miscellaneous/Miscellaneous.php';
require_once 'Properties/Miscellaneous/Transform.php';


require_once 'Properties/Styling/Background.php';
require_once 'Properties/Styling/Color.php';
require_once 'Properties/Styling/Font.php';
require_once 'Properties/Styling/Text.php';


// use CssGenerator\CssGenerator;
// use CssGenerator\Properties\Layout\BoxModel;

$cssGenerator = new CssGenerator();
$containerRule = $cssGenerator->addRule('.container');

$containerRule->addProperty(
    (new Background())
        ->background_color('#f0f0f0')
        ->background_image('url("path/to/image.jpg")')
        ->background_repeat('no-repeat')
        ->background_size('cover')
        ->background_position('center')
);

$containerRule->addProperty(
    (new Color())
        ->color('#333')
        ->border_color('#666')
);

$containerRule->addProperty(
    (new Font())
        ->font_family('Arial, sans-serif')
        ->font_size('16px')
        ->font_weight('bold')
        ->font_style('italic')
        ->line_height('1.5')
);

$containerRule->addProperty(
    (new Text())
        ->text_align('center')
        ->text_decoration('underline')
        ->text_transform('uppercase')
        ->letter_spacing('2px')
        ->text_wrap('normal')
);

$containerRule->addProperty(
    (new Border())
        ->border_width('2px')
        ->border_style('dashed')
        ->border_color('#999')
        ->border_radius('5px')
);

$containerRule->addProperty(
    (new Outline())
        ->outline_width('3px')
        ->outline_style('solid')
        ->outline_color('#555')
);

file_put_contents('style.css', $cssGenerator->render());
?>

<html>
<head>
    <title>CSS Generator</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div id="app">
        <div>
            <div class="container">
                <div class="small">
                    .container > .small
                </div>
                .container
            </div>
        </div>
        <div class="container small">
            .container.small
        </div>
    </div>
</body>
</html>