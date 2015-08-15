<?php $base_url = 'http://totallytype.com/';?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex">
    <meta name="description" content="A totally new type.">
    <meta name="keywords" content="typography,webfont,type,education">
    <meta name="author" content="Rhett Forbes">
    <meta property="og:title" content="TotallyType">
    <meta property="og:image" content="apple-touch-icon-152x152.png">
    <meta property="og:description" content="A totally new type.">
    <link rel="stylesheet" href="css/total.css" />  
    <link rel="copyright" href="copyright.html">
    <link rel="shortcut icon" href="icon/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="icon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="icon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="icon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="icon/apple-touch-icon-152x152.png" />
    <title><?php echo $title; ?></title>
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/vendor/jquery.js"></script>
	 <script>
        (function(d) {
            var config = {
              kitId: 'ret4ahb',
              scriptTimeout: 3000
            },	
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
    </script>
  </head>
<body class="<?php echo $bclass; ?>">
<div id="tools" class="row">
    <div class=" large-6 column text-right" style="max-height:1.5rem;" >  
          
        <p class="text-right"><a class="hasdrop" data-dropdown="settings" aria-controls="settings" aria-expanded="false">Settings <span class="icon-settings"></span></a> <?php include("parts/notes.php"); ?></p>
        
        <div id="settings" data-dropdown-content class="f-dropdown content text-left" aria-hidden="true" tabindex="-1">        
            <h6 class="pull-top">Font &amp; Text Size <a href="#" title="Reset" id="reset" class="button tiny radius right">Reset</a></h6>     
            <ul class="button-group">
                <li><a href="#" title="Serif" id="text-serif" class="button active">Serif</a></li>
                <li><a href="#" title="Sans Serif" id="text-sans" class="button">Sans-Serif</a></li>
            </ul>        
            <ul class="button-group push-top">
                <li><a href="#" title="Small Text" id="small" class="button">Small</a></li>
                <li><a href="#" title="Medium Text" id="medium" class="button">Medium</a></li>
                <li><a href="#" title="Large Text" id="large" class="button">Large</a></li>   
            </ul> 
            <h6>Paragraph</h6>
            <ul class="button-group push-bottom">
                <li><a href="#" title="Flush Left Ragged Right" id="ragrt" class="button active">Flush Left</a></li>
                <li><a href="#" title="Justified" id="justify" class="button">Justified</a></li>
            </ul>
            <a href="#" title="Toggle Hyphenate" id="hyphens" class="button tiny radius">Hyphenate</a>
            <a href="#" title="Toggle Baseline Grid" id="baseline" class="button tiny radius">Baseline Grid</a>
            <h6>Contrast</h6>
            <ul class="button-group">
                <li><a href="#" title="High Contrast" id="lowcontrast" class="button <?php echo ($invert  == "off" ? "active" : "")?>">Low</a></li>
                <li><a href="#" title="Low Contrast" id="highcontrast" class="button <?php echo ($invert  == "on" ? "active" : "")?>">High</a></li>
            </ul>          
        </div>   
        
         
    </div>
</div>
<header class="row">
    <div class="large-3 medium-3 small-6 columns">
        <h1 style="margin:0; padding:0;"><span class="icon">Tt</span>
        <span style="letter-spacing:-0.087em;">T</span><span style="letter-spacing:-0.025em;">o</span><span style="letter-spacing:0.006em;">t</span><span style="letter-spacing:0.018em;">a</span><span style="letter-spacing:0.017em;">l</span><span style="letter-spacing:-0.014em;">l</span><span style="letter-spacing:-0.088em;">y</span><span style="letter-spacing:-0.089em;">T</span><span style="letter-spacing:0.031em;">y</span><span style="letter-spacing:-0.008em;">p</span><span>e</span></h1>
    </div>
    <nav class="large-3 medium-3 small-6 text-center columns">
        <ul class="inline-list">
            <li class="<?php echo ($page == "home" ? "active" : "")?>"><a href="<?php echo $base_url; ?>">Home</a></li>
            <li class="<?php echo ($page == "lessons" || $page == "toc" ? "active" : "")?>"><a href="<?php echo $base_url; ?>lessons.php">Lessons</a></li>
            <li class="<?php echo ($page == "resources" ? "active" : "")?>"><a href="<?php echo $base_url; ?>resources.php">Resources</a></li>
        </ul> 
    </nav>   
</header>