<div class="row">
<div class="columns">
<div class="clearing-assembled"><div><a href="#" class="clearing-close">×</a><div class="visible-img" style="display: none"><div class="clearing-touch-label"></div><img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" alt=""><p class="clearing-caption"></p><a href="#" class="clearing-main-prev"><span></span></a><a href="#" class="clearing-main-next"><span></span></a></div><div class="carousel"><ul class="clearing-thumbs" data-clearing="">
  <li><a class="th" href="<?php echo URL; ?>public/images/examples/comet.jpg"><img data-caption="Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum." src="<?php echo URL; ?>public/images/examples/comet-th-sm.jpg"></a></li>
  <li><a class="th" href="<?php echo URL; ?>public/images/examples/earth.jpg"><img data-caption="Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum." src="<?php echo URL; ?>public/images/examples/earth-th-sm.jpg"></a></li>
  <li><a class="th" href="<?php echo URL; ?>public/images/examples/launch.jpg"><img data-caption="Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum." src="<?php echo URL; ?>public/images/examples/launch-th-sm.jpg"></a></li>
  <li><a class="th" href="<?php echo URL; ?>public/images/examples/satelite.jpg"><img data-caption="Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum." src="<?php echo URL; ?>public/images/examples/satelite-th-sm.jpg"></a></li>
  <li><a class="th" href="<?php echo URL; ?>public/images/examples/space.jpg"><img data-caption="Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum." src="<?php echo URL; ?>public/images/examples/space-th-sm.jpg"></a></li>
  <li><a class="th" href="<?php echo URL; ?>public/images/examples/spacewalk.jpg"><img data-caption="Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum." src="<?php echo URL; ?>public/images/examples/spacewalk-th-sm.jpg"></a></li>
</ul></div></div></div>

<hr>
<h2 id="build-your-clearing-lightbox">Build Your Clearing Lightbox</h2>
<p>There is only one way to build a Clearing lightbox, using our predefined class and data-attribute structure. We've made it really easy: gather some images, decide on their order, and put them into an ul with a <code>.clearing-thumbs</code> class. In order to get Clearing to build itself properly, you'll need to have JavaScript properly included. We outline <a href="#js">Clearing JS</a> a bit further down the page.</p>
<p>Once you get your JS hooked up, you'll need to add <code>data-clearing</code> to your list container. Here's an example of the most basic markup needed:</p>
<h4>HTML</h4>

<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">ul</span> <span class="attribute">class</span>=<span class="value">"clearing-thumbs"</span> <span class="attribute">data-clearing</span>&gt;</span>
  <span class="tag">&lt;<span class="title">li</span>&gt;</span><span class="tag">&lt;<span class="title">a</span> <span class="attribute">href</span>=<span class="value">"path/to/your/img"</span>&gt;</span><span class="tag">&lt;<span class="title">img</span> <span class="attribute">src</span>=<span class="value">"path/to/your/img-th"</span>&gt;</span><span class="tag">&lt;/<span class="title">a</span>&gt;</span><span class="tag">&lt;/<span class="title">li</span>&gt;</span>
  <span class="tag">&lt;<span class="title">li</span>&gt;</span><span class="tag">&lt;<span class="title">a</span> <span class="attribute">href</span>=<span class="value">"path/to/your/img"</span>&gt;</span><span class="tag">&lt;<span class="title">img</span> <span class="attribute">src</span>=<span class="value">"path/to/your/img-th"</span>&gt;</span><span class="tag">&lt;/<span class="title">a</span>&gt;</span><span class="tag">&lt;/<span class="title">li</span>&gt;</span>
  <span class="tag">&lt;<span class="title">li</span>&gt;</span><span class="tag">&lt;<span class="title">a</span> <span class="attribute">href</span>=<span class="value">"path/to/your/img"</span>&gt;</span><span class="tag">&lt;<span class="title">img</span> <span class="attribute">src</span>=<span class="value">"path/to/your/img-th"</span>&gt;</span><span class="tag">&lt;/<span class="title">a</span>&gt;</span><span class="tag">&lt;/<span class="title">li</span>&gt;</span>
<span class="tag">&lt;/<span class="title">ul</span>&gt;</span></div></code></pre>


<h3 id="styling-the-list">Styling the List</h3>
<p>We're using the <code>.th</code> class from Foundation to style the thumbnails in the Clearing example at the top of the page. You can also use <code>@include thumb;</code> in SCSS to use those same styles.</p>
<hr>
<h2 id="start-from-a-featured-image">Start From a Featured Image</h2>
<p>Sometimes you don't want to show a gallery full of images on your site, but you want to open the gallery from a single image. By including all of your images in a <code>.clearing-feature</code> list and using <code>.clearing-featured-img</code> on the <code>&lt;li&gt;</code> of your choice, you'll be able to hide the rest of the images in the on-page gallery. If you want to show more than one, try using our <code>.hide</code> class to set the ones you don't want to <code>display: none;</code>.</p>
<h4>HTML</h4>

<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">ul</span> <span class="attribute">class</span>=<span class="value">"clearing-thumbs clearing-feature"</span> <span class="attribute">data-clearing</span>&gt;</span>
  <span class="tag">&lt;<span class="title">li</span>&gt;</span><span class="tag">&lt;<span class="title">a</span> <span class="attribute">href</span>=<span class="value">"path/to/your/img"</span>&gt;</span><span class="tag">&lt;<span class="title">img</span> <span class="attribute">src</span>=<span class="value">"path/to/your/img-th"</span>&gt;</span><span class="tag">&lt;/<span class="title">a</span>&gt;</span><span class="tag">&lt;/<span class="title">li</span>&gt;</span>
  <span class="tag">&lt;<span class="title">li</span> <span class="attribute">class</span>=<span class="value">"clearing-featured-img"</span>&gt;</span><span class="tag">&lt;<span class="title">a</span> <span class="attribute">href</span>=<span class="value">"path/to/your/img"</span>&gt;</span><span class="tag">&lt;<span class="title">img</span> <span class="attribute">src</span>=<span class="value">"path/to/your/img-th"</span>&gt;</span><span class="tag">&lt;/<span class="title">a</span>&gt;</span><span class="tag">&lt;/<span class="title">li</span>&gt;</span>
  <span class="tag">&lt;<span class="title">li</span>&gt;</span><span class="tag">&lt;<span class="title">a</span> <span class="attribute">href</span>=<span class="value">"path/to/your/img"</span>&gt;</span><span class="tag">&lt;<span class="title">img</span> <span class="attribute">src</span>=<span class="value">"path/to/your/img-th"</span>&gt;</span><span class="tag">&lt;/<span class="title">a</span>&gt;</span><span class="tag">&lt;/<span class="title">li</span>&gt;</span>
<span class="tag">&lt;/<span class="title">ul</span>&gt;</span></div></code></pre>


<div class="clearing-assembled"><div><a href="#" class="clearing-close">×</a><div class="visible-img" style="display: none"><div class="clearing-touch-label"></div><img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" alt=""><p class="clearing-caption"></p><a href="#" class="clearing-main-prev"><span></span></a><a href="#" class="clearing-main-next"><span></span></a></div><div class="carousel"><ul class="clearing-thumbs clearing-feature" data-clearing="">
  <li><a class="th" href="<?php echo URL; ?>public/images/examples/comet.jpg"><img data-caption="caption here..." src="<?php echo URL; ?>public/images/examples/comet-th-sm.jpg"></a></li>
  <li class="clearing-featured-img"><a class="th" href="<?php echo URL; ?>public/images/examples/space.jpg"><img data-caption="caption 2 here..." src="<?php echo URL; ?>public/images/examples/space-th-sm.jpg"></a></li>
  <li><a class="th" href="<?php echo URL; ?>public/images/examples/earth.jpg"><img data-caption="caption 3 here..." src="<?php echo URL; ?>public/images/examples/earth-th-sm.jpg"></a></li>
</ul></div></div></div>

<hr>
<h2 id="including-captions">Including Captions</h2>
<p>Another common use-case for Lightboxes is to include a caption per image. We've made this quick and easy by using data-attributes to hold the content. You'll just attach this attribute to the image it belongs to and voila! Here's the code example:</p>
<p><strong>Note:</strong> You can now use HTML inside the data-caption attribute.</p>
<h4>HTML</h4>

<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">ul</span> <span class="attribute">class</span>=<span class="value">"clearing-thumbs small-block-grid-4"</span> <span class="attribute">data-clearing</span>&gt;</span>
  <span class="tag">&lt;<span class="title">li</span>&gt;</span><span class="tag">&lt;<span class="title">a</span> <span class="attribute">href</span>=<span class="value">"path/to/your/img"</span>&gt;</span><span class="tag">&lt;<span class="title">img</span> <span class="attribute">data-caption</span>=<span class="value">"caption here..."</span> <span class="attribute">src</span>=<span class="value">"path/to/your/img-th"</span>&gt;</span><span class="tag">&lt;/<span class="title">a</span>&gt;</span><span class="tag">&lt;/<span class="title">li</span>&gt;</span>
  <span class="tag">&lt;<span class="title">li</span>&gt;</span><span class="tag">&lt;<span class="title">a</span> <span class="attribute">href</span>=<span class="value">"path/to/your/img"</span>&gt;</span><span class="tag">&lt;<span class="title">img</span> <span class="attribute">data-caption</span>=<span class="value">"caption 2 here..."</span> <span class="attribute">src</span>=<span class="value">"path/to/your/img-th"</span>&gt;</span><span class="tag">&lt;/<span class="title">a</span>&gt;</span><span class="tag">&lt;/<span class="title">li</span>&gt;</span>
  <span class="tag">&lt;<span class="title">li</span>&gt;</span><span class="tag">&lt;<span class="title">a</span> <span class="attribute">href</span>=<span class="value">"path/to/your/img"</span>&gt;</span><span class="tag">&lt;<span class="title">img</span> <span class="attribute">data-caption</span>=<span class="value">"caption 3 here..."</span> <span class="attribute">src</span>=<span class="value">"path/to/your/img-th"</span>&gt;</span><span class="tag">&lt;/<span class="title">a</span>&gt;</span><span class="tag">&lt;/<span class="title">li</span>&gt;</span>
<span class="tag">&lt;/<span class="title">ul</span>&gt;</span></div></code></pre>


<div class="clearing-assembled"><div><a href="#" class="clearing-close">×</a><div class="visible-img" style="display: none"><div class="clearing-touch-label"></div><img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" alt=""><p class="clearing-caption"></p><a href="#" class="clearing-main-prev"><span></span></a><a href="#" class="clearing-main-next"><span></span></a></div><div class="carousel"><ul class="clearing-thumbs small-block-grid-4" data-clearing="">
  <li><a class="th" href="<?php echo URL; ?>public/images/examples/comet.jpg"><img data-caption="caption here..." src="<?php echo URL; ?>public/images/examples/comet-th.jpg"></a></li>
  <li><a class="th" href="<?php echo URL; ?>public/images/examples/space.jpg"><img data-caption="caption 2 here..." src="<?php echo URL; ?>public/images/examples/space-th.jpg"></a></li>
  <li><a class="th" href="<?php echo URL; ?>public/images/examples/earth.jpg"><img data-caption="caption 3 here..." src="<?php echo URL; ?>public/images/examples/earth-th.jpg"></a></li>
  <li><a class="th" href="<?php echo URL; ?>public/images/examples/space.jpg"><img data-caption="caption 2 here..." src="<?php echo URL; ?>public/images/examples/space-th.jpg"></a></li>
  <li><a class="th" href="<?php echo URL; ?>public/images/examples/earth.jpg"><img data-caption="caption 3 here..." src="<?php echo URL; ?>public/images/examples/earth-th.jpg"></a></li>
</ul></div></div></div>

<hr>
<h2 id="available-scss-variables">Available SCSS Variables</h2>
<p>We opted not to create mixins for this plugin because it relies on classes in the JS to work. These variables should give you the control you need to change styles as you see fit:</p>
<h4>SCSS</h4>

<pre><code class="language-scss"><div class="code-container">$include-<span class="tag">html</span>-clearing-classes<span class="value">: $include-html-classes;</span>

<span class="comment">// We use these to set the background colors for parts of Clearing.</span>
$clearing-bg<span class="value">: <span class="hexcolor">#111</span>;</span>
$clearing-<span class="tag">caption</span>-bg<span class="value">: $clearing-bg;</span>
$clearing-carousel-bg<span class="value">: <span class="hexcolor">#111</span>;</span>
$clearing-<span class="tag">img</span>-bg<span class="value">: $clearing-bg;</span>

<span class="comment">// We use these to style the close button</span>
$clearing-close-<span class="attribute">color</span><span class="value">: <span class="hexcolor">#fff</span>;</span>
$clearing-close-size<span class="value">: <span class="number">40</span>px;</span>

<span class="comment">// We use these to style the arrows</span>
$clearing-arrow-size<span class="value">: <span class="number">16</span>px;</span>
$clearing-arrow-<span class="attribute">color</span><span class="value">: $clearing-close-color;</span>

<span class="comment">// We use these to style captions</span>
$clearing-<span class="tag">caption</span>-<span class="attribute">font</span>-<span class="attribute">color</span><span class="value">: <span class="hexcolor">#fff</span>;</span>
$clearing-<span class="tag">caption</span>-<span class="attribute">padding</span><span class="value">: <span class="number">10</span>px <span class="number">30</span>px;</span>

<span class="comment">// We use these to make the image and carousel height and style</span>
$clearing-active-<span class="tag">img</span>-<span class="attribute">height</span><span class="value">: <span class="number">75</span>%;</span>
$clearing-carousel-<span class="attribute">height</span><span class="value">: <span class="number">150</span>px;</span>
$clearing-carousel-thumb-<span class="attribute">width</span><span class="value">: <span class="number">175</span>px;</span>
$clearing-carousel-thumb-active-<span class="attribute">border</span><span class="value">: <span class="number">4</span>px solid rgb(<span class="number">255</span>,<span class="number">255</span>,<span class="number">255</span>);</span></div></code></pre>


<hr>
<h2 id="using-the-javascript">Using the Javascript</h2>
<div class="panel">
  Before you can use Clearing you'll want to verify that jQuery and <code>foundation.js</code> are available on your page. You can refer to the <a href="../javascript.html">Javascript documentation</a> on setting that up.
</div>

<p>Just add <code>foundation.clearing.js</code> AFTER the <code>foundation.js</code> file. Your markup should look something like this:</p>
<h4>HTML</h4>

<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">body</span>&gt;</span>

  ...

  <span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">"js/vendor/jquery.js"</span>&gt;</span><span class="javascript"></span><span class="tag">&lt;/<span class="title">script</span>&gt;</span>
  <span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">"js/foundation/foundation.js"</span>&gt;</span><span class="javascript"></span><span class="tag">&lt;/<span class="title">script</span>&gt;</span>
  <span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">"js/foundation/foundation.clearing.js"</span>&gt;</span><span class="javascript"></span><span class="tag">&lt;/<span class="title">script</span>&gt;</span>
  <span class="comment">&lt;!-- Other JS plugins can be included here --&gt;</span>

  <span class="tag">&lt;<span class="title">script</span>&gt;</span><span class="javascript">
    $(document).foundation();
  </span><span class="tag">&lt;/<span class="title">script</span>&gt;</span>

<span class="tag">&lt;/<span class="title">body</span>&gt;</span></div></code></pre>


<p>Required Foundation Library: <code>foundation.clearing.js</code></p>
<h3 id="optional-javascript-configuration">Optional Javascript Configuration</h3>
<p>Clearing supports <code>data-options</code> on-the-fly configuration:</p>
<h4>JS</h4>

<pre><code class="language-javascript"><div class="code-container">{
  <span class="comment">// specify the classes or IDs will close clearing when clicked.</span>
  close_selectors : <span class="string">'.clearing-close'</span>,
  touch_label : <span class="string">'&amp;larr;&amp;nbsp;Swipe to Advance&amp;nbsp;&amp;rarr;'</span>
}</div></code></pre>


<hr>
<h3 id="sass-errors-">Sass Errors?</h3>
<p>If the default "foundation" import was commented out, then make sure you import this file:</p>
<h4>SCSS</h4>

<pre><code class="language-scss"><div class="code-container"><span class="at_rule">@<span class="keyword">import</span> <span class="string">"foundation/components/clearing"</span>;</span></div></code></pre>



            </div>
</div>