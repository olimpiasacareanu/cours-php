<?php


function repondre_oui_non(?string $phrase = null): bool{
    while(true){
        $reponse = readline($phrase . " - (o)ui / (n)on : ");
        if($reponse === 'o'){
            return true;
        }else if($reponse === 'n'){
            return false;
        }
    }
}

require_once 'functions_creneaux.php';


