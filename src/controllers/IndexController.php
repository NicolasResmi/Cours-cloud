<?php

// Required if your environment does not handle autoloading

/**
 * Page d'accueil
 */
class IndexController {
  public function index($req, $res){
    // Modèle Film
    $user = new Plat();
    $rows = $user->find();
    $res->html("index.php", array('plats' => $rows));
  }
}
