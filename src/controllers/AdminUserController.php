<?php

class AdminUserController extends BaseController {

  public function getData() {
    // Attention, il faut renseigner que les champs présents dans la base de données
    return array(
      "pseudo" => $_POST["pseudo"],
      "password" => md5($_POST["password"]),
      "email" => $_POST["email"]
    );
  }

  public function index($req, $res){
    //Test si l'utilisateur est logged
    $this->isLogged(array("redirect" => "/admin/login"));
    $user = new Utilisateur();
    $rows = $user->find();
    $res->html("admin/users.php", array("utilisateur" => $rows));
  }

  public function add($req, $res){
    //Test si l'utilisateur est logged
    $this->isLogged(array("redirect" => "/admin/login"));
    $user = new Utilisateur();

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $result = $user->insert($this->getData());
        $this->redirect("/admin");
    } else {
        $res->html("admin/user.php", array());
    }
  }

  public function update($req, $res){
    $this->isLogged(array("redirect" => "/admin/login"));
    $user = new Utilisateur();

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $result = $user->update($_GET["id"], $this->getData());
        $this->redirect("/admin");
    } else {
        $row = $user->findOne($_GET["id"]);
        $res->html("admin/user.php", $row);
    }
  }

  public function delete($req, $res){
    $this->isLogged(array("redirect" => "/admin/login"));
    $user = new User();
    $user->delete($_GET["id"]);
    $this->redirect("/admin");
  }

  //Début modifié par ADLEY
  //Redirection vers la page des administrateurs
  public function listAdmin($req, $res){
    //Test si l'utilisateur est logged
    $this->isLogged(array("redirect" => "/admin/login"));
    $user = new Admin();
    $rows = $user->find();
    $res->html("admin/usersAdmin.php", array("admins" => $rows));
  }

  public function updateAdmin($req, $res){
    $this->isLogged(array("redirect" => "/admin/login"));
    $user = new Admin();

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $result = $user->update($_GET["id"], $this->getData());
        $this->redirect("/admin/administrateurs");
    } else {
        $row = $user->findOne($_GET["id"]);
        $res->html("admin/userAdmin.php", $row);
    }
  }

  public function addAdmin($req, $res){
    //Test si l'utilisateur est logged
    $this->isLogged(array("redirect" => "/admin/login"));
    $user = new Admin();

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $result = $user->insert($this->getData());
        $this->redirect("/admin");
    } else {
        $res->html("admin/userAdmin.php", array());
    }
  }
}
