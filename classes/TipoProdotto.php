<?php 
require_once __DIR__ . '/Prodotto.php';

class TipoProdotto extends Prodotto {
    // attributi
    private $nome;
    private $tipologia;
    private $immagine;


     // costruttore
    function __construct($prezzo,$nome,$tipologia,$immagine) {
        parent::__construct($prezzo);
        $this->nome =$nome;
        $this->tipologia = $tipologia;
        $this->immagine = $immagine;
 
    }
    

    // metodi
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setTipologia($tipologia) {
        $this->tipologia = $tipologia;
    }

    public function getTipologia() {
        return $this->tipologia;
    }

    
    public function setImmagine($immagine) {
        $this->immagine = $immagine;
    }

    public function getImmagine() {
        return $this->immagine;
    }


}

; ?>
