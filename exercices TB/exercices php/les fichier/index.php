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
    <title>docoument</title>

</head>

<body class="container">
    <header class="row">

        <div class="col d-none d-sm-block">
            <img src="img/jarditou_logo.jpg" alt="logo" title="logo" height="50" width="150">
        </div>

        <h3 class="img-fluid col pt-2 text-right mr-5 display-5 d-none d-sm-block">Tout le jardin</h3>
    </header>

    <nav class="navbar navbar-expand-lg bg-light navbar-light">

        <a class="navbar-brand" href="#">Jardiyou.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="index.php">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="tableau.php">Tableau</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Formulaire</a></li>
                <li class="nav-item"> <a class="nav-link" href="ajout.php">Ajouter un produit</a>
            </ul>


            <form class="form-inline my-lg-0" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Votre promotion">
                <button class="btn btn-outline-success" type="submit">Rechercher</button>
            </form>
        </div>
    </nav>

    <img class="img-fluid" src="img/promotion.jpg" alt="logo">

    <div class="row m-0 shadow-lg">
        <section class="col-lg-8 ">

            <article>

                <h3>L'entreprise</h3>

                <p>Notre entreprise familiale met tout son savoir-faire à votre dispotion dans la demaine du jardine et du paysagisme.</p>

                <p>Créé il y a 70 ans, notre entreprise vend fleurs, arbustes, matériel à main et motoriseés.</p>

                <p>implantés à Amiens, nous intervenons dans tout le département de la Somme : Albert, Doullens, Péronne, Abbeville, Corbie </p>
            </article>

            <article>
                <h3>Qualité</h3>

                <p>Nous metton è votre disposition un service personnalisé, avec 1 seul interlocuteur durant tout votre projet.Vouz serez séduit par notre expertise, nous compétence et notre sérieux.</p>


            </article>

            <article>
                <h3 class="display-5">Devis gratuit</h3>

                <p>Vous pouvez bien sur contacter pour de plus amples information ou pour une demande d'intervention. Vous souhaitez bun devis? Nous le réalisons gratuiement.Lorem ipsum dolor sit amet consectetur adipisicing elit.Dolores enim voluptatibus soluta perferendis exercitationem eum nisi nesciunt quod quidem, facilis, sequi explicabo illo ex consequatur amet quibusdam reprehenderit assumenda modi laborum placeat?,</p>

            </article>
        </section>
        <div class="bg-warning col-lg-4 px-0 ">
            <h3 class="text-center pt-3">[Colonne de droite]</h3>
        </div>
    </div>

    <footer class="navbar navbar-expand-lg bg-dark navbar-dark mt-3">

        <ul class="navbar-nav mr-auto text-white-50 mr-auto .text-black-50 rounded">
            <li><a class="nav-link" href="#">Mention légales</a></li>
            <li><a class="nav-link" href="#">Horaires</a></li>
            <li><a class="nav-link" href="#">Plane du suite</a></li>
        </ul>
        </ul>
    </footer>
</body>

</html>