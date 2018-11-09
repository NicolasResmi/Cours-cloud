<?php
class PaiementController extends BaseController{
    public function payer($req, $res){
        $res -> html("paiement.php",array());
    }

    public function getData() {
        return array(
          "card" => $_POST["card"],
          "expityMonth" => $_POST["expityMonth"],
          "expityYear" => $_POST["expityMonth"],
          "cv" => $_POST["cv"],
          "pseudo" => $_SESSION['pseudo'],

        );
    }

    public function confirmation($req, $res){
        $paiement = new Paiement();
        print_r($_POST);
        

        $paiement-> insert(array(
            'card' => $_POST['card'],
            'expityMonth' => $_POST['expityMonth'],  
            'expityYear' => $_POST['expityYear'],  
            'cv' => $_POST['cv'],
            "pseudo" => $_SESSION['pseudo'],
        ));
        
        $res -> html("paiement_confirmation.php",array());
    }

    public function index($req, $res){
        //Test si l'utilisateur est logged
        $this->isLogged(array("redirect" => "/admin/login"));
        $u = new Paiement();
        $rows = $u->find();
        $res->html("admin/paiements.php", array("paiements" => $rows));
    }

    public function update($req, $res){
        $this->isLogged(array("redirect" => "/admin/login"));
        $paiement = new Paiement();

        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $result = $paiement->update($_GET["id"], $this->getData());
            $this->redirect("/admin/paiement");
        } else {
            $row = $paiement->findOne($_GET["id"]);
            $res->html("admin/paiement_update.php", $row);
        }
    }
}