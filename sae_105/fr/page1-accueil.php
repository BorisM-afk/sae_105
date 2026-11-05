<?php
include('../include/twig.php');
$twig = init_twig();

echo $twig->render('base.twig', [
    'lang' => 'fr',
    'titre' => 'Accueil',
    'page_base' => 'page1-accueil',
    ]
    );