# sass-mixins

## Colors

### Social

```
$color_facebook     : #3b5998
$color_twitter      : #00aced
$color_google_plus  : #dd4b39
$color_youtube      : #bb0000
$color_linkedin     : #007bb6
$color_instagram    : #517fa4
$color_pinterest    : #cb2027
$color_vine         : #00bf8f
$color_snapchat     : #fffc00
$color_quora        : #a82400
$color_flikr        : #ff0084
$color_tumblr       : #32506d
$color_vk           : #45668e
$color_vimeo        : #aad450
$color_foursquare   : #0072b1
$color_whatsapp     : #4dc247

```

## Functions

### Pseudo

```
@mixin pseudo($display: block, $pos: absolute, $content: ''){
    content: $content;
    display: $display;
    position: $pos;
}
```

### Responsive ratio

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