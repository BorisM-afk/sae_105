<?php
include('../include/twig.php');
$twig = init_twig();

echo $twig->render('apropos.twig', [
    'titre' => 'À Propos',
    'lang' => 'fr',
    'page_base' => 'page2-apropos',
    ]
    );