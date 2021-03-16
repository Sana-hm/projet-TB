
 <!-- import header.php -->
 <?php 
  $title='Product details';
  include("header.php");
  require_once("../Modele/config.php");  // Connexion base
  require_once("../Modele/crud.php"); // Call functions in crud

    //call function to get product details
    if (isset($_GET['pro_id'])){
      $pro_id = $_GET["pro_id"];
      $result= $crud->getProductDetails($pro_id);
  
    }else{
      echo "<br><br><h3 class='text-danger'>Please check details and try again!</h3><br><br>";
    }

?>
  <section>
    <br><br>
    <div><img class="mx-auto d-block img-fluid col-4" src="<?php $_SERVER['DOCUMENT_ROOT']?>/shomei/contenu/img/<?php echo $result['pro_id'] ?>.<?php echo $result['pro_photo'] ?>" alt=""></div>
    <br><br>
    <h1 class="text-center"><?php echo $result['pro_ref']; ?></h1>
    <br><br>
    <h2 class="text-center">Êtes vous sûr de vouloir supprimer <br>
    "<strong><?php echo $result['pro_ref']; ?></strong>" dela base de données ?</h2> 
    <br><br>
    <div class="d-flex justify-content-center">
    <a href="details.php?pro_id=<?php echo $result['pro_id']; ?>"><button type="button" class="btn btn-success mr-3">Annuler</button></a>

    <form action="../shomei/controleur/delete_script.php" method="POST">
    <input type="hidden" name="productId" value="<?php echo $result['pro_id']; ?>">
    <input
      class="btn btn-danger"
      type="submit"
      value="Supprimer"
      name="submit"
    />
    </form>
    </div>
  </section>            





<?php 
  include("footer.php");
?>
