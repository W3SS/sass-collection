<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sass Collection</title>
	<link type="text/css" rel="stylesheet" href="./assets/css/sample.css">
	<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
	<script src="./assets/js/sample.js"></script>
</head>
<body>

	<div id="wrapper">

		<header>
			<div class="container">
				<h1>Sass Collection</h1>
			</div>
		</header>
		
		<section class="section colors">
			<div class="container">
				
				<h3>Colors</h3>
				
				<div class="colors-box">
					<div class="row">
						<div class="col-lg-3"><button class="social-color facebook">facebook</button></div>
						<div class="col-lg-3"><button class="social-color twitter">twitter</button></div>
						<div class="col-lg-3"><button class="social-color google_plus">google_plus</button></div>
						<div class="col-lg-3"><button class="social-color youtube">youtube</button></div>
						<div class="col-lg-3"><button class="social-color linkedin">linkedin</button></div>
						<div class="col-lg-3"><button class="social-color instagram">instagram</button></div>
						<div class="col-lg-3"><button class="social-color pinterest">pinterest</button></div>
						<div class="col-lg-3"><button class="social-color vine">vine</button></div>
						<div class="col-lg-3"><button class="social-color snapchat">snapchat</button></div>
						<div class="col-lg-3"><button class="social-color quora">quora</button></div>
						<div class="col-lg-3"><button class="social-color flikr">flikr</button></div>
						<div class="col-lg-3"><button class="social-color tumblr">tumblr</button></div>
						<div class="col-lg-3"><button class="social-color vk">vk</button></div>
						<div class="col-lg-3"><button class="social-color vimeo">vimeo</button></div>
						<div class="col-lg-3"><button class="social-color foursquare">foursquare</button></div>
						<div class="col-lg-3"><button class="social-color whatsapp">whatsapp</button></div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
<!-- pre -->
<pre class="prettyprint lang-css">$color_facebook     : #3b5998;
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
$color_whatsapp     : #4dc247;</pre>
<!-- //pre -->	
					</div>
				</div>
			</div>
		</section>

		<!-- Placeholder -->

		<section class="section mixins">
			<div class="container">
				<h3>Placeholder</h3>
				<p>They're a pain as you have to set the style in all the separate formats, this sorts it </p>
<pre class="prettyprint lang-css">@mixin input-placeholder {
    &.placeholder { @content; }
    &:-moz-placeholder { @content; }
    &::-moz-placeholder { @content; }
    &:-ms-input-placeholder { @content; }
    &::-webkit-input-placeholder { @content; }
}</pre>
			</div>
		</section>

		<!-- Pseudo -->

		<section class="section mixins">
			<div class="container">
				<h3>Pseudo</h3>
				<p>When using ::before and ::after you'll always need these three, so we're saving two lines of code every time you use this.</p>
<pre class="prettyprint lang-css">@mixin pseudo($display: block, $pos: absolute, $content: ''){
    content: $content;
    display: $display;
    position: $pos;
}</pre>
			</div>
		</section>

		<!-- Responsive ratio -->

		<section class="section mixins">
			<div class="container">
				<h3>Responsive ratio</h3>
				<p>We use this for creating scalable elements (usually images / background images) that maintain a ratio.</p>
<pre class="prettyprint lang-css">@mixin ratio($x,$y, $pseudo: false) {
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
}</pre>
			</div>
		</section>

		<!-- Triangles -->

		<section class="section mixins">
			<div class="container">
				<h3>Triangles</h3>
				<p>This mixin takes all the hassle out of creating that triangle you'll see coming out of most traditional tooltips, all without images, you just specify it's colour, how big you want it, the direction it's going to come out of your element and you're done!</p>
<pre class="prettyprint lang-css">@mixin triangle($color, $direction, $size: 6px, $position: absolute, $round: false){
    content: '';
    display: block;
    position: absolute;
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
}</pre>
			</div>
		</section>

	</div>
</body>
</html>