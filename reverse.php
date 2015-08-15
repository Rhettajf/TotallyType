<?php 
	$title = "Totally Type Lessons";
	$page = "lessons";
	$bclass = "invert";
	$invert = "on";
	include("parts/header.php");
?>
<script>
  (function(d) {
    var config = {
      kitId: 'xqc1wyr',
      scriptTimeout: 3000
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<div class="row">
    <div class="large-6 columns">
<h1>Reversed Type</h1>


<div class="panel invert pull-top">
<p style="color:#fff">Reversed type is white text on a black background. These rules apply to any inversion of the traditional black on white contrast, in other words, light text on a dark background.</p>
</div>

<p>Text typefaces were designed for black text on a white background. The forms, proportions, and stroke weights of their characters were designed around the gestalt principle of figure-ground. A high contrast is needed between the foreground and background. When you set type in color, over a colored background, or reverse the contrast you are changing the usual contrast. This, combined with the limitations of both print and screen mediums, make reversed type tricky at text sizes. We will discuss this per medium in this lesson, however, there are some global rules to cover first.</p>
<h5>Global Rules</h5>
<ul>
<li><p class="text-sans">In general, a sans-serif performs better in reversed setting; the sharp edges of serifs can pose a problem.</p></li>
<li><p class="italic">Avoid using italics, they are already more difficult to read.</p></li>
<li><p>Avoid using script fonts, they are too delicate.</p></li>
<li><p>Increasing the line-spacing can improve the legibility of reversed type.</p>
<li><p>Sometimes it also helps to increase the letter-spacing.</p>
</ul>

<div class="panel invert pull-top">
<h1 class="text-sans text-center" style="line-height:3rem;">The problems tend to disappear when using large text.</h1>
</div>

<h2>Print</h2>
<p>In print, reversed type appears lighter. Black is visually stronger than white and black ink tends to bleed into the white letterforms making them appear lighter. Typefaces were designed to account for the spread of ink. When you reverse type, the spread happens in the opposite direction than intended &mdash; into the letterform. If the text is set too light, it may fill in with ink. Additionally, when characters are set too close they may become joined.</p>

<h5>The key to solving this problem in print lies in the typeface and size.</h5>

<div class="panel invert pull-top">
<p style="color:#fff; letter-spacing: normal;">The quality of paper can intensify this effect. For example, coarse or absorbent paper, like newsprint, can be very problematic as ink tends to bleed more.</p>
<p style="color:#fff; letter-spacing: normal;">Reversed text should be large enough to combat ink spread. Offset printers no less than 10 point and 12 point for newspapers.</p>
<p style="font-weight:300; color:#fff; letter-spacing: normal;">Avoid using light weight faces; heavy and/or low-contrasting typefaces perform better</p>
<p style="font-weight:600; color:#fff; letter-spacing: normal;">A semibold type for text can make reversed type more readable; the thicker stems and strokes help prevent ink spread.</p>
<p style="color:#fff; letter-spacing: normal;">Thicker hairlines reduce the potential to fill in, thin hairline strokes may clog up. In print, a general rule is to make sure that hairlines have a minimum thickness of 0.5 point.</p>
<p style="color:#fff;letter-spacing:0.03em;">Increasing tracking will help prevent letters from joining.</p>
<p>Consider using a sans-serif. The sharp or thin edges of the serifs may disappear.</p>
</div>

<h2>Screen</h2>
<p>On screen, similar issues come into play. On screen, black is not displayed &mdash; the white pixels around black text are illuminated whereas the pixels that make up the black text are turned off. Therefore, the text that your eyes are fixated on is glowing causing small or tightly spaced type to light-bleed together.</p>
<div class="panel invert snapit">
<p class="text-center" style="font-size:12px; color:#fff; letter-spacing:normal;">Small or tightly spaced type can bleed together.</p>
<p class="text-center" style="color:#fff;">A larger size and looser spacing helps prevent light bleeding.</p>
</div>
<p>The glowing text is spreading into the black background, the opposite of ink spread (where black ink is spreading into the letterforms). This makes the text appear heavier rather than lighter, like it does in print. With all this in mind, you should avoid using reversed type for body copy on screen. If you must, use a light gray instead of pure white or even a lighter font to minimize its negative effects.</p>

<div class="panel invert">
<p class="text-center" style="color:#fff; word-spacing:normal;">Avoid using pure white for body text on screen.</p>
<p class="text-center">A light gray helps prevent light bleeding.</p>
</div>

<p>The high contrast or reversed version of this site uses a light gray and slightly increased letter-spacing to prevent light-bleeding.</p>
<h4>Before you Print</h4>
<p>If you intend on printing this page there are a couple of things you need to know. Web browsers remove background colors and images that were set via CSS when you print a page. This site uses a separate print stylesheet that tailors the page and type for print. However, not many sites do this; so this standard has its purpose and can not be overridden. Only Chrome and Safari 6.0+ allow the designer to force the printing of background through the <span class="light">-webkit-print-color-adjust</span> property. However, in other browsers such as FireFox, Internet Explorer, and Opera you have to enable background printing manually. If you are using Firefox, you can <a href="https://support.mozilla.org/en-US/kb/how-print-web-pages-firefox#w_format-and-options" title="Print Backgrounds in Firefox" target="_blank">click here</a> to see how.</p>

</div>
</div>
<div class="row hide-on-print ">
    <div class="large-6 columns push-top">
        <a href="lessons.php" class="button secondary">Back to Lessons</a>
        <a href="resources.php" class="button right">Resources</a>
    </div>
</div>
<?php include("parts/footer.php"); ?>