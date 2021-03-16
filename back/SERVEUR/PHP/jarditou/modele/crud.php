<?php
class crud
{
    private $db;
    function __construct($config)
     {
        $this->db = $config;
     }

     //functio pour ajouter un nouveau produit
     public function addProduit(
        
        $categorie,
        $reference,
        $libelle,
        $description,
        $prix,
        $stock,
        $couleur,
        $imgExtension,
        $ajout,
        $modif,
        $bloque
     ) {
        try {
            $sql = "INSERT INTO `produits`(
            `pro_cat_id`,
            `pro_ref`, 
            `pro_libelle`,
            `pro_description`, 
            `pro_prix`, 
            `pro_stock`, 
            `pro_couleur`,
            `pro_photo`, 
            `pro_d_ajout`,
            `pro_d_modif`,
            `pro_bloque`)
             VALUES(
            :pro_cat_id,
            :pro_ref, 
            :pro_libelle,
            :pro_description, 
            :pro_prix, 
            :pro_stock, 
            :pro_couleur,
            :pro_photo, 
            :pro_d_ajout,
            :pro_d_modif,
            :pro_bloque)";

            $add = $this->db->prepare($sql);

            $add->bindparam(':pro_cat_id', $categorie);
            $add->bindparam(':pro_ref', $reference);
            $add->bindparam(':pro_libelle', $libelle);
            $add->bindparam(':pro_description', $description);
            $add->bindparam(':pro_prix', $prix);
            $add->bindparam(':pro_stock', $stock);
            $add->bindparam(':pro_couleur', $couleur);
            $add->bindparam(':pro_photo', $imgExtension);
            $add->bindparam(':pro_d_ajout', $ajout);
            $add->bindparam(':pro_d_modif', $modif);
            $add->bindparam(':pro_bloque', $bloque);



            $add->execute();
            return $this->db->lastInsertId();
        } 
        catch (PDOException $e) {
            echo "<br><br><h5 class='text-danger'>Il y a une erreur!<br> Veuillez vérifier vos informations d'entrée. </h5><br><br>";
            // echo $e->getMessage();
            return false;
        }

     }

  
     public function getProduit()
     {

        $sql = "SELECT * FROM `produits`";
        $result = $this->db->query($sql);
        return $result;
     }


     //function to get all records of one product  
     public function getProductDetails($pro_id){

     $sql = "SELECT * FROM `produits`,`categories`  WHERE `produits`.`pro_cat_id`=`categories`.`cat_id` AND `pro_id` = :pro_id";
     $detail=$this->db->prepare($sql);
     $detail->bindparam(':pro_id',$pro_id);
     $detail->execute();
     $result = $detail->fetch();
     return $result;
     }

     //function to change all records of one product  
     public function changeProductDetails(
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
        ){
            try {
                $sql = "UPDATE `produits`
                SET 
               `pro_cat_id`=:pro_cat_id,
               `pro_ref`=:pro_ref,
               `pro_libelle`=:pro_libelle,
               `pro_description`=:pro_description,
               `pro_prix`=:pro_prix,
               `pro_stock`=:pro_stock,
               `pro_couleur`=:pro_couleur,
               `pro_d_modif`=:pro_d_modif,
               `pro_bloque`=:pro_bloque  
               WHERE `pro_id` = :pro_id";
               //bind all placeholders to the actual values
               $detail=$this->db->prepare($sql);
               $detail->bindparam(':pro_id',$productId);
               $detail->bindparam(':pro_ref',$reference);
               $detail->bindparam(':pro_cat_id',$categorie);
               $detail->bindparam(':pro_libelle',$libelle);
               $detail->bindparam(':pro_description', $description);
               $detail->bindparam(':pro_prix', $prix);
               $detail->bindparam(':pro_stock',$stock);
               $detail->bindparam(':pro_couleur',$couleur);
               $detail->bindparam(':pro_bloque',$bloque);
               $detail->bindparam(':pro_d_modif',$modif);
   
                // execute detail statement
                 $detail->execute();
                 return true;
            } catch (PDOException $e) {
                echo "<br><br><h3 class='text-danger'>There is an error! Please check your input informations. </h3><br><br>";
                //  echo $e->getMessage();
                 return false;
            }


           }
  //function to delete one product  
  public function deleteProduct($pro_id){

   try {
       $sql="DELETE FROM `produits` WHERE `pro_id` = :pro_id";
       $delete=$this->db->prepare($sql);
       $delete->bindparam(':pro_id',$pro_id);
       $delete->execute();
       return true;
   } catch (PDOException $e) {
       echo "<br><br><h3 class='text-danger'>There is an error! Please check your input informations. </h3><br><br>";
           //  echo $e->getMessage();
            return false;
   }

  
  }


        
}
?>
