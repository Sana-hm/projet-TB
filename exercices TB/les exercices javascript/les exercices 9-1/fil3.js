/*var x = prompt('entrez un premiere numbre ');
var y = prompt('entrez un duxieme numbre ');
var sum = x * y;*/

// document.write('le cube ' + x + 'est égal à' + math.pow(x,3));
//document.write('le produit est égal à' + ' ' + sum);

var x ,y ,sum,cube; 


function produit (x,y){
    x=prompt('entrez premiere numbre ');
    y=prompt('enrez duxeme numbre ') ;
    sum = y * x;
    cube=x*x*x;
    document.write('le produit est égal à ' + sum);
    document.write('le cube de' + x + 'est égal à' + cube);
}
