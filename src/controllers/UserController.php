<?php

class UserController extends ConnectController {
  public function inscription($req, $res){
        $res -> html("create.php",array());
  }

  public function getData() {
    // Attention, il faut renseigner que les champs présents dans la base de données
    return array(
      "pseudo" => $_POST["pseudo"],
      "email" => $_POST["email"],
      "password" => md5($_POST["password"])
    );
  }

  public function confirmation($req, $res){
    // $this->isLogged(array("redirect" => "./."));
    $utilisateur = new Utilisateur();
  
    if($_SERVER['REQUEST_METHOD'] == "POST") {
      $result = $utilisateur->insert($this->getData());
      // $this->redirect("./.");
    } else {
      $res->html("/create.php");
    }

    $res -> html("/inscri.php",array());
  }

  public function account($req, $res){
    $paiement = new Paiement();
    $rows = $paiement->find();
    $res -> html("/account.php", array('paiements' => $rows));
  }

  public function delete($req, $res){
    $this->isConnected(array("redirect" => "/login"));
    $paiement = new Paiement();
    $paiement->delete($_GET["id"]);
    $this->redirect("/moncompte");
  }

  public function getArticle() {
    // Attention, il faut renseigner que les champs présents dans la base de données
    return array(
      "pseudo" => $_SESSION["pseudo"],
      "nomproduit" => $_GET["nom"],
      "prix" => $_GET["prix"],
      "etat" => 1
    );
  }

  public function addArticle($req, $res){
    $panier = new Panier();
    if($_SERVER['REQUEST_METHOD'] == "GET") {
      $result = $panier->insert($this->getArticle());
      $this->redirect("./.");
    }     
  }

  public function afficher($req, $res){
    $panier = new Panier();
    $rows = $panier->find();
    $res -> html("/panier.php", array('panier' => $rows));
  }

  public function afficherPanier($req, $res){
    $panier = new Panier();
    $rows = $panier->find();
    $res -> html("/panier.php", array('panier' => $rows));
  }

  public function suppPanier($req, $res){
    // $this->isConnected(array("redirect" => "/login"));
    $panier = new Panier();
    $panier->delete($_GET["id"]);
    $this->redirect("/panier");
  }

  public function buyPanier($req, $res){
    $panier = new Panier();

    if($_SERVER['REQUEST_METHOD'] == "POST") {
      $panier["etat"] = 2;
    }
  }
}
