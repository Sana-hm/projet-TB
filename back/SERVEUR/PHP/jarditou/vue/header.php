<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



  <title>Jarditou <?php echo $title ?></title>

</head>

<body class="container">
  <header class="row">

    <div class="col d-none d-sm-block">
      <img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/contenu/img/jarditou_logo.jpg" alt="logo" title="logo" height="50" width="150">
    </div>
    <div class="col d-none d-lg-block">
      <!-- Pour aligner le h3 à droite -->
      <h3 class="text-right pr-5">Tout le jardin</h3>
    </div>
  </header>
  <nav class="navbar navbar-expand-lg bg-light navbar-light">

    <a class="navbar-brand" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/index.php ">Jarditou.com</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <!-- NAVIGATION -->
      <!-- Navbar links -->

      <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/index.php" title="Accueil">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/vue/tableau.php" title="Tableau">Tableau</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/vue/contact.php" title="Contact">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/vue/ajout.php" title="ajoute un produit">Ajoute</a>
        </li>
      </ul>


      <!-- search bar -->
      <form class="form-inline my-lg-0" action="">
        <input class="form-control mr-sm-2" type="text" placeholder="Votre promotion" />
        <button class="btn btn-outline-success" type="submit">
          rechercher
        </button>
      </form>
    </div>
  </nav>


  <!-- BANNIERE -->

  <!-- mb pour margin-bottom -->
  <div>
    <img class="img-fluid" width="1390" height="2000" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/contenu/img/UK_learn-grow-garden.jpg" alt="promotion" />
  </div>



  </header>