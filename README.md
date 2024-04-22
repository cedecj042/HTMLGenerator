# HTMLGenerator
HTML Generator using PHP templating

# Plan

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


We will create all Html<Tags> in the Elements folder
- Html
- Head
- Body
- Div
- Input
- Paragraph
- etc.

Since, each tag has different specific attributes, then inside each HtmlTags, like input, will have the specific functions to set their own specific attributes.

