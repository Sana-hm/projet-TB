<?php
$title = 'Product details';
include("header.php"); //import header.php

require_once("../Modele/config.php");  // Connexion base

require_once("../Modele/crud.php"); // Call functions in crud

//call function to get product details
if (isset($_GET['pro_id'])) {
  $pro_id = $_GET["pro_id"];
  $result = $crud->getProductDetails($pro_id);
} else {
  echo "<br><br><h3 class='text-danger'>Veuillez vérifier les détails et réessayer!</h3><br><br>";
}

?>
<div>
  <section>
    <br><br>
    <div><img class="mx-auto d-block img-fluid col-4" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/shomei/contenu/img/<?php echo $result['pro_id'] ?>.<?php echo $result['pro_photo'] ?>" alt=""></div>
    <br><br>
    <form name="addProduct" action="../Controleur/add_product_script.php" method="post" enctype="multipart/form-data">
      <label for="productName">Référence:</label>
      <input class="form-control" type="text" name="reference" id="reference" value="<?php echo $result['pro_ref']; ?>" readonly /><br />
      <label for="Categorie">Catégorie :</label>
      <select name="categorie" class="form-control" id="Categorie" disabled>
      <option value="" ><?php echo $result['cat_nom'];?></option>
      </select><br />
      <label for="Libelle">Libellé :</label>
      <input class="form-control" type="text" name="libelle" id="libelle" value="<?php echo $result['pro_libelle']; ?>" readonly /><br />
      <label for="Description">Description :</label>
      <textarea class="form-control" id="description" name="description" placeholder="<?php echo $result['pro_description']; ?>" readonly></textarea><br />
      <label for="prix">Prix :</label>
      <input class="form-control" type="number" name="prix" id="prix" value="<?php echo $result['pro_prix']; ?>" readonly /><br />
      <label for="stock">Stock :</label>
      <input class="form-control" type="number" name="stock" id="stock" value="<?php echo $result['pro_stock']; ?>" readonly /><br />
      <label for="couleur">Couleur :</label>
      <input class="form-control" type="text" name="couleur" id="couleur" value="<?php echo $result['pro_couleur']; ?>" readonly /><br />
      <label>Produit bloqué?:</label>
      <br />
      <input type="radio" id="oui" name="bloque" value="1" disabled <?php if ($result['pro_bloque'] == 1) {
                                                                      echo 'checked';
                                                                    } ?> /> <label for="oui">Oui</label>
      <input type="radio" id="non" name="bloque" value="0" disabled <?php if ($result['pro_bloque'] == 0 || NULL) {
                                                                      echo 'checked';
                                                                    } ?> readonly /> <label for="non"> Non </label>

      <br />
      <label for="ddj">Date d'ajout:</label>
      <input class="form-control" type="date" name="ddj" id="ddj" value="<?php echo $result['pro_d_ajout']; ?>" readonly /><br />
      <label for="ddm">Date de modification:</label>
      <input class="form-control" type="datetime" name="ddm" id="ddm" value="<?php echo $result['pro_d_modif']; ?>" readonly /><br />
    </form>
  </section>
</div>

<a href="tableau.php"><button type="button" class="btn btn-outline-secondary">Retour</button></a>
<a href="update_form.php?pro_id=<?php echo $result['pro_id']; ?>"><button type="button" class="btn btn-outline-info">Modifier</button></a>
<a href="delete_form.php?pro_id=<?php echo $result['pro_id']; ?>"><button type="button" class="btn btn-outline-danger">Supprimer</button></a>





<!-- PIED DE PAGE -->

<?php
include("footer.php");
?>