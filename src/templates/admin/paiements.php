<?php include "header.php" ?>

<div class="container content">
  <h3>Paiements <a class="btn btn-default" href="/admin/users/add">Ajouter une carte</a></h3>
  <hr>
  <div class="row">
    <div class="span5">
      <table class="table table-striped table-condensed">
            <thead>
            <tr>
                <th>id</th>
                <th>Card</th>
                <th>ExpityMonth</th>
                <th>ExpityYear</th>
                <th>cv</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach($data["paiements"] as $key => $value) { ?>
            <tr>
                <td><?php echo $value["id"] ?></td>
                <td><?php echo $value["card"] ?></td>
                <td><?php echo $value["expityMonth"] ?></td>
                <td><?php echo $value["expityYear"] ?></td>
                <td><?php echo $value["cv"] ?></td>
                <td><a href="/admin/paiement/update?id=<?php echo $value["id"] ?>">Editer</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      </div>
  </div>
</div>
<?php include "footer.php" ?>
