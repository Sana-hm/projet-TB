var pu , qtecom , pap , rem , port=6 , tot ;
/*le prix  unitaire noté pu d'un produit, 
la quantité commandée noté qtecom,
le prix à payer noté pap,
en détaillant la remise noté rem,
le port noté port,
*/  

pu=parseInt(prompt('prix'));
qtecom=parseInt(prompt('quantité commandée'));

tot = ( pu * qtecom );


if(tot>=100 && tot<=200 ){
    rem=0.05*tot;
}

else if(tot>200){
    rem= 0.1*tot;
}
else{
    rem=0;
}

if(tot-rem >500){
    port=0;
} //le port est gratuit si le prix des produits( le total remisé)est supérieur à 500 €.
else if ( tot-rem <= 500 && tot-rem * 0.02 > 6){
    port= 0.02 * (tot - rem);
}

//afficher les résultats.
pap = tot - rem + port;
alert('le prix a payer est :' + pap);


/*ci- dessous des exemples pour tester ce programme:
 Saisir 600 € et quantité = 1 : remise 10% (-60 €) soit 540,00 et frais port = 0; à payer : 540 €
Saisir 501 € et quantité = 1 : remise 10% (-50,1 €) soit 450,90 et frais port 2% (de 450,90 €) soit +9,01 € ; à payer : 450,90+9.01 = 459,91 €.
*/