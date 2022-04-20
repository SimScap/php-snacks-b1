<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
    ?>
    
    <?php
    $paragraph = "È universalmente riconosciuto che un lettore che osserva il layout di una pagina. viene distratto dal contenuto testuale se questo è leggibile.
Lo scopo dell’utilizzo del Lorem Ipsum è che offre una normale distribuzione delle lettere (al contrario di quanto avviene se si utilizzano 
brevi frasi ripetute, ad esempio “testo qui”). apparendo come un normale blocco di testo leggibile. Molti software di impaginazione
e di web design utilizzano Lorem Ipsum come testo modello. Molte versioni del testo sono state prodotte negli anni.
a volte casualmente, a volte di proposito (ad esempio inserendo passaggi ironici).";?>
<div> Paragrafo normale:  <?php echo $paragraph ?> </div>
<?php
    //Suddivido il paragrafo in altri paragrafi in un array
    $array = explode("." , $paragraph );
    var_dump($array);             
    for ( $i = 0 ; $i < count($array) ; $i++){?>
    <h3> <?php echo $array[$i]; ?> </h3>
    <?php }?>
    
</body>
</html>