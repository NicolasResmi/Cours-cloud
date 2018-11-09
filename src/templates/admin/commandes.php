<?php include "header.php" ?>

<div class="container content">
  <h3>Commandes</h3>
  <hr>
  <div class="row">
    <div class="span5">
      <table class="table table-striped table-condensed">
            <thead>
            <tr>
              <th>Produit</th>
              <th>Prix</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach($data["commandes"] as $key => $value) { ?>
            <tr>
              <td><a href="/admin/plats/update?id=<?php echo $value["id"] ?>"><?php echo $value["plat_id"] ?></a></td>
              <td><?php echo $value["prix"] ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      </div>
  </div>
</div>
<?php include "footer.php" ?>
