$(document).ready(function(){
    $('#myAnchor').click(function(){
		var value= $('#font_sz').val().replace(/[^\d\.]/g, '');
		var funit= $('#font_sz').val().replace(/\d+/g, '');
        var href = 'http://www.modularscale.com/?' + value +'&'+ funit +'&1.618&web&text';
	   window.open(href, '_blank');
    });
})

	var one = $('.font-one'),
	two = $('.font-two'),
	both =  $('.font-one, .font-two')
	preview = $('.preview')
	
	function update() {	
	var 	font1 = $('#font_one').val(),
			font2 = $('#font_two').val(),
			fontD = $('#display-font').val(),
			fColor = $('#foreground').val(),
			bColor = $('#background').val(),
			fontSize = $('#font_sz').val(),
			lineH = $('#lineheight').val(),
			lSpace = $('#letterspacing').val()
	
	// Radio Values
	$("#f1").val(font1);
	$("#f2").val(font2);
	var myFont = $('input[name="font"]:checked').val()
	
	// Names	
	$('.name-font1').text(font1).css({'font-family': font1});
	$('.name-font2').text(font2).css({'font-family': font2});
	$('.name-fontd').text(fontD).css({'font-family': fontD});
	$('.name-fonts').text(myFont).css({'font-family': myFont});
	// Heading
	$('.f1head').css({'font-family': font1});
	$('.f2head').css({'font-family': font2});
	$('.fhead').css({'font-family': fontD});
	$('.ftext').css({'font-family': myFont})
	// Color
	$('#foreground-color').text("#" + fColor);
	$('#background-color').text("#" + bColor);
	// Text Values
	$('.font-size-value').text(fontSize);
	$('#line-space-value').text(lineH + "em");	
	$('#letter-space-value').text(lSpace + "em");
	$('#myfont').text(myFont);
	$('#mydisplayfont').text(fontD);	

// CSS

		one.css({
		  'font-family': '"'+font1+'"'
		});
		two.css({
		  'font-family': '"'+font2+'"'
		});
		both.css({
		  'font-size': fontSize,
		  'line-height': lineH,
		  'letter-spacing': lSpace + "em"
		});
		preview.css({
			'font-family': $(myFont).val(),
			'font-size': fontSize,
			'line-height': lineH,
			'letter-spacing': lSpace + "em"
		});
	}

function updatetwo() {	
	$('.font-one, .font-two').css({
		  'line-height': $('#lineheight').val()
		});
};

// Update Input
$("input[name='cfont'], #letterspacing, input[name='dfont'], input[name='size']").on('input', function() {
	update();
});	
$("input[type='number']").change(function() {
		updatetwo();
	});
$("input[type='radio']").change(function() {
		update();
	});
$(document).ready(function(){
	updatetwo();
	update();
});



$(".testPrint").click(function (event) {
	event.preventDefault();
	if($(this).hasClass("whole")){
			var contents = $(this).parent().parent(".panel").parent(".printme").html();
		} else {
			var contents = $(this).parent().parent(".panel").html();
		}
	var frame1 = $('<iframe />');
	frame1[0].name = "frame1";
	frame1.css({ "position": "absolute", "top": "-1000000px" });
	$("body").append(frame1);
	var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
	frameDoc.document.open();
	//Create a new HTML document.
	frameDoc.document.write('<html><head><title>TotallyType</title>');
	frameDoc.document.write('</head><body><div class="row"><div class="large-6 columns">');
	//Append the external CSS file.
	frameDoc.document.write('<link href="css/total.css" rel="stylesheet" type="text/css" />');
	//Append the DIV contents.
	frameDoc.document.write(contents);
	frameDoc.document.write('</div></div></body></html>');
	frameDoc.document.close();
	setTimeout(function () {
		window.frames["frame1"].focus();
		window.frames["frame1"].print();
		frame1.remove();
	}, 500);
});