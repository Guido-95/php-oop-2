<?php 
require_once __DIR__ . '/Utente.php';

class Premium extends Utente {
    private $abbonamento;
    private $sconto;
    // costruttore
    function __construct($nome,$cognome,$indirizzo,$abbonamento = 1){
        parent::__construct($nome,$cognome,$indirizzo);
        $this->abbonamento=$abbonamento;
        $this->applicaSconto();
      
    }

    // metodi
    public function setAbbonamento($abbonamento){
        $this->abbonamento = $abbonamento;
    }

    public function getAbbonamento(){
        return $this->abbonamento;
    }

    public function getSconto(){
        return $this->sconto;
    }


    public function applicaSconto(){
        if($this->abbonamento == 1){
            $this->sconto = $this->abbonamento * 10 .'%';
        } elseif($this->abbonamento == 2){
            $this->sconto = $this->abbonamento * 10 .'%';
        }
        elseif($this->abbonamento == 3){
            $this->sconto = $this->abbonamento * 10 .'%';
        }
    }

    public function compraProdotto($prodotto){
        var_dump($prodotto) ;
    }




}


; ?>
