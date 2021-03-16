<?php  include("../vue/header.php");
echo '<br>';

    //validation cote serveur
  
    if (empty($_POST["vname"]))
     {   echo "<span style='color:red'>";
         echo "Le nom doit être renseigné ! ";
         echo "<br>";
         echo "</span>";
         echo "<br>";
         echo '<a href="../vue/contact.php" class="btn btn-outline-success" role="button">Retour </a>';

     }
     else if (empty($_POST["vprénome"]))
     {   echo '<span style="color:red">';
         echo "Le prénome doit être renseigné ! ";
         echo "<br>";
         echo "</span>";
         echo "<br>";
         echo '<a href="../vue/contact.php" class="btn btn-outline-success" role="button">Retour </a>';
     }
     else if (empty($_POST["sexe"]))
     {   echo '<span style="color:red">';
         echo "Le sexe doit être renseigné ! ";
         echo "<br>";
         echo "</span>";
         echo "<br>";
         echo '<a href="../vue/contact.php" class="btn btn-outline-success" role="button">Retour </a>';
    
     }
     else if (empty($_POST["date"]))
     {  echo '<span style="color:red">';
         echo "La date doit être renseigné ! ";
         echo "<br>";
         echo "</span>";
         echo "<br>";
         echo '<a href="../vue/contact.php" class="btn btn-outline-success" role="button">Retour </a>';
     }
     else if (empty($_POST["cp"]))
     {  echo '<span style="color:red">';
         echo "Le code postal doit être renseigné ! ";
         echo "<br>";
         echo "</span>";
         echo "<br>";
         echo '<a href="../vue/contact.php" class="btn btn-outline-success" role="button">Retour </a>';
     }
     else if (empty($_POST["adr"]))
     {  echo '<span style="color:red">';
         echo "L'adresse doit être renseigné ! ";
         echo "<br>";
         echo "</span>";
         echo "<br>";
         echo '<a href="../vue/contact.php" class="btn btn-outline-success" role="button">Retour </a>';
     }
     else if (empty($_POST["ville"]))
     {  echo '<span style="color:red">';
         echo "La ville doit être renseigné ! ";
         echo "<br>";
         echo "</span>";
         echo "<br>";
         echo '<a href="../vue/contact.php" class="btn btn-outline-success"role="button">Retour </a>';
     }
     else if (empty($_POST["email"]))
     {  echo '<span style="color:red">';
         echo "L'adresse mail doit être renseigné ! ";
         echo "<br>";
         echo "</span>";
         echo "<br>";
         echo '<a href="../vue/contact.php" class="btn btn-outline-success" role="button">Retour </a>';
     }
     else if (empty($_POST["sujet"]))
     {  echo '<span style="color:red">';
         echo "Le sujet doit être renseigné ! ";
         echo "<br>";
         echo "</span>";
         echo "<br>";
         echo '<a href="../vue/contact.php" class="btn btn-outline-success" role="button">Retour </a>';
     }

     else if (empty($_POST["vq"]))
     {  echo '<span style="color:red">';
         echo "Le question doit être renseigné ! ";
         echo "<br>";
         echo "</span>";
         echo "<br>";
         echo '<a href="../vue/contact.php" class="btn btn-outline-success" role="button">Retour </a>';
     }

     else if (empty($_POST["*"]))
     {  echo '<span style="color:red">';
         echo "Le traitement informatique de ce formulaire doit être renseigné !";
         echo "<br>";
         echo "</span>";
         echo "<br>";
         echo '<a href="../vue/contact.php" class="btn btn-outline-success" role="button">Retour </a>';
     }
     else{
        $nom = $_POST['vname'];  
        echo 'Nom : '. $nom;
        echo "<br>";

        $prenom = $_POST['vprénome'];  
        echo 'Prénom : ' . $prenom;
        echo "<br>";

        $sexe = $_POST['sexe'];  
        echo 'Vous êtes du sexe : ' . $sexe;
        echo "<br>";

    
        $date = $_POST['date'];  
        echo 'Vous êtes né(e) le : ' . $date;
        echo "<br>";

        $codepostal = $_POST['cp'];  
        echo 'Votre code postal est le : ' . $codepostal;
        echo "<br>";
     

        $adresse = $_POST['adr'];  
        echo 'Votre adresse est : ' . $adresse;
        echo "<br>";

        $ville = $_POST['ville'];  
        echo 'Votre ville est : '. $ville;
        echo "<br>";


        $email = $_POST['email'];  
        echo 'Votre email est : '.  $email;
        echo "<br>";

        $sujet = $_POST['sujet'];  
        echo 'Votre sujet sélectionné est : ' . $sujet;
        echo "<br>";

        $question = $_POST['vq'];  
        echo 'Votre question est la suivante : ' . $question;
        echo "<br>";

          $checkbox = $_POST['*'];  
        echo 'Vous avez donné votre accord pour le traitement informatique de ce formulaire : ' . $checkbox;
        echo "<br>";
     }
     

     
   //PIED DE PAGE
     include("../vue/footer.php");

     ?>
