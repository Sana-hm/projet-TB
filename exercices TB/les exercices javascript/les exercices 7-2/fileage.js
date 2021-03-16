
var x = prompt("Ecrivez votre l'année de naissance :");

var age = 2021 - x;
function aaa() {
if (age<18){
    return "minor.";
}
else{
    return "major.";
}
}

document.write("You are " + age + " years old and you are " + aaa());



