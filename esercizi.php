<?php

// Calcolo media
// ESERCIZIO 1
// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

$nums = [1,5,7,8,10,16,176,200];

    $media = array_sum ($nums) / count ($nums);
    echo "$media";


// ESERCIZIO 2
// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome”  o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere


$array = [
    [   "nome" => "Alessio",
        "cognome"=> "Palmeri",
        "genere" => "M"
    ],
    [   "nome" => "Serena",
        "cognome" => "Tagliapietra",
        "genere" => "F"
    ],
    [   "nome" => "Giuseppe",
        "cognome" => "Saluto",
        "genere" => "M"
    ],
    [    "nome" => "Michele",
        "cognome" => "Boaretto",
        "genere" => "M"
    ]
];

foreach($array as $persona) { 
        if ($persona["genere"]== "M") {
        var_dump("buongiono sig." .$persona["nome"] ." ".$persona["cognome"]);
    } else if ($persona["genere"] == "F") {
        var_dump("Buongiorno sig.ra" .$persona["nome"] ." ".$persona["cognome"]);
    }
};

// ESERCIZIO 3
// Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY70".

for ($i=0; $i<=100 ; $i++) { 
    if ($i % 15 === 0) {
        echo "HACKADEMY70 \n";
    }else if ($i % 3 === 0){
        echo "PHP \n";
    }else if ($i % 5 === 0) {
        echo "JAVASCRIPT \n";       
    }else {
        echo $i."\n";
    }
}
?>