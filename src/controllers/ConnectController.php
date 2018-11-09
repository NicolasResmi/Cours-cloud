<?php

class ConnectController {

  /**
   * Test de l'authentification en PHP
   * @return boolean [description]
   */
  public function isConnected($array){
      if(isset($_SESSION["Connecté"]) && $_SESSION["Connecté"] == true) {
        return true;
      }
      $this->redirect($array["redirect"]);
  }

  public function redirect($path) {
    header('Location: '. $path);
    exit;
  }

  public function loginUser($req, $res){
    // Page d'authentification
    $utilisateur = new Utilisateur();
    $res->html("login.php", array());
  }

  public function loginPostUser($req, $res){
    // Récuperation des données à travers de Modèle
    $utilisateur = new Utilisateur();

    $pseudo = $_POST["pseudo"];
    $password = md5($_POST["password"]);

    $rows = $utilisateur->isUtilisateur($pseudo, $password);


    // Test si l'adresse et le mot de passe envoyer dans la variable $_POST conrespondent
    // au informations issues de la base de données
    if(($rows["pseudo"] == $pseudo) && ($rows["password"] == $password)){

      // Test Ok, mise à jour de la session afin de se souvenir que cette personne est bien authentifier à travers la session
      $_SESSION["Connecté"] = true;
      $_SESSION["pseudo"] = $pseudo;
      // Redirection de l'utlisateur vers l'espace membres
      header('Location: ./.');
    } else {
      // si les données ne conrespondent pas, nous renvoyions la page de login à travers la vue
      $res->html("login.php", array());
    }
  }

  public function logoutUser($req, $res){
    $_SESSION["Connecté"] = 0;
    header('Location: /');
  }
}
