<?php

$title = 'contact';
include("header.php");
?>
<form action="../controleur/script.php" method="post">
  <h6>* Ces zones sont obligatoires</h6><br>

  <fieldset>
    <legend>Vos coordonnées</legend>

    <label for="vname">Nom : </label>
    <input class="form-control" id="vname" name="vname" type="text" placeholder="Veuillez saisir votre nom" >
    <br>

    <label for="vprénome">Prénom : </label>
    <input class="form-control" type="text" id="vprénome" name="vprénome" placeholder="Veuillez saisir votre prénom" >
    <br>


    <label>Sexe* :</label><br>
    <input type="radio" id="Féminin" name="sexe" value="Féminin" >
    <label for="Féminin">Féminin</label>

    <input type="radio" id="Masculin" name="sexe" value="Masculin">
    <label for="Masculin">Masculin</label>

    <input type="radio" id="Neutre" name="sexe" value="Neutre">
    <label for="Neutre">Neutre</label>

    <br>
    <br>

    <label for="date">Date de naissance : </label>
    <input class="form-control" type="date" id="date" name="date" >
    <br>

    <label for="cp"> Code postal : </label>
    <input class="form-control" type="text" id="cp" name="cp" placeholder="" >
    <br>

    <label for="adr">Adresse : </label>
    <input class="form-control" type="text" id="adr" name="adr" placeholder="" >
    <br>

    <label for="ville">Ville : </label>
    <input class="form-control" type="text" id="ville" name="ville" placeholder="" >
    <br>

    <label for="email">Email : </label>
    <input class="form-control" type="text" id="email" name="email" placeholder="deve.loper@afpa.fr" >
  </fieldset>

  <br>
  <fieldset>
    <legend>Votre demande</legend>

    <label for="sujet">Sujet </label>
    <select class="form-control" id="sujet" name="sujet" size="1" aria-placeholder="Veuillez sélectionner un sujet" >
      <option value="select">Veuillez séléctionner un sujet</option>
      <option>Mes commandes</option>
      <option> Question sur un produit</option>
      <option>Réclamation</option>
      <option>Autres</option>
    </select>
    <br>

    <label for="vq">Votre question :</label>
    <textarea class="form-control" id="vq" name="vq" ></textarea><br>
  </fieldset>


  <input type="checkbox" id="*" name="*" value="true" >
  <label for="*">
    <h6>J'accepte le traitement informatique de ce formulaire</h6>
  </label>
  <br>
  <br>

  <input class="btn btn-outline-info" type="submit" name="submit" id="Envoyer" value="Envoyer">
  <input class="btn btn-outline-danger" type="reset" value="Annuler" name="annuler" id="Annuler">

  <!-- PIED DE PAGE -->
  <?php
  include("footer.php");
  ?>