
<?php
// Catégorie Spots Mythiques

$articleB1 = [
    'nom' => 'Fontainebleau',
    'pays' => 'France',
    'flag' => '🇫🇷',
    'image' => '../images/cat2/fontainebleau.jpg',
    'infos_caseB' => [
        'type_roche' => 'Grès (Sandstone)',
        'meilleure_saison' => 'Hiver (pour l\'adhérence)',
        'nombre_voies' => 30000,
        'ville_proche' => 'Fontainebleau / Paris',
        'niveau_requis' => 'Débutant à Intermédiaire',
    ],
    'avis_general' => "\"La mecque mondiale du bloc. Une forêt magique, des milliers de rochers gris et une ambiance unique au monde. Ici, la technique de pieds prime sur la force.\"",
    'coordonnees_gps' => '48°24\'36.0"N, 2°37\'12.0"E',
    'lien_gps' => 'https://maps.app.goo.gl/54qkf96hHydpHd5D6',
    'type_hebergement' => [
        'heb1' => 'Gîte',
        'heb2' => 'Airbnb',
        'heb3' => 'Camping',
    ],
    'id' => 'fontainebleau',
    'title-id' => 'Fontainebleau'
];
$articleB2 = [
    'nom' => 'Kalymnos',
    'pays' => 'Grèce',
    'flag' => '🇬🇷',
    'image' => '../images/cat2/kalymnos.jpg',
    'infos_caseB' => [
        'type_roche' => 'Calcaire (Tufs & Colonnettes)',
        'meilleure_saison' => 'Automne (Octobre)',
        'nombre_voies' => 3500,
        'ville_proche' => 'Pothia / Massouri',
        'niveau_requis' => 'Intermédiaire à Expert',
    ],
    'avis_general' => "\"L'île des grimpeurs. Imaginez grimper sur des grottes géantes surplombant la mer Égée, puis aller manger du poisson frais le soir. C'est le spot \"vacances\" par excellence.\"",
    'coordonnees_gps' => '36°59\'33.4"N 26°56\'19.7"E',
    'lien_gps' => 'https://maps.app.goo.gl/CzeykgsLBgPZhPX8A',
    'type_hebergement' => [
        'heb1' => 'Studio',
        'heb2' => 'Hôtel',
        'heb3' => 'Scooter-Trip',
    ],
    'id' => 'kalymnos',
    'title-id' => 'Kalymnos'
];

$articleB3 = [
    'nom' => 'Yosemite Valley',
    'pays' => 'USA (Californie)',
    'flag' => '🇺🇸',
    'image' => '../images/cat2/yosemite_valley.jpg',
    'infos_caseB' => [
        'type_roche' => 'Granite',
        'meilleure_saison' => 'Printemps / Automne',
        'nombre_voies' => 1200,
        'ville_proche' => 'Mariposa',
        'niveau_requis' => 'Intermédiaire à Expert'
    ],
    'avis_general' => "\"Le centre de l'univers pour l'escalade. El Capitan et le Half Dome sont des murs mythiques. C'est le royaume des fissures, de l'escalade traditionnelle et du Big Wall.\"",
    'coordonnees_gps' => '37°43\'18.0"N 119°38\'47.0"W',
    'lien_gps' => 'https://maps.app.goo.gl/W9hXbydgAZqoP93j8',
    'type_hebergement' => [
        'heb1' => 'Camp 4 (Tente)',
        'heb2' => 'Lodge',
        'heb3' => 'Van',
    ],
    'id' => 'yosemite_valley',
    'title-id' => 'Yosemite Valley'
];

$articleB4 = [
    'nom' => 'Siurana',
    'pays' => 'Espagne',
    'flag' => '🇪🇸',
    'image' => '../images/cat2/siurana.jpg',
    'infos_caseB' => [
        'type_roche' => 'Calcaire (Orange & Gris)',
        'meilleure_saison' => 'Hiver / Printemps',
        'nombre_voies' => 1800,
        'ville_proche' => 'Cornudella de Montsant',
        'niveau_requis' => 'Intermédiaire à Expert'
    ],
    'avis_general' => "\"Le temple de la réglette. Un village médiéval perché en haut d'une falaise vertigineuse. Le style est très technique, à doigts, et exigeant. Un must pour la performance.\"",
    'coordonnees_gps' => '41°15\'29.6"N 0°55\'56.3"E',
    'lien_gps' => 'https://maps.app.goo.gl/vBM99gHPKpYmrt3f8',
    'type_hebergement' => [
        'heb1' => 'Camping',
        'heb2' => 'Refuge',
        'heb3' => 'Camion',
    ],
    'id' => 'siurana',
    'title-id' => 'Siurana'
];

$articleB5 = [
    'nom' => 'Rocklands',
    'pays' => 'Afrique du Sud',
    'flag' => '🇿🇦',
    'image' => '../images/cat2/rocklands.jpg',
    'infos_caseB' => [
        'type_roche' => 'Grès rouge',
        'meilleure_saison' => 'Juin à Août (Hiver austral)',
        'nombre_voies' => 4000,
        'ville_proche' => 'Clanwilliam',
        'niveau_requis' => 'Intermédiaire à Expert'
    ],
    'avis_general' => "\"Le chaos sauvage. Des formes de rochers délirantes posées dans le bush africain. C'est une destination exotique qui demande un certain budget mais offre des lignes pures.\"",
    'coordonnees_gps' => '32°08\'58.9"S 19°01\'46.2"E',
    'lien_gps' => 'https://maps.app.goo.gl/T6tH7xq8bW1yvx2x8',
    'type_hebergement' => [
        'heb1' => 'Cottage',
        'heb2' => 'Camping de luxe'
    ],
    'id' => 'rocklands',   
    'title-id' => 'Rocklands'
];

$categorieB = [$articleB1, $articleB2, $articleB3, $articleB4, $articleB5];

$infos_cles2 = [
    'infos_cles' => 'Informations clés :',
    'type_roche' => 'Type de roche :',
    'meilleure_saison' => 'Meilleure saison :',
    'nombre_voies' => 'Nombre de voies :',
    'ville_proche' => 'Ville proche :',
    'niveau_requis' => 'Niveau requis :',
    'heb-reco' => 'Hébergements recommandés :',
];