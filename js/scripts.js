$(function(){
	$('header ul li:last-of-type a').addClass('smoothScroll');
	$('header ul li:first-of-type').addClass('item1');
	$('header ul li a').addClass('hvr-underline-from-center');

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
});