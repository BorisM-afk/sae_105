<?php

include('../include/twig.php');
$twig = init_twig();

    include '../include/data_en/data_en.php';


echo $twig->display('categorie1.twig', [
    'titre' => 'Disciplines',
    'lang' => 'en',
    'catA' => $categorieA,
    'artA' => $articleA1,
    'page_base' => 'page4-disciplines',
    'page_titre' => 'Disciplines :',
    'infos_cles' => $infos_cles1,
]);
