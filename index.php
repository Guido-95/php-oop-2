<?php 
require __DIR__ . '/classes/Utente.php';
require __DIR__ . '/classes/Prodotto.php';
require __DIR__ . '/classes/TipoProdotto.php';
require __DIR__ . '/classes/Premium.php';

$utn = new Utente('Marcello','Lavandino','Via Torino 5');
$utnPrm1 = new Premium('Giovanni','Tavolino','Via Napoli 3',2);
$utnPrm2 = new Premium('Marco','Salotto','Via Roma 2',3);

$prodotto = new TipoProdotto(1099.99,"PC Desktop MSI",'Informatica','https://images.eprice.it/nobrand/0/lightbox/559/210513559/DAM210513559-0-da7af981-b3c1-49de-ab4c-b6ab5fa1fddd.jpg');

$prodotto2 = new TipoProdotto(10.99,"Tovaglia Cucina", 'Cucina','https://www.takestop.com/21630-thickbox_default/tovaglia-grigio-140x180-cm-misto-lino-rettangolare-tavola-cucina-sala-pranzo-festa-copri-tavola-protezione-ristorante.jpg');

$prodotto3 = new TipoProdotto(50.99,"Mouse Razer", 'Informatica','https://images-na.ssl-images-amazon.com/images/I/41ORMrnBptL._AC_.jpg');

; ?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Prodotti</title>
</head>
<body>
    <h1> Prodotti acquistati</h1>
    
    <div class="prodotti">
        <div class="prodotto">
            <img src="<?= $prodotto->getImmagine(); ?>">
            <div class="specifiche">
                <div class="nome">
                    Prodotto: <?= $prodotto->getNome(); ?>
                </div>
                <div class="prezzo">
                    Prezzo: <?= $prodotto->getPrezzo(); ?>
                </div>
                <div class="sezione">
                    Sezione: <?= $prodotto->getTipologia(); ?>
                </div>
            </div>
            <div class="prodotto-acquistato">
                <?php $utnPrm2->compraProdotto($prodotto); ?>
            </div>
        </div>
        <div class="prodotto">
            <img src="<?= $prodotto2->getImmagine(); ?>">
            <div class="specifiche">
                <div class="nome">
                Prodotto: <?= $prodotto2->getNome(); ?>
                </div>
                <div class="prezzo">
                    Prezzo: <?= $prodotto2->getPrezzo(); ?>
                </div>
                <div class="sezione">
                    Sezione: <?= $prodotto2->getTipologia(); ?>
                </div>
            </div>
            <div class="prodotto-acquistato">
                <?php $utnPrm1->compraProdotto($prodotto2);?>
            </div>
        </div>
        <div class="prodotto">
            <img src="<?= $prodotto3->getImmagine(); ?>">
            <div class="specifiche">
                <div class="nome">
                    Prodotto: <?= $prodotto3->getNome(); ?>
                </div>
                <div class="prezzo">
                    Prezzo: <?= $prodotto3->getPrezzo(); ?>
                </div>
                <div class="sezione">
                    Sezione: <?= $prodotto3->getTipologia(); ?>
                </div>
            </div>
            <div class="prodotto-acquistato">
                <?php $utn->compraProdotto($prodotto3); ?>
            </div>
        </div>
    </div>
    <h2>Utenti</h2>
    <div class="utenti">
        
        <div class="utente">
            <div>
                Nome: <?= $utnPrm2->getNome(); ?>
            </div>
            <div>
                Livello abbonamento: <?= $utnPrm2->getlivAbbonamento() . ' ' . '<br> ' . 'Sconto '. $utnPrm2->getSconto()  ?>
            </div>
            
        </div>
        <div class="utente">
            <div>
                Nome: <?= $utnPrm1->getNome(); ?>
            </div>
            <div>
                Livello abbonamento: <?= $utnPrm1->getlivAbbonamento() . ' '. '<br> ' . 'Sconto '. $utnPrm1->getSconto() ; ?>
            </div>
           
        </div>
        <div class="utente">
            <div>
                Nome: <?= $utn->getNome(); ?>
            </div>
            <div>
                Livello abbonamento: 0
            </div>
           
            
        </div>
      
    </div>
   
   
    

    
</body>
</html>