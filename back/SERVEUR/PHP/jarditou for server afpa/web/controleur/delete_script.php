 <!-- import header.php -->
 <?php 
  $title='Product details';
  include("../vue/header.php");
  require_once("../Modele/config.php");  // Connexion base
  require_once("../Modele/crud.php"); // Call functions in crud

    //call function to get product details
    if (isset($_POST['submit'])){

      $pro_id = $_POST['productId'];
      $result= $crud->deleteProduct($pro_id);
      
      // redirect to page tableau
      if($result){
        echo "<br><br><h3 class='text-success'> product  deleted !</h3><br><br>";
        header("location:../shomei/vue/tableau.php");
      }else{
        echo "<br><br><h3 class='text-danger'> product not  deleted !</h3><br><br>";
      }
      
  
    }else{
      echo "<br><br><h3 class='text-danger'>Please check details and try again!</h3><br><br>";
    }

?>
<?php 
  include("../vue/footer.php");
?>
