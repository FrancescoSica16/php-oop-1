<?php 

class Movie {

public $nome;
public $regista;
public $dataUscita;
public $attori;

/*
* @param
*/
public function __construct($_nome , $_regista, $_dataUscita , $_attori){
    $this -> nome = $_nome;
    $this -> regista = $_regista;
    $this -> dataUscita = $_dataUscita;
    $this -> attori = $_attori;

    // perchè trattino basso?
}



}


?>
