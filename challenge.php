<?php
class connexion {
  public $bd;

  function __construct() {
    try {
      $this->bd = new PDO('mysql:host=localhost;dbname=challengepoo;charset=utf8', 'root', 'root');
    }
    catch(Exception $e) {
      die('Erreur : '.$e->getMessage());
    }
  }
  function counTable(){
    $reponse = $this->bd->query('SELECT * FROM exo');
    while ($test=$reponse->fetch()) {
      echo $test[Id];
    }
  }
}
?>
