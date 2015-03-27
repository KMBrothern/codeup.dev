// Now i need to build the functionality for my calculator to actually work
console.log('calculator.js file linked correctly');
// grab the elements that I need to set event listeners for
// var operators = document.getElementById('operators');
var equals = document.getElementById('equals');
var numbers = document.getElementById('numbers');
var clear = document.getElementById('clear');
var clearAll = document.getElementById('clearall');
document.getElementById('operators').addEventListener('click', pressButton, false);


console.log(operators);// event listeners for the above elements
// operators.addEventListener('click',pressButton , false);

var pressButton = function(event)
{
    alert('You clicked an operator!');
}

