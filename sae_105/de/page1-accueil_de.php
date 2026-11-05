<?php
include('../include/twig.php');
$twig = init_twig();

echo $twig->render('base.twig', [
    'titre' => 'Startseite',
    'lang' => 'de',
    'page_base' => 'page1-accueil',
    ]
    );