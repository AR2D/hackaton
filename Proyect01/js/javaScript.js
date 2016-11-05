$(document).ready(main);
var i = 1;
function main(){
	// show and show out menu
	$('.menu_bar').click(function(){
		//$('nav').toggle();//aesy format 
		if (i == 1) {
			$('nav').animate({
				left: '0'
			});
			i = 0;
		}else{
			i = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
	});
}