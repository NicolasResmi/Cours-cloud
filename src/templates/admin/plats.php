<?php include "header.php" ?>

<div class="container content">
  <h3>Boissons<a class="btn btn-default" href="/admin/plats/add">Ajouter un plat</a></h3>
  <hr>
  <div class="row">
    <div class="span5">
      <table class="table table-striped table-condensed">
            <thead>
            <tr>
              <th>Nom</th>
              <th>Prix</th>
              <th>Lien</th>
              <th>Opérations 1</th>
              <th>Opération 2</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach($data["plats"] as $key => $value) { ?>
            <tr>
              <td><a href="/admin/plats/update?id=<?php echo $value["id"] ?>"><?php echo $value["nom"] ?></a></td>
              <td><?php echo $value["prix"] ?></td>
              <td><?php echo $value["lien"] ?></td>
              <td><a href="/admin/plats/update?id=<?php echo $value["id"] ?>">Editer</a></td>
              <td><a href="/admin/plats/delete?id=<?php echo $value["id"] ?>">Supprimer</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      </div>
  </div>
</div>
<?php include "footer.php" ?>
