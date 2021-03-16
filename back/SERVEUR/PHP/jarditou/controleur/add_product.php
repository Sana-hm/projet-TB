<?php
$title = 'add product';
include("../vue/header.php"); //import header.php

require_once("../Modele/config.php");  // Connexion base

require_once("../Modele/crud.php"); // Call fonctions in crud

if (isset($_POST["submit"])) {

    $extension = substr(strrchr($_FILES["produit"]["name"], "."), 1);

    $reference = $_POST['reference'];
    $categorie = $_POST['categorie'];
    $libelle = $_POST['libelle'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $stock = $_POST['stock'];
    $couleur = $_POST['couleur'];
    $ajout = date("Y-m-d");
    $modif = NULL;
    $bloque = $_POST['bloque'];


    $product_id = $crud->addProduit(
        $categorie,
        $reference,
        $libelle,
        $description,
        $prix,
        $stock,
        $couleur,
        $extension,
        $ajout,
        $modif,
        $bloque
    );

    if ($product_id != null) {
        echo '<br>';
        echo "<h6 class='text-success'>L'ajoute du produit a réusssi !  !</h6>";
        echo '<br>';
    } else {
        echo '<br>';
        echo "<h6 class='text-danger'> échec de l'ajout du produit !!</h6>";
        echo '<br>';
    }

    if ($_FILES['produit']['error'] == 0) {
        $target_dir = '../contenu/img/';
        $image_dest = "$target_dir$product_id.$extension";
        move_uploaded_file($_FILES['produit']['tmp_name'], $image_dest);
    } else {

        switch ($_FILES['produit']['error']) {
            case UPLOAD_ERR_INI_SIZE:
                $message = " Le fichier téléchargé dépasse la directive upload_max_filesize dans php.ini. ";
                break;
            case UPLOAD_ERR_FORM_SIZE:
                $message = " Le fichier téléchargé dépasse la directive MAX_FILE_SIZE spécifiée dans le formulaire HTML. ";
                break;
            case UPLOAD_ERR_PARTIAL:
                $message = "
                                    Le fichier téléversé n'a été téléversé que partiellement. ";
                break;
            case UPLOAD_ERR_NO_FILE:
                $message = " Aucun fichier n'a été téléversé. ";
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                $message = "Absence d'un dossier temporaire.";
                break;
            case UPLOAD_ERR_CANT_WRITE:
                $message = "Échec de l'écriture du fichier sur le disque.";
                break;
            case UPLOAD_ERR_EXTENSION:
                $message = "Téléchargement de fichier arrêté par extension.";
                break;

            default:
                $message = "Erreur de téléchargement inconnue.";
                break;
        }
        return $message;
    }
}
?>

<a href="../vue/ajout.php"><button type="button" class="btn btn-outline-success">Retour</button>
</a>

<!-- PIED DE PAGE -->
<?php

include("../vue/footer.php");
?>