<p>The opposite of absolute units, relative units have no fixed value &mdash; they are relative to an absolute unit.</p>

<h5>The EM and EM Square</h5>

<p>Type is measured in ems. In metal type, the <i>em square</i> is the same dimensions as the type size. It gets its name because early fonts usually cast the letter <span style=" display:inline-block; vertical-align: middle; width:1em; height:1em; background-color:#007468; color:#fff; text-align:center; line-height:1;">M</span> on a square body. In digital type, an em is a unit of measurement relative to the point size. The em is not defined by the typeface but by the size we set our type at &mdash; in 10 point type, an em is 10 points... and in 36 point type an em is 36 points. An em may or may not equate to the width of the <i>M</i>.</p>
<p>In digital fonts, every character in a typeface is relative to the font size. This allows, like <abbr title="HyperText Markup Language">HTML</abbr> and <abbr title="Cascading Style Sheets">CSS</abbr>, the separation of structure (glyphs) and style (size, side bearings, kerning, etc.). By using relative units, a digital typeface can be scaled to any size. Most digital fonts are based on 1,000, 1,024 or 2,048 <abbr title="units per em">UPM</abbr> &mdash; units-per-em. The <abbr title="units per em">UPM</abbr> defines a grid for each contour point to snap to. A font with 1000 <abbr title="units per em">UPM</abbr> is designed within a 1,000 x 1,000 unit square (one million units).</p>



<p>The computer system only needs to know the point size, from which it calculates everything relative to. A fonts built in kerning table for example is relative. This allows one kerning table per font rather than one for every point size. Additionally, our hard work can be scaled; when coming from 12 point to 14 point the type size, white space, and our typesetting all get resized proportionally.</p>

<h6>Whats the point?</h6>
<p>For many years I have seen designers perplexed by font size; saying there is no point to point size when 12 point type doesn't equal 12 points. Point size is not pointless, the bounding box of 12 point type is exactly 12 points tall. However, there are characters and elements in a typeface that reach outside the bounding box. If you want to know more about how font size is calculated in digital fonts, read the following explanation.</p>

<div class="row hide-no-js">  
    <div class="large-6 columns text-center">
<a href="#" class="button read_more push-top ">Show Advanced</a>
    </div>
</div> 

<article class="complex dont-break-in-print">
<h5>What is the deal with point size in digital type.</h5>
<div class="row dont-break-in-print">
    <div class="large-3 columns">
    	<img src="img/point-size-metrics.png" width="1000" height="807" alt=""/>
    </div>
    <div class="large-3 columns">


<p class="push-top">Lets look at Chaparral Pro, the OpenType font used on this site. Chaparral has 1000 <abbr title="units per em">UPM</abbr>. The point-size is the distance between the ascender and descender lines, the 1000 <abbr title="units per em">UPM</abbr> grid scaled. The glyphs within this space get resized proportionally when we set a point size. In this example, we are looking at Chaparral's capital M, tallest ascender Å, and longest descender Ț. Above the <abbr title="units per em">UPM</abbr> is the <b>yMax</b>, Chaparral's max ascender height and below, is the <b>yMin</b>, Chaparral's max descender value. Both the yMin and and yMax values are used to determine the rendered font size and line spacing values. The <b>line gap</b> is used to determine the default line spacing value and overlaps the yMin. In Chaparral, the line gap is 200 and with a <abbr title="units per em">UPM</abbr> of 1000, a font size of 1em has a default line-height of 1.2em.</p>
    </div>
</div>
<div class="row dont-break-in-print">
    <div class="large-3 columns">
		<p class="push-top">Lets see how they stack up. The line gap of the top line aligns with the ascender line of the following line of text, this space is 200 <abbr title="units per em">UPM</abbr>. In other words the distance between baselines is 1200 <abbr title="units per em">UPM</abbr>. If we were to decrease or increase the line-height, we are changing this space. Both the yMin of line one and the yMax of line two fit within the line gap with a little room to spare. All of this ensures that ascenders and descenders in lines of type never collide.</p>
    </div>
    <div class="large-3 columns">
		<img src="img/point-size-metrics-2.png" width="1000" height="1479" alt=""/> 
    </div>
</div>
</article>

<div class="row dont-break-in-print">
<div class="large-6 column">
<h5>What about the Web? </h5>
<p>One of the most confusing and complicated attributes in <abbr title="Cascading Style Sheets">CSS</abbr> is font-size. In <abbr title="Cascading Style Sheets">CSS</abbr>, we have four different units &mdash; pt, px, em and % &mdash; we can use to set the size of text in a web browser. We already covered the point, pixel, and em.</p>
<h6>Percent</h6>
<p>Percent is used in web design and works much like the em. The difference is that it is relative to the root font size of a device. For example a desktop browser has a root font size of 16 pixels. If we set our font size to 100%, it is the same as setting it to 16 pixels. The advantage of using the percent unit is that the text remains scalable for mobile devices and accessibility. </p>
<h6>Root Font Size</h6>
<p>It’s easy to understand the difference between absolute and relative units when you see them in action.</p>


<style>
input[type="text"] { display:inline-block; width:3em; margin:0 0.2em;}
input[type="text"] span { display:inline-block;}
#b1 td:nth-child(2n+1) { font-weight:600; width:3em;}
</style>

<div class="row">
    <div class="large-6 column">
    <table style="width:100%; table-layout:auto; font-size:0.8888888888888889em; line-height:1.5rem;" class="lining hide-on-print ">
<tbody id="b1">
<tr>
    <th>Base</th>
    <th>
    <label for='base1'>font-size:</label>
    <input id='base1' type='text' value='100'><span>%</span>    
    </th>
</tr>
<tr>
    <td>12pt</td>
    <td style="font-size:12pt; line-height:1.5em;">The quick brown fox jumps over the lazy dog.</td>
</tr>
<tr>
    <td>16px</td>
    <td style="font-size:16px; line-height:1.5em;">The quick brown fox jumps over the lazy dog.</td>
</tr>
<tr>
    <td>1em</td>
    <td style="font-size:1em; line-height:1.5em;">The quick brown fox jumps over the lazy dog.</td>
</tr>
<tr>
    <td>100%</td>
    <td style="font-size:100%; line-height:1.5em;">The quick brown fox jumps over the lazy dog.</td>
</tr>
</tbody>
</table>
    </div>
</div>

<script>
function update() {
$('#b1').css({
    'font-size': $('#base1').val()+'%'
  });  
}

$('input').on('input', function() {
  update();
});

update();
</script>

<table style="width:100%; font-size:12pt;" class="lining print-only">
<tbody>

<tr>
    <td>Base</td>
    <td>body {font-size:100%;}</td>
    <td>body {font-size:120%;}</td>
</tr>
<tr>
    <td>12pt</td>
    <td style="font-size:12pt;">The quick brown fox jumps</td>
    <td style="font-size:12pt;">The quick brown fox jumps</td>
</tr>
<tr>
    <td>16px</td>
    <td style="font-size:16px;">The quick brown fox jumps</td>
    <td style="font-size:16px;">The quick brown fox jumps</td>
</tr>
<tr>
    <td>1em</td>
    <td style="font-size:1em;">The quick brown fox jumps</td>
    <td style="font-size:1.2em;">The quick brown fox jumps</td>
</tr>
<tr>
    <td>100%</td>
    <td style="font-size:100%">The quick brown fox jumps</td>
    <td style="font-size:120%;">The quick brown fox jumps</td>
</tr>
</tbody>
</table>

<p> Generally, 1em = 12pt = 16px = 100%. If you increase the base font-size to 120% <span class="hide-on-print">in the interactive table above,</span> you will see how both relative units &mdash; the em and percent units &mdash; get larger as the base font-size increases, but the fixed units, pixels and points, do not. For this reason, the em and percent units are preferred on the Web.</p>
</div>
</div>

<div class="row dont-break-in-print">
<div class="large-6 column">
<h5>REM</h5>

<p>The web is not a fixed place so using relative units like ems and percentages are a must. The em and percent are however, relative to the font size of the parent element. In a structure like <abbr title="HyperText Markup Language">HTML</abbr> where we nest our type this inheritance can be a problem. Luckily, there is another relative unit that addresses this problem, the rem or root-em. A rem is not relative to its parent but the root of the document, consider the following example:</p> 

<div class="panel screen">

        <div class="row">
            <div class="large-6 columns">
<div data-height="360" data-theme-id="9850" data-slug-hash="BNMPpK" data-default-tab="css" data-user="rhettajf" class='codepen'><pre><code>/* BASE SIZE = 14px */
body, html {font-size: 14px}

/* --------------- EM --------------- */
/* h1 font-size: 14x2.5=35 | margin: 35x0.6=21 */
#em h1 {font-size: 2.5em; margin:0.6em 0;}
/* h2 font-size: 14x2=28 | margin: 28x0.75=21 */
#em h2 {font-size: 2em; margin:0.75em 0;}

/* --------------- REM --------------- */
/* h1 font-size: 14x2.5=30 | margin: 14x1.5=21 */
#rem h1 {font-size: 2.5em; margin:1.5rem 0;}
/* h2 font-size: 14x2=28 | margin: 14x1.5=21 */
#rem h2 {font-size: 2em; margin:1.5rem 0;}</code></pre>
<p>See the Pen <a href='http://codepen.io/rhettajf/pen/BNMPpK/'>EM vs. REM</a> by Rhett (<a href='http://codepen.io/rhettajf'>@rhettajf</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
</div><script async src="//assets.codepen.io/assets/embed/ei.js"></script>
            </div>
   
    </div>
</div>  


   	<p>In the example above, because the em is relative to the parent, each margin must be calculated individually. When we use the rem to set our margin, it is relative to the root or document font size, not the parent. If you’re trying to set consistent padding or margins to establish a rhythm, the rem can be very helpful.</p>
</div>
</div>    