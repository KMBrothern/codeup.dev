
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];


var favorite = 'green'; 

if (color=='red') 
	{console.log('Hawaiian punch is red.');
}
else if (color=='orange') 
	{console.log('Califoria mango mend is orange.');
}
else if (color=='yellow') 
	{console.log('The sun is yellow');
}
else if (color=='green') 
	{console.log('Avocado is a green fruit');
}
else if (color=='blue') 
	{console.log('The caribbean is beautiful and blue');
}
else {console.log('I do not know anything by that color');
}


var message = (color == favorite) ? "This is my favorite color!" : "This is not my favorite color";
console.log(message);

