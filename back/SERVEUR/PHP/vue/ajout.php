<?php
$title = 'Ajout';
include('header.php');
require_once("../Modele/config.php");  // Connexion base
$result = $pdo->query("SELECT * FROM categories ORDER BY cat_id"); // Requête pour avoir les cat_id
$categories = $result->fetchAll(PDO::FETCH_OBJ);
?>


<h2>Ajouter un produit</h2><br>
<div>
   <section>
      <form id="reference" method="post" name="reference" action="../controleur/add_product.php" enctype="multipart/form-data">
         <label for="reference"> Référence : </label>
         <input class="form-control" type="text" id="reference" name="reference" required />
         <br />

         <label for="categorie"> Catégorie : </label>
         <select class="form-control" id="categorie" name="categorie" size="1" aria-placeholder="" required>
           

            <?php
            foreach ($categories as $c) {
            ?>
               <option value="<?= $c->cat_id ?>"> <?= $c->cat_nom ?></option>
            <?php
            }
            ?>

         </select>
         <br> <label for="libelle"> Libelle : </label>
         <input class="form-control" type="text" id="libelle" name="libelle" required />
         <br />

         <label for="des">Description :</label>
         <textarea class="form-control" id="description" name="description"></textarea><br>

         <label for="prix"> Prix : </label>
         <input class="form-control" type="number" id="prix" name="prix" required />
         <br />

         <label for="stock"> Stock : </label>
         <input class="form-control" type="number" id="stock" name="stock" />
         <br />

         <label for="couleur"> Couleur : </label>
         <input class="form-control" type="text" id="couleur" name="couleur" required />
         <br />

         <label>Produit bloqué?:</label>
               <br />
              <input type="radio" id="oui" name="bloque" value="1" required/> <label for="oui">Oui</label>
              <input type="radio" id="non" name="bloque" value="0" /> <label for="non"> Non </label>

              <br />


         <!-- Pour que le tableau soit en responsive -->
         <div class="custom-file">
            <input type="file" accept="image/*" class="custom-file-inpit" id="produit" name="produit">
            <label class="custom-file-label" for="produit">Uploade une photo</label><br><br>


            <br>
            <!-- Quand on clique sur le bouton retour on affiche le tableau -->
            <input class="btn btn-outline-info" type="submit" name="submit" id="Enregistrer" value="Enregistrer">
            <input class="btn btn-outline-danger" onclick="return confirm('Etes-vous certain(e) de vouloir supprimer le produit ?')" type="reset" value="Supprimer" name="Reser" id="Supprimer">
            <a href="tableau.php"><button type="button" class="btn btn-outline-secondary">Retour</button></a>

            <br>


         </div>
   </section>
   </form>

   <!-- PIED DE PAGE -->
   <?php
   include('footer.php')
   ?>