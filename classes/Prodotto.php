<?php 

class Prodotto {
    // attributi
    private $idProdotto;
    private $prezzo;

    // costruttore
    function __construct($prezzo) {
        $this->idProdotto = rand(10000, 100000);
        $this->prezzo=$prezzo . ' &euro;';
 
    }
    
    // metodi
    public function setIdProdotto($idProdotto) {
        $this->idProdotto = $idProdotto;
    }

    public function getIdProdotto() {
        return $this->idProdotto;
    }

    public function setPrezzo($prezzo) {
        $this->prezzo = $prezzo;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }
}

; ?>
