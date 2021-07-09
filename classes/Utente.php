<?php

class Utente {
    // attributi
    private $nome;
    private $cognome;
    private $indirizzo;
  


    // costruttore
    function __construct($nome,$cognome,$indirizzo){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->indirizzo = $indirizzo;

    }

    // metodi
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setCognome($cognome){
        $this->cognome = $cognome;
    }

    public function getCognome(){
        return $this->cognome;
    }

    public function setIndirizzo($indirizzo){
        $this->indirizzo = $indirizzo;
    }

    public function getIndirizzo(){
        return $this->indirizzo;
    }

    public function compraProdotto($nome,$prezzo,$tipo){
        echo $this->nome .' ha ' . ' acquistato ' . $nome. ' a ' . $prezzo . ' nella sezione ' .$tipo;
    }






    
}


; ?>
