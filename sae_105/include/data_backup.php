<?php
// Catégorie Disciplines :

$articleA1 = [
    'titre' => 'Le Bloc (Bouldering)',
    'image' => '#',
    'description' => 'C\'est l\'escalade ramenée à son essence la plus pure : pas de corde, pas de baudrier, juste vous et le rocher. Le but est de résoudre des "problèmes" courts mais intenses sur des rochers de faible hauteur, sécurisés par des matelas (crashpads). C\'est la discipline reine pour développer une force herculéenne et une technique de pied chirurgicale. L\'aspect social y est très fort, car on passe beaucoup de temps au sol à décrypter les mouvements entre amis.',
    'infos_caseA' => [
        'hauteur_moyenne' => '3 à 5 mètres',
        'annee_apparition' => 1890,
        'echelle_cotation' => 'Fontainebleau (ex: 7A)',
        'lieu_pratique' => 'Mixte (Salle & Forêt)',
    ],
    'equipement_principal' => 'Chaussons, Magnésie, Crashpad',
    'profil_physique' => 'Explosivité & Force pure',
    'record_monde' => 'Bloc 9A (Burden of Dreams)',
    'date_record' => 2023
];

$articleA2 = [
    'titre' => 'La Difficulté (Lead)',
    'image' => '#',
    'description' => 'La forme la plus emblématique de l\'escalade sportive. Le grimpeur s\'élève en "clippant" sa corde dans des dégaines fixées à la paroi pour assurer sa sécurité. Ici, ce n\'est pas seulement la force qui compte, mais la capacité à gérer l\'effort sur la durée. Il faut grimper de manière économique, respirer calmement malgré l\'acide lactique qui tétanise les bras, et garder un mental d\'acier pour ne pas lâcher prise avant le relais final.',
    'infos_caseA' => [
        'hauteur_moyenne' => '15 à 40 mètres',
        'annee_apparition' => 1980,
        'echelle_cotation' => 'Française (ex: 8b+)',
        'lieu_pratique' => 'Mixte (Falaise & Mur)',
    ],
    'equipement_principal' => 'Corde, Baudrier, Dégaines',
    'profil_physique' => 'Endurance & Résistance',
    'record_monde' => 'Voie 9c (Silence par A. Ondra)',
    'date_record' => 2017
];

$articleA3 = [
    'titre' => 'La Vitesse (Speed)',
    'image' => '#',
    'description' => 'Le sprint vertical. C\'est la seule discipline où le chronomètre est le seul juge. Les athlètes grimpent sur une voie standardisée (toujours la même inclinaison et les mêmes prises partout dans le monde). C\'est une explosion d\'énergie pure où chaque milliseconde compte. Les mouvements sont répétés des milliers de fois à l\'entraînement pour atteindre une automatisation parfaite, proche de la chorégraphie.',
    'infos_caseA' => [
        'hauteur_moyenne' => '15 mètres (Standard)',
        'annee_apparition' => 2005,
        'echelle_cotation' => 'Temps (Secondes)',
        'lieu_pratique' => 'Intérieur (Mur homologué)',
    ],
    'equipement_principal' => 'Assureur automatique',
    'profil_physique' => 'Puissance & Coordination',
    'record_monde' => '4.74 secondes (Sam Watson)',
    'date_record' => 2021
];

$articleA4 = [
    'titre' => 'La Grande Voie (Multi-pitch)',
    'image' => '#',
    'description' => 'L\'aventure avec un grand A. Quand une falaise est trop haute pour une seule longueur de corde, on la découpe en plusieurs tronçons appelés "longueurs". On grimpe en cordée, en se rejoignant aux relais suspendus au milieu de la paroi. C\'est une discipline qui demande de la logistique, de la gestion de gaz (le vide) et un sens de l\'itinéraire. On y trouve souvent des ambiances vertigineuses inoubliables.',
    'infos_caseA' => [
        'hauteur_moyenne' => '100 à 300 mètres',
        'annee_apparition' => 1900,
        'echelle_cotation' => 'Française (ex: 7a)',
        'lieu_pratique' => 'Extérieur (Falaise)',
    ],
    'equipement_principal' => 'Corde à double, Vache, Sac',
    'profil_physique' => 'Endurance & Gestion mentale',
    'record_monde' => 'El Capitan en < 2h (Honnold)',
    'date_record' => 2017
];

$articleA5 = [
    'titre' => 'Le Trad (Traditionnel)',
    'image' => '#',
    'description' => 'L\'escalade "propre" et historique. Sur ces parois, il n\'y a pas de points d\'assurance fixes (spits). C\'est au grimpeur de placer ses propres protections (coinceurs, friends) dans les fissures du rocher et de les retirer après son passage. Cela demande un sang-froid exceptionnel et une grande connaissance du rocher. La chute est permise, mais elle est psychologiquement beaucoup plus impressionnante qu\'en escalade sportive.',
    'infos_caseA' => [
        'hauteur_moyenne' => '20 à 200 mètres',
        'annee_apparition' => 1800,
        'echelle_cotation' => 'Française (ex: 6c)',
        'lieu_pratique' => 'Extérieur (Falaise & Montagne)',
    ],
    'equipement_principal' => 'Jeu de coinceurs & Friends',
    'profil_physique' => 'Technique & Sang-froid',
    'record_monde' => 'Voie "Tribe" (Non cotée)',
    'date_record' => 2016
];

$categorieA = [$articleA1, $articleA2, $articleA3, $articleA4, $articleA5];

// Catégorie Spots Mythiques

$articleB1 = [
    'nom' => 'Fontainebleau',
    'pays' => 'France',
    'flag' => '#',
    'infos_caseB' => [
        'type_roche' => 'Grès (Sandstone)',
        'meilleure_saison' => 'Hiver (pour l\'adhérence)',
        'nombre_voies' => 30000,
        'ville_proche' => 'Fontainebleau / Paris',
        'niveau_requis' => 'Débutant à Intermédiaire',
    ],
    'avis_general' => 'La mecque mondiale du bloc. Une forêt magique, des milliers de rochers gris et une ambiance unique au monde. Ici, la technique de pieds prime sur la force.',
    'coordonnees_gps' => '48.4047° N, 2.7016° E',
    'lien_gps' => '',
    'type_hebergement' => [
        'heb1' => 'Gîte',
        'heb2' => 'Airbnb',
        'heb3' => 'Camping'
    ]
];
$articleB2 = [
    'nom' => 'Kalymnos',
    'pays' => 'Grèce',
    'flag' => '#',
    'infos_caseB' => [
        'type_roche' => 'Calcaire (Tufs & Colonnettes)',
        'meilleure_saison' => 'Automne (Octobre)',
        'nombre_voies' => 3500,
        'ville_proche' => 'Pothia / Massouri',
        'niveau_requis' => 'Intermédiaire à Expert',
    ],
    'avis_general' => 'L\'île des grimpeurs. Imaginez grimper sur des grottes géantes surplombant la mer Égée, puis aller manger du poisson frais le soir. C\'est le spot "vacances" par excellence.',
    'coordonnees_gps' => '36.9531° N, 26.9803° E',
    'lien_gps' => '',
    'type_hebergement' => [
        'heb1' => 'Studio',
        'heb2' => 'Hôtel',
        'heb3' => 'Scooter-Trip'
    ]
];

$articleB3 = [
    'nom' => 'Yosemite Valley',
    'pays' => 'USA (Californie)',
    'flag' => '#',
    'infos_caseB' => [
        'type_roche' => 'Granite',
        'meilleure_saison' => 'Printemps / Automne',
        'nombre_voies' => 1200,
        'ville_proche' => 'Mariposa',
        'niveau_requis' => 'Intermédiaire à Expert'
    ],
    'avis_general' => 'Le centre de l\'univers pour l\'escalade. El Capitan et le Half Dome sont des murs mythiques. C\'est le royaume des fissures, de l\'escalade traditionnelle et du Big Wall.',
    'coordonnees_gps' => '37.8651° N, 119.5383° W',
    'lien_gps' => '',
    'type_hebergement' => [
        'heb1' => 'Camp 4 (Tente)',
        'heb2' => 'Lodge',
        'heb3' => 'Van'
    ]
];

$articleB4 = [
    'nom' => 'Siurana',
    'pays' => 'Espagne',
    'flag' => '#',
    'infos_caseB' => [
        'type_roche' => 'Calcaire (Orange & Gris)',
        'meilleure_saison' => 'Hiver / Printemps',
        'nombre_voies' => 1800,
        'ville_proche' => 'Cornudella de Montsant',
        'niveau_requis' => 'Intermédiaire à Expert'
    ],
    'avis_general' => 'Le temple de la réglette. Un village médiéval perché en haut d\'une falaise vertigineuse. Le style est très technique, à doigts, et exigeant. Un must pour la performance.',
    'coordonnees_gps' => '41.2576° N, 0.9317° E',
    'lien_gps' => '',
    'type_hebergement' => [
        'heb1' => 'Camping',
        'heb2' => 'Refuge',
        'heb3' => 'Camion'
    ]
];

$articleB5 = [
    'nom' => 'Rocklands',
    'pays' => 'Afrique du Sud',
    'flag' => '#',
    'infos_caseB' => [
        'type_roche' => 'Grès rouge',
        'meilleure_saison' => 'Juin à Août (Hiver austral)',
        'nombre_voies' => 4000,
        'ville_proche' => 'Clanwilliam',
        'niveau_requis' => 'Intermédiaire à Expert'
    ],
    'avis_general' => 'Le chaos sauvage. Des formes de rochers délirantes posées dans le bush africain. C\'est une destination exotique qui demande un certain budget mais offre des lignes pures.',
    'coordonnees_gps' => '-32.1436° S, 19.0744° E',
    'lien_gps' => '',
    'type_hebergement' => [
        'heb1' => 'Cottage',
        'heb2' => 'Camping de luxe'
    ]
];

$categorieB = [$articleB1, $articleB2, $articleB3, $articleB4, $articleB5];

// Catégories Matériel / Guide d'achat

$articleC1 = [
    'produit' => 'La Sportiva Solution Comp',
    'image_produit' => '#',
    'conseil_achat' => 'Prendre 2 pointures en dessous de la ville pour la performance, ou 1 taille pour le confort.',
    'infos_caseC' => [
        'couleurs_dispo' => [
            'c1' => 'Jaune',
            'c2' => 'Noir'
        ],
        'poids_g' => 480,
        'durabilite' => 'Faible',
        'categorie_matos' => 'Chaussons',
    ],
    'prix_stock' => [
        'prix_moyen' => 175,
        'en_stock' => true,
    ]
];

$articleC2 = [
    'produit' => 'Petzl Sitta',
    'image_produit' => '#',
    'conseil_achat' => 'Idéal pour les longues journées en grande voie grâce à son confort et sa légèreté.',
    'infos_caseC' => [
        'couleurs_dispo' => [
            'c1' => 'Bleu',
            'c2' => 'Rouge',
            'c3' => 'Vert'
        ],
        'poids_g' => 270,
        'durabilite' => 'Moyenne',
        'categorie_matos' => 'Baudrier',
    ],
    'prix_stock' => [
        'prix_moyen' => 180,
        'en_stock' => false,
    ]
];

$articleC3 = [
    'produit' => 'Petzl Grigri',
    'image_produit' => '#',
    'conseil_achat' => 'Parfait pour l\'escalade en tête grâce à son système d\'assurage assisté qui facilite la gestion de la corde.',
    'infos_caseC' => [
        'couleurs_dispo' => [
            'c1' => 'Gris',
            'c2' => 'Bleu'
        ],
        'durabilite' => 'Élevée',
        'categorie_matos' => 'Assurage',
    ],
    'prix_stock' => [
        'prix_moyen' => 85,
        'en_stock' => true,
    ]
];

$articleC4 = [
    'produit' => 'Beal Cobra II 8.6mm',
    'image_produit' => '#',
    'conseil_achat' => 'Une corde polyvalente adaptée à la fois pour le bloc et la difficulté, avec une bonne résistance à l\'usure.',
    'infos_caseC' => [
        'couleurs_dispo' => [
            'c1' => 'Bleu',
            'c2' => 'Fuchsia'
        ],
        'poids_g' => 2400,
        'durabilite' => 'Moyenne',
        'categorie_matos' => 'Corde',
    ],
    'prix_stock' => [
        'prix_moyen' => 140,
        'en_stock' => true,
    ]
];

$articleC5 = [
    'produit' => 'Black Diamond Mondo',
    'image_produit' => '#',
    'conseil_achat' => 'Le plus gros pad du marché pour les Highballs (chutes de haut). Vérifiez qu\'il rentre dans votre voiture !',
    'infos_caseC' => [
        'poids_g' => 9200,
        'durabilite' => 'Élevée',
        'categorie_matos' => 'Crashpad',
    ],
    'prix_stock' => [
        'prix_moyen' => 350,
        'en_stock' => true,
    ]
];

$categorieC = [$articleC1, $articleC2, $articleC3, $articleC4, $articleC5];
