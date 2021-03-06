<div class="row">
<div class="columns">

<h3 id="installation">Installation</h3>
<p>IQ Javascript was designed to work with <a href="http://jquery.com/" title="jQuery Docs">jQuery</a> right out of the gate. In the <code>&lt;head&gt;</code> section of your page add Modernizr. Modernizr acts as a shim for HTML5 elements that older browsers may not recognize, and provides detection for mobile devices.</p>
<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">"/js/vendor/modernizr.js"</span>&gt;</span><span class="javascript"></span><span class="tag">&lt;/<span class="title">script</span>&gt;</span></div></code></pre>
<p>Before the closing <code>body</code> tag, insert JQuery and FastClick.</p>
<h4>HTML</h4>

<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">"/js/vendor/jquery.js"</span>&gt;</span><span class="javascript"></span><span class="tag">&lt;/<span class="title">script</span>&gt;</span>
<span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">"/js/vendor/fastclick.js"</span>&gt;</span><span class="javascript"></span><span class="tag">&lt;/<span class="title">script</span>&gt;</span></div></code></pre>
<p>Then either load each plugin individually, or include <code>iq.min.js</code>, which automatically loads the Foundation Core and all Javascript plugins.</p>
<h4>HTML</h4>

<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">"/js/iq.min.js"</span>&gt;</span><span class="javascript"></span><span class="tag">&lt;/<span class="title">script</span>&gt;</span>

<span class="comment">&lt;!-- or individually --&gt;</span>

<span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">"/js/iq.js"</span>&gt;</span><span class="javascript"></span><span class="tag">&lt;/<span class="title">script</span>&gt;</span>
<span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">"/js/iq.alert.js"</span>&gt;</span><span class="javascript"></span><span class="tag">&lt;/<span class="title">script</span>&gt;</span>
<span class="comment">&lt;!-- ... --&gt;</span>
<span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">"/js/iq.dropdown.js"</span>&gt;</span><span class="javascript"></span><span class="tag">&lt;/<span class="title">script</span>&gt;</span>
<span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">"/js/iq.tab.js"</span>&gt;</span><span class="javascript"></span><span class="tag">&lt;/<span class="title">script</span>&gt;</span></div></code></pre>
<hr>
<h3 id="initialize-foundation">Initialize Foundation</h3>
<p>After you have included the Foundation Javascript, just add a simple call to initialize all plugins on your page.</p>
<p>We recommend that you initialize Foundation at the end of the page <code>&lt;body&gt;</code>.</p>
<h4>HTML</h4>

<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">script</span>&gt;</span><span class="javascript">
  $(document).foundation();
</span><span class="tag">&lt;/<span class="title">script</span>&gt;</span></div></code></pre>
<p><strong>Note:</strong> We include a tested version of jQuery in the Foundation repo to get you started quickly.</p>
<hr>
<h3 id="configuration">Configuration</h3>
<p>Foundation offers you options to customize plugin initialization. By default, calling <code>$('#scope').foundation();</code> will initialize all available plugins on the page. Alternatively, you can pass individual plugins along with configuration options and a callback. This way, you can select which plugins you want to customize, and which are fine by default. You can take a look at the call here:</p>
<pre><code class="language-js"><div class="code-container">$(document).foundation({tab: {toggleable: <span class="literal">false</span>}});</div></code></pre>
<p>The call will initialize all the plugins on the page and will configure tabs with <code>toggleable</code> enabled.</p>
<p>You can configure multiple libraries within the same call as well. Here are a few ways to make it happen:</p>
<h4>JS</h4>

<pre><code class="language-js"><div class="code-container">$(document).iq({
  reveal : {
    animation_speed: <span class="number">500</span>
  },
  tooltip : {
    disable_for_touch: <span class="literal">true</span>
  },
  topbar : {
    custom_back_text: <span class="literal">false</span>,
    is_hover: <span class="literal">false</span>,
    mobile_show_parent_link: <span class="literal">true</span>
  }
});</div></code></pre>
<p>The above will initialize all of the plugins with default settings as well as customized settings for <code>reveal</code>, <code>tooltip</code>, and <code>topbar</code>.</p>
<h4 id="dataOptions">Data Options</h4>

<p>Instead of passing the settings to the plugins using Javascript, you can pass them through the markup using <code>data-options</code>. To pass in an option, just place it in the <code>data-options</code> HTML attribute of the element the plugin is being called on. To pass in multiple options, format them as a semicolon-delimited list.</p>
<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">span</span> <span class="attribute">data-tooltip</span> <span class="attribute">data-options</span>=<span class="value">"disable_for_touch:true;touch_close_text:'close me'"</span> <span class="attribute">class</span>=<span class="value">"has-tip"</span> <span class="attribute">title</span>=<span class="value">"Tooltips are awesome!"</span>&gt;</span>Has Tooltip<span class="tag">&lt;/<span class="title">span</span>&gt;</span></div></code></pre>
<p>A chart of of all the available data-options is below.</p>
<div class="row">
  <div class="twelve columns">
    <table class="plugin-options">
  <tbody>
    <tr>
      <td rowspan="3">Abide</td>
      <td>live_validate</td>
      <td>true</td>
    </tr>
    <tr>
      <td>focus_on_invalid</td>
      <td>true</td>
    </tr>
    <tr>
      <td>error_labels</td>
      <td>true</td>
    </tr>
    <tr>
      <td>timeout</td>
      <td>1000</td>
    </tr>
    <tr>
      <td rowspan="2">Accordion</td>
      <td>active_class</td>
      <td>'active'</td>
    </tr>
    <tr>
      <td>toggleable</td>
      <td>true</td>
    </tr>
    <tr>
      <td rowspan="2">Clearing</td>
      <td>close_selectors</td>
      <td>'.clearing-close'</td>
    </tr>
    <tr>
      <td>touch_label</td>
      <td>'←&nbsp;Swipe to Advance&nbsp;→'</td>
    </tr>
    <tr>
      <td rowspan="2">Dropdown</td>
      <td>active_class</td>
      <td>'open'</td>
    </tr>
    <tr>
      <td>is_hover</td>
      <td>false</td>
    </tr>
    <tr>
      <td rowspan="1">Interchange</td>
      <td>load_attr</td>
      <td>'interchange'</td>
    </tr>
    <tr>
      <td rowspan="20">Joyride</td>
      <td>expose</td>
      <td>false</td>
    </tr>
    <tr>
      <td>modal</td>
      <td>true</td>
    </tr>
    <tr>
      <td>tip_location</td>
      <td>'bottom'</td>
    </tr>
    <tr>
      <td>nub_position</td>
      <td>'auto'</td>
    </tr>
    <tr>
      <td>scroll_speed</td>
      <td>1500</td>
    </tr>
    <tr>
      <td>scroll_animation</td>
      <td>'linear'</td>
    </tr>
    <tr>
      <td>timer</td>
      <td>0</td>
    </tr>
    <tr>
      <td>start_timer_on_click</td>
      <td>true</td>
    </tr>
    <tr>
      <td>start_offset</td>
      <td>0</td>
    </tr>
    <tr>
      <td>next_button</td>
      <td>true</td>
    </tr>
    <tr>
      <td>tip_animation</td>
      <td>'fade'</td>
    </tr>
    <tr>
      <td>pause_after</td>
      <td>[]</td>
    </tr>
    <tr>
      <td>exposed</td>
      <td>[]</td>
    </tr>
    <tr>
      <td>tip_animation_fade_speed</td>
      <td>300</td>
    </tr>
    <tr>
      <td>cookie_monster</td>
      <td>false</td>
    </tr>
    <tr>
      <td>cookie_name</td>
      <td>'joyride'</td>
    </tr>
    <tr>
      <td>cookie_domain</td>
      <td>false</td>
    </tr>
    <tr>
      <td>cookie_expires</td>
      <td>365</td>
    </tr>
    <tr>
      <td>tip_container</td>
      <td>'body'</td>
    </tr>
    <tr>
      <td>expose_add_class</td>
      <td>''</td>
    </tr>
    <tr>
      <td rowspan="4">Magellan</td>
      <td>active_class</td>
      <td>'active'</td>
    </tr>
    <tr>
      <td>threshold</td>
      <td>0</td>
    </tr>
    <tr>
      <td>destination_threshold</td>
      <td>20</td>
    </tr>
    <tr>
      <td>throttle_delay</td>
      <td>50</td>
    </tr>
    <tr>
      <td rowspan="29">Orbit</td>
      <td>animation</td>
      <td>'slide'</td>
    </tr>
    <tr>
      <td>timer_speed</td>
      <td>10000</td>
    </tr>
    <tr>
      <td>pause_on_hover</td>
      <td>true</td>
    </tr>
    <tr>
      <td>resume_on_mouseout</td>
      <td>false</td>
    </tr>
    <tr>
      <td>animation_speed</td>
      <td>500</td>
    </tr>
    <tr>
      <td>stack_on_small</td>
      <td>false</td>
    </tr>
    <tr>
      <td>navigation_arrows</td>
      <td>true</td>
    </tr>
    <tr>
      <td>slide_number</td>
      <td>true</td>
    </tr>
    <tr>
      <td>slide_number_text</td>
      <td>'of'</td>
    </tr>
    <tr>
      <td>container_class</td>
      <td>'orbit-container'</td>
    </tr>
    <tr>
      <td>stack_on_small_class</td>
      <td>'orbit-stack-on-small'</td>
    </tr>
    <tr>
      <td>next_class</td>
      <td>'orbit-next'</td>
    </tr>
    <tr>
      <td>prev_class</td>
      <td>'orbit-prev'</td>
    </tr>
    <tr>
      <td>timer_container_class</td>
      <td>'orbit-timer'</td>
    </tr>
    <tr>
      <td>timer_paused_class</td>
      <td>'paused'</td>
    </tr>
    <tr>
      <td>timer_progress_class</td>
      <td>'orbit-progress'</td>
    </tr>
    <tr>
      <td>slides_container_class</td>
      <td>'orbit-slides-container'</td>
    </tr>
    <tr>
      <td>slide_selector</td>
      <td>'*'</td>
    </tr>
    <tr>
      <td>bullets_container_class</td>
      <td>'orbit-bullets'</td>
    </tr>
    <tr>
      <td>bullets_active_class</td>
      <td>'active'</td>
    </tr>
    <tr>
      <td>slide_number_class</td>
      <td>'orbit-slide-number'</td>
    </tr>
    <tr>
      <td>caption_class</td>
      <td>'orbit-caption'</td>
    </tr>
    <tr>
      <td>active_slide_class</td>
      <td>'active'</td>
    </tr>
    <tr>
      <td>orbit_transition_class</td>
      <td>'orbit-transitioning'</td>
    </tr>
    <tr>
      <td>bullets</td>
      <td>true</td>
    </tr>
    <tr>
      <td>circular</td>
      <td>true</td>
    </tr>
    <tr>
      <td>timer</td>
      <td>true</td>
    </tr>
    <tr>
      <td>variable_height</td>
      <td>false</td>
    </tr>
    <tr>
      <td>swipe</td>
      <td>true</td>
    </tr>
    <tr>
      <td rowspan="7">Reveal</td>
      <td>animation</td>
      <td>'fadeAndPop'</td>
    </tr>
    <tr>
      <td>animation_speed</td>
      <td>250</td>
    </tr>
    <tr>
      <td>close_on_background_click</td>
      <td>true</td>
    </tr>
    <tr>
      <td>close_on_esc</td>
      <td>true</td>
    </tr>
    <tr>
      <td>dismiss_modal_class</td>
      <td>'close-reveal-modal'</td>
    </tr>
    <tr>
      <td>bg_class</td>
      <td>'reveal-modal-bg'</td>
    </tr>
    <tr>
      <td>bg</td>
      <td>$('.reveal-modal-bg')</td>
    </tr>
    <tr>
      <td rowspan="3">Sliders</td>
      <td>start</td>
      <td>0</td>
    </tr>
    <tr>
      <td>end</td>
      <td>100</td>
    </tr>
    <tr>
      <td>step</td>
      <td>1</td>
    </tr>
    <tr>
      <td rowspan="2">Tab</td>
      <td>active_class</td>
      <td>'active'</td>
    </tr>
    <tr>
      <td>is_hover</td>
      <td>false</td>
    </tr>
    <tr>
      <td rowspan="6">Tooltip</td>
      <td>additional_inheritable_classes</td>
      <td>[]</td>
    </tr>
    <tr>
      <td>tooltip_class</td>
      <td>'.tooltip'</td>
    </tr>
    <tr>
      <td>append_to</td>
      <td>'body'</td>
    </tr>
    <tr>
      <td>touch_close_text</td>
      <td>'Tap To Close'</td>
    </tr>
    <tr>
      <td>disable_for_touch</td>
      <td>false</td>
    </tr>
    <tr>
      <td>hover_delay</td>
      <td>50</td>
    </tr>
    <tr>
      <td rowspan="7">Topbar</td>
      <td>index</td>
      <td>0</td>
    </tr>
    <tr>
      <td>sticky_class</td>
      <td>'sticky'</td>
    </tr>
    <tr>
      <td>custom_back_text</td>
      <td>true</td>
    </tr>
    <tr>
      <td>back_text</td>
      <td>'Back'</td>
    </tr>
    <tr>
      <td>is_hover</td>
      <td>true</td>
    </tr>
    <tr>
      <td>mobile_show_parent_link</td>
      <td>false</td>
    </tr>
    <tr>
      <td>scrolltop</td>
      <td>true</td>
    </tr>
  </tbody>
  <thead>
    <tr><td>Plugin Name</td>
    <td>Setting</td>
    <td>Default Value</td>
  </tr></thead>
</table>

  </div>
</div>


<hr>
<h3 id="configure-on-the-fly">Configure on the fly</h3>
<p>You can now reconfigure instances of your plugin after the page has loaded and IQ has already been initialized.</p>
<p>Lets pretend that we have an alert that was on our page when IQ was first initialized:</p>
<h4>HTML</h4>

<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">div</span> <span class="attribute">data-alert</span> <span class="attribute">class</span>=<span class="value">"alert-box"</span> <span class="attribute">id</span>=<span class="value">"myAlert"</span>&gt;</span>
  This is a standard alert.
  <span class="tag">&lt;<span class="title">a</span> <span class="attribute">href</span>=<span class="value">"#"</span> <span class="attribute">class</span>=<span class="value">"close"</span>&gt;</span>&amp;times;<span class="tag">&lt;/<span class="title">a</span>&gt;</span>
<span class="tag">&lt;/<span class="title">div</span>&gt;</span></div></code></pre>
<p>The default fade out speed is 300 miliseconds, if we wanted to change this to 3 seconds we could do the following:</p>
<h4>JS</h4>

<pre><code class="language-js"><div class="code-container">$(<span class="string">'#myAlert'</span>).foundation({alert: {speed: <span class="number">3000</span>}});</div></code></pre>
<p>You can set any configuration option or callback this way.</p>
<hr>
<h3 id="calling-internal-methods">Calling Internal Methods</h3>
<p>Foundation Javascript allows you call internal plugin methods by passing the method name as the second argument. This is necessary for plugins like Joyride, which are not initialized on page load by default.</p>
<p>This will fire the <code>start</code> method on Joyride:</p>
<h4>JS</h4>

<pre><code class="language-html"><div class="code-container">$(document).foundation('joyride', 'start');</div></code></pre>

            </div>
</div>