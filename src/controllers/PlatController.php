<?php

class PlatController extends BaseController {

  public function get($req, $res){
    $plat = new Plat();
    $row = $plat->findOne($_GET["id"]);
    $res->html("plat.php", $row);
  }

  public function checkout($req, $res){
    $plat = new Plat();
    $row = $plat->findOne($_GET["id"]);
    $res->html("checkout.php", $row);
  }

  public function payment($req, $res){
    $plat = new Plat();
    $row = $plat->findOne($_GET["id"]);

    $commande = new Commande();
    $commande->insert(array(
      'plat_id' => $row['id'],
      'prix' => $row['prix']
    ));
    $this->redirect("/");
  }
}
