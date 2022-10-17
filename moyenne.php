<?php

// $notes = [];
// $note = null;

// // $note = (int)readline('Inserer une chiffre ou "fin" ');
// while ($note !== 'fin'){
//     $note = readline('Inserer une chiffre ou "fin" pour terminer la saisie : ');
//     // on ajoute la note tapée au tableau notes
//     if($note !== 'fin'){
    //         // array_push($notes, $note);
    //         $notes[] = (int)$note;
    //     }
    // }
    
    // foreach($notes as $note){
        //     echo "- $note \n";
        // }
        
        $notes = [];
        
while(true){
    $note = readline('Inserer une chiffre ou "fin" pour terminer la saisie : ');
    if($note === 'fin'){
        break;
    }else{
        $notes[] = (int)$note;    
    }
}

foreach($notes as $note){
    echo "- $note \n";
}