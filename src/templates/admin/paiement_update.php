<?php include "header.php" ?>
<div class="container content">
  <h3><?php echo value($data, "id") ?></h3>
  <hr>
  <div class="row">
    <form method="post" class="form-horizontal">
      <div class="form-group">
        <div class="col-md-6">
            <h6><strong>Carte</strong></h6>
            <input value="<?php echo value($data, "card") ?>" name="card" placeholder="Carte" class="form-control input-md" type="text">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6">
            <h6><strong>Mois d'expiration</strong></h6>
            <input value="<?php echo value($data, "expityMonth") ?>" name="expityMonth" placeholder="Mois d'expiration" class="form-control input-md" type="text">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6">
            <h6><strong>Année d'expiration</strong></h6>
            <input value="<?php echo value($data, "expityYear") ?>" name="expityYear" placeholder="Année d'expiration" class="form-control input-md" type="text">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6">
            <h6><strong>Code</strong></h6>
            <input value="<?php echo value($data, "cv") ?>" name="cv" placeholder="Code" class="form-control input-md" type="text">
        </div>
      </div>
      <hr>
      <button type="submit" class="btn btn-default">Submit</button>
      <br>
    </form>
  </div>
</div>
<?php include "footer.php" ?>
