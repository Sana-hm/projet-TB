
var jeunes=0, moyens=0, vieux=0;

for( i = 0 ;  ; i++){
    var age = parseInt(prompt('entrez un age : '));
if(age>=100){
    break;
}//le programme est arreté dès la saisie d'un centenaire.

else if (age<20){
    jeunes++;
}

else if(age>40){
    vieux++;
    
}
else if(20<=age && age<=40){
   moyens++ ;
   
}
else { 
    alert("error");
}
}
//afficher les résultats.
alert('jeunes:' + jeunes + '\n' + 'moyens: '+  moyens+ '\n'+ 'vieux: '+vieux); 


