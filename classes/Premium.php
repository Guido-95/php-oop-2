<?php 
require_once __DIR__ . '/Utente.php';

class Premium extends Utente {
    private $livAbbonamento;
    private $sconto;
    // costruttore
    function __construct($nome,$cognome,$indirizzo,$livAbbonamento = 1) {
        parent::__construct($nome,$cognome,$indirizzo);
        $this->livAbbonamento=$livAbbonamento;
        $this->applicaSconto();
      
    }

    // metodi
    public function setlivAbbonamento($livAbbonamento) {
        $this->livAbbonamento = $livAbbonamento;
    }

    public function getlivAbbonamento() {
        return $this->livAbbonamento;
    }

    public function getSconto() {
        return $this->sconto;
    }


    public function applicaSconto() {
        if($this->livAbbonamento == 1) {
            $this->sconto = $this->livAbbonamento * 10 .'%';
        } elseif($this->livAbbonamento == 2) {
            $this->sconto = $this->livAbbonamento * 10 .'%';
        }
        elseif($this->livAbbonamento == 3) {
            $this->sconto = $this->livAbbonamento * 10 .'%';
        }
    }

}

; ?>
