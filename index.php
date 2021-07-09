<?php 
require __DIR__ . '/classes/Utente.php';
require __DIR__ . '/classes/Prodotto.php';
require __DIR__ . '/classes/TipoProdotto.php';
require __DIR__ . '/classes/Premium.php';

$utn = new Utente('Marcello','Lavandino','Via Torino 5');
$utnPrm1 = new Premium('Giovanni','Tavolino','Via Napoli 3',2);
$utnPrm2 = new Premium('Marco','Salotto','Via Roma 2',3);

$prodotto = new TipoProdotto(1099.99,"PC desktop msi",'Informatica');
$prodotto2 = new TipoProdotto(5.99,"tovaglia", 'Cucina');
$prodotto3 = new TipoProdotto(50.00,"Mouse", 'Informatica');
$nome_prodotto = $prodotto->getNome();


var_dump($utn);
var_dump($utnPrm1);
var_dump($utnPrm2);
var_dump($prodotto);
var_dump($prodotto2);
; ?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div><?php $utnPrm2->compraProdotto($prodotto); ?>
</div>
<div> <?php $utnPrm1->compraProdotto($prodotto2);?>
</div>
<div><?php $utn->compraProdotto($prodotto3); ?>
</div>
    
</body>
</html>