<?php

include('../include/twig.php');
$twig = init_twig();
include '../include/data_de/data_de.php';

echo $twig->render('categorie2.twig', [
    'titre' => 'Die Mythischen Orte',
    'lang' => 'de',
    'catB' => $categorieB,
    'page_base' => 'page5-spotsmythiques',
    'page_titre' => 'Die Mythischen Orte :',
    'infos_cles' => $infos_cles2,
]);