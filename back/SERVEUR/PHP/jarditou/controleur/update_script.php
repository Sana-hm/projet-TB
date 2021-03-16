<?php
  $title='modify product';
  include("../vue/header.php");//import header.php

  require_once("../Modele/config.php");  // Connexion base

  require_once("../Modele/crud.php"); // Call fonctions in crud


     if(isset($_POST["submit"])){
        $productId= $_POST['productId'];
        $reference = $_POST['reference'];
        $categorie = $_POST['categorie'];
        $libelle = $_POST['libelle'];
        $description = $_POST['description'];
        $prix = $_POST['prix'];
        $stock = $_POST['stock'];
        $couleur = $_POST['couleur'];
        $modif=$_POST['ddm'];
        $bloque = $_POST['bloque'];

        //call crud function
        $result = $crud->changeProductDetails(
            $productId,
            $reference,
            $categorie, 
            $libelle,
            $description,
            $prix,
            $stock,
            $couleur,
            $bloque,
            $modif
        );

        if($result){
            header("Location:../vue/tableau.php");//rediretion vers le tableau de page
        }else{
            echo "<br><br><h3 class='text-danger'>Échec de la modification du produit !</h3><br><br>";
            echo '<a href="../vue/update_form.php?pro_id=';
            echo $productId;
            echo '"><button type="button" class="btn btn-secondary">Retour</button></a>';
        }


    }
    else{
        echo "<br><br><h3 class='text-danger'>échec de la soumission du produit du formulaire !</h3><br><br>";
        echo '<a href="../vue/tableau.php"><button type="button" class="btn btn-secondary">Retour</button></a>';
    }
    include('../vue/footer.php');
?>