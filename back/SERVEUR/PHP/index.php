<?php
$title = 'Accueil';
include("vue/header.php");


if (isset($_SESSION['User'])) {
   echo 'Bienvenue ' . $_SESSION['User'] . '<br/>' . '<br/>';
}
?>
<!-- CONTENU DE MA PAGE -->
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

         <p>Vous pouvez bien sur contacter pour de plus amples information ou pour une demande d'intervention. Vous souhaitez bun devis? Nous le réalisons gratuiement.Lorem ipsum dolor sit amet consectetur adipisicing elit.Dolores enim voluptatibus soluta perferendis exercitationem eum nisi nesciunt quod quidem, facilis, sequi explicabo illo ex consequatur amet quibusdam reprehenderit assumenda modi laborum placeat?</p>

      </article>
   </section>
   <div class="bg-warning col-lg-4 px-0 ">
      <h3 class="text-center pt-3">[Colonne de droite]</h3>
   </div>
</div>
<!-- PIED DE PAGE -->

<?php
include("vue/footer.php");
?>