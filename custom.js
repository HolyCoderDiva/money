(function(a){a.fn.slidinglabels=function(c,f){var d={className:"form-slider",topPosition:"5px",leftPosition:"5px",axis:"x",speed:"fast"},c=a.extend(d,c),b=this.find("."+d.className+""),e=b.find("label");return e.each(function(){obj=a(this);var j=obj.parents("."+d.className+"");j.css({position:"relative"});obj.css({position:"absolute",top:d.topPosition,left:d.leftPosition,display:"inline","z-index":99});var k=a(this).next().val(),i=a(this).width(),h=i+5+"px",g=a(this).height();if(k!==""){if(d.axis=="x"){obj.stop().animate({left:"-"+h},1)}else{if(d.axis=="y"){obj.stop().animate({top:"-"+g},1)}}}a("input, textarea").focus(function(){var m=a(this).prev("label"),o=m.width(),l=m.height(),q=o+5+"px",n=l+"px",p=a(this).val();if(p==""){if(d.axis=="x"){m.stop().animate({left:"-"+q},d.speed)}else{if(d.axis=="y"){m.stop().animate({top:"-"+n},d.speed)}}}else{if(d.axis=="x"){m.css({left:"-"+q})}else{if(d.axis=="y"){m.css({top:"-"+n})}}}}).blur(function(){var l=a(this).prev("label"),m=a(this).val();if(m==""){if(d.axis=="x"){l.stop().animate({left:d.leftPosition},d.speed)}else{if(d.axis=="y"){l.stop().animate({top:d.topPosition},d.speed)}}}})})}})(jQuery);

$(function(){

	$('.showModal').click(function(){
	$('#modalBack').show();
	$('#modal').show();
	$('.modalTitle').hide();
	$('.modalInner').hide();
	$('.legalOption').hide();
	$('.legalOption:first').show();
	var which = $(this).attr('data-which');
	$('#'+which+'.modalInner').show();
	$('#title'+which+'').show();
	return false;
	});
	
	$('.closeModal').click(function(){
	$('#modalBack').hide();
	$('#modal').hide();	
	});
	
	$('#modalBack').click(function(){
	$('#modalBack').hide();
	$('#modal').hide();	
	});
	
	$('.legalBtn').click(function(){
		$('.legalOption').hide();
		var which = $(this).attr('data-which');
		$('#'+which+'.legalOption').show();
	});
	
	$('form').slidinglabels({ 
		/* these are all optional */ 
		className : 'slider', // the class you're wrapping the label & input with -> default = slider 
		topPosition : '7px', // how far down you want each label to start 
		leftPosition : '20px', // how far left you want each label to start 
		axis : 'y', // can take 'x' or 'y' for slide direction 
		speed : 'fast' // can take 'fast', 'slow', or a numeric value 
	});

});