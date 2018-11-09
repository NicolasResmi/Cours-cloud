<?php

class AdminPlatController extends BaseController {

  public function getData() {
    // Attention, il faut renseigner que les champs présents dans la base de données
    return array(
      "nom" => $_POST["nom"],
      "prix" => $_POST["prix"],
      "lien" => $_POST["lien"]
    );
  }

  public function index($req, $res){
    //Test si l'utilisateur est logged
    $this->isLogged(array("redirect" => "/admin/login"));
    $user = new Plat();
    $rows = $user->find();
    $res->html("admin/plats.php", array("plats" => $rows));
  }

  public function add($req, $res){
    //Test si l'utilisateur est logged
    $this->isLogged(array("redirect" => "/admin/login"));
    $user = new Plat();

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $result = $user->insert($this->getData());
        $this->redirect("/admin/plats");
    } else {
        $res->html("admin/plat.php", array());
    }
  }

  public function update($req, $res){
    $this->isLogged(array("redirect" => "/admin/login"));
    $user = new Plat();

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $result = $user->update($_GET["id"], $this->getData());
        $this->redirect("/admin/plats");
    } else {
        $row = $user->findOne($_GET["id"]);
        $res->html("admin/plat.php", $row);
    }
  }

  public function delete($req, $res){
    $this->isLogged(array("redirect" => "/admin/login"));
    $user = new Plat();
    $user->delete($_GET["id"]);
    $this->redirect("/admin/plats");
  }
}
