
$('document').ready(function (){
	// $('dt').click(function()
	$('#toggleButton').click(function(){
		event.preventDefault();
			$('dd').toggle();
		// }
		

	});

	$('ul').each(function(index) {
		$(this).children().first().css('font-weight', 'bold').css('color', 'white');
	
	});

	$('li').click(function() {
		$(this).parent().hide();

				
	});

});
