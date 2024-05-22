# HTMLGenerator
HTML Generator using PHP templating

## Plan

Each tag has common attributes such as:
- Class
- ID
- style
- hidden
- dir
- lang
- popover 
- spellcheck
- title
- translate

While other Tags has specific attributes.

We have a Universal tag which holds the global attributes and the setters and getters for it. 
Which also includes the Tag name. This will be the parent class. 
Under the Tag Folder, there will be 2 subclasses, which is 
- Container
    - have a start and closing tag
    - can have a text content
- Single
    - don't have a start adn closing tag, so it has different type of rendering
    - can't have a text content

The TagInterface holds the render function, since it has different style of rendering for container and single tag, it is implemented in the subclass instead of the parent class.

Each container tag and single tag has been seperated for head and body.
This way, whenever you add a tag inside a tag, it should be in the appropriate place. 
For example:

<head>
    <title>Title</title>
    <input text="">
</head>

This setup wont work because input is supposedly inside the body. 

In each element it is extended to its corresponding classified parent tag, like if its: 
- Single Tag for head - SingleHeadTag
- Single Tag for body - SingleBodyTag
- Container Tag for head - ContainerHeadTag
- Container Tag for body - ContainerBodyTag

We will create all Html<Tags> in the Elements folder under their expected classified tag, which is for body and head:
- Html
    - Elements
        - Head
        - Body

Since, each tag has different specific attributes, then inside each HtmlTags, like input, will have the specific functions to set their own specific attributes.

The HTML text and the HTML Script is a special case. This two can be both used in Head or Body. 
When Generating an HTML Class, it takes a parameter of the filename. You can also set the Head and the Body to combine it with the HTML class. After modifying your HTML class, you can call the generate function under the HTML class.


## Usage Instructions:

This library uses method chaining in order to avoid cutting code line by line.
In order to fully utilize this program's capabilities, 
Here are some examples of how to do so:

### Step 1: Create an HTML Element
#### Option 1:

    $span = new HtmlSpan();
    $span->setId('exampleid')->setContent(new HtmlText('Hello World!'));

#### Option 2:

    $span = (new HtmlSpan())->setId('exampleid')->setContent(new HtmlText('Hello World!'))

#### Html Output:

    <span id="exampleid">Hello World!</span>

In this example, we first declare a variable name for an Html Element, in this case, we named it '$span' and declared it as am 'HtmlSpan' element.

We then proceed to call the attribute setters for that specific element. In this instance, we set the 'id' attribute to 'exampleid' and set the content of the span to 'Hello World!' by using 'HtmlText' class.

### Step 2: Add Content to Elements
#### Option 1:

    $text = new HtmlText('This is an example text content');
    $span->addChild($text);

#### Option 2:

    $span->addChild(new HtmlText('This is an example text content'));

#### Html Output:
    
    <span id="exampleid">Hello World!
    This is an example text content
    </span>

In this example, we create a new 'HtmlText' object with the content 'This is an example content'. We then add this text object as a child to the previously created '$span' element using the 'addChild' method. This nests the new text content within the span.

### Step 3: Add the Span to a Container
#### Option 1:
    $containerSpan = new HtmlSpan();
    $containerSpan->setId('container');
    $containerSpan->addChild($span);

#### Option 2:
    $containerspan = (new HtmlSpan())->setId('container')->addChild($span);

#### Html Output:

    <span id="container">
        <span id="exampleid">Hello World!
            This is an example text content
        </span>
    </span>

In this example, we create a new 'HtmlSpan' element and assign it to the variable '$containerSpan'. We set the id attribute of this container to 'container'. We then add the previously created '$span' element as a child of this container using the addChild method. This nests the span within the container span. 

Since this library is using method chaining, then you can just do either options.

### Step 4: Buld the HTML Structure

    $body = new HtmlBody();
    $body->setId('body');
    $body->addChild($containerSpan);

#### Html Output:

    <body id="body">
    <div id="container">
        <span id="exampleid">Hello World!
            This is an example text content
        </span>
    </div>
    </body>

In this example, we create a body element and assign it to the variable '$body'. We set the id attribute of the body to body and add the previously created '$containerSpan' element as a child to this body. 

### Step 5: Combine everything and generate a Complete HTML Document

    
    $span = new HtmlSpan();
    $span->setId('exampleid')->setContent(new HtmlText('Hello World!'));


    $text = new HtmlText('This is an example text content');
    $span->addChild($text);


    $containerSpan = new HtmlSpan();
    $containerSpan->setId('container');
    $containerSpan->addChild($span);

    
    $body = new HtmlBody();
    $body->setId('body');
    $body->addChild($containerSpan);

    
    $html = new Html('');
    $title = new HtmlTitle('Usage Instructions');
    $head = new HtmlHead($title);

    $html->setHead($head);
    $html->setBody($body);

    $html->generate();

#### Html Output:

    <!DOCTYPE html>
    <html>
        <head>
            <title>Usage Instructions</title>
        </head>
        <body id="body">
            <span id="container">
                <span id="exampleid">Hello World!
                    This is an example text content
                </span>
            </span>
        </body>
    </html>

Lastly, we generate the HTML structure by utilizing the 'Html' class. We then create and set up the head section with a title. Then, we add the previously created body structure. Lastly, we call the 'generate' method to output the complete HTML document.
