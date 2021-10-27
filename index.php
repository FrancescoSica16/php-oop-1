<?php 

class Movie {

public $nome;
public $regista;
public $dataUscita;
public $attori;

    public function __construct($_nome , $_regista, $_dataUscita , $_attori){
    $this -> nome = $_nome;
    $this -> regista = $_regista;
    $this -> dataUscita = $_dataUscita;
    $this -> attori = $_attori;
    }

    public function setRegista($regista) {
         $this -> regista = $regista;
    }   

    public function getAttori(){
        return $this -> attori;
    }
}

$inception =  new Movie( "Inception", "paolo", "10/10/2021", "di caprio" );
$Interstellar =  new Movie( "Interstellar","luca", "21/10/2021", "alfred" );

$inception -> setRegista("regista da funzione");

var_dump($inception, $Interstellar);

$attore_interstellar =  $Interstellar ->getAttori();
var_dump($attore_interstellar);
?>
