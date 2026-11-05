<?php
include('../include/twig.php');
$twig = init_twig();

echo $twig->render('contact.twig', [
    'titre' => 'Contact',
    'lang' => 'en',
    'page_base' => 'page3-contact',
    ]
    );