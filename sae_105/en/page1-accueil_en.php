<?php
include('../include/twig.php');
$twig = init_twig();

echo $twig->render('base.twig', [
    'titre' => 'Home',
    'lang' => 'en',
    'page_base' => 'page1-accueil',
    ]
    );