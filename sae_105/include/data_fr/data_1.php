<?php
// Catégorie Disciplines :

$articleA1 = [
    'titre' => 'Le Bloc (Bouldering)',
    'image' => '../images/cat1/bloc.jpg',
    'description' => 'C\'est l\'escalade ramenée à son essence la plus pure : pas de corde, pas de baudrier, juste vous et le rocher. Ici en l\'occurence, on représente la pratique du bloc par une image prise en salle intérieur. En effet, le bloc à la base était essentiellement un sport d\'extérieur sur rocher, avec le temps il s\'est démocratisé en intérieur pour être pratiqué toute l\'année ! Le but est de résoudre des "problèmes" courts mais intenses sur des rochers de faible hauteur, sécurisés par des matelas (crashpads). C\'est la discipline reine pour développer une force herculéenne et une technique de pied chirurgicale. L\'aspect social y est très fort, car on passe beaucoup de temps au sol à décrypter les mouvements entre amis.',
    'infos_caseA' => [
        'hauteur_moyenne' => '3 à 5 mètres',
        'annee_apparition' => '1890',
        'echelle_cotation' => 'Fontainebleau (ex: 7A)',
        'lieu_pratique' => 'Mixte (Salle & Forêt)',
    ],
    'equipement_principal' => ['Chaussons', 'Magnésie', 'Crashpad'],
    'profil_physique' => ['Explosivité', 'Force pure'],
    'record_monde' => 'Bloc 9A (Burden of Dreams)',
    'date_record' => '2023',
    'id' => 'bloc',
    'title-id' => 'Le Bloc'
];

$articleA2 = [
    'titre' => 'La Difficulté ou "Voie" (Lead)',
    'image' => '../images/cat1/lead.jpg',
    'description' => 'La forme la plus emblématique de l\'escalade sportive. Le grimpeur s\'élève en "clippant" sa corde dans des dégaines fixées à la paroi pour assurer sa sécurité. Ici, ce n\'est pas seulement la force qui compte, mais la capacité à gérer l\'effort sur la durée. Il faut grimper de manière économique, respirer calmement malgré l\'acide lactique qui tétanise les bras, et garder un mental d\'acier pour ne pas lâcher prise avant le relais final.',
    'infos_caseA' => [
        'hauteur_moyenne' => '15 à 40 mètres',
        'annee_apparition' => 1980,
        'echelle_cotation' => 'Française (ex: 8b+)',
        'lieu_pratique' => 'Mixte (Falaise & Mur)',
    ],
    'equipement_principal' => ['Corde', 'Baudrier', 'Dégaines'],
    'profil_physique' => ['Endurance', 'Résistance'],
    'record_monde' => 'Voie 9c (Silence par A. Ondra)',
    'date_record' => 2017,
    'id'=> 'lead',
    'title-id' => 'La Difficulté'
];

$articleA3 = [
    'titre' => 'La Vitesse (Speed)',
    'image' => '../images/cat1/speed.jpg',
    'description' => 'Le sprint vertical. C\'est la seule discipline où le chronomètre est le seul juge. Les athlètes grimpent sur une voie standardisée (toujours la même inclinaison et les mêmes prises partout dans le monde). C\'est une explosion d\'énergie pure où chaque milliseconde compte. Les mouvements sont répétés des milliers de fois à l\'entraînement pour atteindre une automatisation parfaite, proche de la chorégraphie.',
    'infos_caseA' => [
        'hauteur_moyenne' => '15 mètres (Standard)',
        'annee_apparition' => 2005,
        'echelle_cotation' => 'Temps (Secondes)',
        'lieu_pratique' => 'Intérieur (Mur homologué)',
    ],
    'equipement_principal' => ['Assureur automatique', 'Corde légère', 'Chaussons'],
    'profil_physique' => [
        'Puissance', 
        'Coordination'
        ],
    'record_monde' => '4.74 secondes (Sam Watson)',
    'date_record' => 2021,
    'id'=> 'speed',
    'title-id' => 'La Vitesse'
];

$articleA4 = [
    'titre' => 'La Grande Voie (Multi-pitch)',
    'image' => '../images/cat1/multi_pitch.jpg',
    'description' => 'L\'aventure avec un grand A. Quand une falaise est trop haute pour une seule longueur de corde, on la découpe en plusieurs tronçons appelés "longueurs". On grimpe en cordée, en se rejoignant aux relais suspendus au milieu de la paroi. C\'est une discipline qui demande de la logistique, de la gestion de gaz (le vide) et un sens de l\'itinéraire. On y trouve souvent des ambiances vertigineuses inoubliables.',
    'infos_caseA' => [
        'hauteur_moyenne' => '100 à 300 mètres',
        'annee_apparition' => 1900,
        'echelle_cotation' => 'Française (ex: 7a)',
        'lieu_pratique' => 'Extérieur (Falaise)',
    ],
    'equipement_principal' => ['Corde à double', 'Vache', 'Sac'],
    'profil_physique' => ['Endurance', 'Gestion mentale'],
    'record_monde' => 'El Capitan en < 2h (Honnold)',
    'date_record' => 2017,
    'id'=> 'multi-pitch',
    'title-id' => 'La Grande Voie'
];

$articleA5 = [
    'titre' => 'Le Trad (Traditionnel)',
    'image' => '../images/cat1/trad.jpg',
    'description' => 'L\'escalade "propre" et historique. Sur ces parois, il n\'y a pas de points d\'assurance fixes (spits). C\'est au grimpeur de placer ses propres protections (coinceurs, friends) dans les fissures du rocher et de les retirer après son passage. Cela demande un sang-froid exceptionnel et une grande connaissance du rocher. La chute est permise, mais elle est psychologiquement beaucoup plus impressionnante qu\'en escalade sportive.',
    'infos_caseA' => [
        'hauteur_moyenne' => '20 à 200 mètres',
        'annee_apparition' => 1800,
        'echelle_cotation' => 'Française (ex: 6c)',
        'lieu_pratique' => 'Extérieur (Falaise & Montagne)',
    ],
    'equipement_principal' => ['Jeu de coinceurs', 'Amis', 'Baudrier robuste'],
    'profil_physique' => ['Technique', 'Sang-froid'],
    'record_monde' => 'Voie "Tribe" (Non cotée)',
    'date_record' => 2016,
    'id'=> 'trad',
    'title-id' => 'Le Trad'
];

$categorieA = [$articleA1, $articleA2, $articleA3, $articleA4, $articleA5];

$infos_cles1 = [
    'infos_cles' => 'Informations clés :',
    'hauteur_moyenne' => 'Hauteur moyenne :',
    'annee_apparition' => 'Année d\'apparition :',
    'echelle_cotation' => 'Échelle de cotation :',
    'lieu_pratique' => 'Lieu de pratique :',
    'equipement_principal' => 'Équipement principal :',
    'profil_physique' => 'Profil physique :',
];