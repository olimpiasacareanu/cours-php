<?php

$insultes = ['merde', 'con'];

$phrase = readline('Entrez une phrase : ');
foreach($insultes as $insulte){
   // first letter
   $firstLetter = $insulte[0];
   $endWord = substr($insulte, 1);
   $stars = str_repeat('*', strlen($endWord));
   $replace = $firstLetter . $stars;
   $phrase = str_replace($insulte, $replace, $phrase);

}

// foreach($insultes as $insulte){
//     // taille d'une chaine
//     $taille= strlen($insulte);
//     // remplacer les caracteres par *
//     $replace = str_repeat('*', $taille);
//     $phrase = str_replace($insulte, $replace, $phrase);

// }



echo $phrase;