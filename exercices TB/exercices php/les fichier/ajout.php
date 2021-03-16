<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>docoument</title>
</head>

<body class="container">
    <header class="row">
        <div class="col d-none d-sm-block">
            <img src="img/jarditou_logo.jpg" alt="logo" title="logo" height="50" width="150" />
        </div>

        <h3 class="img-fluid col d-none d-sm-block text-right pt-2 display-5">
            le qualité depuis 70 ans
        </h3>
    </header>

    <nav class="navbar navbar-expand-lg bg-light navbar-light">
        <a class="navbar-brand" href="#">Jardiyou.com</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tableau.php">Tableau</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php">Formulaire</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ajout.php">Ajouter un produit</a>
                </li>
            </ul>

            <form class="form-inline my-lg-0" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Votre promotion" />
                <button class="btn btn-outline-success" type="submit">
                    Rechercher
                </button>
            </form>
        </div>
    </nav>

    <img class="img-fluid" src="img/promotion.jpg" alt="logo" /><br />
       <h2>Ajouter un produit</h2><br>
           
             <form id="myform" action="upload.php" method="post" name="form" enctype="multipart/form-data">
             <label for="nproduit"> Nom de produit : </label>
             <input class="form-control" type="text" id="nproduit" placeholder="Veuillez saisir nom de produit " name="nproduit" />
             <br />
             <label for="code"> Code de produit : </label>
             <input class="form-control" type="text" id="code" placeholder="Veuillez saisir code de produit " name="code" />
             <br />
             <div class="custom-file">
             <input type="file" accept="image/*" class="custom-file-inpit" id="produit" name="produit">
             <label class="custom-file-label" for="produit">Uploade une photo</label><br><br>

             <input class="btn btn-primary btn-dark border border-primary" type="submit" name="envoyer" id="Envoyer" value="Envoyer" />
             <input class="btn btn-primary btn-dark border border-primary" type="reset" value="Annuler" name="annuler" id="Annuler" />

             <br /><br />

             <footer class="navbar navbar-expand-lg bg-dark navbar-dark rounded">
                <ul class="navbar-nav mr-auto text-white-50 mr-auto .text-black-50">
                    <li><a class="nav-link" href="#">Mention légales</a></li>
                    <li><a class="nav-link" href="#">Horaires</a></li>
                    <li><a class="nav-link" href="#">Plane du site</a></li>
                </ul>
             </footer>
        </form>
         <script src="jarditou.js" type="text/javascript"></script>
</body>
</html>