<div class="row">
<div class="columns">

<div class="orbit-container"><ul class="example-orbit orbit-slides-container slide swipe-next" data-orbit="" style="height: 275px;">
  <li style="" class="active">
    <img src="<?php echo URL; ?>public/images/examples/satelite-orbit.jpg" alt="slide 1">
    <div class="orbit-caption">
      Caption One.
    </div>
  </li>
  <li class="" style="">
    <img src="<?php echo URL; ?>public/images/examples/andromeda-orbit.jpg" alt="slide 2">
    <div class="orbit-caption">
      Caption Two.
    </div>
  </li>
  <li style="" class="">
    <img src="<?php echo URL; ?>public/images/examples/launch-orbit.jpg" alt="slide 3">
    <div class="orbit-caption">
      Caption Three.
    </div>
  </li>
</ul><a href="#" class="orbit-prev"><span></span></a><a href="#" class="orbit-next"><span></span></a><div class="orbit-timer paused"><span></span><div class="orbit-progress" style="width: 62.8%;"></div></div><div class="orbit-slide-number"><span>1</span> of <span>3</span></div><div class="orbit-bullets-container"><ol class="orbit-bullets"><li data-orbit-slide="0" class="active"></li><li data-orbit-slide="1" class=""></li><li data-orbit-slide="2" class=""></li></ol></div></div>


<hr>
<p><a name="setup"></a></p>
<h2 id="how-to-setup-orbit">How to Setup the Slideshow</h2>
<p>Our Javascript takes care of most of the heavy lifting for you. The only thing you need to do is add a  <code>&lt;ul data-orbit&gt;&lt;/ul&gt;</code> element to your page. You can then populate it with images, text, and captions. Here's the markup required to implement a basic slider on your page:</p>
<h4>HTML</h4>

<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">ul</span> <span class="attribute">class</span>=<span class="value">"example-orbit"</span> <span class="attribute">data-orbit</span>&gt;</span>
  <span class="tag">&lt;<span class="title">li</span>&gt;</span>
    <span class="tag">&lt;<span class="title">img</span> <span class="attribute">src</span>=<span class="value">"<?php echo URL; ?>public/images/examples/satelite-orbit.jpg"</span> <span class="attribute">alt</span>=<span class="value">"slide 1"</span> /&gt;</span>
    <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"orbit-caption"</span>&gt;</span>
      Caption One.
    <span class="tag">&lt;/<span class="title">div</span>&gt;</span>
  <span class="tag">&lt;/<span class="title">li</span>&gt;</span>
  <span class="tag">&lt;<span class="title">li</span> <span class="attribute">class</span>=<span class="value">"active"</span>&gt;</span>
    <span class="tag">&lt;<span class="title">img</span> <span class="attribute">src</span>=<span class="value">"<?php echo URL; ?>public/images/examples/andromeda-orbit.jpg"</span> <span class="attribute">alt</span>=<span class="value">"slide 2"</span> /&gt;</span>
    <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"orbit-caption"</span>&gt;</span>
      Caption Two.
    <span class="tag">&lt;/<span class="title">div</span>&gt;</span>
  <span class="tag">&lt;/<span class="title">li</span>&gt;</span>
  <span class="tag">&lt;<span class="title">li</span>&gt;</span>
    <span class="tag">&lt;<span class="title">img</span> <span class="attribute">src</span>=<span class="value">"<?php echo URL; ?>public/images/examples/launch-orbit.jpg"</span> <span class="attribute">alt</span>=<span class="value">"slide 3"</span> /&gt;</span>
    <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"orbit-caption"</span>&gt;</span>
      Caption Three.
    <span class="tag">&lt;/<span class="title">div</span>&gt;</span>
  <span class="tag">&lt;/<span class="title">li</span>&gt;</span>
<span class="tag">&lt;/<span class="title">ul</span>&gt;</span></div></code></pre>


<h4>Rendered HTML</h4>

<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"orbit-container"</span>&gt;</span>
  <span class="tag">&lt;<span class="title">ul</span> <span class="attribute">data-orbit</span> <span class="attribute">class</span>=<span class="value">"example-orbit orbit-slides-container"</span>&gt;</span>
    <span class="tag">&lt;<span class="title">li</span>&gt;</span>
      <span class="tag">&lt;<span class="title">img</span> <span class="attribute">src</span>=<span class="value">"<?php echo URL; ?>public/images/examples/satelite-orbit.jpg"</span> <span class="attribute">alt</span>=<span class="value">"slide 1"</span> /&gt;</span>
      <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"orbit-caption"</span>&gt;</span>
        Caption One.
      <span class="tag">&lt;/<span class="title">div</span>&gt;</span>
    <span class="tag">&lt;/<span class="title">li</span>&gt;</span>
    <span class="tag">&lt;<span class="title">li</span> <span class="attribute">class</span>=<span class="value">"active"</span>&gt;</span>
      <span class="tag">&lt;<span class="title">img</span> <span class="attribute">src</span>=<span class="value">"<?php echo URL; ?>public/images/examples/andromeda-orbit.jpg"</span> <span class="attribute">alt</span>=<span class="value">"slide 1"</span> /&gt;</span>
      <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"orbit-caption"</span>&gt;</span>
        Caption Two.
      <span class="tag">&lt;/<span class="title">div</span>&gt;</span>
    <span class="tag">&lt;/<span class="title">li</span>&gt;</span>
    <span class="tag">&lt;<span class="title">li</span>&gt;</span>
      <span class="tag">&lt;<span class="title">img</span> <span class="attribute">src</span>=<span class="value">"<?php echo URL; ?>public/images/examples/launch-orbit.jpg"</span> <span class="attribute">alt</span>=<span class="value">"slide 1"</span> /&gt;</span>
      <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"orbit-caption"</span>&gt;</span>
        Caption Three.
      <span class="tag">&lt;/<span class="title">div</span>&gt;</span>
    <span class="tag">&lt;/<span class="title">li</span>&gt;</span>
  <span class="tag">&lt;/<span class="title">ul</span>&gt;</span>

  <span class="comment">&lt;!-- Navigation Arrows --&gt;</span>
  <span class="tag">&lt;<span class="title">a</span> <span class="attribute">href</span>=<span class="value">"#"</span> <span class="attribute">class</span>=<span class="value">"orbit-prev"</span>&gt;</span>Prev <span class="tag">&lt;<span class="title">span</span>&gt;</span><span class="tag">&lt;/<span class="title">span</span>&gt;</span><span class="tag">&lt;/<span class="title">a</span>&gt;</span>
  <span class="tag">&lt;<span class="title">a</span> <span class="attribute">href</span>=<span class="value">"#"</span> <span class="attribute">class</span>=<span class="value">"orbit-next"</span>&gt;</span>Next <span class="tag">&lt;<span class="title">span</span>&gt;</span><span class="tag">&lt;/<span class="title">span</span>&gt;</span><span class="tag">&lt;/<span class="title">a</span>&gt;</span>

  <span class="comment">&lt;!-- Slide Numbers --&gt;</span>
  <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"orbit-slide-number"</span>&gt;</span>
    <span class="tag">&lt;<span class="title">span</span>&gt;</span>1<span class="tag">&lt;/<span class="title">span</span>&gt;</span> of <span class="tag">&lt;<span class="title">span</span>&gt;</span>3<span class="tag">&lt;/<span class="title">span</span>&gt;</span>
  <span class="tag">&lt;/<span class="title">div</span>&gt;</span>

  <span class="comment">&lt;!-- Timer and Play/Pause Button --&gt;</span>
  <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"orbit-timer"</span>&gt;</span>
    <span class="tag">&lt;<span class="title">span</span>&gt;</span><span class="tag">&lt;/<span class="title">span</span>&gt;</span>
    <span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"orbit-progress"</span>&gt;</span><span class="tag">&lt;/<span class="title">div</span>&gt;</span>
  <span class="tag">&lt;/<span class="title">div</span>&gt;</span>
<span class="tag">&lt;/<span class="title">div</span>&gt;</span>

<span class="comment">&lt;!-- Bullets --&gt;</span>
<span class="tag">&lt;<span class="title">ol</span> <span class="attribute">class</span>=<span class="value">"orbit-bullets"</span>&gt;</span>
  <span class="tag">&lt;<span class="title">li</span> <span class="attribute">data-orbit-slide-number</span>=<span class="value">"1"</span>&gt;</span><span class="tag">&lt;/<span class="title">li</span>&gt;</span>
  <span class="tag">&lt;<span class="title">li</span> <span class="attribute">data-orbit-slide-number</span>=<span class="value">"2"</span> <span class="attribute">class</span>=<span class="value">"active"</span>&gt;</span><span class="tag">&lt;/<span class="title">li</span>&gt;</span>
  <span class="tag">&lt;<span class="title">li</span> <span class="attribute">data-orbit-slide-number</span>=<span class="value">"3"</span>&gt;</span><span class="tag">&lt;/<span class="title">li</span>&gt;</span>
<span class="tag">&lt;/<span class="title">ol</span>&gt;</span></div></code></pre>


<hr>
<h2 id="content-sliders">Content Sliders</h2>
<p>Orbit can also be used with just content and no images.</p>
<div class="row">
  <div class="large-6 columns">
    <h4>HTML</h4>
<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">ul</span> <span class="attribute">class</span>=<span class="value">"example-orbit-content"</span> <span class="attribute">data-orbit</span>&gt;</span>
  <span class="tag">&lt;<span class="title">li</span> <span class="attribute">data-orbit-slide</span>=<span class="value">"headline-1"</span>&gt;</span>
    <span class="tag">&lt;<span class="title">div</span>&gt;</span>
      <span class="tag">&lt;<span class="title">h2</span>&gt;</span>Headline 1<span class="tag">&lt;/<span class="title">h2</span>&gt;</span>
      <span class="tag">&lt;<span class="title">h3</span>&gt;</span>Subheadline<span class="tag">&lt;/<span class="title">h3</span>&gt;</span>
    <span class="tag">&lt;/<span class="title">div</span>&gt;</span>
  <span class="tag">&lt;/<span class="title">li</span>&gt;</span>
  <span class="tag">&lt;<span class="title">li</span> <span class="attribute">data-orbit-slide</span>=<span class="value">"headline-2"</span>&gt;</span>
    <span class="tag">&lt;<span class="title">div</span>&gt;</span>
      <span class="tag">&lt;<span class="title">h2</span>&gt;</span>Headline 2<span class="tag">&lt;/<span class="title">h2</span>&gt;</span>
      <span class="tag">&lt;<span class="title">h3</span>&gt;</span>Subheadline<span class="tag">&lt;/<span class="title">h3</span>&gt;</span>
    <span class="tag">&lt;/<span class="title">div</span>&gt;</span>
  <span class="tag">&lt;/<span class="title">li</span>&gt;</span>
  <span class="tag">&lt;<span class="title">li</span> <span class="attribute">data-orbit-slide</span>=<span class="value">"headline-3"</span>&gt;</span>
    <span class="tag">&lt;<span class="title">div</span>&gt;</span>
      <span class="tag">&lt;<span class="title">h2</span>&gt;</span>Headline 3<span class="tag">&lt;/<span class="title">h2</span>&gt;</span>
      <span class="tag">&lt;<span class="title">h3</span>&gt;</span>Subheadline<span class="tag">&lt;/<span class="title">h3</span>&gt;</span>
    <span class="tag">&lt;/<span class="title">div</span>&gt;</span>
  <span class="tag">&lt;/<span class="title">li</span>&gt;</span>
<span class="tag">&lt;/<span class="title">ul</span>&gt;</span></div></code></pre>

  </div>
  <div class="large-6 columns">
    <h4>Rendered HTML</h4>
    <div class="orbit-container"><ul class="example-orbit-content orbit-slides-container slide swipe-next" data-orbit="" style="height: 158px;">
  <li data-orbit-slide="headline-1" class="active" style="">
    <div>
      <h2>Headline 1</h2>
      <h3>Subheadline</h3>
    </div>
  </li>
  <li data-orbit-slide="headline-2" style="" class="">
    <div>
      <h2>Headline 2</h2>
      <h3>Subheadline</h3>
    </div>
  </li>
  <li data-orbit-slide="headline-3" style="" class="">
    <div>
      <h2>Headline 3</h2>
      <h3>Subheadline</h3>
    </div>
  </li>
</ul><a href="#" class="orbit-prev"><span></span></a><a href="#" class="orbit-next"><span></span></a><div class="orbit-timer"><span></span><div class="orbit-progress" style="overflow: hidden; width: 60.699999999999996%;"></div></div><div class="orbit-slide-number"><span>1</span> of <span>3</span></div><div class="orbit-bullets-container"><ol class="orbit-bullets"><li data-orbit-slide="0" class="active"></li><li data-orbit-slide="1" class=""></li><li data-orbit-slide="2" class=""></li></ol></div></div>
  </div>
</div>

<hr>
<h2 id="deep-linking">Deep Linking</h2>
<p>To link to a particular slide in your Orbit slider you will need to add a  <code>data-orbit-slide</code> attribute to each slide. Then anywhere on your page you can use <code>data-orbit-link</code> to link to that slide.</p>
<div class="row">
  <div class="large-6 columns">
    <h4>HTML</h4>
<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">a</span> <span class="attribute">data-orbit-link</span>=<span class="value">"headline-1"</span> <span class="attribute">class</span>=<span class="value">"small button"</span>&gt;</span>
  Goto Slide 1
<span class="tag">&lt;/<span class="title">a</span>&gt;</span>
<span class="tag">&lt;<span class="title">a</span> <span class="attribute">data-orbit-link</span>=<span class="value">"headline-2"</span> <span class="attribute">class</span>=<span class="value">"small button"</span>&gt;</span>
  Goto Slide 2
<span class="tag">&lt;/<span class="title">a</span>&gt;</span>
<span class="tag">&lt;<span class="title">a</span> <span class="attribute">data-orbit-link</span>=<span class="value">"headline-3"</span> <span class="attribute">class</span>=<span class="value">"small button"</span>&gt;</span>
  Goto Slide 3
<span class="tag">&lt;/<span class="title">a</span>&gt;</span></div></code></pre>

  </div>
  <div class="large-6 columns">
    <h4>Rendered HTML</h4>
    <a class="small button active" data-orbit-link="headline-1">Goto Slide 1</a>
    <a class="small button" data-orbit-link="headline-2">Goto Slide 2</a>
    <a class="small button" data-orbit-link="headline-3">Goto Slide 3</a>
    <div class="orbit-container"><ul class="example-orbit-content orbit-slides-container slide swipe-next" data-orbit="" style="height: 158px;">
  <li data-orbit-slide="headline-1" class="active" style="">
    <div>
      <h2>Headline 1</h2>
      <h3>Subheadline</h3>
    </div>
  </li>
  <li data-orbit-slide="headline-2" style="" class="">
    <div>
      <h2>Headline 2</h2>
      <h3>Subheadline</h3>
    </div>
  </li>
  <li data-orbit-slide="headline-3" style="" class="">
    <div>
      <h2>Headline 3</h2>
      <h3>Subheadline</h3>
    </div>
  </li>
</ul><a href="#" class="orbit-prev"><span></span></a><a href="#" class="orbit-next"><span></span></a><div class="orbit-timer"><span></span><div class="orbit-progress" style="overflow: hidden; width: 60.699999999999996%;"></div></div><div class="orbit-slide-number"><span>1</span> of <span>3</span></div><div class="orbit-bullets-container"><ol class="orbit-bullets"><li data-orbit-slide="0" class="active"></li><li data-orbit-slide="1" class=""></li><li data-orbit-slide="2" class=""></li></ol></div></div>
  </div>
</div>

<hr>
<h2 id="customize-with-sass">Customize With Sass</h2>
  <div class="row">
    <section class="full-grid">
      <p>We've included a bunch of variables that you'll be able to use if you're into getting SASSy with things.</p>
<pre><code class="language-scss"><div class="code-container">$include-<span class="tag">html</span>-orbit-classes<span class="value">: $include-html-classes;</span>

<span class="comment">// We use these to control the caption styles</span>
$orbit-container-bg<span class="value">: <span class="hexcolor">#f5f5f5</span>;</span>
$orbit-<span class="tag">caption</span>-bg<span class="value">: rgba(<span class="number">0</span>,<span class="number">0</span>,<span class="number">0</span>,<span class="number">0.6</span>);</span>
$orbit-<span class="tag">caption</span>-<span class="attribute">font</span>-<span class="attribute">color</span><span class="value">: <span class="hexcolor">#fff</span>;</span>
$orbit-<span class="tag">caption</span>-<span class="attribute">font-size</span><span class="value">: emCalc(<span class="number">14</span>);</span>
$orbit-<span class="tag">caption</span>-<span class="attribute">position</span><span class="value">: <span class="string">"bottom"</span>;</span>    <span class="comment">// Supported values: "bottom", "under"</span>
$orbit-<span class="tag">caption</span>-<span class="attribute">padding</span><span class="value">: emCalc(<span class="number">10</span>,<span class="number">14</span>);</span>
$orbit-<span class="tag">caption</span>-<span class="attribute">height</span><span class="value">: auto;</span>

<span class="comment">// We use these to control the left/right nav styles</span>
$orbit-<span class="tag">nav</span>-bg<span class="value">: rgba(<span class="number">0</span>,<span class="number">0</span>,<span class="number">0</span>,<span class="number">0.6</span>);</span>
$orbit-<span class="tag">nav</span>-bg-hover<span class="value">: rgba(<span class="number">0</span>,<span class="number">0</span>,<span class="number">0</span>,<span class="number">0.6</span>);</span>
$orbit-<span class="tag">nav</span>-arrow-<span class="attribute">color</span><span class="value">: <span class="hexcolor">#fff</span>;</span>
$orbit-<span class="tag">nav</span>-arrow-<span class="attribute">color</span>-hover<span class="value">: <span class="hexcolor">#ccc</span>;</span>

<span class="comment">// We use these to control the timer styles</span>
$orbit-timer-bg<span class="value">: rgba(<span class="number">0</span>,<span class="number">0</span>,<span class="number">0</span>,<span class="number">0.6</span>);</span>
$orbit-timer-show-<span class="tag">progress</span>-bar<span class="value">: true;</span>

<span class="comment">// We use these to control the bullet nav styles</span>
$orbit-bullet-<span class="tag">nav</span>-<span class="attribute">color</span><span class="value">: <span class="hexcolor">#999</span>;</span>
$orbit-bullet-<span class="tag">nav</span>-<span class="attribute">color</span>-active<span class="value">: <span class="hexcolor">#222</span>;</span>
$orbit-bullet-radius<span class="value">: emCalc(<span class="number">18</span>);</span>

<span class="comment">// We use these to controls the style of slide numbers</span>
$orbit-slide-number-bg<span class="value">: rgba(<span class="number">0</span>,<span class="number">0</span>,<span class="number">0</span>,<span class="number">0</span>);</span>
$orbit-slide-number-<span class="attribute">font</span>-<span class="attribute">color</span><span class="value">: <span class="hexcolor">#fff</span>;</span>
$orbit-slide-number-<span class="attribute">padding</span><span class="value">: rem-calc(<span class="number">5</span>px);</span>

<span class="comment">// Graceful Loading Wrapper and preloader</span>
$wrapper-class<span class="value">: <span class="string">"slideshow-wrapper"</span>;</span>
$preloader-class<span class="value">: <span class="string">"preloader"</span>;</span></div></code></pre>

    </section>
  </div>

<hr>
<h2 id="configuring-orbit">Configuring Orbit</h2>
<p>It's easy to configure Orbit using our provided Javascript. You can use with data-attributes or plain old Javascript. Make sure <code>jquery.js</code>, <code>foundation.js</code>, and <code>foundation.orbit.js</code> have been included on your page before continuing. For example add the following before the closing <code>&lt;body&gt;</code> tag:</p>
<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">"js/jquery.js"</span>&gt;</span><span class="javascript"></span><span class="tag">&lt;/<span class="title">script</span>&gt;</span>
<span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">"js/foundation.js"</span>&gt;</span><span class="javascript"></span><span class="tag">&lt;/<span class="title">script</span>&gt;</span>
<span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">"js/foundation.orbit.js"</span>&gt;</span><span class="javascript"></span><span class="tag">&lt;/<span class="title">script</span>&gt;</span></div></code></pre>
<h3 id="basic">Basic</h3>
<p>Using data-attributes is the preferred method of making changes to our Javascript.</p>
<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">ul</span> <span class="attribute">data-orbit</span> <span class="attribute">data-options</span>=<span class="value">"animation_speed:1500;"</span>&gt;</span>
  ...
<span class="tag">&lt;/<span class="title">ul</span>&gt;</span></div></code></pre>
<h3 id="advanced">Advanced</h3>
<p>You can also adjust settings using plain old Javascript. Here's all the available settings:</p>
<h4 id="js">JS</h4>
<pre><code class="language-js"><div class="code-container">$(document).foundation({
  orbit: {
      animation: <span class="string">'slide'</span>, <span class="comment">// Sets the type of animation used for transitioning between slides, can also be 'fade'</span>
      timer_speed: <span class="number">10000</span>, <span class="comment">// Sets the amount of time in milliseconds before transitioning a slide</span>
      pause_on_hover: <span class="literal">true</span>, <span class="comment">// Pauses on the current slide while hovering</span>
      resume_on_mouseout: <span class="literal">false</span>, <span class="comment">// If pause on hover is set to true, this setting resumes playback after mousing out of slide</span>
      next_on_click: <span class="literal">true</span>, <span class="comment">// Advance to next slide on click</span>
      animation_speed: <span class="number">500</span>, <span class="comment">// Sets the amount of time in milliseconds the transition between slides will last</span>
      stack_on_small: <span class="literal">false</span>,
      navigation_arrows: <span class="literal">true</span>,
      slide_number: <span class="literal">true</span>,
      slide_number_text: <span class="string">'of'</span>,
      container_class: <span class="string">'orbit-container'</span>,
      stack_on_small_class: <span class="string">'orbit-stack-on-small'</span>,
      next_class: <span class="string">'orbit-next'</span>, <span class="comment">// Class name given to the next button</span>
      prev_class: <span class="string">'orbit-prev'</span>, <span class="comment">// Class name given to the previous button</span>
      timer_container_class: <span class="string">'orbit-timer'</span>, <span class="comment">// Class name given to the timer</span>
      timer_paused_class: <span class="string">'paused'</span>, <span class="comment">// Class name given to the paused button</span>
      timer_progress_class: <span class="string">'orbit-progress'</span>, <span class="comment">// Class name given to the progress bar</span>
      timer_show_progress_bar: <span class="literal">true</span>, <span class="comment">// If the progress bar should get shown (false skips computation)</span>
      slides_container_class: <span class="string">'orbit-slides-container'</span>, <span class="comment">// Class name given to the </span>
      bullets_container_class: <span class="string">'orbit-bullets'</span>,
      slide_selector: <span class="string">'li'</span>, <span class="comment">// Default is '*' which selects all children under the container</span>
      bullets_active_class: <span class="string">'active'</span>, <span class="comment">// Class name given to the active bullet</span>
      slide_number_class: <span class="string">'orbit-slide-number'</span>, <span class="comment">// Class name given to the slide number</span>
      caption_class: <span class="string">'orbit-caption'</span>, <span class="comment">// Class name given to the caption</span>
      active_slide_class: <span class="string">'active'</span>, <span class="comment">// Class name given to the active slide</span>
      orbit_transition_class: <span class="string">'orbit-transitioning'</span>,
      bullets: <span class="literal">true</span>, <span class="comment">// Does the slider have bullets visible?</span>
      circular: <span class="literal">true</span>, <span class="comment">// Does the slider should go to the first slide after showing the last?</span>
      timer: <span class="literal">true</span>, <span class="comment">// Does the slider have a timer active? Setting to false disables the timer.</span>
      variable_height: <span class="literal">false</span>, <span class="comment">// Does the slider have variable height content?</span>
      swipe: <span class="literal">true</span>,
      before_slide_change: noop, <span class="comment">// Execute a function before the slide changes</span>
      after_slide_change: noop <span class="comment">// Execute a function after the slide changes</span>
  }
});</div></code></pre>
<hr>
<h2 id="real-world-example">Real World Example</h2>
<h3 class="subheader">Here's an example of a customized Orbit container.</h3>

  <div class="row">
    <section class="large-6 columns">
      <h4 class="">Javascript</h4>
      <div class="code-container">

<pre><code class="language-js"><div class="code-container">$(document).foundation({
  orbit: {
    animation: <span class="string">'slide'</span>,
    timer_speed: <span class="number">1000</span>,
    pause_on_hover: <span class="literal">true</span>,
    animation_speed: <span class="number">500</span>,
    navigation_arrows: <span class="literal">true</span>,
    bullets: <span class="literal">false</span>
  }
});</div></code></pre>


      </div>
    </section>

    <section class="large-6 columns">
      <h4 class="">HTML</h4>
      <div class="options-code-container">
        <div class="code-container">
<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">ul</span> <span class="attribute">data-orbit</span>
    <span class="attribute">data-options</span>=<span class="value">"animation:slide;
                  pause_on_hover:true;
                  animation_speed:500;
                  navigation_arrows:true;
                  bullets:false;"</span>&gt;</span>
<span class="tag">&lt;/<span class="title">ul</span>&gt;</span></div></code></pre>

        </div>
      </div>
    </section>
  </div>
  <div class="row">
    <section class="full-grid">
      <div class="orbit-container"><ul data-orbit="" data-options="
        animation:slide;
        pause_on_hover:true;
        animation_speed:500;
        navigation_arrows:true;
        bullets:false;" class="orbit-slides-container slide swipe-next" style="height: 275px;">
        <li class="active" style=""><img src="<?php echo URL; ?>public/images/examples/andromeda-orbit.jpg" alt="slide 1"></li>
        <li style="" class=""><img src="<?php echo URL; ?>public/images/examples/satelite-orbit.jpg" alt="slide 2"></li>
        <li style="" class=""><img src="<?php echo URL; ?>public/images/examples/launch-orbit.jpg" alt="slide 3"></li>
      </ul><a href="#" class="orbit-prev"><span></span></a><a href="#" class="orbit-next"><span></span></a><div class="orbit-timer"><span></span><div class="orbit-progress" style="overflow: hidden; width: 60.699999999999996%;"></div></div><div class="orbit-slide-number"><span>1</span> of <span>3</span></div></div>
    </section>
  </div>

<hr>
<h2 id="events">Events</h2>
<p>There are several events that you can bind to in Orbit. Here's an example of how you can bind to these events:</p>
<h4 id="html">HTML</h4>
<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">ul</span> <span class="attribute">id</span>=<span class="value">"featured1"</span> <span class="attribute">data-orbit</span>&gt;</span>
  ...
<span class="tag">&lt;/<span class="title">ul</span>&gt;</span></div></code></pre>
<h4 id="js">JS</h4>
<pre><code class="language-js"><div class="code-container">$(<span class="string">"#featured1"</span>).on(<span class="string">"ready.fndtn.orbit"</span>, <span class="keyword">function</span>(event) {
  console.info(<span class="string">"ready"</span>);
});
$(<span class="string">"#featured1"</span>).on(<span class="string">"before-slide-change.fndtn.orbit"</span>, <span class="keyword">function</span>(event) {
  console.info(<span class="string">"before slide change"</span>);
});
$(<span class="string">"#featured1"</span>).on(<span class="string">"after-slide-change.fndtn.orbit"</span>, <span class="keyword">function</span>(event, orbit) {
  console.info(<span class="string">"after slide change"</span>);
  console.info(<span class="string">"slide "</span> + orbit.slide_number + <span class="string">" of "</span> + orbit.total_slides);
});
$(<span class="string">"#featured1"</span>).on(<span class="string">"timer-started.fndtn.orbit"</span>, <span class="keyword">function</span>(event, orbit) {
  console.info(<span class="string">"timer started"</span>);
});
$(<span class="string">"#featured1"</span>).on(<span class="string">"timer-stopped.fndtn.orbit"</span>, <span class="keyword">function</span>(event, orbit) {
  console.info(<span class="string">"timer stopped"</span>);
});</div></code></pre>
<hr>
<h3 id="sass-errors-">Sass Errors?</h3>
<p>If the default "foundation" import was commented out, then make sure you import this file:</p>
<h4>SCSS</h4>

<pre><code class="language-scss"><div class="code-container"><span class="at_rule">@<span class="keyword">import</span> <span class="string">"foundation/components/orbit"</span>;</span></div></code></pre>



            </div>
</div>