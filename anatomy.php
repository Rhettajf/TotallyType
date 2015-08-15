<?php 
	$title = "Totally Type Anatomy";
	$page = "lessons";	
	$bclass = "";
	$invert = "off";
	include("parts/header.php")
?>
    <link href='http://fonts.googleapis.com/css?family=UnifrakturMaguntia' rel='stylesheet' type='text/css'>
    <style type="text/css">
        .pre-venetian {font-family: 'UnifrakturMaguntia', cursive;}
        section {margin-bottom:1.5rem;}
		 h6+.imgsnap { margin:0;}
		 img {margin:0 auto; display:block;}
    </style>
    
<!-- Lesson Title -->    
<div class="row">
    <div class="large-6 columns">
        <h1>Anatomy</h1>        
        <p>Typeface anatomy describes the graphic elements and structure of characters in a typeface. Understanding typeface anatomy allows a designer to use type effectively. Anatomy is a key factor in identifying, classifying, selecting, pairing, and setting type.</p>
    </div>
</div>  
<!-- Lines -->
<section id="lines">
<div class="row">
    <div class="large-6 columns">
        <h2>Getting in Line</h2>
        <p class="push-bottom">A typeface is a delicate system of carefully balanced and stylistically related characters. When characters get in line they should do so in harmony creating rhythm and consistency. This is achieved by aligning each character on five horizontal lines. These horizontal lines are the guides for capital and lowercase letters and ascenders and descenders in a typeface. Each typeface places these lines at different locations relative to the baseline where characters sit. The location of these lines has a large effect on a type design and knowing how to identity where they are allows us to classify, select, pair, and align type and predict how a typeface will perform in the environment we are setting type in.</p>
    </div>
</div>    
<div class="row">
    <div class="large-6 columns">
        <?php echo file_get_contents("img/measure.svg"); ?>
    </div>
</div>
<div class="row hide-no-js" role="navigation">
    <div class="large-6 columns">
        <ul class="button-group radius text-center">
            <li><a href="#/" id="ascbtn" class="button inner">1. Ascender</a></li>
            <li><a href="#/" id="capbtn" class="button inner">2. Cap Height</a></li>
            <li><a href="#/" id="xbtn" class="button inner">3. x-height</a></li>
            <li><a href="#/" id="basebtn" class="button inner">4. Baseline</a></li>
            <li><a href="#/" id="desbtn" class="button inner">5. Descender</a></li>
        </ul>
        <hr title="lines" class="pull-bottom">
    </div>
</div>
<div class="row">
    <div class="large-3 columns">
        <h6>1. Ascender Height</h6>
        <p>The ascender height, also called the <i>topline</i>, is where the top of letters or ascenders such as in the letters <i>l</i> and <i>h</i> reach above the cap-height.</p>
    </div>
    <div class="large-3 columns">
        <h6>2 .Cap Height</h6>
        <p>The cap-height marks the height of capital letters; it is the distance from the baseline to the top of capital letters such as the <i>E</i>.</p>
    </div>
</div>
<div class="row">
    <div class="large-3 columns">
        <h6>3. x-height</h6>
        <p>The x-height marks the distance between the baseline and the top of lower case letters; specifically, the height of the lowercase <i>x</i>. The x-height is a factor in typeface identification, legibility, and readability.</p>        
	</div>        
    <div class="large-3 columns">
        <h6>4. Baseline</h6>
        <p>The baseline is the imaginary line upon which every character sits. It is a constant, the starting point used for comparing, measuring, and aligning text. In most typefaces round letters such as <i>a</i> or <i>o</i> overshoot the baseline.</p>
    </div>
</div>
<div class="row">
    <div class="large-3 columns">
        <h6>5. Descender Depth</span></h6>
        <p>Descender depth is how far descenders, such as in the letters <i>p</i> and <i>y</i>, hang or <i>descend</i> below the baseline.</p>
    </div>
    <div class="large-3 columns"></div>
</div>   
</section>
    
    
<!-- Letters -->
<section id="letters">
<article>
<div class="row">
    <div class="large-6 columns">
        <h2>Letters</h1>
        <p class="push-bottom">Typically, anatomy is taught referencing a serif typeface, however, both san-serif and serif typefaces share a global anatomy or skeleton. The structure of letters are used to classify and compare different typefaces. By learning what every typeface has in common it is easier to spot the differences that make classification and identification possible. Anatomy can be grouped into sections: letters, strokes, counter-space, terminals, and serifs. A letter is a character that represents the sounds used in speech; a predetermined symbol of an alphabet, therefore, letters must follow a familiar skeleton.</p>
    </div>
</div>       

<div class="row">    
    <div class="large-3 medium-3 columns">
        <h6>Uppercase</h6>
        <?php echo file_get_contents("img/anatomy/capital.svg"); ?>
        <p>A letter or group of letters of the size and form generally used to begin sentences and proper nouns. Also known as “capital letters”.</p>
    </div>
    <div class="large-3 medium-3 columns">
        <h6>Lowercase</h6>
        <?php echo file_get_contents("img/anatomy/lowercase.svg"); ?>
        <p>The smaller form of letters in a typeface. They make up the bulk of written text.</p>
    </div>
</div>
<div class="row">    
    <div class="large-3 medium-3 columns">
        <h6>Ascender</h6>
        <?php echo file_get_contents("img/anatomy/ascender2.svg"); ?>
        <p>The part of lowercase letters that extend above the x-height.</p>
    </div>
    <div class="large-3 medium-3 columns">
        <h6>Descender</h6>
        <?php echo file_get_contents("img/anatomy/descender.svg"); ?>
        <p>The part of lowercase letters that extends below the baseline.</p>
    </div>
</div>
</article>
<!-- Advanced Letters -->  
<div class="row hide-no-js">  
    <div class="large-6 columns push-top text-center">
<a href="#" class="button read_more push-top"><span>Show</span> Advanced Letters</a>
    </div>
</div> 
<article class="complex">
<div class="row">
    <div class="large-3 columns">
      <h6>Double-storey</h6>
        <img src="img/anatomy/double.png" width="351" height="243" alt=""/>
<p>The double-storey <i>a</i> and <i>g</i> are common in upright roman typefaces. The double-storey <i>a</i> is comprised of a closed bowl and a stem with a finial arm over the bowl creating a partially enclosed area or aperture above the bowl.</p>
    <div id="d-storey" class="reveal-modal" data-reveal aria-labelledby="Double-storey" aria-hidden="true" role="dialog">
        <p>Punctuation after italicized words should also be italicized with the exception of exclamation!, question? and &ldquo;quotation marks&rdquo; that are not part of the italicized phrase. Possessive <i>s</i> and the apostrophe at the end of an italicized word is set roman. </p>
        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div> 
    </div>

    <div class="large-3 columns">
      <h6>Single-storey</h6>
        <img src="img/anatomy/single.png" width="351" height="243" alt=""/>
<p>The single-storey <i>a</i> and <i>g</i> is most common in handwriting, calligraphy, roman italics, and some sans-serif typefaces. We learn to write the single-story <i>a</i> and <i>g</i> as children. The single-story <i>a</i> (bowl without finial arm) is an identifying feature of a true roman italic. An italicized double-storey <i>a</i> is usually a <i>fake</i> italic.</p>
    </div> 
</div>
<div class="row"> 
    <div class="large-3 columns">
        <h6>Serif</h6>
        <img src="img/anatomy/serif.png" width="351" height="243" alt=""/>
        <p>A slight projection finishing off a stroke of a letter in certain typefaces.</p>
    </div>  
    <div class="large-3 columns">
        <h6>Axis</h6>
        <img src="img/anatomy/axis.png" width="351" height="243" alt=""/>
        <p>An imaginary line drawn from top to bottom of a glyph bisecting the upper and lower strokes is the axis.</p>
    </div>
</div>

<div class="row"> 
    <div class="large-3 columns">
        <h6>Tittle or Dot</h6>
        <img src="img/anatomy/dot.png" width="351" height="243" alt=""/>
        <p>A small distinguishing mark, such as an diacritic on a lowercase <i>i</i> or <i>j</i>.</p>
    </div>
    <div class="large-3 columns">
        <h6>Diacritic</h6>
        <img src="img/anatomy/diacritic.png" width="351" height="243" alt=""/>
        <p>A ancillary mark or sign added to a letter.</p>
    </div>
</div>

<div class="row"> 
    <div class="large-6 columns">
<h6>Letter Groups</h6>    
<p>We already defined a typeface as a group of stylistically related characters, but we can take that further by saying it is a group of groups of stylistically related characters. The letters in a typeface can be grouped by relationships or similarites in form, space, and size.</p> 
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

    </div>
</div>


</article>
</section> 
       
<!-- The Core Parts of Letters -->    
<section id="letter-parts"> 
<article>
<div class="row">
    <div class="large-6 columns">
        <h2>Stem and Strokes</h2>
        <p>A character is a lot like a plant — a stem with branches (strokes) and leaves (parts) attached. Each character in a typeface stems from here — pun intended.</p>
    </div>
</div>    
<!-- Strokes -->
<div class="row"> 
    <div class="large-3 columns">
        <h6>Stem</h6>
        <img src="img/anatomy/stem.png" width="351" height="243" alt=""/>
		<p>The stem is the main, usually vertical stroke of a letterform. The stem is the dominant stroke(s) in a character; the stem provides stability to the character making it appear as if it is standing and wont fall over.</p>
    </div>
    <div class="large-3 columns">
        <h6>Stroke</h6>
        <img src="img/anatomy/stroke.png" width="351" height="243" alt=""/>
        <p>A stroke is the main diagonal line in letters such as: <i>N, M, z, W, Y,</i> etc. The stroke is secondary to the main stem(s).</p>
	</div>
</div>
<div class="row"> 
    <div class="large-3 columns">
        <h6>Hairline Stroke</h6>
        <img src="img/anatomy/hairline.png" width="351" height="243" alt=""/>
        <p>A hairline is the thinnest stroke found in specific typefaces that consists of strokes of varying widths.</p>
    </div>
    <div class="large-3 columns">
        <h6>Bowl</h6>
        <img src="img/anatomy/bowl.png" width="351" height="243" alt=""/>
        <p>The fully closed, rounded part of a character that encloses the circular or curved parts (counter) of some letters such as <i>d, b, o, D,</i> and <i>B.</i></p>
    </div>
</div>
<div class="row">
    <div class="large-3 columns">
        <h6>Cross Stroke</h6>
        <img src="img/anatomy/cross-stroke.png" width="351" height="243" alt=""/>
        <p>A horizontal stroke across the stem of a lowercase <i>t</i> or <i>f</i>. The cross stroke differs from a crossbar because it crosses over the stem. The varying positioning, thickness, and slope of the cross stroke is an identifying feature of many type designs.</p>
    </div>   
    <div class="large-3 columns">
        <h6>Crossbar</h6>
        <img src="img/anatomy/crossbar.png" width="351" height="243" alt=""/>
        <p>The Crossbar, also known as a Bar, is the horizontal stroke across the middle of the uppercase <i>A, B</i> and <i>H</i> and the bottom of the eye of an <i>e.</i></p>
    </div>
</div>
<div class="row">
    <div class="large-3 columns">
        <h6>Arm</h6>
        <img src="img/anatomy/arm.png" width="351" height="243" alt=""/>
        <p>The arm of a letter is the horizontal stroke on some characters that does not connect to a stroke or stem at one or both ends. The top of the capital <i>T</i> and the horizontal strokes of the <i>F</i> and <i>E</i> are examples of arms.</p>
    </div>  
    <div class="large-3 columns">
        <h6>Leg</h6>
        <img src="img/anatomy/leg.png" width="351" height="243" alt=""/>
        <p>The down sloping stroke of the <i>K, k,</i> and <i>R.</i></p>
    </div>
</div>
</article>
<!-- Advanced Strokes -->  
<div class="row hide-no-js">  
    <div class="large-6 columns push-top text-center">
		<a href="#" class="button read_more push-top "><span>Show</span> Advanced Strokes</a>
    </div>
</div> 
<article class="complex">
<div class="row">
    <div class="large-3 columns">
      <h6>Apex</h6>
      <img src="img/anatomy/apex.png" width="351" height="243" alt=""/>
<p>A point at the top of a character where two strokes meet.</p>
    </div>    
    <div class="large-3 columns">
      <h6>Vertex</h6>
      <img src="img/anatomy/vertex.png" width="351" height="243" alt=""/>
<p>The outside point at the bottom or top of a character where two strokes meet.</p>
    </div>
</div>
<div class="row">
	<div class="large-3 columns">
      <h6>Arch</h6>
      <img src="img/anatomy/arch.png" width="351" height="243" alt=""/>
<p>An arcing stroke is called a shoulder or sometimes just an arch, as in <i>h</i> <i>n</i> <i>m</i>.</p>
    </div>      
    <div class="large-3 columns">
        <h6>Shoulder</h6>
        <img src="img/anatomy/shoulder.png" width="351" height="243" alt=""/>
        <p>The curved stroke that connects the stem and leg in characters such as <i>n</i> and <i>m.</i></p>
    </div>
</div>
<div class="row">  
    <div class="large-3 columns">
        <h6>Spine</h6>
        <img src="img/anatomy/spine.png" width="351" height="243" alt=""/>
        <p>The spine is the main left to right curving stroke in S and s. The spine may be almost vertical or mostly horizontal, depending on the typeface.</p>
    </div>
    <div class="large-3 columns">
        <h6>Tail</h6>
        <img src="img/anatomy/tail.png" width="351" height="243" alt=""/>
        <p>A tail is a downward finishing stroke typically found in the <i>Q.</i> Some uppercase characters like <i>K</i> and <i>R</i> have tails too.</p>
    </div>  
</div>
<div class="row">  
	<div class="large-3 columns">
        <h6>Hook</h6>
        <img src="img/anatomy/hook.png" width="351" height="243" alt=""/>
        <p>The curved stroke in a terminal found in the <i>f</i> and <i>r.</i></p>
    </div>
    <div class="large-3 columns">
        <h6>Arc of Stem</h6>
        <img src="img/anatomy/arc.png" width="351" height="243" alt=""/>
        <p>An Arc of Stem is a curved stroke the flows into a straight stroke. Examples include <i>f, j</i> and <i>t.</i></p>
    </div>        
</div>
<div class="row">
    <div class="large-3 columns">
      <h6>Crotch</h6>
      <img src="img/anatomy/crotch.png" width="351" height="243" alt=""/>
<p>An acute, inside angle where two strokes meet.</p>
    </div>     
    <div class="large-3 columns">
      <h6>Finial</h6>
      <img src="img/anatomy/finial.png" width="351" height="243" alt=""/>
<p>A tapered or curved end.</p>
    </div>
</div>
<div class="row">
    <div class="large-3 columns">
        <h6>Ear</h6>
        <img src="img/anatomy/ear.png" width="351" height="243" alt=""/>
		<p>A small stroke extending from the upper-right side of the bowl of lowercase <i>g</i>; also appears in the angled or curved lowercase <i>r</i>.</p>
    </div> 
    <div class="large-3 columns">
    </div>
</div>
</article>
</section>     
    
<!-- Counter Space -->
<section id="counter-space"> 
<div class="row">
    <div class="large-6 columns">
        <h2>Counter-space</h2>
        <p>Counter-space is the hole in characters, an entirely or partially enclosed space.</p>
 
    </div>
</div>
<article>
<div class="row">
    <div class="large-3 columns">
        <h6>Counter</h6>
        <img src="img/anatomy/counter.png" width="351" height="243" alt=""/>
        <p>A Counter is the negative or counter-space of a letterform.</p>
    </div>    
    <div class="large-3 columns">
        <h6>Aperture</h6>
        <img src="img/anatomy/aperture.png" width="351" height="243" alt=""/>
        <p>An aperture is the opening between an open counter and the outside (ocean) of the letter. </p>
    </div>  
</div>
</article>
<!-- Advanced Counters -->  
<div class="row hide-no-js">  
    <div class="large-6 columns push-top text-center">
		<a href="#" class="button read_more push-top "><span>Show</span> Advanced Counters</a>
    </div>
</div> 
<article class="complex">
<div class="row">  
    <div class="large-3 columns">
        <h6>Open and Closed Counters</h6>
        <img src="img/anatomy/openandclosedcounters.png" width="351" height="243" alt=""/>
        <p>A counter can be described as either being closed or open. If you think of a letter form as dry land, an open counter is a bay and a closed counter is a lake. The bounding-box is the ocean.</p>
    </div>
    <div class="large-3 columns">
        <h6>Eye</h6>
       <img src="img/anatomy/eye.png" width="351" height="243" alt=""/>
        <p>The eye refers specifically to the closed counter in a lowercase <i>e</i>.</p>
    </div>
</div>
</article>
</section>   

<!-- Terminals -->
<section id="terminals"> 
<div class="row">
    <div class="large-6 columns">
        <h2>Terminals</h2>
        <p>A terminal is the end of a stroke that does not end in a serif. <b>Coming soon!</b></p> 
    </div>
</div>
</section> 

<!-- Serifs -->
<section id="terminals"> 
<div class="row">
    <div class="large-6 columns">
        <h2>Serifs</h2>
        <p>A serif is a decorative line attached to the end of a stem or stroke in serif typefaces. <b>Coming soon!</b></p> 
    </div>
</div>
</section> 

<div class="row">
    <div class="large-6 columns push-top">
        <a href="lessons.php#letter" class="button secondary">Back to Lessons</a>
        <a href="punctuation.php" class="button right">Punctuation</a>
    </div>
</div>

<?php include("parts/footer.php"); ?>