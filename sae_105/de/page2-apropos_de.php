<?php
include('../include/twig.php');
$twig = init_twig();

echo $twig->render('apropos.twig', [
    'titre' => 'Über uns',
    'lang' => 'de',
    'page_base' => 'page2-apropos',
    ]
    );