console.log('js_whackamole.js file is linked correctly');

$(document).ready(function() {
	
	var delay = 3000; // delay time in milliseconds

	var timeoutId = setTimeout(function () {
		$('#mainMole').slideToggle();
		console.log('I faded in');

	}, delay);




	$('#mainMole').click(function(){
		
		$(this).slideToggle();
		console.log('On click, I faded out');

	});



	

});
