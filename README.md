# Sass Mixins
v1.0.4

## Installation

### NPM

```
npm install sass-collection --save-dev
```

## Colors

### Social

```
$color_facebook     : #3b5998;
$color_twitter      : #00aced;
$color_google_plus  : #dd4b39;
$color_youtube      : #bb0000;
$color_linkedin     : #007bb6;
$color_instagram    : #517fa4;
$color_pinterest    : #cb2027;
$color_vine         : #00bf8f;
$color_snapchat     : #fffc00;
$color_quora        : #a82400;
$color_flikr        : #ff0084;
$color_tumblr       : #32506d;
$color_vk           : #45668e;
$color_vimeo        : #aad450;
$color_foursquare   : #0072b1;
$color_whatsapp     : #4dc247;
```

## Functions

### Placeholders

They're a pain as you have to set the style in all the separate formats, this sorts it for you.

```
@mixin placeholder {
    &.placeholder { @content; }
    &:-moz-placeholder { @content; }
    &::-moz-placeholder { @content; }
    &:-ms-input-placeholder { @content; }
    &::-webkit-input-placeholder { @content; }
}
```

### Pseudo

When using ::before and ::after you'll always need these three, so we're saving two lines of code every time you use this.

```
@mixin pseudo($display: block, $pos: absolute, $content: ''){
    content: $content;
    display: $display;
    position: $pos;
}
```

### Responsive ratio

We use this for creating scalable elements (usually images / background images) that maintain a ratio.

```
@mixin ratio($x,$y, $pseudo: false) {
    $padding: unquote( ( $y / $x ) * 100 + '%' );
    @if $pseudo {
        &:before {
            @include pseudo($pos: relative);
            width: 100%;
            padding-top: $padding;
        }
    } @else {
        padding-top: $padding;
    }
}
```

### Triangles

This mixin takes all the hassle out of creating that triangle you'll see coming out of most traditional tooltips, all without images, you just specify it's colour, how big you want it, the direction it's going to come out of your element and you're done!

```
@mixin triangle($color, $direction, $size: 6px, $position: absolute, $round: false){
    @include pseudo($pos: $position);
    width: 0;
    height: 0;
    @if $round {
        border-radius: 3px;
    }
    @if $direction == down {
        border-left: $size solid transparent;
        border-right: $size solid transparent;
        border-top: $size solid $color;
        margin-top: 0 - round( $size / 2.5 );
    } @else if $direction == up {
        border-left: $size solid transparent;
        border-right: $size solid transparent;
        border-bottom: $size solid $color;
        margin-bottom: 0 - round( $size / 2.5 );
    } @else if $direction == right {
        border-top: $size solid transparent;
        border-bottom: $size solid transparent;
        border-left: $size solid $color;
        margin-right: -$size;
    } @else if  $direction == left {
        border-top: $size solid transparent;
        border-bottom: $size solid transparent;
        border-right: $size solid $color;
        margin-left: -$size;
    }
}
```

### Truncate

Adding Truncation to an element isn't as simple as it should be, although it is with this handy time saver, meaning when you include the mixin, you only have to specify your boundry with a max width value, happy days!

```
@mixin truncate($truncation-boundary) {
    max-width: $truncation-boundary;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
```

### Credits

* [Engage interactive](http://engageinteractive.co.uk/blog/top-10-scss-mixins);