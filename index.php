<?php 
require __DIR__ . '/classes/Utente.php';
require __DIR__ . '/classes/Prodotto.php';
require __DIR__ . '/classes/TipoProdotto.php';
require __DIR__ . '/classes/Premium.php';

$utn = new Utente('Marcello','Lavandino','Via Torino 5');
$utnPrm1 = new Premium('Giovanni','Tavolino','Via Napoli 3',2);
$utnPrm2 = new Premium('Marco','Salotto','Via Roma 2',3);

$prodotto = new TipoProdotto(124213 , 1099.99,"PC desktop msi",'Informatica');
$prodotto2 = new TipoProdotto(12342 , 24.99,"Tavolo", 'Cucina');


var_dump($prodotto);
var_dump($prodotto2);
var_dump($utn);
var_dump($utnPrm1);
var_dump($utnPrm2);

; ?>
