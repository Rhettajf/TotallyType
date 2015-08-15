<footer class="row hide-on-print ">
<?php if ( $page == "lessons" ) { ?>
    <div class="small-3 column">
    	<p id="printpage" class="text-left light"><a href="javascript:window.print()">Print <i>this</i> Lesson<span class="icon-print"></span></a></p>
    </div>
    <div class="small-3 column">
		<p class="text-right light lining">&copy; 2015 TotallyType<a href="#" data-reveal-id="copyright"><span class="icon-cc"></span> BY-NC-SA 4.0</a></p>
    </div>
<?php } else { ?>
    <div class="large-6 column">
    	<p class="text-right light lining">&copy; 2015 TotallyType<a href="#" data-reveal-id="copyright"><span class="icon-cc"></span> BY-NC-SA 4.0</a></p>
    </div>
<?php } ?>
</div>
<div id="copyright" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
<p><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img class="ignore" alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">TotallyType </span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://totallytype.com/" property="cc:attributionName" rel="cc:attributionURL">Rhett Forbes</a> was written for educational purposes. Educators are free to copy, print, reproduce, and distribute the content for educational purposes. TotallyType is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>. If you have any questions please contact the <a href="mailto:author@totallytype.com?subject=TotallyType question&body=Rhett Forbes,
">author@totallytype.com</a>.
</p>    
<a class="close-reveal-modal" aria-label="Close">&#215;</a> 
</div>
</footer>
<?php include("parts/notes.php"); ?>
<script src="js/vendor/foundation.min.js"></script>
<script src="js/tools.js"></script>

<script>$(document).foundation();</script>
</body>
</html>