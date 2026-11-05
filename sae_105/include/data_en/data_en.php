<?php
// --- DATA 1 : DISCIPLINES (EN) ---

$articleA1 = [
   'titre' => 'Bouldering',
   'image' => '../images/cat1/bloc.jpg',
   'description' => 'Climbing stripped down to its purest essence: no rope, no harness, just you and the rock. Shown here in an indoor gym, bouldering started as an outdoor sport on real rock but has popularized indoors for year-round practice! The goal is to solve short but intense "problems" on low-height rocks, secured by mats (crashpads). It is the king discipline for developing herculean strength and surgical footwork. The social aspect is very strong, as time is spent on the ground deciphering moves with friends.',
   'infos_caseA' => [
      'hauteur_moyenne' => '3 to 5 meters',
      'annee_apparition' => '1890',
      'echelle_cotation' => 'Fontainebleau (e.g., 7A)',
      'lieu_pratique' => 'Mixed (Gym & Forest)',
   ],
   'equipement_principal' => ['Climbing Shoes', 'Chalk', 'Crashpad'],
   'profil_physique' => ['Explosiveness', 'Pure Strength'],
   'record_monde' => 'Boulder 9A (Burden of Dreams)',
   'date_record' => '2023',
   'id' => 'bloc',
   'title-id' => 'Bouldering'
];

$articleA2 = [
   'titre' => 'Lead Climbing',
   'image' => '../images/cat1/lead.jpg',
   'description' => 'The most iconic form of sport climbing. The climber ascends by "clipping" their rope into quickdraws attached to the wall for safety. Here, it isn\'t just strength that counts, but the ability to manage effort over time. You must climb economically, breathe calmly despite lactic acid pumping your arms, and keep a steely mindset not to let go before the final anchor.',
   'infos_caseA' => [
      'hauteur_moyenne' => '15 to 40 meters',
      'annee_apparition' => 1980,
      'echelle_cotation' => 'French (e.g., 8b+)',
      'lieu_pratique' => 'Mixed (Crag & Wall)',
   ],
   'equipement_principal' => ['Rope', 'Harness', 'Quickdraws'],
   'profil_physique' => ['Endurance', 'Resistance'],
   'record_monde' => 'Route 9c (Silence by A. Ondra)',
   'date_record' => 2017,
   'id' => 'lead',
   'title-id' => 'Lead Climbing'
];

$articleA3 = [
   'titre' => 'Speed Climbing',
   'image' => '../images/cat1/speed.jpg',
   'description' => 'The vertical sprint. It is the only discipline where the stopwatch is the sole judge. Athletes climb on a standardized route (always the same overhang and holds everywhere in the world). It is an explosion of pure energy where every millisecond counts. Moves are repeated thousands of times in training to reach perfect automation, close to choreography.',
   'infos_caseA' => [
      'hauteur_moyenne' => '15 meters (Standard)',
      'annee_apparition' => 2005,
      'echelle_cotation' => 'Time (Seconds)',
      'lieu_pratique' => 'Indoor (Homologated Wall)',
   ],
   'equipement_principal' => ['Auto-belay', 'Lightweight Rope', 'Shoes'],
   'profil_physique' => [
      'Power',
      'Coordination'
   ],
   'record_monde' => '4.74 seconds (Sam Watson)',
   'date_record' => 2021,
   'id' => 'speed',
   'title-id' => 'Speed Climbing'
];

$articleA4 = [
   'titre' => 'Multi-pitch Climbing',
   'image' => '../images/cat1/multi_pitch.jpg',
   'description' => 'Adventure with a capital A. When a cliff is too high for a single rope length, it is cut into several sections called "pitches." You climb as a rope team, meeting at belay stations suspended in the middle of the wall. It is a discipline requiring logistics, exposure management (heights), and route-finding skills. You often find unforgettable, dizzying atmospheres.',
   'infos_caseA' => [
      'hauteur_moyenne' => '100 to 300 meters',
      'annee_apparition' => 1900,
      'echelle_cotation' => 'French (e.g., 7a)',
      'lieu_pratique' => 'Outdoor (Cliffs)',
   ],
   'equipement_principal' => ['Half Rope', 'Lanyard', 'Backpack'],
   'profil_physique' => ['Endurance', 'Mental Management'],
   'record_monde' => 'El Capitan in < 2h (Honnold)',
   'date_record' => 2017,
   'id' => 'multi-pitch',
   'title-id' => 'Multi-pitch'
];

$articleA5 = [
   'titre' => 'Trad Climbing',
   'image' => '../images/cat1/trad.jpg',
   'description' => 'The "clean" and historic climbing style. On these walls, there are no fixed safety points (bolts). It is up to the climber to place their own protection (nuts, cams/friends) in rock cracks and remove them after passing. This requires exceptional composure and great knowledge of the rock. Falling is allowed, but psychologically much more impressive than sport climbing.',
   'infos_caseA' => [
      'hauteur_moyenne' => '20 to 200 meters',
      'annee_apparition' => 1800,
      'echelle_cotation' => 'French (e.g., 6c)',
      'lieu_pratique' => 'Outdoor (Crag & Mountain)',
   ],
   'equipement_principal' => ['Set of Nuts', 'Cams/Friends', 'Robust Harness'],
   'profil_physique' => ['Technique', 'Composure'],
   'record_monde' => 'Route "Tribe" (Unrated)',
   'date_record' => 2016,
   'id' => 'trad',
   'title-id' => 'Trad Climbing'
];

$categorieA = [$articleA1, $articleA2, $articleA3, $articleA4, $articleA5];

$infos_cles1 = [
   'infos_cles' => 'Key Information:',
   'hauteur_moyenne' => 'Average Height:',
   'annee_apparition' => 'Year of Origin:',
   'echelle_cotation' => 'Grading Scale:',
   'lieu_pratique' => 'Practice Location:',
   'equipement_principal' => 'Main Equipment:',
   'profil_physique' => 'Physical Profile:',
];

// --- DATA 2 : SPOTS (EN) ---

$articleB1 = [
   'nom' => 'Fontainebleau',
   'pays' => 'France',
   'flag' => '🇫🇷',
   'image' => '../images/cat2/fontainebleau.jpg',
   'infos_caseB' => [
      'type_roche' => 'Sandstone (Grès)',
      'meilleure_saison' => 'Winter (for friction)',
      'nombre_voies' => 30000,
      'ville_proche' => 'Fontainebleau / Paris',
      'niveau_requis' => 'Beginner to Intermediate',
   ],
   'avis_general' => "\"The world mecca of bouldering. A magical forest, thousands of grey rocks, and a unique atmosphere. Here, foot technique prevails over strength.\"",
   'coordonnees_gps' => '48°24\'36.0"N, 2°37\'12.0"E',
   'lien_gps' => 'https://maps.app.goo.gl/54qkf96hHydpHd5D6',
   'type_hebergement' => [
      'heb1' => 'Gite',
      'heb2' => 'Airbnb',
      'heb3' => 'Camping',
   ],
   'id' => 'fontainebleau',
   'title-id' => 'Fontainebleau'
];
$articleB2 = [
   'nom' => 'Kalymnos',
   'pays' => 'Greece',
   'flag' => '🇬🇷',
   'image' => '../images/cat2/kalymnos.jpg',
   'infos_caseB' => [
      'type_roche' => 'Limestone (Tufas)',
      'meilleure_saison' => 'Autumn (October)',
      'nombre_voies' => 3500,
      'ville_proche' => 'Pothia / Massouri',
      'niveau_requis' => 'Intermediate to Expert',
   ],
   'avis_general' => "\"The climbers' island. Imagine climbing on giant caves overlooking the Aegean Sea, then eating fresh fish in the evening. It is the ultimate 'holiday' spot.\"",
   'coordonnees_gps' => '36°59\'33.4"N 26°56\'19.7"E',
   'lien_gps' => 'https://maps.app.goo.gl/CzeykgsLBgPZhPX8A',
   'type_hebergement' => [
      'heb1' => 'Studio',
      'heb2' => 'Hotel',
      'heb3' => 'Scooter-Trip',
   ],
   'id' => 'kalymnos',
   'title-id' => 'Kalymnos'
];

$articleB3 = [
   'nom' => 'Yosemite Valley',
   'pays' => 'USA (California)',
   'flag' => '🇺🇸',
   'image' => '../images/cat2/yosemite_valley.jpg',
   'infos_caseB' => [
      'type_roche' => 'Granite',
      'meilleure_saison' => 'Spring / Autumn',
      'nombre_voies' => 1200,
      'ville_proche' => 'Mariposa',
      'niveau_requis' => 'Intermediate to Expert'
   ],
   'avis_general' => "\"The center of the climbing universe. El Capitan and Half Dome are mythical walls. It is the kingdom of cracks, traditional climbing, and Big Wall.\"",
   'coordonnees_gps' => '37°43\'18.0"N 119°38\'47.0"W',
   'lien_gps' => 'https://maps.app.goo.gl/W9hXbydgAZqoP93j8',
   'type_hebergement' => [
      'heb1' => 'Camp 4 (Tent)',
      'heb2' => 'Lodge',
      'heb3' => 'Van',
   ],
   'id' => 'yosemite_valley',
   'title-id' => 'Yosemite Valley'
];

$articleB4 = [
   'nom' => 'Siurana',
   'pays' => 'Spain',
   'flag' => '🇪🇸',
   'image' => '../images/cat2/siurana.jpg',
   'infos_caseB' => [
      'type_roche' => 'Limestone (Orange & Grey)',
      'meilleure_saison' => 'Winter / Spring',
      'nombre_voies' => 1800,
      'ville_proche' => 'Cornudella de Montsant',
      'niveau_requis' => 'Intermediate to Expert'
   ],
   'avis_general' => "\"The temple of crimps. A medieval village perched atop a dizzying cliff. The style is very technical, finger-intensive, and demanding. A must for performance.\"",
   'coordonnees_gps' => '41°15\'29.6"N 0°55\'56.3"E',
   'lien_gps' => 'https://maps.app.goo.gl/vBM99gHPKpYmrt3f8',
   'type_hebergement' => [
      'heb1' => 'Camping',
      'heb2' => 'Refuge',
      'heb3' => 'Van/Truck',
   ],
   'id' => 'siurana',
   'title-id' => 'Siurana'
];

$articleB5 = [
   'nom' => 'Rocklands',
   'pays' => 'South Africa',
   'flag' => '🇿🇦',
   'image' => '../images/cat2/rocklands.jpg',
   'infos_caseB' => [
      'type_roche' => 'Red Sandstone',
      'meilleure_saison' => 'June to August (Austral Winter)',
      'nombre_voies' => 4000,
      'ville_proche' => 'Clanwilliam',
      'niveau_requis' => 'Intermediate to Expert'
   ],
   'avis_general' => "\"Wild chaos. Delirious rock shapes set in the African bush. It is an exotic destination that requires a budget but offers pure lines.\"",
   'coordonnees_gps' => '32°08\'58.9"S 19°01\'46.2"E',
   'lien_gps' => 'https://maps.app.goo.gl/T6tH7xq8bW1yvx2x8',
   'type_hebergement' => [
      'heb1' => 'Cottage',
      'heb2' => 'Luxury Camping'
   ],
   'id' => 'rocklands',
   'title-id' => 'Rocklands'
];

$categorieB = [$articleB1, $articleB2, $articleB3, $articleB4, $articleB5];

$infos_cles2 = [
   'infos_cles' => 'Key Information:',
   'type_roche' => 'Rock Type:',
   'meilleure_saison' => 'Best Season:',
   'nombre_voies' => 'Number of Routes:',
   'ville_proche' => 'Nearby City:',
   'niveau_requis' => 'Required Level:',
   'heb-reco' => 'Recommended Accommodation:',
];

// --- DATA 3 : GEAR (EN) ---

// --- CLIMBING SHOES --- //

$rubriqueA = [
   'titre_categorie' => 'Climbing Shoes',
   'intro' => 'The direct link between you and the rock. The choice depends on your practice: comfort for volume, asymmetry for performance.',
   'produits' => [
      [
         'produit' => 'Scarpa Origin VS',
         'image_produit' => '../images/cat3/chaussons/originvs.jpg',
         'lien_achat' => 'https://www.auvieuxcampeur.fr/chaussons-escalade-origin-vs.html',
         'infos_caseC' => [
            'couleurs_dispo' => ['Grey', 'Blue'],
            'poids_g' => 460,
            'durabilite' => 'Very High',
            'categorie_matos' => 'Shoes'
         ],
         'avis_expert' => [
            'profil_type' => 'Beginner / Crag',
            'note_sur_10' => 7,
            'les_plus' => 'Rock-solid durability, Immediate comfort',
            'les_moins' => 'Lacks sensitivity (thick sole)'
         ]
      ],
      [
         'produit' => 'Scarpa Vapor V',
         'image_produit' => '../images/cat3/chaussons/vaporv.jpg',
         'lien_achat' => 'https://www.auvieuxcampeur.fr/chaussons-escalade-vapor-v.html',
         'infos_caseC' => [
            'couleurs_dispo' => ['Yellow / Blue', 'Red / Black'],
            'poids_g' => 420,
            'durabilite' => 'Medium',
            'categorie_matos' => 'Shoes'
         ],
         'avis_expert' => [
            'profil_type' => 'Intermediate / Advanced',
            'note_sur_10' => 9,
            'les_plus' => 'Excellent edging, Powerful heel',
            'les_moins' => 'Stiff at first'
         ]
      ],
      [
         'produit' => 'La Sportiva Solution Comp',
         'image_produit' => '../images/cat3/chaussons/solutioncomp.jpg',
         'lien_achat' => 'https://www.auvieuxcampeur.fr/chaussons-d-escalade-solution-comp.html',
         'infos_caseC' => [
            'couleurs_dispo' => ['Yellow', 'Black'],
            'poids_g' => 480,
            'durabilite' => 'Low',
            'categorie_matos' => 'Shoes'
         ],
         'avis_expert' => [
            'profil_type' => 'Expert / Bouldering',
            'note_sur_10' => 9,
            'les_plus' => 'Ultra-precise heel, Toe-hooks',
            'les_moins' => 'Painful, Fast wear'
         ]
      ]
   ]
];

// --- HARNESSES --- //

$rubriqueB = [
   'titre_categorie' => 'Harnesses',
   'intro' => 'Your safety and comfort in suspension. Always check the number of gear loops.',
   'produits' => [
      [
         'produit' => 'Black Diamond Momentum',
         'image_produit' => '../images/cat3/baudriers/momentum.jpg',
         'lien_achat' => 'https://www.auvieuxcampeur.fr/baudrier-momentum.html',
         'infos_caseC' => [
            'couleurs_dispo' => ['Anthracite', 'King Blue'],
            'poids_g' => 302,
            'durabilite' => 'High',
            'categorie_matos' => 'Harness'
         ],
         'avis_expert' => [
            'profil_type' => 'Versatile / Gym',
            'note_sur_10' => 8,
            'les_plus' => 'Easy adjustment, Robust',
            'les_moins' => 'Bulky in the bag'
         ]
      ],
      [
         'produit' => 'Petzl Sitta',
         'image_produit' => '../images/cat3/baudriers/sitta.jpg',
         'lien_achat' => 'https://www.auvieuxcampeur.fr/baudrier-sitta.html',
         'infos_caseC' => [
            'couleurs_dispo' => ['Orange', 'White'],
            'poids_g' => 270,
            'durabilite' => 'Medium',
            'categorie_matos' => 'Harness'
         ],
         'avis_expert' => [
            'profil_type' => 'Alpinism / Performance',
            'note_sur_10' => 9,
            'les_plus' => 'Extreme compactness, Wireframe technology',
            'les_moins' => 'Elite price, No foam padding'
         ]
      ]
   ]
];

// --- BELAY DEVICES --- //
$rubriqueC = [
   'titre_categorie' => 'Belay Systems',
   'intro' => 'Classic tube or assisted braking? The choice depends on your experience.',
   'produits' => [
      [
         'produit' => 'Petzl Grigri',
         'image_produit' => '../images/cat3/assurage/grigri.jpg',
         'lien_achat' => 'https://www.auvieuxcampeur.fr/assureur-grigri.html',
         'infos_caseC' => [
            'couleurs_dispo' => ['Grey', 'Red', 'Blue'],
            'poids_g' => 175,
            'durabilite' => 'Indestructible',
            'categorie_matos' => 'Belay (Assisted)'
         ],
         'avis_expert' => [
            'profil_type' => 'Sport / Gym',
            'note_sur_10' => 10,
            'les_plus' => 'Assisted blocking safety',
            'les_moins' => 'Heavy, Does not allow rappelling'
         ]
      ],
      [
         'produit' => 'Black Diamond ATC',
         'image_produit' => '../images/cat3/assurage/atc.jpg',
         'lien_achat' => 'https://www.auvieuxcampeur.fr/assureur-atc-alpine-guide.html',
         'infos_caseC' => [
            'couleurs_dispo' => ['Green'],
            'poids_g' => 80,
            'durabilite' => 'High',
            'categorie_matos' => 'Belay (Tube)'
         ],
         'avis_expert' => [
            'profil_type' => 'Multi-pitch / Rappel',
            'note_sur_10' => 8,
            'les_plus' => 'Light, Reliable, Rappel possible',
            'les_moins' => 'Does not block automatically'
         ]
      ]
   ]
];

// --- ROPES --- //
$rubriqueD = [
   'titre_categorie' => 'Ropes',
   'intro' => 'The engine of your safety. Single (1 strand) for sport climbing, or Double (2 strands) for multi-pitch.',
   'produits' => [
      [
         'produit' => 'Mammut Crag Classic 9.8mm',
         'image_produit' => '../images/cat3/cordes/mammut-crag.jpg',
         'lien_achat' => 'https://www.auvieuxcampeur.fr/corde-crag-classic-9-8.html',
         'infos_caseC' => [
            'couleurs_dispo' => ['Orange', 'Blue'],
            'poids_g' => 3200,
            'durabilite' => 'Very High',
            'categorie_matos' => 'Single Rope'
         ],
         'avis_expert' => [
            'profil_type' => 'Gym & Sport Crag',
            'note_sur_10' => 8,
            'les_plus' => 'Incredible robustness, Price',
            'les_moins' => 'Heavy for approach, Thick diameter'
         ]
      ],
      [
         'produit' => 'Petzl Volta 9.2mm',
         'image_produit' => '../images/cat3/cordes/volta.jpg',
         'lien_achat' => 'https://www.auvieuxcampeur.fr/o9-2-volta-dry-corde-poupee.html',
         'infos_caseC' => [
            'couleurs_dispo' => ['Grey', 'Orange'],
            'poids_g' => 2750,
            'durabilite' => 'Medium',
            'categorie_matos' => 'Triple Rated Rope'
         ],
         'avis_expert' => [
            'profil_type' => 'Performance / Expert',
            'note_sur_10' => 9,
            'les_plus' => 'Extreme fluidity, Lightness, Versatility',
            'les_moins' => 'Runs fast in the belay device (Caution!)'
         ]
      ],
      [
         'produit' => 'Beal Cobra II 8.6mm',
         'image_produit' => '../images/cat3/cordes/cobra.jpg',
         'lien_achat' => 'https://www.auvieuxcampeur.fr/corde-escalade-cobra-ii-unicore-dry-cover-8-6.html',
         'infos_caseC' => [
            'couleurs_dispo' => ['Blue', 'Fuchsia'],
            'poids_g' => 2880,
            'durabilite' => 'High',
            'categorie_matos' => 'Half Rope'
         ],
         'avis_expert' => [
            'profil_type' => 'Multi-pitch / Alpinism',
            'note_sur_10' => 9,
            'les_plus' => 'Low impact force, Safety if cut',
            'les_moins' => 'Managing two strands (tangles)'
         ]
      ]
   ]
];

$categorieC = [
   'chaussons' => $rubriqueA,
   'baudriers' => $rubriqueB,
   'assurage'  => $rubriqueC,
   'cordes'    => $rubriqueD
];

$info_flash = [
   'texte_avc' => 'Find all these products and much more on the official "Au Vieux Campeur" website!',
   'titre' => 'Did You Know?',
   'texte' => 'Choosing climbing equipment is crucial for safety and performance. It is important to always check the condition of your gear before each use and follow the manufacturers\' recommendations.'
];
