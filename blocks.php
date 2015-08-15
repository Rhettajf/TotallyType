<?php 
	$title = "Totally Type Lessons";
	$page = "lessons";
	$bclass = "";
	$invert = "off";
	include("parts/header.php")
?>
<div class="row">
    <div class="large-6 columns">
<h1>Building Blocks</h1>

<p>We are finally going to talk about text blocks. Blocks of running text — text that runs from line to line — such as a paragraph, list, blockquote, or caption. This chapter on text covers the main elements that support a block of text: the typeface, size, measure, line-height, alignment, tracking, and indentation. The global rule for all of these elements is simple; they are a system. When one changes, they all change.</p>

<h3>What is a paragraph?</h3>

<p>A paragraph or block of text, like the one you're reading now, divides content in digestible bits or blocks of information. Our goal as typographers is to provide a separation between blocks while simultaneously keeping them connected. Many mistake the paragraph as a unit of measurement; a group of three to five sentences. Although that may be accurate, a paragraph is a coherent idea. Length has little to do with it; a paragraph performs a function and our job is to support that function.</p>

<h2>Indentation</h2>
<p>Indentation is a visual cue indicating where a new paragraph begins, and since text is divided into logical paragraphs, an indent helps define the structure of a document. There are some global rules to keep in mind when using indents in any medium: </p>
<ul>
<li>You want an indent to distinguish between blocks &mdash; not disconnect them.</li>
<li>A indent separates a paragraph from the preceding one&hellip;</li>
<li>So, do not indent the first paragraph in a body of text. Indenting the first paragraph is like taking a break before you start.</li>
</ul>

<h4>First-line Indent</h4>
<div class="panel">
<p>At nec error persius reprimique, duo et lorem mucius, te melius suavitate ius. Simul iriure ancillae no per, nominati eleifend mea cu. Cum an zril dolorum urbanitas, sea at duis nusquam patrioque, cetero nostrud democritum te vix. Reque perpetua te nam. Ut eum dico platonem mnesarchum, per id nulla epicuri scripserit.</p>
<p style="margin-top:0;"><span style="width:2em; background-color:#007468; display: inline-block;">&nbsp;</span>Vis denique assentior in, ut quo possit aperiam eleifend, ei tale mandamus has. Ea eum eligendi offendit. Ius causae tritani ex. Maiorum corpora eu vis, his augue quaeque et. Eum mazim ceteros mediocritatem at, nam brute idque omittantur ex.</p>
</div>
<p>Almost everyone is familiar with the first-line indent. It is the most common way to distinguish between paragraphs. Indenting the first-line (not the first-line in the first paragraph of a body of text) draws your eye to the start of the next paragraph while hardly stopping the flow of text. When it comes to keeping the train of thought in long texts or anything with depth, no other method compares.</p>
<ul>
<li>Typically, a first-line indent should be between 1em and 4em. Any less and it wouldn't serve it's purpose &mdash; any larger you run the risk of disconnecting the block. </li>
<li>Consider the measure as a gauge; the wider the block &mdash; the wider the indent.</li>
<li>Best for longer texts and narratives: books, papers, educational works, newspapers, magazines, etc. </li>
<li>In the fixed pages of print, it is the most space-economical indent.</li>
</ul>

<h4>Paragraph-Space</h4> 
<div class="panel">
    <p>At nec error persius reprimique, duo et lorem mucius, te melius suavitate ius. Simul iriure ancillae no per, nominati eleifend mea cu. Cum an zril dolorum urbanitas, sea at duis nusquam patrioque, cetero nostrud democritum te vix. Reque perpetua te nam. Ut eum dico platonem mnesarchum, per id nulla epicuri scripserit.</p>
    <p style="display: inline-block; width:100%; margin-top:0; background-color:#007468; color:#fff; text-align:center">PAUSE</p>
    <p style="margin-top:0;">Vis denique assentior in, ut quo possit aperiam eleifend, ei tale mandamus has. Ea eum eligendi offendit. Ius causae tritani ex. Maiorum corpora eu vis, his augue quaeque et. Eum mazim ceteros mediocritatem at, nam brute idque omittantur ex.</p>
</div>
<p>The paragraph-space &mdash; adding a space between paragraphs &mdash; raises a big <span class="allcaps bold">paragraph</span> banner. It is stronger then the first-line indent and can break the flow of text. Therefore, it tends to work best in short texts as a means of providing emphasis or when the content calls for breaks or pauses between paragraphs. This emphasis should be taken into account when deciding between using a first-line or a paragraph-space indent.</p> 
<ul>
<li>The larger the point size and/or line-spacing, the more space you will need. </li>
<li>The space is typically a full line space or less (a full line space is often too open).</li>
<li>Paragraph spacing uses more space than the first-line indent. </li>
</ul>
<h6>Who said you should use a paragraph-space online?</h6>

<p>In the early days of <abbr title="HyperText Markup Language">HTML</abbr>, there wasn't a good way to indent the first-line of paragraphs and so we didn’t - we used a paragraph-space. As online reading grew in popularity, that limitation quickly influenced modern style. By the time <abbr title="Cascading Style Sheets">CSS</abbr> came along and we could indent the first line of paragraphs, it was no longer customary to do so. There are, however, certain aspects of the screen environment that support the use of a paragraph-space indent. On the Web, text is usually written and set for quick consumption where blocks are shorter and less connected than they would be in a novel for example. The paragraph space works well for short texts and narrow columns and is a good way to enhance readability in less than perfect environments by making paragraphs strongly distinguishable. At the end of the day, it depends on your text. The long text of this site favors a first-line indent. </p>

<h4>Hanging Indent</h4>
<div class="panel">
<p style="margin-left:3rem; text-indent:-3rem;">At nec error persius reprimique, duo et lorem mucius, te melius suavitate ius. Simul iriure ancillae no per, nominati eleifend mea cu. Cum an zril dolorum urbanitas, sea at duis nusquam patrioque, cetero nostrud democritum te vix. Reque perpetua te nam. Ut eum dico platonem mnesarchum, per id nulla epicuri scripserit.</p>
</div>
<p>The hanging indent or outdent is yet another option. Typically the first line is extended into the left margin. This can produce a dramatic effect at the cost of space real estate.</p>

<h4>Dropcap or initial</h4>

<p><span class="dropcap">D</span>ropcap or initial is a letter at the beginning paragraph or chapter that is enlarged and dropped down two or more lines. Typically, the top of the drop cap should align with the cap-height or x-height of the first line and the bottom with the baseline of second or subsequent lines — as in this example. Dropcaps have marked the start of a body of text for almost two thousand years. Like other indications, dropcaps increase usability by marking the start of important passages. However, in modern applications drop caps do not aid usability or readability — and they are hard for Web designers to control across browsers.</p>
<p>Drop caps work best on the first paragraph in a chapter, section, or body of text. If used they should be followed by first-line or paragraph-spaced indents.</p>

<h4>Small capitals </h4>
<p><span class="dropcap">S</span><span class="scaps">mall capitals</span> are commonly used for the first line, phrase, or word of a prargraph with or instead of a drop cap. Small caps help transition between a drop cap and the text. There is a rule for how many words should be set in small caps. There are, however, some tips. A word does not work well if it is too short, generally you want over five letters. You also don't want to go over a line. If using this style online, consider hypenation. The best method is to set the first few significant words in small caps.</p>
    </div>
</div>

<div class="row">
    <div class="large-6 columns push-top">
        <a href="lessons.php#text" class="button secondary">Back to Lessons</a>
        <a href="emphasis.php" class="button right">Emphasis</a>
    </div>
</div>
<script src="js/dropcap.js"></script>
  <script>
        var dropcaps = document.querySelectorAll(".dropcap");
        window.Dropcap.layout(dropcaps, 3);
    </script>
<?php include("parts/footer.php"); ?>