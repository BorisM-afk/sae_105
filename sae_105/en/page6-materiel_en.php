<?php

include('../include/twig.php');
$twig = init_twig();
include ('../include/data_en/data_en.php');

echo $twig->render('categorie3.twig', [
    'titre' => 'Material',
    'lang' => 'en',
    'catC' => $categorieC,
    'info_flash' => $info_flash,
    'page_base' => 'page6-materiel',
    'page_titre' => 'Material & Buying Guide :',
]);