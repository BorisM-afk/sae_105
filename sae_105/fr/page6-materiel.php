<?php

include('../include/twig.php');
$twig = init_twig();
include ('../include/data_fr/data_3.php');

echo $twig->render('categorie3.twig', [
    'titre' => 'Matériel',
    'lang' => 'fr',
    'catC' => $categorieC,
    'info_flash' => $info_flash,
    'page_base' => 'page6-materiel',
    'page_titre' => 'Matériel & Guide d\'achat :'
]);