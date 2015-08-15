<?php 
	$title = "Totally Type Lessons";
	$page = "lessons";
	$bclass = "";
	$invert = "off";
	include("parts/header.php")
?>
<style>
tr td:first-child { font-weight:700; text-align:center; color:#007468;}

</style>
<div class="row">
    <div class="large-6 columns">
<h1 class="light italic pull-bottom" style="text-indent: -0.3em;">“White space is to be regarded as an active element, not a passive background.”</h1>
<p>&mdash;&nbsp;Jan Tschichold</p>

<p class="no-indent">Your eyes only see a small amount of text at a time — typically six letters on either side of your focal point or point of fixation. The farther a word is from that point, the fuzzier it appears. Eyes use white space to recognize where a word begins and ends by making subconscious adjustments called <i>saccades</i>. This is the scientific reason why the space between words needs to be greater than the space between letters. If the space between words is too large, the reader's eyes will need to make more adjustments or <i>saccades</i> slowing down the pace of reading. The following lesson will look at the word space as well as the em, en, thin, hair, non-breaking, and hard spaces.</p>

<h3>Spaces</h3>

<ul class="single-space-list">
<li>An em space is 1 em wide.</li>
<li>An en space is <span class="frac">1/2</span> em wide.</li>
<li>The thin space is approximately <span class="frac">1/5</span> of an em.</li>
<li>The hair space is approximately <span class="frac">1/10</span> to <span class="frac">1/16</span> of an em.</li>
</ul>

<p>A word space is the standard space between words; it is set by the typeface designer and typed with the space bar. The em and en spaces are often used as a measurement of space. An em or en space are sometimes used as a word space or to add additional spacing where normal spacing is inadequate. The em space is sometimes used to create paragraph indents in print and in place of using text-indent on the Web.</p>

<table style="width:100%" class="lining">
<tbody>
<thead>
<tr>
    <th>&nbsp;</th>
    <th>Space</th>
    <th>Windows</th>
    <th>Mac</th>
    <th>HTML</th>
</tr>
</thead>
<tr>
    <td ><span style="background-color:#007468;">&emsp;</span></td>
    <td>Em</td>
    <td><i>glyphs panel</i></td>
    <td><i>glyphs panel</i></td>
    <td>&amp;emsp;</td>
</tr>
<tr>
    <td><span style="background-color:#007468;">&ensp;</span></td>
    <td>En</td>
    <td><i>glyphs panel</i></td>
    <td><i>glyphs panel</i></td>
    <td>&amp;ensp;</td>
</tr>
<tr>
    <td><span style="background-color:#007468;">&thinsp;</span></td>
    <td>Thin</td>
    <td><i>glyphs panel</i></td>
    <td><i>glyphs panel</i></td>
    <td>&amp;thinsp;</td>
</tr>
<tr>
    <td style="color:#007468;">|</td>
    <td>Hair</td>
    <td><i>glyphs panel</i></td>
    <td><i>glyphs panel</i></td>
    <td style="text-decoration:line-through;">n/a</td>
</tr>
</tbody>
</table>

<p> The thinspace is approximately <span class="frac">1/2</span> of a word space and is sometimes used when a word space is too large such as in my initials: R.&thinsp;A.&thinsp;F.&ensp;A hairline space is sometimes used before a colon, semicolon, point, exclamation point, or after parentheses and quotation marks &mdash; most digital fonts already have these spaces accounted for.</p>

<h6>Nonbreaking Spaces</h6>
<p>Desktop publishing software sees a word space as a place to break and flow text onto the next line. A nonbreaking space is a special word space that prevents the text from breaking onto a new line. We use this to prevent awkward breaks. Some good places are in abbreviations, reference marks (Ex.&nbsp;2 Fig.&nbsp;18), after symbols (&copy;&nbsp;2015), before an ellipses (someday&nbsp;&hellip;), and before and after em or en dashes with spaces (2010&nbsp;&ndash;&nbsp;2015).</p>

<table style="width:100%" class="tabular">
<tbody>
<thead>
<tr>
    <th>&nbsp;</th>
    <th>Space</th>
    <th>Windows</th>
    <th>Mac</th>
    <th>HTML</th>
</tr>
</thead>
<tr>
    <td><span style="background-color:#007468;">&nbsp;</span></td>
    <td>word</td>
    <td>space</td>
    <td>space</td>
    <td>space</td>
</tr>
<tr>
    <td><span style="background-color:#007468;">&nbsp;</span></td>
    <td>nonbreaking</td>
    <td>control+shift+space</td>
    <td>option+shift+space</td>
    <td>&amp;nbsp;</td>
</tr>
</tbody>
</table>



<p>This is as good a time as any to talk about the period or point used at the end of sentences. Before digital type it was customary to use two spaces after a sentence. This is unnecessary; the period itself is mostly white space and when combined with the word space, provides adequate spacing.</p>

<h6>Hard Spaces</h6>

<p>A hard line break separates lines of text. It breaks a line onto the next, in other words, gives you control over text flow. This is useful to balance awkward breaks in headings or for listing items such as in an address. A hard page break puts the next line on a new page. Do not use multiple carriage returns. All of these breaking spaces have one purpose, to give you flow and reflow of text. Using these breaks will allow the text to reflow as you intended when you edit your copy or typesetting down the road. </p>


<div class="panel">
<blockquote style="text-indent: -0.65rem;">Type is a beautiful group of letters, 
not a group of beautiful letters.</blockquote>
<blockquote style="text-indent: -0.65rem; margin-top:1.5rem">Type is a beautiful group of letters, <span class="light">&lt;br /&gt;</span> <br />
not a group of beautiful letters.</blockquote>
</div>
<p>Although I just used one, the Web is no place for hard line breaks. By nature web pages do not support the use or need of page breaks either; they are only useful in print. On the Web we use the <span class="light">&lt;p&gt;</span> tag to define paragraphs. In a responsive multi-device world, you don't have control over line-length let alone text size.</p>

<table style="width:100%" class="tabular">
<tbody>
<thead>
<tr>
    <th>&nbsp;</th>
    <th>Space</th>
    <th>Windows</th>
    <th>Mac</th>
    <th>HTML</th>
</tr>
</thead>
<tr>
    <td >&nbsp;</td>
    <td>nonbreaking</td>
    <td>control+shift+space</td>
    <td>option+shift+space</td>
    <td>&amp;nbsp;</td>
</tr>
<tr>
    <td >&nbsp;</td>
    <td>hard line break</td>
    <td>shift+return</td>
    <td>shift+return</td>
    <td>&lt;br /&gt;</td>
</tr>
<tr>
    <td >&nbsp;</td>
    <td>page break</td>
    <td>control+return</td>
    <td>option+return</td>
    <td>&lt;br /&gt;</td>
</tr>
</tbody>
</table>

</div>
</div>
<div class="row">
    <div class="large-6 columns push-top">
        <a href="lessons.php#word" class="button secondary">Back to Lessons</a>
        <a href="kerning.php" class="button right">Kerning</a>
    </div>
</div>
<?php include("parts/footer.php"); ?>