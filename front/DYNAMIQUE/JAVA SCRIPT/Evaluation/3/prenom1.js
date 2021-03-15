var tab  = [

    "Audrey",  "Aurélien",  "Flavien",  " Jérémy",  "Laurent",  "Melik", 
    "Nouara"  ,  "Salem" ,  "Samuel"  

]; //type strings



var prenom=prompt("Bonjour utilisateur! On recherche dans tableau ,Si le prénom est trouvé, on l'élimine du tableau en décalant les cases qui le suivent. Si le prénom n'est pas trouvé un message d'erreur apparait et aucun prénom ne se supprime.les prenomes sont Audrey, Aurélien, Flavien, Jérémy, Laurent, Melik, Nouara, Salem, Samuel. Ecrivez un prénom : ");
var x= false;


function maFonc(prenom){
for( var i = 0; i<10 ; i++){
    if(prenom == tab[i] ){
        tab.splice(i,1);
        tab.push('');
        x = true;
    }
    else{
        continue;
    }
}
};


if(x == false){
    alert('le nom n\'a pas trouvé');
   
}
else{
document.write(tab);

};


