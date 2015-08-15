<?php 
	$title = "Totally Type Lessons";
	$page = "lessons";	
	$bclass = "";
	$invert = "off";
	include("parts/header.php")
?>
<div class="row">
    <div class="large-6 columns">
 <h1>Emphasis</h1>
<p>Emphasis is the exaggeration of words. In text, emphasis is expressed by contrasting the text face with bold or italic faces. The human eye can easily spot differences in color — the brightness within a text block — when using bold or italic type, the variation in weight and style indicate a hierarchy of information.</p>
<p>Levels of emphasis are indicated by changing the color of text. Italics do not have much affect on color and therefore provide <i>light emphasis</i>. With light emphasis, words do not stand out as much from the text or interrupt the flow of reading. Light emphasis is used for marking passages that have a different context, such as words from foreign languages and book titles. Bold, on the other hand, makes text darker; the emphasized text strongly <b>stands out</b>. Bold is best used to highlight keywords and important information for easy scanning of text. For example, printed dictionaries often use bold for keywords and names of entries.</p> 

<h3>Bold &amp; Italics</h3>
<p>Text is typically set regular or <i>roman</i> — there are exceptions such as <a href="reverse.php" title="reversed text">reversed text</a>. Heavier or lighter weights are typically used for display purposes — headings and subheading are often set in bold like they are on this website. Emphasis is different than hierarchy; within running text we want to keep the flow of reading. Italics are much more commonly used for emphasis because they are less obtrusive.</p>
<p>Italics are used for many reasons other than emphasis: book titles, names of art, musical works, films, plays, television shows, ships, aircraft, terms, definitions within a sentence, referenced letters, species, and foreign words and phrases to name a few. <span class="hide-on-print">There are some <a href="#" data-reveal-id="myModal">exceptions</a> of course.</span> </p>
 <div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
            <p>Punctuation after italicized words should also be italicized with the exception of exclamation!, question? and &ldquo;quotation marks&rdquo; that are not part of the italicized phrase. Possessive <i>s</i> and the apostrophe at the end of an italicized word is set roman. </p>
            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
        </div> 
<h3>Core Rules</h3>
   
<ol>
<li>
    <p class="push-bottom">Do not over <i>emphasize</i>. <i>If everything is emphasized nothing is emphasized</i>.</p>
</li>

<li><p class="push-bottom">Use <i>italic</i> for light emphasis and <strong>bold</strong> for strong emphasis.</p>
</li>

<li><p class="push-bottom">
<span class="scaps">Small capitals can also provide emphasis</span> and are commonly used as visual cue on the first line of a paragraph or chapter with or instead of a drop cap.</p>

</li>


<li><p class="push-bottom">Another option for emphasis, are <span class="allcaps">all caps</span>. All caps can help distinguish headings and headlines — but should <b>not</b> be used within running text.</p>
</li>

<li>
    <p>Bold and italics are designed to contrast regular or Roman text. This contrast provides emphasis on short words or phrases but should not be used for long stretches of text as the contrast will interrupt the flow of reading.</p>
    <div class="panel"> 
    <p>Please <i>emphasize</i> this line of text. It is important. <span class="icon-checkmark right"></span></p>
    <p style="font-weight:700" class="italic">Please emphasize this line of text. It is important. <span class="icon-blocked2 right"></span></p>
    </div>   
</li>
<li>
	<p>Avoid using italics for emphasis if using a sans-serif typeface. Unlike its serif counterpart, the italic font in a sans-serif typeface has a much more gentle slant that contrasts the regular text less  — providing little to no emphasis just a distraction.</p>
    <div class="panel">    
    <p class="text-sans">Please <strong>emphasize</strong> this line of text. It is important. <span class="icon-checkmark right"></span></p>
    <p class="text-sans">Please <i>emphasize</i> this line of text. It is important. <span class="icon-blocked2 right"></span></p>
	</div>   
</li>
<li class="push-bottom">
<p>You can use <b style="font-weight:700;">bold</b> or <b>semibold</b> for emphasis. This site uses a semibold to ensure counters stay open at text sizes and better keep the flow of reading.</p></li>

<li class="push-bottom"><p>Avoid using weights heavier than bold such as black or ultra. These heavier weights are intended for display type and don’t perform well at text sizes.</p></li>

<li><p>Avoid using light or thin text for emphasis; a lighter weight essentially <span style="font-weight:300">de-emphasizes</span> text. This site uses this technique to de-emphasize <abbr title="HyperText Markup Language">HTML</abbr> tags and code within running text.</p></li>
</ol>
<h3>The Screen</h3>
<h5>HTML</h5>
</div></div>
<div class="row">
<div class="large-3 column">


<p>Type on the Web is marked up in <abbr title="HyperText Markup Language">HTML</abbr>. 
We set bold and italic using the <span style="font-weight:300">&lt;b&gt;</span> and <span style="font-weight:300">&lt;i&gt;</span> tags, but emphasis is expressed using the <span style="font-weight:300">&lt;strong&gt;</span> and <span style="font-weight:300">&lt;em&gt;</span> tags. Both <span style="font-weight:300">&lt;b&gt;</span> and <span style="font-weight:300">&lt;i&gt;</span> refer to visual styles, in other words, when you want the text to look bold or italic. However, if you wanted your text to both look bold and have emphasis you would use the <span style="font-weight:300">&lt;strong&gt;</span> tag.</p>
</div>
<div class="large-3 column">
<div class="panel screen pull-top-large ">
    <div class="screensurface">
        <ul class="pull-top pull-bottom">
            <li>&lt;b&gt;<b>Bold</b>&lt;/b&gt;</li>
            <li>&lt;i&gt;<i>Italic</i>&lt;/i&gt;</li>
            <li>&lt;strong&gt;<strong>Bold</strong>&lt;/strong&gt;</li>
            <li>&lt;em&gt;<em>Italic</em>&lt;/em&gt;</li>
        </ul>
    </div>
</div>
</div>
</div>
<div class="row">
<div class="large-6 column">
<p style="text-indent:1.5rem">
There is no visual difference but there is a semantic one. Blind people, who access a website through text-to-speech programs, can not see the <span style="font-weight:300">&lt;b&gt;</span> or <span style="font-weight:300">&lt;i&gt;</span> tag, the text-to-speech program will not do anything differently. But if you use the <span style="font-weight:300">&lt;strong&gt;</span> tag, the text-to-speech program will speak the text with emphasis to convey that the text is important, or in the case of italics, pronounced differently.</p>
</div>
</div>
<div class="row dont-break-in-print">
<div class="large-6 column">
<h3>Secondary Emphasis</h3>

<h5>Underlining</h5>


<p><b>Do not</b> use underlining for emphasis in running text; it is too distracting. In print underlining is used for secondary emphasis, marks added by the reader. On the Web or in interactive documents, underlining is <a href="#" data-reveal-id="underline">reserved for hyperlinks</a>.</p>


<div id="underline" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">

<p><span style="text-decoration:underline">Click here</span>. When users see underlined text online they will think it is a hyperlink, they will try to click on it only to be frustrated.</p>

<a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div> 

<h5>Hypertext</h5>
<p><b>Hypertext</b> is text that links to other text. Hypertext is different from HyperMedia — hyperlinks outside of the text — such as graphics or the user interface. We give hyperlinks visual hierarchy through emphasis but rather than using bold or italics, we underline the hypertext and set it in a different color to make it distinguishable from the non interactive text. Hypertext allows a reader to navigate information in a nonlinear fashion and therefore has the potential to interrupt reading and the author's intent. As we have alrady discussed, on the Web, readers skim and scan text looking for something specific; to aid the foraging process, follow the rules:</p>
<ul>
<li><p>Ensure hyperlinks stand out.</p></li>
<li><p>Avoid long hyperlinks, short ones are easier to scan.</p></li>
<li><p>Avoid needless repetition.</p></li>
<li><p>Only link words that represent options.</p></li>
</ul>
<p>Consider  finding the planet Jupiter in the following examples.</p>
</div>
</div>
<div class="row">
    <div class="large-3 columns">
        <div class="panel no">
            <ul style="list-style: none;">
                <li><a href="#/">Planet Mercury</a></li>
                <li><a href="#/">Planet Venus</a></li>
                <li><a href="#/">Planet Earth</a></li>
                <li><a href="#/">Planet Mars</a></li>
                <li><a href="#/">Planet Jupiter</a></li>
                <li><a href="#/">Planet Saturn</a></li>
                <li><a href="#/">Planet Uranus</a></li>
                <li><a href="#/">Planet Neptune</a></li>
                <li><a href="#/">Dwarf Planet Ceres</a></li>
                <li><a href="#/">Dwarf Planet Pluto</a></li>
                <li><a href="#/">Dwarf Planet Haumea</a></li>
                <li><a href="#/">Dwarf Planet Eris</a></li>
                <li><a href="#/">Dwarf Planet Makemake</a></li>
            </ul>
        </div>
    </div>
    <div class="large-3 columns">
        <div class="panel yes">
            <ul style="list-style: none;">
           		<li><h5 class="pull-top">Planets</h5></li>
                <li><a href="#/">Mercury</a></li>
                <li><a href="#/">Venus</a></li>
                <li><a href="#/">Earth</a></li>
                <li><a href="#/">Mars</a></li>
                <li><a href="#/">Jupiter</a></li>
                <li><a href="#/">Saturn</a></li>
                <li><a href="#/">Uranus</a></li>
                <li><a href="#/">Neptune</a></li>
                <li><h5>Dwarf Planets</h5></li>
                <li><a href="#/">Ceres</a></li>
                <li><a href="#/">Pluto</a></li>
                <li><a href="#/">Haumea</a></li>
                <li><a href="#/">Eris</a></li>
                <li><a href="#/">Makemake</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="large-6 columns">
<p>Both examples ensure the link stands out by changing the color and reinforce interactivity by underlining it and providing feedback on hover. However, by applying emphasis on the entire line of text, we are forcing the reader to read line-by-line. Additionally, repeating the words <i>planet</i> and <i>dwarf planet</i> bury the important words your readers are scanning for. By only linking words that represent options, the second example, which combines emphasis and visual hierarchy, aids the scanning of text.</p>    
    </div>
</div>
<div class="row hide-on-print ">
    <div class="large-6 columns push-top">
        <a href="lessons.php#text" class="button secondary">Back to Lessons</a>
        <a href="reverse.php" class="button right">Reversed Type</a>
    </div>
</div>
<style>
h1+ul, h2+ul, h3+ul, h4+ul, h5+ul, h6+ul, h5+ol { margin:0;}
</style>
<?php include("parts/footer.php"); ?>