<?php

include('../include/twig.php');
$twig = init_twig();
include ('../include/data_de/data_de.php');

echo $twig->render('categorie3.twig', [
    'titre' => 'Material',
    'lang' => 'de',
    'catC' => $categorieC,
    'info_flash' => $info_flash,
    'page_base' => 'page6-materiel',
    'page_titre' => 'Material und Kaufratgeber :'
]);