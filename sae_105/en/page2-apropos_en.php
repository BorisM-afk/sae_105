<?php
include('../include/twig.php');
$twig = init_twig();

echo $twig->render('apropos.twig', [
    'titre' => 'About',
    'lang' => 'en',
    'page_base' => 'page2-apropos',
    ]
    );