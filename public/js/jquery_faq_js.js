
$('document').ready(function (){
	// $('dt').click(function()
	$('#toggleButton').click(function(){
		event.preventDefault();
			$('dd').fadeToggle();
		// }
		

	});

	$('ul').each(function(index) {
		$(this).children().first().css('font-weight', 'bold').css('color', 'white');
	
	});

	$('h3').click(function() {
		$(this).next().fadeToggle();

				
		});


});
