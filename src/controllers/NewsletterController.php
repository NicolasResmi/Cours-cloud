<?php
class NewsletterController extends BaseController{
    public function afficher($req, $res){
        $res -> html("newsletter.php",array());
    }

    public function getData() {
        return array(
          "email" => $_POST["email"],
          "object" => $_POST["object"]
        );
    }

    public function abonnee($req, $res){
        $newsletter = new Newsletter();
        print_r($_POST);
        $newsletter-> insert(array( // insérer un email
            'email' => $_POST['email'],
            'object' => $_POST['object']  
        ));
        
        $res -> html("newsletter_confirmation.php",array());
    }

    public function index($req, $res){
        //Test si l'utilisateur est logged
        $this->isLogged(array("redirect" => "/admin/login"));
        $u = new Newsletter();
        $rows = $u->find(); // afficher les emails
        $res->html("admin/newsletters.php", array("newsletters" => $rows));
      }

    public function update($req, $res){
        $this->isLogged(array("redirect" => "/admin/login"));
        $newsletter = new Newsletter();

        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $result = $newsletter->update($_GET["id"], $this->getData());
            $this->redirect("/admin/newsletters");
        } else {
            $row = $newsletter->findOne($_GET["id"]);
            $res->html("admin/newsletters_update.php", $row);
        }
    }

    public function delete($req, $res){
        $this->isLogged(array("redirect" => "/admin/login"));
        $newsletter = new Newsletter();
        $newsletter->delete($_GET["id"]);
        $this->redirect("/admin/newsletters");
    }
}