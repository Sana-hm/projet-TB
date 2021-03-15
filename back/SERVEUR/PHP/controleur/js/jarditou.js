
var nomformul = new RegExp (/^[A-Za-z]+$/);
var prenomform = new RegExp (/^[A-Za-z]+$/);
var codepost = new RegExp (/^[0-9]*$/);
var adressform = new RegExp (/^[0-9A-Za-z\s]+$/);
var villeform = new RegExp (/^[A-Za-z]+$/);




function validateForm (form) {
  var nom = document.getElementById("vname").value;
  var prenom = document.getElementById("vprenome").value;
  var codepostal = document.getElementById("cp").value;
  var adrss = document.getElementById("adr").value;
  var vil = document.getElementById("ville").value;
  var bool=true;
  
  
  
    if (nom == ""){
        document.getElementById("nome").innerHTML = "ce champ est vide!";
        document.getElementById("nome").style.color = "red";
        bool = false;
     } 
    else if (!nomformul.test(nom)){
        document.getElementById("nome").innerHTML = "ce champ est incorrect!";
        document.getElementById("nome").style.color = "red";
        bool = false;
     } 
    else{
         document.getElementById("nome").innerHTML = "";
     }
    if(prenom == ""){
        document.getElementById("pnom").innerHTML = "ce champ est vide !" ;
        document.getElementById("pnom").style.color = "red" ;
        bool = false ;
     }
    else if(!prenomform.test(prenom)){
        document.getElementById("pnom").innerHTML = "ce champ est incorrecrt !";
        document.getElementById("pnom").style.color = "red";
        bool = false;
     }
    else{
         document.getElementById("pnom").innerHTML = "";
     }
    if(codepostal == ""){
        document.getElementById("codp").innerHTML = "ce champ est vide !";
        document.getElementById("codp").style.color = "red";
        bool = false ; 
     }
    else if(!codepost.test(codepostal)){
        document.getElementById("codp").innerHTML = "ce champ est incorrect !";
        document.getElementById("codp").style.color ="red";
        bool = false;
     }
    else{
         document.getElementById("codp").innerHTML = "" ;
     }
    if(adrss == ""){
        document.getElementById("aaddrres").innerHTML = "ce champ est vide !";
        document.getElementById("aaddrres").style.color = "red";
        bool = false;
     }
    else if(!adressform.test(adrss)){
        document.getElementById("aaddrres").innerHTML = "ce champ est incorrect !";
        document.getElementById("aaddrres").style.color ="red";
        bool = false;
     }
    else{
         document.getElementById("aaddrres").innerHTML = "" ;
     }
    if(vil == ""){
        document.getElementById("villee").innerHTML = "ce champ est vide !";
        document.getElementById("villee").style.color = "red";
        bool = false;
     }
    else if(!villeform.test(vil)){
        document.getElementById("villee").innerHTML = "ce champ est incorrect !";
        document.getElementById("villee").style.color ="red";
        bool = false;
    }
    else {
         document.getElementById("villee").innerHTML = "";
    }
    return bool;
     }


