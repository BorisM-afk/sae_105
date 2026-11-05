<?php

include('../include/twig.php');
$twig = init_twig();

include '../include/data_de/data_de.php';


echo $twig->display('categorie1.twig', [
    'titre' => 'Die Disziplinen',
    'lang' => 'de',
    'catA' => $categorieA,
    'artA' => $articleA1,
    'page_base' => 'page4-disciplines',
    'page_titre' => 'Die Disziplinen :',
    'infos_cles' => $infos_cles1,
]);
