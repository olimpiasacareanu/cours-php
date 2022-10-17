<?php

$joursOuverture = [];
$heuresOuverture = [];

while(true){
    $heureDebut = readline("Entrez l'heure d'ouverture ");
    $heureFermeture = readline("Entrez l'heure de fermeture ");
    array_push($heuresOuverture, $heureDebut,$heureFermeture);
    $heureVenir = readline("Entrez à quelle heure vous voulez venir? ");
    
    if($heureVenir < $heureDebut || $heureVenir > $heureFermeture){
        echo 'Le magasin est fermé';
        break;
    }else{
        echo 'Vous êtes bienvenue!';
        break;
    }
}

print_r($heuresOuverture);
var_dump($heuresOuverture);