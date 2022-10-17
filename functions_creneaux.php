<?php

function demander_creneau($phrase = "Veuillez entrer le creneau"){
    echo $phrase . "\n";
    while(true){
        $ouverture = (int)readline('Heure d\'ouverture : ');
        if($ouverture >= 0 && $ouverture <= 23){
            break;
        }
    }

    while(true){
        $fermeture = (int)readline('Heure de fermeture : ');
        if($fermeture >= 0 && $fermeture <= 23 && $fermeture> $ouverture){
            break;
        }
    }

    return [$ouverture, $fermeture];
}

function demander_creneaux(string $phrase = 'Veuillez entrer vos creneaux'): array{
    $creneaux = [];
    $continuer = true;
    while ($continuer ){
        $creneaux[] = demander_creneau();
        $continuer = repondre_oui_non('voulez-vous continuer?');
    }
    return $creneaux;

}
