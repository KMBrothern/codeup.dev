 // var keys = [];
 var count = 0;
var myNameIs=[107, 101, 121, 97, 115, 104, 97];
console.log('js_keyboard.js file is linked correctly');

$(document).keypress(function (event){
	console.log(event.keyCode);
	// keys.push(event.keyCode);

	if(event.keyCode == myNameIs[count]) {
		console.log('correct');
		count++;

		// if count == length alert('we won')
	} else {
		console.log('you lose');
	}
	
	if(count == myNameIs.length){
		$('#myName').html('Keyasha');
		console.log('You got it right!');
	}
	// if (keys == myNameIs){
	// $('#myName').html('Keyasha');
	// console.log('It worked');
// }

});




// grab the sequence of keys--done

// when they match your name attach that name to the h1 tag above

// create this sequence and alert('You have an additional 30 lives')
// up, up, down, down, left, right, left, right, b, a, b, a, enter

