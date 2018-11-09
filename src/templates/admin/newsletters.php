<?php include "header.php" ?>

<div class="container content">
  <h3>Comptes utilisateurs <a class="btn btn-default" href="/admin/users/add">Ajouter un user</a></h3>
  <hr>
  <div class="row">
    <div class="span5">
      <table class="table table-striped table-condensed">
            <thead>
            <tr>
              <th>ID</th>
<!--              <th>Nom</th>  -->
              <th>Email</th>
              <th>Opération</th>
              <th>Action</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach($data["newsletters"] as $key => $value) { ?>
            <tr>
<!--              <td><a href="/admin/users/update?id=<?php // echo $value["id"] ?>"><?php /// echo $value["nom"] ?></a></td>  -->
              <td><?php echo $value["id"] ?></td>
              <td><?php echo $value["email"] ?></td>
              <td><?php echo $value["object"] ?></td>
              <td>
                <a href="/admin/newsletters/update?id=<?php echo $value["id"] ?>">Editer</a> 
                / 
                <a href="/admin/newsletters/delete?id=<?php echo $value["id"] ?>">Supprimer</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      </div>
  </div>
</div>
<?php include "footer.php" ?>
