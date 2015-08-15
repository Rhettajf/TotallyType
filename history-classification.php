<?php 
	$title = "Totally Type Lessons";
	$page = "lessons";
	$bclass = "";
	$invert = "off";
	include("parts/header.php")
?>
<script>
  (function(d) {
    var config = {
      kitId: 'aqq7cfo',
      scriptTimeout: 3000
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<style type="text/css">
	.pre-venetian {font-family: 'UnifrakturMaguntia', cursive;}
	.venetian {font-family: "adobe-jenson-pro", Centaur, Perpetua, Hoefler Text, serif;}
	.garalde {font-family: Garamond, Adobe Garamond Pro, Hoefler Text, Palatino Linotype, Book Antiqua, serif;}
	.transitional {font-family: Baskerville, Baskerville Old Face, New Baskerville, Cambria, Times New Roman, Georgia, serif;}
	.didone {font-family: "ltc-bodoni-175", Didot, Bodoni, serif;}
	.slab { font-family:Rockwell, Courier, "Courier New", Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, monospace;}
	.grotesque { font-family: "franklin-gothic-urw","Akzidenz-Grotesk", "Franklin Gothic Medium", "News Gothic", sans-serif !important;}
	.neo-grotesque { font-family:  "Univers", "Helvetica", "Helvetica Neue", Impact, Arial, sans-serif !important;}
.geometric { font-family:"futura-pt", "Futura", Gotham, "Century Gothic", sans-serif !important;}
.humanist { font-family: "Frutiger", "Myriad Pro", "Trebuchet MS", "Calibri", "FF Meta", Verdana, sans-serif !important;}
}
	
	h1 + h4 {padding-top:0 !important;}
</style>
<?php include("parts/history/intro.php") ?>
<section id="pre-venetian">
<?php include("parts/history/pre-venetian.php") ?>
</section>
<section id="venetian">
<?php include("parts/history/venetian.php") ?>
</section>
<section id="garalde">
<?php include("parts/history/garalde.php") ?>
</section>
<section id="transitional">
<?php include("parts/history/transitional.php") ?>
</section>
<section id="didone">
<?php include("parts/history/didone.php") ?>
</section>
<section id="slab">
<?php include("parts/history/slab.php") ?>
</section>
<section id="sans">
<?php include("parts/history/sans.php") ?>
</section>

<div class="row">
    <div class="large-6 columns push-top">
        <a href="lessons.php#foundation" class="button secondary">Back to Lessons</a>
        <a href="families.php" class="button right">Families</a>
    </div>
</div>
<?php include("parts/footer.php"); ?>