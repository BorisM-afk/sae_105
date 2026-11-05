<?php

include('../include/twig.php');
$twig = init_twig();
include '../include/data_fr/data_1.php';


echo $twig->display('categorie1.twig', [
    'titre' => 'Les Disciplines',
    'lang' => 'fr',
    'catA' => $categorieA,
    'artA' => $articleA1,
    'page_base' => 'page4-disciplines',
    'page_titre' => 'Les Disciplines :',
    'infos_cles' => $infos_cles1,
]);