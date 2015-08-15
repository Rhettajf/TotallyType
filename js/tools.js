$(document).ready(function(){
	 "use strict";

// FONT STYLE !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! 
	$('#text-serif').click(function(event){
		event.preventDefault();
		$("body").attr("id","serif");
		localStorage.removeItem("font");
		$("#text-sans").removeClass('active');
		$(this).addClass("active");
	});
	$('#text-sans').click(function(event){
		event.preventDefault();
		$("body").attr("id","sans");
		localStorage.setItem("font", "sans");
		$("#text-serif").removeClass('active');
		$(this).addClass("active");
	});
	var font = localStorage.getItem('font');			
		if (font === 'sans') {
			$("body").attr("id","sans");
			$('#text-serif').removeClass('active');
			$('#text-sans').addClass("active");
		}

// FONT SIZE !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! 
	// font size click events
	$("#small").click(function(event){
		event.preventDefault();	
		processfont(14);
		$(this).addClass("active");		
	});  
	$("#medium").click(function(event){
		event.preventDefault();	
		processfont(16);
		$(this).addClass("active");
	});  
	$("#large").click(function(event){
		event.preventDefault();
		processfont(18);
		$(this).addClass("active");
	});		
	// font size data
	var fontsizedata = localStorage.getItem('fontsize');
			
	// set font size 
	if (fontsizedata === null) {
		fontsizedata = parseFloat($('body').css('font-size'));
		activesize(fontsizedata);	
				
		} else {
		$('html, body').css('font-size', fontsizedata + "px");	
		activesize(fontsizedata);
		}
	
	function activesize(size) {
	// font size controls
		if (size == '14') {
			$("#small").toggleClass('active'); 
		} if (size == '16') { 
			$("#medium").toggleClass('active'); 
		} if (size == '18') { 
			$("#large").toggleClass('active'); 			
		} 
	}

	// font size processor
	function processfont(size) {
		$("#large, #medium, #small").removeClass('active');
		$("html, body").animate({"font-size":size + "px"}, "normal", function() {$(window).resize();});
		localStorage.setItem("fontsize", size);
		if($('body').hasClass("baselineon")){ processbase(size); }
	}	

// BASELINE !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! 

	// baseline click event
	$( "#baseline" ).click(function(event) {
		event.preventDefault();
		$('body').toggleClass('baselineon');	
		$(this).toggleClass("active");
		// store data
		if($('body').hasClass("baselineon")){
			localStorage.setItem('baseline', 'on');
			processbase(fontsizedata);
		} else {
			localStorage.removeItem ('baseline'); 
			$('body').css('background-image','');	 		
		}		  
	});	
	// baseline data
	var baseline = localStorage.getItem('baseline');
	// baseline load
	if (baseline === 'on') {
	  processbase(fontsizedata);
	  $( "#baseline" ).addClass('active');
	  $('body').toggleClass('baselineon');
	} 	
	// baseline processor
	function processbase(size) {
		if (size === null) {
			size = parseFloat($('body').css('font-size'));
		}
		$('body').css('background-image','url(http://basehold.it/i/'+Math.round(size*1.5)+'/777777)');
	}
	$(window).resize(function() {
		if($('body').hasClass("baselineon")){
			var size = parseFloat($('body').css('font-size'));
			$('body').css('background-image','url(http://basehold.it/i/'+Math.round(size*1.5)+'/777777)');
		} 
	});


// ALIGNMENT !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! 
	$( "#justify" ).click(function(event) {
		event.preventDefault();
		$('body').addClass('justify'); 
		localStorage.setItem("align", "justify");
		$("#ragrt").removeClass('active');
		$(this).addClass("active");
	});
	$( "#ragrt" ).click(function(event) {
		event.preventDefault();
		$('body').removeClass('justify');
		localStorage.removeItem("align");
		$("#justify").removeClass('active');
		$(this).addClass("active");
	});
	var align = localStorage.getItem('align');			
		if (align === 'justify') {
			$('body').addClass('justify'); 
			$( "#ragrt" ).removeClass('active');
			$( "#justify" ).addClass("active");
		}	

// HYPHENS !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! 
	$( "#hyphens" ).click(function(event) {
		event.preventDefault();
		$('body').toggleClass('hyphens');
		$(this).toggleClass("active");  
		if ($('body').hasClass("hyphens")) {
			localStorage.setItem("hyphens", "on");
		}  else {
			localStorage.removeItem ('hyphens');        
		}
	});
	var hyphens = localStorage.getItem('hyphens');
	if (hyphens === 'on') {
		$('body').addClass('hyphens');
		$( "#hyphens" ).addClass('active');
	} 

// CONTRAST !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! 
	$("#lowcontrast").click(function(event){
		event.preventDefault();
		$('body').removeClass('invert');
		$("#highcontrast").removeClass('active');
		$(this).addClass("active");
		localStorage.removeItem ('highcontrast');
		});	
	$("#highcontrast").click(function(event){
		event.preventDefault();
		$("#lowcontrast").removeClass('active');
		$(this).addClass("active");
		$('body').addClass('invert');
		localStorage.setItem('highcontrast', $(this).is(':visible'));
		});		
		var highcontrast = localStorage.getItem('highcontrast');			
		if (highcontrast === 'true') {
			$("#lowcontrast").removeClass('active');
			$('body').addClass('invert');
			$("#highcontrast").addClass("active");
		}

$("#reset").click(function(event){
	event.preventDefault();
	localStorage.clear();
	$("#text-sans, #small, #medium, #large, #highcontrast, #justify, #hyphens, #baseline").removeClass('active');
	$("#text-serif, #ragrt, #lowcontrast").addClass("active");
	$("html").removeAttr('style');
	$("body").removeAttr('id').removeAttr('style').removeClass();
	activesize(parseFloat($('body').css('font-size')));
});	

$(".complex").hide();
$(".read_more").click(function(event){
	event.preventDefault();	
	$(this).closest('.row').next('.complex').slideToggle();
	$(this).children('span').text( $(this).children('span').text() == 'Show' ? 'Hide' : 'Show');
	$(window).resize(); 
}); 


// wrap images for baseline snap
	$("img, svg").not(".ignore").wrap( "<div class='imgsnap'></div>" );
	$( ".snapit" ).wrap( "<div class='panelsnap'></div>" );
	$(document).resize();
});

$(window).load(function() {
"use strict";
		var lineHeight = parseFloat($('body').css('line-height'));	
		$('img, .snapit, svg').each(function() {
			var heightDiv = $(this).outerHeight();	
			var padding = ((Math.ceil(heightDiv / lineHeight) * lineHeight)-heightDiv)/2;						
			$(this).parent().css({'padding-top': padding, 'padding-bottom': padding});			
		});
});	


// baseline images on resize
	$(window).resize(function() {
		"use strict";
		var lineHeight = parseFloat($('body').css('line-height'));	
		$('img, .snapit, svg').each(function() {
			var heightDiv = $(this).outerHeight();	
			var padding = ((Math.ceil(heightDiv / lineHeight) * lineHeight)-heightDiv)/2;						
			$(this).parent().css({'padding-top': padding, 'padding-bottom': padding});			
		});
	});

	$('#xbtn').on('click', function(){
		onoff("#x");		
	});
	$('#ascbtn').on('click', function(){
		onoff("#asc");
	});
	$('#desbtn').on('click', function(){
		onoff("#des");;
	});
	$('#basebtn').on('click', function(){
		onoff("#base");
	});
	$('#capbtn').on('click', function(){
		onoff("#cap");
	});
   

	// svg animation control
	function onoff(id) {
		$("#ig g").attr('class', '');
		$(id).attr("class", "on");
		$(id).find('.ani')[0].beginElement();
	}
	// SVG / PNG
  if(!Modernizr.svg) {
    $('img[src*="svg"]').attr('src', function () {
    return $(this).attr('src').replace('.svg', '.png');
  });
}

$(document).ready(function(){

var editable = document.getElementById('notes');

$(editable).blur(function() {
   localStorage.setItem('contenteditable', this.innerHTML);
this.designMode = 'off';
});

$(editable).focus(function() {
this.designMode = 'on';
});

$("#clear").click(function(event){
	event.preventDefault();
		localStorage.clear();
  window.location = window.location; // refresh	
	});


if (localStorage.getItem('contenteditable')) {
  editable.innerHTML = localStorage.getItem('contenteditable');
}
$('#action-bold').click(function () {
    document.execCommand('bold', false, null);
});
$('#action-underline').click(function () {
    document.execCommand('underline', false, null);
});
$('#action-italic').click(function () {
    document.execCommand('italic', false, null);
});
$('#action-ol').click(function () {
    document.execCommand('insertOrderedList', null, null);
});
$('#action-ul').click(function () {
    document.execCommand('insertUnorderedList', null, null);
});
$('.styleselect').change(function () {
    document.execCommand('formatBlock', null, $(this).val());
});
    $("#btnPrint").click(function (event) {
		event.preventDefault();
        var contents = $("#revealnotes").html();
        var frame1 = $('<iframe />');
        frame1[0].name = "frame1";
        frame1.css({ "position": "absolute", "top": "-1000000px" });
        $("body").append(frame1);
        var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
        frameDoc.document.open();
        //Create a new HTML document.
        frameDoc.document.write('<html><head><title>TotallyType Notes</title>');
        frameDoc.document.write('</head><body>');
        //Append the external CSS file.
        frameDoc.document.write('<link rel="stylesheet" href="css/total.css" />');
        //Append the DIV contents.
        frameDoc.document.write(contents);
        frameDoc.document.write('</body></html>');
        frameDoc.document.close();
        setTimeout(function () {
            window.frames["frame1"].focus();
            window.frames["frame1"].print();
            frame1.remove();
        }, 500);
    });

});