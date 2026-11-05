<?php

include('../include/twig.php');
$twig = init_twig();
include '../include/data_en/data_en.php';

echo $twig->render('categorie2.twig', [
    'titre' => 'Myhtic Spots',
    'lang' => 'en',
    'catB' => $categorieB,
    'page_base' => 'page5-spotsmythiques',
    'page_titre' => 'Mythic Spots :',
    'infos_cles' => $infos_cles2,
]);