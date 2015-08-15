<?php 
	$title = "Totally Type Lessons";
	$page = "lessons";	
	$bclass = "";
	$invert = "off";
	include("parts/header.php")
?>
<!-- Title --> 
<article id="select-test">
<div class="row">
    <div class="large-6 columns">
        <h1>Selecting a text font</h1>     
        <p>Selecting the right text face for the job is no easy task. The following interactive app allows you to compare any two text faces on your system that you may be considering for print or screen use. We will look at body size, x-height, line and letter spacing, typographic color, and contrast - factors that allow a well designed text font to perform the task it was designed for. Once we have a selection we will then pair it with a complementary display face for headings, define a modular scale, and generate a type specimen.</p>
    </div>
</div>   

<div class="row">
    <div class="large-6 columns">
    
        <!-- Body size comparison --> 
        
        <div class="panel">
            <h3>Body size comparison <a href="#" data-reveal-id="body"><span class="icon-help right"></span></a></h3>
            <div id="body" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <p>Two fonts at the same size can have vastly different visual sizes. If we recall back to the the <a href="measuring-type.php" target="_blank">Measuring Type</a> lesson, in the days of metal type point size referred to the size of the metal block &mdash; not the impression. This carried over to digital type where point size refers to the size of the bounding box &mdash; not the letters. When you set a type size, the bounding box is scaled. Some fonts occupy more of the bounding box then others. For this reason you must rely on your eyes to gauge just how big or small a font is.</p> 
                <p><b>Please note that type must be evaluated in context.</b> Unless you are selecting a face for screen use, it is imperative that you print each test to accurately evaluate the type. </p>                 
                <a class="close-reveal-modal" aria-label="Close">&#215;</a> 
            </div>
                        <h6>Select two typefaces to compare.</h6>
            <form>
                <fieldset class="row">
                    <div class="large-3 medium-3 columns">
                        <input id='font_one' list='fonts' type='text' value='chaparral-pro' name="cfont">
                    </div>
                    <div class="large-3 medium-3 columns">
                        <input id='font_two' list='fonts' type='text' value='Verdana' name="cfont">
                    </div>
                </fieldset>
                <datalist id='fonts'>
                    <option value='Arial'></option>
                    <option value='Baskerville'></option>
                    <option value='Garamond'></option>
                    <option value='Georgia'></option>
                    <option value='Gill Sans'></option>
                    <option value='Open Sans'></option>
                    <option value='Palatino'></option>
                    <option value='Tahoma'></option>
                    <option value='Times New Roman'></option>
                    <option value='Trebuchet MS'></option>
                    <option value='Verdana'></option>
                    <option value='chaparral-pro-display'></option>
                    <option value='chaparral-pro'></option>
                </datalist>
            </form>
            <div class="grid push-top"><h1><span class="name-font1"></span><span class="name-font2"></span></h1></div>
   
            <!-- Typeface Selection FORM -->      
<div class="row push-top text-center">
    <div class="large-3 column font-one update">
        <p>hamburgevons<br>
HAMBURGEVONS</p>
    </div>
    <div class="large-3 column font-two update">
        <p>hamburgevons<br>
HAMBURGEVONS</p>
    </div>
</div>
        </div>
        
        <!-- x-height comparison -->
        
        <div class="panel">
            <h3>x-height comparison <a href="#" data-reveal-id="x-height"><span class="icon-help right"></span></a></h3>
            <div id="x-height" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
<p>The x-height is the distance between the baseline and mid-line; it is the same height as the lowercase letter ‘x’. The x-height varies from typeface to typeface. Because 95% of text is lowercase, x-height is a deciding factor in the legibility and readability of a text face and determines the visual size of text. An increased x-height has one of the most noticeable effects on legibility and readability on screen and in print. A taller x-height helps forms appear bigger at text sizes and therefore increases readability.</p>
<ul>
<li><p>In <b>print</b> you typically want to use a font with a <b>medium x-height</b> for body text. This provides a balance between the upper and lowercase letters and brightens the page. </p>
</li>
<li>
<p>On <b>screen</b>, you want a <b>taller x-height</b> to give lines more space to distinguish themselves. On screen when pixels are in close proximity they blur together decreasing character distinguishability. A taller x-height forces the counters and apertures in this tight space open, and therefore we get more legible letters on screen.</p>
</li>
</ul>
<p>The x-height comparison test will help you compare x-heights and set an appropriate text size and line-space. These three elements work together to establish the color of a block. When it comes to x-height avoid extremes. As the x-height increases, the length of the ascenders and descenders decreases. Taken to the extreme, this can reduce character legibility. On the other side, if the x-height is too short, ascenders and descender become elongated creating too much white space between lines of text.</p>
<div class="row">
<div class="large-3 column">
  <img src="img/x-height2.png" width="351" height="189" alt=""/> 
</div>
<div class="large-3 column">
  <img src="img/x-height1.png" width="351" height="189" alt=""/> 
</div>
</div>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a> 
            </div>
            <div class="grid pull-bottom"><h1 style="text-transform:lowercase;"><span class="f1head">aesx</span><span class="f2head">xaes</span></h1></div>
            
            <div class="row">
                <div class="large-3 column">
                    <h6><span class="name-font1"></span></h6>
                </div>
                <div class="large-3 column">
                    <h6><span class="name-font2"></span></h6>
                </div>
            </div>
            
            <div class="row">
                <div class="large-3 column font-one">
                    <p>In a badly designed book, the letters mill and stand like starving horses in a field. In a book designed by rote, they sit like stale bread and mutton on the page. In a well-made book, where designer, compositor, and printer have all done their jobs, no matter how many thousands of lines and pages, the letters are alive. They dance in their seats. Sometimes they rise and dance in the margins and aisles.</p>
                </div>
                <div class="large-3 column font-two update">
                    <p>In a badly designed book, the letters mill and stand like starving horses in a field. In a book designed by rote, they sit like stale bread and mutton on the page. In a well-made book, where designer, compositor and printer have all done their jobs, no matter how many thousands of lines and pages, the letters are alive. They dance in their seats. Sometimes they rise and dance in the margins and aisles.</p>
                </div>
            </div>
            <!-- Font Size and Line Spacing FORM --> 
            <form>
                <fieldset class="row">
                    <div class="large-3 medium-3 columns">
                        <h6>Select a text size <a href="#" data-reveal-id="font-size"><span class="icon-help right"></span></a></h6>
                        <input id='font_sz' type='text' value='1em' name="size">
                        <p>Values of pt, em, or px.</p>
<div id="font-size" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
<ul>
<li><p>In print, the optimal size for body text is 10–12 point.</p></li> 
<li><p>On screen, the optimal size is 14–25 pixels.</p></li> 
</ul>
<p>Remember that these are starting points, the <i>right</i> font-size depends on reading distance.</p>
<a class="close-reveal-modal" aria-label="Close">&#215;</a> 
</div>
                    </div>
                    <div class="large-3 medium-3 columns">
                    <h6>Select a line-space <a href="#" data-reveal-id="line-space"><span class="icon-help right"></span></a></h6>
                    <input id='lineheight' step='0.1' type='number' value='1.5'>
                    <p>Values in em.</p>
<div id="line-space" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
<ul>
<li><p>In print, set your line-height at 120% of the point-size.</p></li>
<li><p>On screen, 150% of the font-size.</p></li>
</ul>
<p>Remember that these are starting points, the <i>right</i> line-height depends on the typeface.</p>
<a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
                    </div>
                </fieldset>
            </form>
            <p class="text-right"><a href="#" class="testPrint button tiny">Print Test</a></p>
        </div>
        
        <!-- legibility -->
        
        <div class="panel">
            <h3>Legibility Test <a href="#" data-reveal-id="Legibility"><span class="icon-help right"></span></a></h3>  
            <div id="Legibility" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <p>One of the single most important legibility features of a text font is character distinguishability, make sure each character is easily distinguishable at your intended font size.</p>
                <ul class="single-space-list">
                    <li><p><b>Line one:</b> Remember the golden rule, differentiation. Look at the !, I, i, l, and numeral 1 to make sure the are distinguishable from each other.</p></li>
                    <li><p><b>Line two:</b> Make sure the typeface in question has high contrasting weights and that the bolds are not so bold they fill in.</p> </li>
                    <li><p><b>Line three:</b> Check that the counters don't close up, particularly look at the problematic letters, a, g, e, and s in regular and bold.</p> </li>
                    <li><p><b>Lines four &amp; five:</b> Make sure the ascenders and descenders have enough space, particularly look at the f and g. </p></li>
                    <li><p><b>Line six:</b> Look at the rounds, b, d, p, q, and o, to see if they are open enough and have the same optical size and color as the square forms, h, n, m, and u. </p></li>
                    <li><p><b>Line seven:</b> If numbers are important to your text, look at the 3 and 8, 5 and 6, and 0 and O.</p></li>
                    <li><p><b>Line eight:</b> Check the a, a double-storey a is more legible, espically in body text. While your at it, check the italics by contrasting the roman a and italic e.</p></li>
                </ul>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>
            <div class="row">
                <div class="large-3 column font-one">
                    <h6 class="text-center"><span class="name-font1"></span></h6>
                    <p class="text-center font-one lining">!Iil1<br><br>Hamburgevons <span style="font-weight:bold">Hamburgevons</span><br><br>ages <span style="font-weight:bold">ages</span><br><br>fg<br>gf<br><br>bdpqo hnmu<br><br>38 56 0O<br><br>a<i>e</i></p>
                </div>    
                <div class="large-3 column font-two">
                    <h6 class="text-center"><span class="name-font2"></span></h6>
                    <p class="text-center font-one lining">!Iil1<br><br>Hamburgevons <span style="font-weight:bold">Hamburgevons</span><br><br>ages <span style="font-weight:bold">ages</span><br><br>fg<br>gf<br><br>bdpqo hnmu<br><br>38 56 0O<br><br>a<i>e</i></p>
                </div>
            </div>
            <p class="text-right"><a href="#" class="testPrint button tiny push-top">Print Test</a></p>
        </div>
               
        <!-- Space font-one -->
        
        <div class="panel">
            <h3>Space &amp; Color Test<a href="#" data-reveal-id="space"><span class="icon-help right"></span></a></h3>  
            <div id="space" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <p>A fonts spacing can be font-oneed by looking at a particularly problematic groups of letters. The following font-one from Emil Ruder measures the overall quality of spacing by examining color. Problematic words in the left column are contrasted against non-problematic words in the right column. What you want is an even color between the two columns. If need be, adjust the tracking or letter-spacing.</p>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>   
            <div class="row dont-break-in-print">
                <div class="large-6 column">
                    <h6><span class="name-font1"></span></h6>
                </div>
                <div class="large-3 column font-one">
                    <p class="update"><b>Problematic:</b> vertrag crainte screw verwalter croyant science verzicht fratricide sketchy vorrede frivolité story yankee instruction take zwetschge lyre treaty zypresse navette tricycle fraktur nocturne typograph kraft pervertir vanity raffeln presto victory reaktion prévoyant vivacity rekord priorité wayward revolte proscrire efficiency tritt raviver without trotzkopf tactilité through tyrann arrêt known</p>
                </div>
                <div class="large-3 column font-one">
                    <p class="update"><b>Not Problematic:</b> bibel malhabile modo biegen peuple punibile blind qualifier quindi damals quelle dinamica china quelque analiso schaden salomon macchina schein sellier secondo lager sommier singolo legion unique possibile mime unanime unico mohn usuel legge nagel abonner unione puder agir punizione quälen aiglon dunque huldigen allégir quando geduld alliance uomini</p>
                </div>    
            </div>
            <div class="row dont-break-in-print">
                <div class="large-6 column">
                    <h6><span class="name-font2"></span></h6>
                </div>
                <div class="large-3 column font-two">
                    <p class="update"><b>Problematic:</b> vertrag crainte screw verwalter croyant science verzicht fratricide sketchy vorrede frivolité story yankee instruction take zwetschge lyre treaty zypresse navette tricycle fraktur nocturne typograph kraft pervertir vanity raffeln presto victory reaktion prévoyant vivacity rekord priorité wayward revolte proscrire efficiency tritt raviver without trotzkopf tactilité through tyrann arrêt known</p>
                </div>
                <div class="large-3 column font-two">
                    <p class="update"><b>Not Problematic:</b> bibel malhabile modo biegen peuple punibile blind qualifier quindi damals quelle dinamica china quelque analiso schaden salomon macchina schein sellier secondo lager sommier singolo legion unique possibile mime unanime unico mohn usuel legge nagel abonner unione puder agir punizione quälen aiglon dunque huldigen allégir quando geduld alliance uomini</p>
                </div>    
            </div>
            <!-- letter-spacing FORM -->    
            <form class="push-top">
                <fieldset class="row">
                    <div class="large-3 medium-3 columns">
                        <h6>Adjust letter-spacing <a href="#" data-reveal-id="tracking"><span class="icon-help right"></span></a></h6>
                        <input id='letterspacing' step='0.01' type='number' value='0'>
                        <p><span class="frac">1/1000</span> of an em.</p>
                        <div id="tracking" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                            <p>In print, the optimal size for body text is 10–12 point. On screen, the optimal size is 14–25 pixels. Remember that these are starting points, the right font-size depends on reading distance.</p>
                            <a class="close-reveal-modal" aria-label="Close">&#215;</a> 
                        </div>
                    </div>
                    <div class="large-3 medium-3 columns">
                    </div>
                </fieldset>
            </form> 
            <p class="text-right"><a href="#" class="testPrint button tiny">Print Test</a></p>
        </div>
        
        <!-- Contrast -->  
        
        <div class="panel">
            <h3>Contrast &amp; Context Test <a href="#" data-reveal-id="space"><span class="icon-help right"></span></a></h3>  
            <div id="space" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <p>A fonts spacing can be font-oneed by looking at a particularly problematic groups of letters. The following font-one from Emil Ruder measures the overall quality of spacing by examining color. Problematic words in the left column are contrasted against non-problematic words in the right column. What you want is an even color between the two columns. If need be, adjust the tracking or letter-spacing.</p>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>
            <!-- Color Picker FORM -->          
            <form class="push-top" method="post" action="">
                <fieldset class="row">
                    <div class="large-3 medium-3 columns">
                        <label for="foreground">Foreground color</label>
                        <input type="text" class="color" value="444444" id="foreground" name="foreground">
                    </div>
                    <div class="large-3 medium-3 columns">
                        <label for="background">Background color</label>
                        <input type="text" class="color" value="F7F7F7" id="background" name="background">
                    </div>
                </fieldset>
            </form>
            <!-- Contrast Ratio -->      
            <div class="row">
                <div class="large-6 column">
                    <p class="push-top push-bottom">Contrast Ratio: <b><span id="contrastratio">1.18:1</span></b></p>
                </div>
            </div>
            <!-- Contrast Check -->
            <div class="row">    
                <div class="large-6 column">
                <p><b>Large Text:</b> AA: <span class="fail" id="bigaa">Fail</span> AAA: <span class="fail" id="bigaaa">Fail</span></p>
                    <div class="panel" id="big" style="color:#444444; background-color:#F7F7F7; margin-top:0;">
                        <div class="row">
                            <div class="large-3 medium-3 columns">
                            <h5 style="margin:0; padding:0; color:inherit;"><span class="name-font1"></span></h5>
                            </div>
                            <div class="large-3 medium-3 columns">
                            <h5 style="margin:0; padding:0; color:inherit;"><span class="name-font2"></span></h5>
                            </div>
                        </div>
                    </div>
                    <p><b>Normal Text:</b> AA: <span class="fail" id="normalaa">Fail</span> AAA: <span class="fail" id="normalaaa">Fail</span></p> 					<div class="panel" id="normal" style="color:#444444; background-color:#F7F7F7; margin-top:0;">
                        <div class="row">
                            <div class="large-3 medium-3 columns">
                                <p class="font-one" style="color:inherit;">Accessible design is good design.</p>
                            </div>
                            <div class="large-3 medium-3 columns">
                                <p class="font-two" style="color:inherit;">Accessible design is good design.</p>
                            </div>
                        </div>      
                    </div>                    
                </div>
            </div>
        </div>   

<div class="panel">
<h3>Please select your text font.</h3>
<form name="choosefont" method="post" action="">
<input type="radio" name="font" id="f1" checked> <span class="name-font1"></span>
<br>
<input type="radio" name="font" id="f2"> <span class="name-font2"></span>
</form> 


</div>

<div class="panel preview" id="pair">
 <h3>Pair your text face with a display face. <a href="#" data-reveal-id="body"><span class="icon-help right"></span></a></h3>
            <div id="body" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <p>In digital type, body size is the vertical height of the bounding box, not the vertical height of the actual letters themselves.95 percent of text is lowercase. The height of lowercase letters or x-height, varies from typeface to typeface. X-height is therefore an important factor in the legibility and readability of a text face.</p>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a> 
            </div>
            <div class="grid"><h1><span class="name-fonts"></span><span class="name-fontd"></span></h1></div>
            <!-- Typeface Selection FORM -->                  
            <form>
                <fieldset class="row">
                    <div class="large-3 columns">
	                    <h6>Select a display face to pair.</h6>
                        <input id='display-font' list='fonts' type='text' value='chaparral-pro-display' name="dfont">
                    </div>
                    <div class="large-3 columns">
                    <h6>Match the x-heights.</h6>
                    <p><span class="ftext">xxxxxx</span><span class="fhead bold">xxxxxx</span></p> 
                    </div>
                </fieldset>
            </form>
</div>
<div class="printme">
<div class="panel preview" id="preview">
 <h3>See it in action!<a href="#" data-reveal-id="body"><span class="icon-help right"></span></a></h3>
<div class="row">
    <div class="large-4 columns">
        <h2 class="fhead" style="margin-top:0; margin-bottom:1em; letter-spacing:0.04em;">CHAPTER ONE</h2>
        <h4 class="fhead" style="margin-top:1em;">Loomings.</h4>
        <p>Call me Ishmael. Some years ago—never mind how long precisely—having little or no money in my purse, and nothing particular to interest me on shore, I thought I would sail about a little and see the watery part of the world. It is a way I have of driving off the spleen and regulating the circulation. Whenever I find myself growing grim about the mouth; whenever it is a damp, drizzly November in my soul; whenever I find myself involuntarily pausing before coffin warehouses, and bringing up the rear of every funeral I meet; and especially whenever my hypos get such an upper hand of me, that it requires a strong moral principle to prevent me from deliberately stepping into the street, and methodically knocking people's hats off—then, I account it high time to get to sea as soon as I can. This is my substitute for pistol and ball. With a philosophical flourish Cato throws himself upon his sword; I quietly take to the ship. There is nothing surprising in this. If they but knew it, almost all men in their degree, some time or other, cherish very nearly the same feelings towards the ocean with me. </p>
    </div>
    <div class="large-2 columns">
        <H5 class="fhead" style="margin-top:0; margin-bottom:1em;">Heading</H5>
        <p><b>Font:</b> <span id="mydisplayfont"></span></p>
        <H5 class="fhead" style="margin-top:1em; margin-bottom:1em;">Text</H5>
        <p><b>Font:</b> <span id="myfont"></span><br>
        <b>Font Size:</b> <span class="font-size-value"></span><br>
        <b>Line Spacing:</b> <span id="line-space-value"></span><br>
        <b>Letter Spacing:</b> <span id="letter-space-value"></span><br>
        <H5 class="fhead" style="margin-top:1em; margin-bottom:1em;">Page</H5>
        <b>Foreground:</b> <span id="foreground-color"></span><br>
        <b>Background:</b> <span id="background-color"></span></p>
    </div>
</div>
<p><a href="#" class="testPrint whole button push-top">Print Your Type</a></p>
    </div>
</div>    

<div class="panel">
 <h3>What's Next?</h3>
 <p>Now that you have a text face and display face to work with, the next set is to establish hierarchy. Many people set type sizes with a scale. You can use a scale to measure or set the size of any element or negative space in a composition — including grids, and the overall dimensions of the composition itself. Your body text type size of <span class="font-size-value"></span> is a good place to start. This sites scale is based on the golden mean (1:1.618). Use the following link to run your font size through Tim Brown's Modular Scale Calculator.</p>
 <a id="myAnchor" class="button push-top" title="modularscale" target="_blank">Get Your Scale</a>
 
 </div>
    
</div>
</div>

</article>
<?php include("parts/form-footer.php"); ?>