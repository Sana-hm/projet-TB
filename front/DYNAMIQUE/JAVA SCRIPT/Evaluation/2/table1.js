
window.onload = function TableMultiplication(a){
    var a = parseInt(prompt('Entrez un nombre pour afficher la table multiplication  : '))
    for ( i = 1 ; i<=10 ; i++){
    var sum = i*a ;
    var p = document.createElement('p');
    var node = document.createTextNode( i + ' x ' + a + ' = '+ sum);
    p.appendChild(node);  
    var table = document.getElementById('table');
    table.appendChild(p);
}
};
 TableMultiplication(a);
