<?php 
	$title = "Totally Type Lessons";
	$page = "lessons";
	$bclass = "";
	$invert = "off";
	include("parts/header.php");
?>
<div class="row">
    <div class="large-6 columns">
    <h1>Figures</h1>

<p>In typography, numbers are commonly referred to as figures or numerals. The different types of numerals are defined by their dimensions. If you came to this page outside of the lesson plan, you may want to <i>get in line</i> in the <a href="anatomy.php" title="Anatomy" target="_self">anatomy lesson</a>.</p>

<p>Letters are not the only thing we have to worry about; numbers are often used in text to indicate dates, times, addresses, measurements, quantities, prices and other data. Different math and currency symbols are designed to match different numeral styles. The two basic styles of numerals are <i>lining</i> figures and <i>oldstyle</i> figures. </p>

<h4>Lining Figures </h4>

<div class="panel pull-top hascap">
<h2 class="light lining text-center">0123456789</h2>
</div>
<p class="panelcap"><a href="#" data-reveal-id="lining">use online<span class="icon-screen2"></span></a></p>

<div id="lining" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
<p class="push-bottom">Lining figures are the default setting, most of the time you don't have to do anything to enable lining figures. However if your font defaults to oldstyle or you need to overwrite an exisiting style, you can use the following code.</p>
    <p class="code">.lining {    
	font-variant-numeric: lining-nums;
	-moz-font-feature-settings: "lnum";
	-ms-font-feature-settings: "lnum";
	-webkit-font-feature-settings: "lnum";
	font-feature-settings: "lnum";
}</p>
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div> 

<p>Lining figures share the same height as capital letters &mdash; the cap-height. You can think of lining figures as capital numerals.</p>

<h4>Oldstyle Figures</h4>

<div class="panel pull-top hascap">
<h2 class="light oldstyle text-center">0123456789</h2>
</div>

<p class="panelcap"><a href="#" data-reveal-id="oldstyle">use online<span class="icon-screen2"></span></a></p>

<div id="oldstyle" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
    <p class="code">.oldstyle {
        font-variant-numeric: oldstyle-nums;
        -moz-font-feature-settings: "onum";
        -ms-font-feature-settings: "onum";
        -webkit-font-feature-settings: "onum";
        font-feature-settings: "onum";
    }</p>
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div> 


<p>Oldstyle figures — also called hanging, non-lining, text, or lowercase figures — have varying heights and baseline alignments. Oldstyle figures correspond to the x-height; figures descend below the baseline while others ascend above the x-height. You can think of oldstyle figures as lowercase numbers.</p>

<p>Oldstyle figures integrate (visually) with lowercase letters and are therefore often preferred when numbers are used within running text — they are less intrusive than lining figures — allowing the numbers to blend into the line of text.</p>

<h2>Tabular or Proportional Figures</h2>

<p>Lining and oldstyle figures often come in both tabular and proportional versions.</p>

<h4>Tabular Figures</h4>

<div class="panel pull-top hascap">
<table style="width:100%" class="tabular">
<tbody>
<tr>
	<td>000000</td>
	<td>25551</td>
	<td>1125</td>		
	<td>91</td>
</tr>
<tr>
	<td>111111</td>
	<td>25273</td>
	<td>9423</td>			
	<td>11</td>
</tr>
</tbody></table>
</div>
<p class="panelcap"><a href="#" data-reveal-id="tabular">use online<span class="icon-screen2"></span></a></p>

<div id="tabular" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
    <p class="code">.tabular {
	font-variant-numeric: tabular-nums;
	-moz-font-feature-settings: "tnum";
	-ms-font-feature-settings: "tnum";
	-webkit-font-feature-settings: "tnum";
	font-feature-settings: "tnum";
}</p>
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div> 



<p>Tabular figures, which share an identical width, take up the same amount of space allowing the figures to line up vertically from line-to-line. Tabular figures are used for columns of vertically aligned numbers such as tables and other forms of data - thus the name  <i>tabular</i> figures.</p>

<h4>Proportional Figures</h4>

<div class="panel pull-top hascap">
<table style="width:100%" class="proportional">
<tbody>
<tr>
	<td>000000</td>
	<td>25551</td>
	<td>1125</td>		
	<td>91</td>
</tr>
<tr>
	<td>111111</td>
	<td>25273</td>
	<td>9423</td>			
	<td>11</td>
</tr>
</tbody></table>

<p class="proportional">Sorry for the late notice. Please come over on <?php echo date('l\, F j'); ?><span class="ordn"><?php echo date('S'); ?></span>, <?php echo date('Y'); ?> at <?php echo date("h:i"); ?> <span class="scaps"><?php echo date("a"); ?></span> to read your paper. The acoustics are great; the measurements of the room are 19<i>'</i> 43.5<i>"</i> × 14<i>'</i> 6<i>"</i>, plenty of space for everyone. </p>

</div>

<p class="panelcap"><a href="#" data-reveal-id="proportional">use online<span class="icon-screen2"></span></a></p>

<div id="proportional" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
    <p class="code">.proportional {
	font-variant-numeric: proportional-nums;
	-moz-font-feature-settings: "pnum";
	-ms-font-feature-settings: "pnum";
	-webkit-font-feature-settings: "pnum";
	font-feature-settings: "pnum";
}</p>
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div> 

<p>Proportional figures, like letters, are spaced according to their design. Proportional figures are recommended for running text. We use these for dates, times, measurements, and pagination.</p>

<h2>Superscript and Subscript Figures</h2>

<p>Subscript and superscript figures are smaller than the normal type and set slightly below or above it. In typography, subscript and superscript characters are not simply smaller characters; to keep them visually consistent with the typeface design, they are slightly heavier. On the Web, subscript and superscript figures are often faux, reduced to 80% of the the font size. However, OpenType has opened up the opportunity to use subscript and superscript figures.</p>

<h4>Superscript</h4>

<div class="panel pull-top hascap">
<h2 class="light text-center">e=mc<span class="sups">2</span></h2>
</div>

<p class="panelcap"><a href="#" data-reveal-id="Superscript">use online<span class="icon-screen2"></span></a></p>

<div id="Superscript" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
<p>The &lt;sup&gt; <abbr title="HyperText Markup Language">HTML</abbr> tag defines superscript<sup>1</sup> text semantically: example<sup>1</sup>
<p class="code html">example&lt;sup&gt;1&lt;/sup&gt;</p>
<p>using the following default values:</p> 
<p class="code">sup {
    vertical-align: super;
    font-size: smaller;
}</p>

<p>Opentype fonts with specifically drawn superscript numerals should not be used together with the &lt;sup&gt; tag. Instead, span a class like this: example<span class="sups">1</span></p>
<p class="code html">example&lt;span class="super"&gt;1&lt;/span&gt;</p>
    <p class="code">.super {
	font-variant-position: super;
	-moz-font-feature-settings: "sups";
	-ms-font-feature-settings: "sups";
	-webkit-font-feature-settings: "sups";
	font-feature-settings: "sups";
	}</p>
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div> 


<p>Superscript numerals are smaller in size and centered on the cap-height. Use these in mathematical or scientific equations or formulas. Superscript is also commonly used to indicate footnotes.</p>

<h4>Subscript</h4>

<div class="panel pull-top hascap">
<h2 class="light lining text-center" style="margin:1.5rem;">CO<span class="subs">2</span>H<span class="subs">2</span>O</h2>
</div>
<p class="panelcap"><a href="#" data-reveal-id="subscript">use online<span class="icon-screen2"></span></a></p>
<div id="subscript" class="reveal-modal" data-reveal aria-labelledby="subscript" aria-hidden="true" role="dialog">
    <p class="code">.subs {
	font-variant-position: sub;
	-moz-font-feature-settings: "subs";
	-ms-font-feature-settings: "subs";
	-webkit-font-feature-settings: "subs";
	font-feature-settings: "subs";
	}</p>
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<p>Subscript are also smaller in size and centered on the baseline. Use these in mathematical or scientific equations or formulas.</p>

<h3>Ordinals</h3>

<div class="panel pull-top hascap">
<h2 class="light ordn text-center">1st&nbsp;2nd&nbsp;3rd&nbsp;4th</h2>
</div>
<p class="panelcap"><a href="#" data-reveal-id="ordinal">use online<span class="icon-screen2"></span></a></p>
<div id="ordinal" class="reveal-modal" data-reveal aria-labelledby="ordinals" aria-hidden="true" role="dialog">
    <p class="code">.ordn {
	font-variant-numeric: ordinal;
	-moz-font-feature-settings: "ordn";
	-ms-font-feature-settings: "ordn";
	-webkit-font-feature-settings: "ordn";
	font-feature-settings: "ordn";
}</p>
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div> 
<p>An ordinal indicates that a number belongs to a sequence such as first, second, third. The letters that indicate the sequence are smaller versions raised above the baseline.</p>

<h2>Numerators and Denominators</h2>

<div class="panel pull-top hascap">
<h2 class="light frac text-center">3/4&nbsp;2/3&nbsp;1/2&nbsp;1/4&nbsp;1/8</h2>
</div>
<p class="panelcap"><a href="#" data-reveal-id="numerators">use online<span class="icon-screen2"></span></a></p>
<div id="numerators" class="reveal-modal" data-reveal aria-labelledby="Numerators and Denominators" aria-hidden="true" role="dialog">
    <p class="code">.frac {
	font-variant-numeric: diagonal-fractions;
	-moz-font-feature-settings: "frac";
	-ms-font-feature-settings: "frac";
	-webkit-font-feature-settings: "frac";
	font-feature-settings: "frac";
}</p>
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div> 

<p>Numerators and denominators, used in fractions, are superscript and subscript figures sized and positioned to align with the <i>solidus</i> ( &frasl; ), the punctuation mark used to indicate a fraction. The top of the numerator aligns with the top of the solidus &mdash; or cap-height &mdash; while the denominator aligns with the bottom of the solidus &mdash; or baseline. </p>




</div>
</div>
<div class="row">
    <div class="large-6 columns push-top">
<a href="lessons.php#word" class="button secondary">Back to Lessons</a>
    </div>
</div>
<?php include("parts/footer.php"); ?>