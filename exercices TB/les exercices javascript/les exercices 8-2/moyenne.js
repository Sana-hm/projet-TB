
var x, somme=0, moyenne, i=0;

while(x!=0) {
    x = prompt("enter a number");
    somme+=parseInt(x);
    i++;
  
}
document.write('la somme est : '+ somme );
moyenne = somme / (i-1);
document.write('la moyenne est :' + moyenne );