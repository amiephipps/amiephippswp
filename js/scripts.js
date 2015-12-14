$(function(){
	$('header ul li a').addClass('smoothScroll');
	$('header ul li:first-of-type').addClass('item1');
	$('header ul li a').addClass('hvr-underline-from-center');

	var fin=!1;
	
	function type() {
		$('.typewriter h4').eq(0);
	}

//TYPEWRITER STUFF ***************************

	$('.typewriter').t({
		speed: 100,
		speed_vary: false,
		mistype: false,
		blink: false,
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

//ACCORDION STUFF *******************

	var icons = {
	  header: "ui-icon-circle-arrow-e",
	  activeHeader: "ui-icon-circle-arrow-s"
	};

	$('#faq').accordion({
		icons: icons,
		heightStyle: "content"
	});
});