<?php 
	$title = "Totally Type Lessons";
	$page = "lessons";	
	$bclass = "";
	$invert = "off";
	include("parts/header.php")
?>
<div class="row">
    <div class="large-6 columns">
<h1>Alignment</h1>

<p>Alignment, also referred to as justification, is the setting of text flow. As we have already covered, reading is a skill we gain; it is unnatural. Automatic eye movement is one skill we are masters at. As our eyes move from line to line they automatically go back to the same horizontal position we started at. Alignment ensures we send our readers to the right position.</p>

<h6>The #1 Rule</h6>

<p>Always have a specific purpose for changing alignment. Using a variety of alignments can create rhythm and motion while simultaneously cluttering up the page and annoying your readers. </p>


    <h3>Flush-Right and Centered Alignment</h3>
    
    <div class="row">
        <div class="large-3 medium-3 column">
        <div class="panel">
        <h6 class="text-right">Flush-Right</h6>
        <p style="border-right:1px solid #007468;" class="text-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris malesuada consectetur magna, et gravida lacus lobortis ac. Fusce ac felis sed lectus faucibus tincidunt. Cras elementum, massa vel dignissim interdum, nisl nisi bibendum lorem, vel fringilla erat erat vitae justo.</p>
        </div>
        </div>
        <div class="large-3 medium-3 column">
        <div class="panel">
        <h6 class="text-center">Center</h6>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris malesuada consectetur magna, et gravida lacus lobortis ac. Fusce ac felis sed lectus faucibus tincidunt. Cras elementum, massa vel dignissim interdum, nisl nisi bibendum lorem, vel fringilla erat erat vitae justo.</p>
        </div>
        </div>
    </div>
    
    <p>When running text is centered, flush-right or aligned in opposition of a particular script, we send our readers eyes to the wrong place. We read from <abbr title="left-to-right">LTR</abbr> (left-to-right) and anchor our eye on the left margin. In centered or flush-right text, the left margin is ragged or uneven, making finding the next line much harder. Rather than being an automatic act, readers have to consciously search and adjust their eyes to the start of each line. In return, reading becomes slower and more difficult.</p>
    <h6>What you need to know.</h6>
    <ul>
    <li>Centered and flush-right text blocks are difficult to read.</li> 
    <li><strong>Never</strong> center or right align bulleted or numbered lists.</li>
    <li><strong>Never</strong> center whole paragraphs. Just don't do it.</li>
    <li>Centered text blocks increase the search time because both edges of the paragraph are ragged.</li>
    <li>Centered text is difficult to align with other page elements.</li>
    <li>You can center short phrases, titles or headers, signage, invitations, poems, and song lyrics.</li>
    <li>In other languages such as Arabic and Hebrew, text is read <abbr title="right-to-left">RTL</abbr> (right-to-left) and therefore, text is aligned flush-right.</li>
    </ul>

    <h3>Flush Left Alignment</h3>
 
 
        <div class="panel">
<p style="border-left:1px solid #007468;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris malesuada consectetur magna, et gravida lacus lobortis ac. Fusce ac felis sed lectus faucibus tincidunt. Cras elementum, massa vel dignissim interdum, nisl nisi bibendum lorem, vel fringilla erat erat vitae justo.</p>
        </div>
 
    
        <p>Flush-left is aligned along the left margin or gutter. In English and most European languages where words are read <abbr title="left-to-right">LTR</abbr> text is aligned flush left. Flush-left text is the most legible option; it follows a <abbr title="left-to-right">LTR</abbr> eye movement and is predictable. It is the default in print and online — it is easier to set and more natural to read.</p>
    <h6>What you need to know.</h6>
    <ul>
        <li>Softens the overall appearance of the page by adding white space to the right edge.</li>
        <li>Results in the best block texture and color by preserving the original spacing intended by the typeface designer.</li>
        <li>The right margin is ragged, continue reading to learn how to control rags.</li> 
    </ul>

<h3>Rags</h3>
 
<p>A <i>rag</i> refers to the irregular or uneven vertical margin of a block of type. In flush-left, the right margin is ragged. In flush-right, the left margin is ragged. In center-aligned text, both the left and right margin are ragged. </p>
<h6>What you need to know.</h6>
<ul> 
<li>When setting type with a rag, pay attention to the shape of the block.</li> 
<li>A good rag goes in and out from line-to-line in small increments.</li> 
<li>A poor rag creates distracting shapes of whitespace in the margin.</li>
<li>Left or Right alignment requires less adjustment; the uneven rag reduces the need for perfect alignment.</li>
<li><b>Do not rely on the line breaks.</b> Especially online, where you can't control line-length, the &lt;br&gt; tag is not a solution. The only time to use a hard line break is in centered text, just be aware of where you place them.
</li>
</ul>

<h3>Widows and Orphans</h3>

<p>A <b>widow</b> is a very short line – usually one word or the end of a hyphenated word – at the end of a paragraph or column. The short line or word leaves too much white space between paragraphs or at the bottom of a page or column. This interrupts the reader’s eye moving from paragraph to paragraph.</p>

<div class="panel">
<div class="row">    
<div class="large-3 medium-3 column">
<div class="hide-for-small"><img src="img/widow1.png" width="351" height="189" alt=""/> </div>
</div>
<div class="large-3 medium-3 column">
  <img src="img/widow2.png" width="351" height="189" alt=""/> 
</div>
</div>
</div>

<p>An <b>orphan</b> is a word or part of a word at the beginning of a column or a page. This often happens when text flows in a multiple column layout. It results in poor horizontal alignment at the top of the column or page.</p>

<p class="no-indent bold">You can fix widows and orphans by reworking the rag or editing the copy.</p>

   
    <h3>Justified</h3>
 
        <div class="panel">
<p class="text-justify" style="border-left:1px solid #007468; border-right:1px solid #007468;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris malesuada consectetur magna, et gravida lacus lobortis ac. Fusce ac felis sed lectus faucibus tincidunt. Cras elementum, massa vel dignissim interdum, nisl nisi bibendum lorem, vel fringilla erat erat vitae justo. Praesent tincidunt rutrum mi, at condimentum sem consectetur vel.</p>
        </div>
<p>Justified text is flush on both the left and right margin. The even margins give a text block a more formal and geometric appearance. Justified text is the hardest to set; in order for the text to be set flush on both margins requires the adjustment of word-spacing, letter-spacing, and hyphenation on a paragraph level. This tedious process is to combat <i>rivers</i> &mdash; the white space created by increasing the spacing between words and letters.</p> 
    
<div class="panel">
<div class="row">    
<div class="large-3 medium-3 column"><img src="img/justify_wrong.png" width="351" height="189" alt=""/></div>
<div class="large-3 medium-3 column push-top-small"><img src="img/justify_right.png" width="351" height="189" alt=""/></div>
</div>
    </div>
    
        
    <p>In this example, the block on the left is justified by increasing the space between words. This is the standard way text is justified online and results in rivers &mdash; shown by the lines running through the text. The block on the right was manually set by slightly adjusting word-spacing, letter-spacing, and glyph scaling. This is not possible on the Web where you don't have control over line-length, text size, and hyphenation.</p>
<h6>What you need to know.</h6>
    <ul>
        <li>Justified text typically requires the use of and/or results in more hyphens than flush-left text.</li>
        <li><strong>Do not</strong> use justification with short line lengths or narrow columns. Short lines of text will stretch or squeeze a fonts original spacing compromising the readability, color, and texture of the text block. This results in uncontrollable rivers.</li>
        <li><strong>Do not</strong> use justification on the Web.</li>
    
<li>On the Web justification adds space between words. On-screen you can only add whole pixel increments resulting in large amounts of space between some words (rivers), especially in narrow columns.</li>

<li>In print we can offset this awkward space by increasing or decreasing tracking, letter-spacing, word-spacing, and glyph scaling in small amounts on a line-by-line basis. This is not possible on the Web where you don't have control over line-length, text size, and hyphenation.</li>
    </ul>

</div>
</div>
<div class="row">
    <div class="large-6 columns">
    <h4>Hanging punctuation</h4>
    
<div class="panel">    
<p style="border-left: 1px solid #007468;">&ldquo;Punctuation marks are mostly whitespace. When the mark is the first character in a block&nbsp;&mdash;&nbsp;it leaves too much whitespace disrupting the optical flow of text.&rdquo;</p>
<p class="quote" style="border-left: 1px solid #007468;">When Gutenberg was creating his Bible in the 1400’s he developed a style of setting punctuation marks called <i>hanging punctuation</i> or <i>optical alignment</i> to fix this disruption.</p>
</div>
<p>Optical Margin Alignment can improve the balance of a block. Optical alignment can be achieved by hanging punctuation marks (such as periods, commas, quotation marks, and dashes) and the edges of letters such as <i>W</i> and <i>A</i> hang outside the text margins. In the example above, the first block looks awkward. This is because the opening double quote at the beginning of the line offsets the margin. By keeping the mark inside our margin, we create a ragged edge on a usually flush block of text. Additionally, it mimics a first-line indent. We address this problem by aligning the margin optically by letting the mark hang outside. Because punctuation marks like the double quote are mostly white space, we create the illusion of a flush left margin. </p>

<h6>How to hang punctuation when using relative units.</h6>
<p>In InDesign, Optical Margin Alignment is <a href="https://helpx.adobe.com/indesign/using/formatting-paragraphs.html#create_hanging_punctuation" title="Create hanging punctuation " target="_blank">turned on</a> in the story panel. On the Web, however, many designers guess at the negative indent needed to hang punctuation; the average double quote is -0.4em, but the key word there is average, every font is different. You don't have to stab in the dark when hanging punctuation on the Web.</p>

<div class="panel screen">
<div class="row">
<div class="large-6 columns">
<p data-height="420" data-theme-id="9850" data-slug-hash="eNxVgd" data-default-tab="result" data-user="rhettajf" class='codepen'>See the Pen <a href='http://codepen.io/rhettajf/pen/eNxVgd/'>Hanging Punctuation</a> by Rhett (<a href='http://codepen.io/rhettajf'>@rhettajf</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
<script async src="//assets.codepen.io/assets/embed/ei.js"></script>
</div>
</div>
</div>

</div>

</div>



<div class="row">
    <div class="large-6 columns push-top">
        <a href="lessons.php#text" class="button secondary">Back to Lessons</a>
        <a href="blocks.php" class="button right">Indentation</a>
    </div>
</div>
<style>
h1+ul, h2+ul, h3+ul, h3+ul, h5+ul, h6+ul, h5+ol { margin:0;}
</style>
<?php include("parts/footer.php"); ?>