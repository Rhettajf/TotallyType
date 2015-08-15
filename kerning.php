<?php 
	$title = "Totally Type Lessons";
	$page = "lessons";
	$bclass = "";
	$invert = "off";
	include("parts/header.php")
?>
<div class="row">
    <div class="large-6 columns">
<h1>Kerning</h1>

<p>Now that we know how important white space is, let's learn how to see it and create it. Good spacing is a telltale sign that you have selected a well-designed typeface. But what is good spacing? A typeface is well spaced when letter pairs, words, sentences, and paragraphs form an even color. They should appear an even gray without any light or dark spots. The right amount of space is different for every typeface as it is dependent on form.</p>

<img src="img/kerning.svg" alt=""/>
<p>In the days of metal type, each font was cast with the right amount of space. Some letters would hang off the block, the overhanging part was called a kern. Kerning as we know it was impractical in metal type. A typesetter would have to alter the physical block to reduce the space and therefore the only practical solution was to increase the spacing by inserting a spacer. A typesetter would only reduce the spacing on extreme problems like the <i>AV</i> pair. Because of this, early type had looser spacing than we are accustomed to today. If you want your type to look 'classic' you can loosen up the spacing to mimic early printing.</p> 

<p>When type went digital, a font could be created with relative spacing or spacing specific to ranges of point sizes. We can control this space by kerning it. Kerning is the adjustment of space between two characters; this is why you will often hear typographers refer to kerning pairs. Kerning pairs in a font adjusts the spacing between character pairs &mdash; a fonts built in kerning. Some fonts have 500 kerning pairs built in and a pro font may have thousands. Therefore, the level of manual kerning is completely dependent on the typeface and the size of your type. There is a reason kerning was placed  under the Word chapter and not Text. Generally, kerning is something we do when setting display type. We track running text and kern display text.</p>

<h3>General Rules</h3>

<ul>
<li>The number one rule: <i>less is more.</i> Spacing should be invisible. Many of the finer elements of typography share this rule; you actually want your efforts to go unnoticed by the reader. In terms of spacing this means not too tight or too loose.</li>
<li>The point size of your type informs the space. Type needs looser spacing at text sizes than display sizes. If a text face is too tight it will clog up in print and join on screen.</li>
<li>It is common to set a sans serif face tighter; this is because we don't have to worry about serifs colliding, joining, or clogging.</li>
</ul>

<h3>Internal Spacing</h3>

<p>Spacing is a two part process in typeface design. First, spacing is set by sidebearings; then kerning is added to address problematic letter pairs.</p>

<style>
.sidebearings span { background-color:#007468; color:#fff; border-left:1px solid #fff;}
</style>
<h3 class="light sidebearings" style="letter-spacing:0.02em;"><span>S</span><span>i</span><span>d</span><span>e</span><span>b</span><span>e</span><span>a</span><span>r</span><span>i</span><span>n</span><span>g</span><span>s</span></h3>

<p>From metal type until today, sidebearings &mdash; the space or padding around a glyph &mdash; set a character's initial letter-spacing. Each character has a left and right bearing. When two letters sit next to each other, the sidebearings define the space between the two characters. In digital type, sidebearings are free from the physical block; they can be adjusted to any width. Because there are many different shapes in a typeface, there are many different sidebearings.</p>

<p>We will not get into setting up sidebearings; this lesson is not about typeface design but typesetting. The point you want to take away from this is that good spacing, especially in a text face, is within the typeface you select. Therefore, knowing when a face has good internal spacing is vital to typeface selection.</p>

<h3>The search for good spacing</h3>

<p>A fonts spacing can be tested by looking at a particularly problematic groups of letters. There are two widely used methods, one from Stephen Moye and another from Emil Ruder. I prefer Ruder's test as it truly measures the overall quality of spacing by examining color. Problematic words in the left column are contrasted against non-problematic words in the right column. The trick to using this system is to set your point size at the size you will be using. The following app lets you pick a font from your system and set a point size to measure the quality of spacing.</p>
<?php include("parts/space-test.php"); ?>
<p> However, no matter how good a typeface design may be, sidebearings alone can not resolve the color. Certain pairs are problematic, especially at display sizes, and may need to be manually kerned.</p>
 
<h3>Learn to Kern</h3>

<p>Kerning is a lot like a game where you adjust characters that appear too open or too tight, and like a game, it takes practice and experience to master. Luckily there are some tricks that can help get you to the top of your game.</p>

<h6>Units</h6>

<p>In digital typography, kerning is applied to letter pairs as a positive or negative number that will increase or decrease spacing. This number represents fractions of an em, usually <span class="frac">1/1000</span> of an em. Typically a kerning value of 15 means an increase of 0.015em.</p>

<h6>Kern in groups</h6>
<p>In order to kern you must first understand the spatial relationship between characters. In type design, there are methods we can use to help see the spacial relationships that exist between characters. Every typeface has three main sidebearings:</p> 


<div class="row text-center">
<div class="large-2 column">
<p class="text-sans example">li</p>
square-to-square
</div>
<div class="large-2 column">
<p class="text-sans example">bl</p>
square-to-round
</div>
<div class="large-2 column">
<p class="text-sans example">bo</p>
round-to-round
</div>
</div>
<p class="push-top">The spaces get slightly smaller in each relationship to achieve optical spacing. The reason this is important to kerning is that similar letterforms have similar spacing. OpenType fonts, rather than a table of kerning pairs, use class-based kerning. Kerning is set by groups of similar letterforms that share the same internal spacing. What this means for us is that groups of characters should have the same spacing. It wasn't until I designed my first typeface that I became a player in the kerning game. We already defined a typeface as a group of stylistically related characters, but we can take that further by saying it is a group of groups of stylistically related characters.</p>
<table style="width:100%; font-size:0.8888888888888889em;" class="lining;">
<tbody>
<thead>
<tr>
    <th>Capitals</th>
    <th>&nbsp;</th>
    <th>Lowercase</th>
    <th>&nbsp;</th>
</tr>
</thead>
<tr>
    <td>Round</td>
	<td>OQCGS</td>
    <td>Round</td>
	<td>ceo</td>    
</tr>
<tr>
    <td>Round-Square</td>
	<td>BPRDJU</td>
    <td>Round-Square</td>
	<td>bdgpq</td>    
</tr>
<tr>
    <td>Square</td>
	<td>EFLHIT</td>
    <td>Round-Diagonal</td>
	<td>as</td>    
</tr>
<tr>
    <td>Diagonal</td>
	<td>MNKZY</td>
    <td>Vertical</td>
	<td>il</td>    
</tr>
<tr>
    <td>Diagonal-Square</td>
	<td>VAWX</td>
    <td>Hooked</td>
	<td>fjt</td>    
</tr>
<tr>
    <td>Double-storey</td>
	<td>FHBPSKXY</td>
    <td>Branched</td>
	<td>hmnru</td>    
</tr>
<tr>
    <td>Open Sided</td>
	<td>LTXKZJ</td>
    <td>Diagonal</td>
	<td>vwxy</td>    
</tr>
<tr>
    <td>Wide</td>
	<td>MW</td>
    <td>Diagonal-Square</td>
	<td>kz</td>    
</tr>
<tr>
    <td>Narrow</td>
	<td>IJ</td>
    <td>Ascending</td>
	<td>bdfhklt</td>    
</tr>
<tr>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>Descending</td>
	<td>gjpqy</td>    
</tr>
</tbody>
</table>


<h6>Know your enemy</h6>

<p>The most problematic groups to space are open-sided and diagonals. Here is a list to keep in the back of your head:</p>
<ul class="single-space-list">
<li>Diagonal-to-diagonal: AV</li>
<li>Open-sided-to-round: LO</li>
<li>Diagonal-Square: VE (watch the serifs)</li>
<li>Capital T-to-lowercase: To (T=tuck)</li>
<li>Unusual Combinations: Vs Ws Wx Vz</li>
</ul>
<p>When we manually kern we mostly reduce the space between characters&hellip;but not always. The classic kerning example is the space between a capital <i>A</i> and <i>V</i>. The internal spacing of these two are usually spaced to align their diagonal strokes with the vertical strokes in the adjacent letter. However, when <i>A</i> and <i>V</i> are set next to each-other this space is often too open. We reduce this space, kern it, to be optically correct. This is the most important thing to know about kerning, it is a game of optical balance.</p>


<h6>Enough talk, let's kern something.</h6>

<img src="img/yawn.png" width="1594" height="104" alt=""/>

<p><?php include("parts/ttype.php"); ?> has kept me so busy my grass has grown too high. Consider this example, <b>MANY YAWN AT MY LAWN</b>, a line of text with more diagonal forms than you want to see.</p>
<ul>

<li>
<p><b>Blur your eyes.</b></p>
<img src="img/yawn-blur.png" width="1594" height="104" alt=""/>
<p>This allows you to focus on white space of the letterforms without becoming distracted by the characters themselves. Notice how the space between the YA and AW pairs are too loose.</p>
</li>

<li>
<p><b>Turn the type upside-down.</b></p>
<img src="img/yawn-flip.png" width="1594" height="104" alt=""/>
<p>This allows you to focus on the form of the characters rather than getting distracted by the actual word or characters. Notice how the space between the WN and AT pair is too tight.</p>
</li>

  
<li>
<p><b>Be consistent.</b> If you kern a pair kern all instances of that pair. This is especially vital in display type or headlines, at large sizes any variance is obvious. Let's kern the AT, YA and two AW and WN pairs we found to be problems.</p>
<img src="img/yawn-kern2.png" width="1594" height="104" alt=""/>
<p>Looks much better!</p>
<img src="img/yawn-final-blur.png" width="1594" height="104" alt=""/> </li>


</ul>

<h3>The Un-kernable Web</h3>
<p>Kerning is possible but not very practical on the Web. Therefore, it is vital that you select a font with good internal spacing when setting Web type. However, the Web is not a complete no Kern zone; both the <span class="light">font-kerning</span> and <span class="light">text-rendering</span> (when set to optimizeLegibility) <abbr title="Cascading Style Sheets">CSS</abbr> property enable a webfonts built-in kerning. When using OpenType, like this website does, <span class="light">font-kerning</span> allows you to turn off the built-in kerning and manually kern using the letter-spacing property.</p>

<div class="row">
<div class="large-3 columns">
<p class="push-top">For example, the name of this website is manually kerned <?php include("parts/ttype.php"); ?> (see). Online we are limited to letter-spacing, the <abbr title="Cascading Style Sheets">CSS</abbr> version of tracking to kern. Letter-spacing is adjusted using the same units kerning is &mdash; a letter-spacing value of 15 means an increase in character spacing by 0.015em. Each letter must be wrapped in a span and styled with the letter-spacing property. Look at the code to see just <a href="#" data-reveal-id="kernlogo">how impractical kerning is on the web</a>.</p>
</div>

<div class="large-3 columns">
<h1 class="light manualkern push-top pull-bottom">TotallyType</h1>
<p>no kerning</p>
<h1 class="light manualkern push-top pull-bottom" style="margin-bottom:0;"><span style="letter-spacing:-0.087em;">T</span><span style="letter-spacing:-0.025em;">o</span><span style="letter-spacing:0.006em;">t</span><span style="letter-spacing:0.018em;">a</span><span style="letter-spacing:0.017em;">l</span><span style="letter-spacing:-0.014em;">l</span><span style="letter-spacing:-0.088em;">y</span><span style="letter-spacing:-0.089em;">T</span><span style="letter-spacing:0.031em;">y</span><span style="letter-spacing:-0.008em;">p</span><span>e</span></h1>
<p>kerned</p>
</div>
</div>

    <div id="kernlogo" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
        <p>&#x3C;h1 class=&#x22;light manualkern&#x22;&#x3E;&#x3C;span style=&#x22;letter-spacing:-0.087em;&#x22;&#x3E;T&#x3C;/span&#x3E;&#x3C;span style=&#x22;letter-spacing:-0.025em;&#x22;&#x3E;o&#x3C;/span&#x3E;&#x3C;span style=&#x22;letter-spacing:0.006em;&#x22;&#x3E;t&#x3C;/span&#x3E;&#x3C;span style=&#x22;letter-spacing:0.018em;&#x22;&#x3E;a&#x3C;/span&#x3E;&#x3C;span style=&#x22;letter-spacing:0.017em;&#x22;&#x3E;l&#x3C;/span&#x3E;&#x3C;span style=&#x22;letter-spacing:-0.014em;&#x22;&#x3E;l&#x3C;/span&#x3E;&#x3C;span style=&#x22;letter-spacing:-0.088em;&#x22;&#x3E;y&#x3C;/span&#x3E;&#x3C;span style=&#x22;letter-spacing:-0.089em;&#x22;&#x3E;T&#x3C;/span&#x3E;&#x3C;span style=&#x22;letter-spacing:0.031em;&#x22;&#x3E;y&#x3C;/span&#x3E;&#x3C;span style=&#x22;letter-spacing:-0.008em;&#x22;&#x3E;p&#x3C;/span&#x3E;&#x3C;span&#x3E;e&#x3C;/span&#x3E;&#x3C;/h1&#x3E;</p>
        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div> 

</div>

</div>
<div class="row">
    <div class="large-6 columns push-top">
<a href="lessons.php#text" class="button secondary">Back to Lessons</a>
    </div>
</div>
<?php include("parts/footer.php"); ?>