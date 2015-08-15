<?php 
	$title = "Totally Type Lessons";
	$page = "lessons";
	$bclass = "";
	$invert = "off";
	include("parts/header.php")
?>
<div class="row">
<div class="large-6 columns">
<h1>Letter Legibility</h1>
<img src="img/brown-fox.jpg" width="1000" height="571" alt=""/>
<h4 class="light text-center">The quick brown fox jumps over the lazy dog.</h4>
<p>To test the legibility of a typeface, we start by looking at character distinguishability &mdash; how different each character is from every other character in a typeface. During selection, designers often use pangrams to evaluate and compare typefaces. Pangrams are words or sentences containing every letter of the alphabet.</p>

<h4 class="text-center light push-top">Who would pack five dozen old quart jugs in my box?</h4>
<h4 class="text-center light pull-top">PACK MY BOX WITH FIVE DOZEN LIQUOR JUGS!</h4>


<p>I use the following two pangrams, one in sentence case and the other in all caps; it uses every upper and lowercase letter aand works well for testing the internal spacing as well.</p>
<h4>Champion Hamburgevons</h4>
<p>The letters in <em>hamburgevons</em> or <em>hamburgefons</em> contain all the basic and rounded strokes, stems, and diagonals used in the Latin alphabet. Other varitaions like <em>hamburgefonstiv</em> or the word <em>champion</em> are used by typeface designers to test a font.</p>

<h4>Distinguishably</h4>
<p>When selecting a text font it is important to make sure every character is easily distinguishable at your intended font size. Over the years, I developed the following <b>character distinguishably test</b>.</p>
<div class="panel snapit" id="test-panel" style="font-size:16px">
<p class="text-center test lining">!Iil1<br><br>

Hamburgevons <span style="font-weight:bold">Hamburgevons</span><br><br>

ages <span style="font-weight:bold">ages</span><br><br>

fg<br>gf<br><br>

bdpqo hnmu<br><br>

38 56 0O<br><br>

a<i>e</i></p>
<form class="push-top">
  <fieldset class="row">
  <div class="large-3 medium-3 columns">
      <label>Font</label>
      <input id='font_fg' list='fonts' type='text' value='chaparral-pro'>
            <label>Foreground Color</label>
      <input id='color' type='text' value='#444444'>
      <label>Background Color</label>
      <input id='bgcolor' type='text' value='#F7F7F7'>     
	</div>
    <div class="large-3 medium-3 columns">
          <label>Font Size (pt, px, em)</label>
      <input id='font_sz' type='text' value='12pt'>
      <label>Line-Height (em)</label>
      <input id='lineheight' step='0.1' type='number' value='1.5'>
      <label>Letter Spacing (em)</label>
      <input id='letterspacing' step='0.01' type='number' value='0'>

      </div>
  </fieldset>
</form>
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
</datalist>
</div>

<p><b>How to use.</b> First, select the font you are consiering. The app above will take any font installed on your system. Then, set up your intended font size and foreground and background color, adjust the line-height and letter-spacing, and finally, test the fonts character distinguishability.  The following list shows what each line is testing for.
<ul class="single-space-list">
<li><p><b>Line one:</b> Remember the golden rule, differentiation. Look at the !, I, i, l, and numeral 1 to make sure they are distinguishable from each other.</p></li>
<li><p><b>Line two:</b> Make sure the typeface in question has high contrasting weights and that the bolds are not so bold they fill in.</p> </li>
<li><p><b>Line three:</b> Check that the counters don't close up, particularly look at the problematic letters, a, g, e, and s in regular and bold.</p> </li>
<li><p><b>Lines four &amp; five:</b> Make sure the ascenders and descenders have enough space, particularly look at the f and g. </p></li>
<li><p><b>Line six:</b> Look at the rounds, b, d, p, q, and o, to see if they are open enough and have the same optical size and color as the square forms, h, n, m, and u. </p></li>
<li><p><b>Line seven:</b> If numbers are important to your text, look at the 3 and 8, 5 and 6, and 0 and the letter O.</p></li>
<li><p><b>Line eight:</b> Check the a, a double-storey a is more legible, especially in body text. While you're at it, check the italics by contrasting the Roman a and italic e.</p></li>
</ul>

<script>
var fg = $('.test'),
fb = $('#test-panel')

function update() {
  fg.css({
    'font-family': $('#font_fg').val(),
    'font-size': $('#font_sz').val(),
	'letter-spacing': $('#letterspacing').val() + "em",
	'line-height': $('#lineheight').val(),
	'color': $('#color').val()
  });
  fb.css({
    'background-color': $('#bgcolor').val(),
  });
}

$('input').on('input', function() {
  update();
});

fg.on('input', function() {
  fg.html(fg.html());
});

update();
</script>

<div class="row">
    <div class="large-6 columns push-top">
        <a href="lessons.php#word" class="button secondary">Back to Lessons</a>
        <a href="white-space.php" class="button right">Whitespace</a>
    </div>
</div>

<?php include("parts/footer.php"); ?>