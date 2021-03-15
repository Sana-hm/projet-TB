<?php
$title = 'Modify Product';
include("header.php"); //import header.php

require_once("../Modele/config.php");  // Connexion base

require_once("../Modele/crud.php"); // Call functions in crud

$result = $pdo->query("SELECT * FROM categories ORDER BY cat_id"); // Requête pour avoir les cat_id
$categories = $result->fetchAll(PDO::FETCH_OBJ);

$currentDate = date("Y-m-d H:i:s");

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
    <form name="addProduct" action="../Controleur/update_script.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="productId">ID:</label>
        <input class="form-control" type="text" name="productId" id="productId" value="<?php echo $result['pro_id']; ?>" readonly /><br />
      </div>
      <div class="form-group">
        <label for="productName">Référence:</label>
        <input class="form-control" type="text" name="reference" id="reference" value="<?php echo $result['pro_ref']; ?>" /><br />
      </div>
      <div class="form-group">
        <label for="Categorie">Catégorie :</label>
        <select name="categorie" class="form-control" id="Categorie">
          <?php // echo all categories 
          foreach ($categories as $c) {
          ?>
            <option value="<?php echo $c->cat_id ?>" <?php if ($result['cat_nom'] == $c->cat_nom) echo 'selected' ?>><?php echo $c->cat_nom ?></option>
          <?php
          }
          ?>
        </select>
      </div><br />
      <div class="form-group">
        <label for="Libelle">Libellé :</label>
        <input class="form-control" type="text" name="libelle" id="libelle" value="<?php echo $result['pro_libelle']; ?>" /><br />
      </div>
      <div class="form-group">
        <label for="Description">Description :</label>
        <textarea class="form-control" id="description" name="description"><?php echo $result['pro_description']; ?></textarea><br />
      </div>
      <div class="form-group">
        <label for="prix">Prix :</label>
        <input class="form-control" type="number" name="prix" id="prix" value="<?php echo $result['pro_prix']; ?>" /><br />
      </div>
      <div class="form-group">
        <label for="stock">Stock :</label>
        <input class="form-control" type="number" name="stock" id="stock" value="<?php echo $result['pro_stock']; ?>" /><br />
      </div>
      <div class="form-group">
        <label for="couleur">Couleur :</label>
        <input class="form-control" type="text" name="couleur" id="couleur" value="<?php echo $result['pro_couleur']; ?>" /><br />
      </div>
      <div class="form-group">
        <label>Produit bloqué?:</label>
        <br />
        <input type="radio" id="oui" name="bloque" value="1" <?php if ($result['pro_bloque'] == 1) {
                                                                echo 'checked';
                                                              } ?> /> <label for="oui">Oui</label>
        <input type="radio" id="non" name="bloque" value="0" <?php if ($result['pro_bloque'] == 0 || NULL) {
                                                                echo 'checked';
                                                              } ?> readonly /> <label for="non"> Non </label>

        <br />
      </div>
      <div class="form-group">
        <br />
        <label for="ddj">Date d'ajout:</label>
        <input class="form-control" type="date" name="ddj" id="ddj" value="<?php echo $result['pro_d_ajout']; ?>" readonly /><br />
      </div>
      <div class="form-group">
        <label for="ddm">Date de modification:</label>
        <input class="form-control" type="datetime" name="ddm" id="ddm" value="<?php echo $currentDate ?>" readonly /><br />
      </div>
      <a href="details.php?pro_id=<?php echo $result['pro_id']; ?>"><button type="button" class="btn btn-secondary mr-3">Retour</button></a>
      <input class="btn btn-success" type="submit" value="Enregistrer" name="submit" />
    </form>
  </section>
</div>
<?php
include("footer.php");
?>