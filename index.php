<?php

class Movie {
  public $nome;
  public $data_uscita;
  public $genere;

  function __construct($_nome, $_genere, $_data){
    $this->nome = $_nome;
    $this->genere = $_genere;
    $this->data_uscita = $_data;
  }
}

//inizializzo istanza

$film_disponibile_1 = new Movie('Pirati dei Caraibi', 'Avventura', '2018');
$film_disponibile_2 = new Movie('Forrest Gump', 'Commedia', '1994');
$film_disponibile_3 = new Movie('Avatar', 'Fantasy', '2008');

var_dump($film_disponibile_1);
var_dump($film_disponibile_2);
var_dump($film_disponibile_3);

?>    