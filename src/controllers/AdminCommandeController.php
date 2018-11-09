<?php

class AdminCommandeController extends BaseController {

  public function index($req, $res){
    //Test si l'utilisateur est logged
    $this->isLogged(array("redirect" => "/admin/login"));
    $u = new Commande();
    $rows = $u->find();
    $res->html("admin/commandes.php", array("commandes" => $rows));
  }

}
