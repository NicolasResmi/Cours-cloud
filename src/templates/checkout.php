<?php include "common/header.php" ?>

<div id="transactions">
  <h4>Deliveroo - Plat - <?php echo $data["nom"] ?></h4>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-md-12"><a class="btn btn-default" href="/payment?id=<?php echo $data["id"] ?>">Payer</a></div>
    </div>
  </div>
</div>
<?php include "common/footer.php" ?>
