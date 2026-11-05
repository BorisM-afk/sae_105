<?php

include('../include/twig.php');
$twig = init_twig();
include '../include/data_fr/data_2.php';

echo $twig->render('categorie2.twig', [
    'titre' => 'Les Spots Mythiques',
    'lang' => 'fr',
    'catB' => $categorieB,
    'page_base' => 'page5-spotsmythiques',
    'page_titre' => 'Les Spots Mythiques :',
    'infos_cles' => $infos_cles2,
]);