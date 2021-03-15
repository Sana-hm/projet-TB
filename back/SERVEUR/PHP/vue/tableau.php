<?php
$title = 'tableau';
include("header.php"); // Inclure l'en-tête dans le fichier header.php
require_once("../modele/config.php");

require_once("../modele/crud.php");
$result = $crud->getProduit();
?>
<br>
<h3 style=color:slategrey>Tous nos articles pour votre jardin</h3><br>
<div class="row mx-auto table-responsive">
  <!-- Pour que le tableau soit bien aligné avec la bannière -->
  <table class=" table table-bordered table-hover">
    <!-- Pour que le tableau soit en responsive -->
    <thead class="thead-light">
      <tr>
        <th>
          <h5>Photos</h5>
        </th>
        <th>
          <h5>ID</h5>
        </th>
        <th>
          <h5>Référence</h5>
        </th>
        <th>
          <h5>Libellé</h5>
        </th>
        <th>
          <h5>Prix</h5>
        </th>
        <th>
          <h5>Stock</h5>
        </th>
        <th>
          <h5>Couleur</h5>
        </th>
        <th>
          <h5>Ajout</h5>
        </th>
        <th>
          <h5>Modif</h5>
        </th>
        <th>
          <h5>Bloqué</h5>
        </th>

      </tr>
    </thead>

    <tbody>


      <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
          <td class="table-warning"><img width="100" alt="produit" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/shomei/contenu/img/<?php echo $row['pro_id'] ?>.<?php echo $row['pro_photo'] ?>"></td>
          <td class="text-center align-middle"><?php echo $row['pro_id'] ?></td>
          <td class="text-center align-middle"><?php echo $row['pro_ref'] ?></td>
          <td class="table-warning"><a href="details.php?pro_id=<?php echo $row['pro_id'] ?>" title="<?php echo $row['pro_libelle'] ?>"><?php echo $row['pro_libelle'] ?></a></td>
          <td class="text-center align-middle"><?php echo $row['pro_prix'] ?></td>
          <td class="text-center align-middle"><?php echo $row['pro_stock'] ?></td>
          <td class="text-center align-middle"><?php echo $row['pro_couleur'] ?></td>
          <td class="text-center align-middle"><?php echo $row['pro_d_ajout'] ?></td>
          <td class="text-center align-middle"><?php echo $row['pro_d_modif'] ?></td>
          <td><?php if ($row['pro_bloque'] == 1) {
                echo '<span class="bg-danger rounded">BLOQUE</span>';
              } ?></td>
        </tr>


      <?php } ?>

    </tbody>
  </table>

</div>
<!-- PIED DE PAGE -->
<?php
include("footer.php");
?>