

var num1= prompt('enter the first number:');
var num2 = prompt('entre the seconde number:');
var op = prompt('enter an operator:');

function calculatrice() {
switch (op) {

 case '+': alert( parseInt(num1) + parseInt(num2));
break;
case '-':  alert( parseInt(num1) - parseInt(num2));
break;
case '*':  alert( parseInt(num1) * parseInt(num2));
break;
case '/':  alert( parseInt(num1) / parseInt(num2));
break;
default:
    alert ( 'error');
}
}
calculatrice();
