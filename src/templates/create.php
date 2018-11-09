<?php include "common/header.php" ?>
COMPTE USER
<?php if (isset($_SESSION["Anthentifié"]) && $_SESSION["Anthentifié"] == false) { ?>
    <p>Coucou logged </p>
<?php } else { ?>
    <p>Coucou pas logged </p>
<?php } ?>

<div class="container content">
  <h3><?php echo value($data, "nom") ?></h3>
  <hr>
  <div class="row">
    <form method="post" class="form-horizontal">
      <div class="form-group">
        <div class="col-md-6">
            <h6><strong>Pseudo</strong></h6>
            <input value="<?php echo value($data, "Pseudo") ?>" name="pseudo" placeholder="Pseudo" class="form-control input-md" type="text">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6">
            <h6><strong>Email</strong></h6>
            <input value="<?php echo value($data, "email") ?>" name="email" placeholder="E-mail" class="form-control input-md" type="text">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6">
            <h6><strong>Mot de passe</strong></h6>
            <input value="<?php echo value($data, "password") ?>" name="password" placeholder="password" class="form-control input-md" type="text">
        </div>
      </div>
      <hr>
      <button type="submit" class="btn btn-default">Submit</button>
      <br>
    </form>
  </div>
</div>
<?php include "common/footer.php" ?>
