<?php include "header.php" ?>
<!--Page avec la liste des administrateurs-->
<div class="container content">
  <h3>Comptes Administrateurs <a class="btn btn-default" href="/admin/administrateurs/add">Ajouter un administrateur</a></h3>
  <hr>
  <div class="row">
    <div class="span5">
      <table class="table table-striped table-condensed">
            <thead>
            <tr>
              <th>Prénom</th>
              <th>Nom</th>
              <th>Email</th>
              <th>Opérations</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach($data["admins"] as $key => $value) { ?>
            <tr>
              <td><a href="/admin/administrateurs/update?id=<?php echo $value["id"] ?>"><?php echo $value["prenom"] ?></a></td>
              <td><a href="/admin/administrateurs/update?id=<?php echo $value["id"] ?>"><?php echo $value["nom"] ?></a></td>
              <td><?php echo $value["email"] ?></td>
              <td><a href="/admin/administrateurs/update?id=<?php echo $value["id"] ?>">Editer</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      </div>
  </div>
</div>
<?php include "footer.php" ?>
