<?php 
	$title = "Totally Type Lessons";
	$page = "lessons";
	$bclass = "";
	$invert = "off";
	include("parts/header.php")
?>
<link href='http://fonts.googleapis.com/css?family=Fanwood+Text' rel='stylesheet' type='text/css'>
<div class="row">
    <div class="large-6 columns">
        <h1>Line-Spacing</h1>

        <p>Line-spacing is the vertical distance between lines of text and plays a big part in the readability of text. When it comes to line-spacing there is no &ldquo;one size fits all.&rdquo;</p>

        <div class="row">
            <div class="large-6 columns">
                <h2>The Core Rules of Line-Spacing</h2>

                <ol>
                    <li>
                        <p>At text sizes type is made more readable by a positive amount of line-spacing.</p>

                        <div class="panel">
                            <p id="demo1">When you <a href="#/" class="demo">decrease line-spacing</a>, lines get closer to each other, making the block of text appear denser. If line-spacing is set too tight, it can cause ascenders and descenders to collide. Low amounts of leading can increase the pace of the reader or invoke a feeling of authority, cramped conditions, or claustrophobia &mdash; which can be desired when using type in an expressive manner.</p>

                            <p id="demo2">Increasing line-spacing can reduce the pace of reading by adding more white space &mdash; resulting in a lighter more open text block and relaxed feel. <a href="#/" class="demo">Too much line-spacing</a> can cause continuity problems. The more line-spacing &mdash; the further the eyes of the reader must travel between lines of text and lines of type become independent graphic elements rather than blocks. This is especially true if the line-spacing is greater than the space between the paragraphs.</p>
                        </div>
                    </li>

                    <li>
                        <p>Headlines, titles, large or display type may benefit from negative line-spacing.</p>
                    </li>

                    <li>
                        <p>Typefaces with tall x-heights or thicker stokes, like a boldface, require more line-spacing to avoid heavy dark blocks of text.</p>

                        <div class="panel snapit">
                            <div class="row">
                                <div class="large-3 columns">
                                    <p id="demo3">Typefaces with short x-heights have the appearance of using less space and therefore require <a href="#" title="less line-spacing" class="demo">less line-spacing</a>.</p>
                                </div>

                                <div class="large-3 columns">
                                    <p id="demo4" class="text-sans push-top-small">Because sans-serifs typically have thicker strokes than serifs, line-spacing will often need to be <a href="#" title="increased" class="demo">increased</a>.</p>
                                </div>
                            </div>
                        </div>
                       
                    </li>

                    <li>
                        <p>Increase line-spacing as you increase measure or column width. The rule of thumb for measure is 45-75 characters per line for paragraph text; paragraphs set shorter or longer will require line-spacing adjustments.</p>

                        <div class="panel snapit">
                            <div class="row">
                                <div class="large-2 medium-2 small-2 columns">
                                    <p id="demo5">Use tighter line-spacing with a shorter measure.</p>
                                </div>

                                <div class="large-4 medium-4 small-4 columns">
                                    <p id="demo6"><a href="#" title="Increase line-spacing" class="demo">Increase line-spacing</a> as you increase measure. The idea is to improve readability and flow by keeping each line distinct; preventing the reader's eyes from dropping to the line below or returning back to re-read the same line.</p>
                   				</div>
                        	</div>
                    	</div>
<p class="push-bottom"><strong>Important:</strong> This demo is to show you how to set a baseline-space or baseline grid. You should <b>not</b> use different line-spacing across columns of text, in-fact, you should use the same or a multiple of your base line-spacing across all elements to establish vertical rhythm. </p>
                    </li>
<script>
$(".demo").click(function(event){
event.preventDefault();
$(this).parent().toggleClass('demoing');
$(window).resize(); 
});	

</script>
<style>
#demo1 {font-family:'Fanwood Text';}
#demo1.demoing { line-height:1;}
#demo2.demoing { line-height:3;}
#demo3.demoing { line-height:1.2;}
#demo4.demoing { line-height:1.7;}
#demo5, #demo6 { line-height:1.2;}
#demo6.demoing  { line-height:1.5;}
</style> 
                    <li>
                        <p>Like measure, as point size increases line-spacing decreases proportionally. Body or running text benefits from additional line-spacing whereas headlines or short bursts of copy may benefit from less line-spacing. Headlines, especially when set in all-caps, may require negative line-spacing.</p>
                    </li>
                </ol>

                <h4>Global Tips</h4>

                <ul>
                    <li>
                        <p>When setting type in multiple columns, line-spacing should align with the size of column gutters. The width of the gutter should be the same or a multiple of the line-spacing value to create rhythm.</p>

                        <div class="panel">
                            <div class="row">
                                <div class="large-2 medium-2 small-3 column">
                                    <p style=" border-right:1px solid #007468; border-left:1px solid #007468;">When setting type in multiple columns, line-spacing should align with the size of column gutters.</p>
                                </div>

                                <div class="large-2 medium-2 column hide-for-small">
                                    <p style=" border-right:1px solid #007468; border-left:1px solid #007468;">The width of the gutter should be the same or a multiple of the line-spacing value to create rhythm.</p>
                                </div>

                                <div class="large-2 medium-2 small-3 column">
                                    <p style=" border-right:1px solid #007468; border-left:1px solid #007468; margin-left:1.5em">This prevents the reader from reading across the columns of text &mdash; but, if the gutter width is too large, columns will look disconnected.</p>
                                </div>
                            </div>
                        </div>
                        <p>This space prevents the reader from reading across the columns of text &mdash; but, if the gutter width is too large, columns will look disconnected.</p>
                    </li>

                    <li>
                        <p>If you increase word-spacing &mdash; increase line-spacing.</p>
                    </li>

                    <li>
                        <p>Adjust for contrast.</p>

                        <div class="panel invert">
                            <p>When using colors other than black text on a white background you may need to increase line-spacing. See <a href="reverse.php" title="reversed type">reversed type</a> to learn why.</p>
                        </div>
                    </li>
                </ul>

                <h6 class="italic">These core rules tell us a lot about line-spacing, but we must also account for the characteristics and limitations of each medium&hellip;</h6>
            </div>
        </div>
    </div>
</div>

<article class="print">
    <div class="row">
        <div class="large-6 columns">
            <h2>Print: Leading</h2><img alt="" src="img/leading.png">

            <p>In print, line-spacing is called <i>leading</i>. The term leading dates back to the days of metal type; as opposed to being <i>set solid</i>, strips of lead of varying thickness were inserted between each line of type. Leading is the distance between two baselines measured in points &mdash; an absolute unit. The leading value includes the point size and the space between the lines.</p>

            <ol>
                <li>
                    <p>In print you typically want to use a font with a medium x-height for body text. This provides a balance between the upper and lower case letters and brightens the page.</p>
                </li>

                <li>
                    <p>Avoid using <strong>heavy</strong> weight type in body text; ink can pool and distort text.</p>
                </li>

                <li>
                    <p>Body text is typically set between 10-12pts. Print has a <b>fixed dimension</b> and therefore limited space; additionally, proximity must be accounted for.</p>
                </li>

                <li>
                    <p>The rule-of-thumb in print is to set your leading at 120% of the font size. The common paragraph setting is 10-point type with 12-points of leading &mdash; written as 10/12 and spoken as &ldquo;10 on 12.&rdquo;</p>
                </li>
            </ol>
        </div>
    </div>
</article>

<div class="row">
    <div class="large-6 columns">
        <h2>Screen: line-height</h2><img alt="" src="img/line-height.png">

        <p>On screen, line-spacing is referred to as <i>line-height</i>, the <abbr title="Cascading Style Sheets">CSS</abbr> property used to set line-spacing in Web design. In the early days of word processing, companies copyrighted taxonomies and software creators used varying terminology, units, and methods to measure and accomplish the same thing. Line-spacing in <abbr title="Cascading Style Sheets">CSS</abbr> is the measure of the point size and the space above and below the line; this is why you can <i>technically</i> use line-height in <abbr title="Cascading Style Sheets">CSS</abbr> to vertically center something &mdash; although you shouldn't. Regardless of where the line-space is measured from, the actual space is the same height in both leading and line-spacing. Line-height, however, should be measured in relative units and <b>never</b> set absolute.</p>

        <ol>
            <li>
                <p>On screen, a good place to start is to set your line-height at 150% of the point-size, however, once again, you must account for the characteristics and limitations of the medium.</p>
            </li>

            <li>
                <p>On screen, where you want a taller x-height, you need a larger line-height. A taller x-height gives letters more space to distinguish themselves and forces open the counters. Additionally, you want a more moderate stroke weight on screen &mdash; light can bleed into thin strokes causing them to disappear.</p>
            </li>

            <li>
                <p>Measure on screen is variable &mdash; especially in a responsive environment. Therefore, line-height should be set at a middle ground or alongside breaking points.</p>
            </li>

            <li>
                <p>Text on screen is typically set between 14&ndash;25<abbr title="pixels">px</abbr>. The deciding factor for how large your text must be is proximity. We typically read from further away on screen as we do in print, requiring a larger text size. Due to the nature of back-lit environments, small text causes eyestrain and fatigue. Additionally, <abbr title="pixels-per-inch">PPI</abbr> plays an important role determining text size; more pixels means crisper text, therefore, you can use 14pt text on a hand-held high <abbr title="pixels-per-inch">PPI</abbr> display.</p>
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="large-6 columns push-top">
        <a href="lessons.php#text" class="button secondary">Back to Lessons</a>
        <a href="align.php" class="button right">Alignment</a>
    </div>
</div>
<?php include("parts/footer.php"); ?>