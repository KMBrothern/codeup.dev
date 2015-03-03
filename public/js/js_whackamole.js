console.log('js_whackamole.js file is linked correctly');

$(document).ready(function() {
	
	var delay = 3000; // delay time in milliseconds

	var timeoutId = setTimeout(function () {
		$('#mainMole').fadeIn();
		console.log('I faded in');

	}, delay);




	$('#mainMole').click(function(){
		
		$(this).fadeOut();
		console.log('On click, I faded out');

	});



	

});
