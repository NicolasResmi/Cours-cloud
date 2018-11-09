<?php


class Utilisateur extends Model {
  // Nom de la table correspondant dans la base de données database.php
  public $table_name = "utilisateur";

  public function isUtilisateur($pseudo, $password){
    $query = $this->dbConnection->from($this->table_name)
      ->select('pseudo, password')
      ->where(array("pseudo" => $pseudo, "password" => $password))
      ->limit(1);
    return $query->fetch();
  }
}
