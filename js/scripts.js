$(function(){
	$('header ul li:last-of-type a').addClass('smoothScroll');
	$('header ul li:first-of-type').addClass('item1');

	var fin=!1;
	
	function type() {
		$('.typewriter h4').eq(0);
	}

//TYPEWRITER STUFF ***************************

	$('.typewriter').t({
		speed: 200,
		speed_vary: false,
		mistype: false,
		blink: true,
		// caret: false,
		repeat: true,
		typing:function(elem,chars_total,chars_left,_char){
		 if(_char=='*')type();
		},
		 
		fin:function() {
		 if(fin==!1){
		  fin=!!1; //avoids triggering after 'add' cmd
		 }
		}
	});


//MODAL STUFF ***********************

	// attach close button handler
	$('.modal .close').on('click', function(e){
	    e.preventDefault();
	    $.modal().close();
	});

	// open modal with default options or options set with init
	// content will be taken from #login
	$('#terms-of-service').modal().open();

	// also we can open modal overriding some default options
	$('#terms-of-service').modal().open({
	    closeOnESC: false
	});

	// Close modal. There's no need to choose which one since only one can be opened
	$.modal().close();
});