<?php 
require_once __DIR__ . '/TipoProdotto.php';

class TipoProdotto extends Prodotto{
    // attributi
    private $nome;
    private $tipologia;


     // costruttore
    function __construct($prezzo,$nome,$tipologia){
        parent::__construct($prezzo);
        $this->nome =$nome;
        $this->tipologia = $tipologia;
 
    }
    

    // metodi
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setTipologia($tipologia){
        $this->tipologia = $tipologia;
    }

    public function getTipologia(){
        return $this->tipologia;
    }

   


}




; ?>
