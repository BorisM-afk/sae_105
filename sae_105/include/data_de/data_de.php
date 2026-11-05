<?php
// --- DATA 1 : DISZIPLINEN (DE) ---

$articleA1 = [
   'titre' => 'Bouldern',
   'image' => '../images/cat1/bloc.jpg',
   'description' => 'Klettern auf seine reinste Essenz reduziert: kein Seil, kein Gurt, nur du und der Fels. Hier in einer Halle gezeigt, war Bouldern ursprünglich ein Outdoor-Sport am Fels, hat sich aber für das ganzjährige Training nach drinnen verlagert! Ziel ist es, kurze, aber intensive "Probleme" an niedrigen Felsblöcken zu lösen, gesichert durch Matten (Crashpads). Es ist die Königsdisziplin für die Entwicklung von Herkuleskraft und chirurgischer Fußtechnik. Der soziale Aspekt ist sehr stark, da man viel Zeit am Boden verbringt, um Bewegungen mit Freunden zu entschlüsseln.',
   'infos_caseA' => [
      'hauteur_moyenne' => '3 bis 5 Meter',
      'annee_apparition' => '1890',
      'echelle_cotation' => 'Fontainebleau (z.B. 7A)',
      'lieu_pratique' => 'Gemischt (Halle & Wald)',
   ],
   'equipement_principal' => ['Kletterschuhe', 'Chalk', 'Crashpad'],
   'profil_physique' => ['Explosivität', 'Reine Kraft'],
   'record_monde' => 'Boulder 9A (Burden of Dreams)',
   'date_record' => '2023',
   'id' => 'bloc',
   'title-id' => 'Bouldern'
];

$articleA2 = [
   'titre' => 'Leadklettern (Vorstieg)',
   'image' => '../images/cat1/lead.jpg',
   'description' => 'Die emblematischste Form des Sportkletterns. Der Kletterer steigt auf, indem er sein Seil zur Sicherung in Expresssets einhängt (klippt), die an der Wand befestigt sind. Hier zählt nicht nur Kraft, sondern die Fähigkeit, die Anstrengung über die Dauer zu managen. Man muss ökonomisch klettern, trotz Laktat in den Armen ruhig atmen und eine mentale Stärke bewahren, um vor dem Umlenker nicht loszulassen.',
   'infos_caseA' => [
      'hauteur_moyenne' => '15 bis 40 Meter',
      'annee_apparition' => 1980,
      'echelle_cotation' => 'Französisch (z.B. 8b+)',
      'lieu_pratique' => 'Gemischt (Fels & Wand)',
   ],
   'equipement_principal' => ['Seil', 'Klettergurt', 'Expresssets'],
   'profil_physique' => ['Ausdauer', 'Widerstandskraft'],
   'record_monde' => 'Route 9c (Silence von A. Ondra)',
   'date_record' => 2017,
   'id' => 'lead',
   'title-id' => 'Leadklettern'
];

$articleA3 = [
   'titre' => 'Speedklettern',
   'image' => '../images/cat1/speed.jpg',
   'description' => 'Der vertikale Sprint. Es ist die einzige Disziplin, in der die Stoppuhr der einzige Richter ist. Die Athleten klettern auf einer standardisierten Route (überall auf der Welt die gleiche Neigung und die gleichen Griffe). Es ist eine Explosion reiner Energie, bei der jede Millisekunde zählt. Bewegungen werden im Training tausendfach wiederholt, um eine perfekte Automatisierung zu erreichen, die einer Choreografie ähnelt.',
   'infos_caseA' => [
      'hauteur_moyenne' => '15 Meter (Standard)',
      'annee_apparition' => 2005,
      'echelle_cotation' => 'Zeit (Sekunden)',
      'lieu_pratique' => 'Indoor (Normwand)',
   ],
   'equipement_principal' => ['Selbstsicherungsautomat', 'Leichtes Seil', 'Schuhe'],
   'profil_physique' => [
      'Leistung',
      'Koordination'
   ],
   'record_monde' => '4.74 Sekunden (Sam Watson)',
   'date_record' => 2021,
   'id' => 'speed',
   'title-id' => 'Speedklettern'
];

$articleA4 = [
   'titre' => 'Mehrseillängen (Multi-pitch)',
   'image' => '../images/cat1/multi_pitch.jpg',
   'description' => 'Abenteuer mit großem A. Wenn eine Felswand zu hoch für eine einzelne Seillänge ist, wird sie in mehrere Abschnitte unterteilt, die "Seillängen" genannt werden. Man klettert in einer Seilschaft und trifft sich an den Standplätzen mitten in der Wand. Diese Disziplin erfordert Logistik, Umgang mit der Ausgesetztheit (Tiefblick) und Routenfindung. Man findet dort oft unvergessliche, schwindelerregende Atmosphären.',
   'infos_caseA' => [
      'hauteur_moyenne' => '100 bis 300 Meter',
      'annee_apparition' => 1900,
      'echelle_cotation' => 'Französisch (z.B. 7a)',
      'lieu_pratique' => 'Outdoor (Fels)',
   ],
   'equipement_principal' => ['Halbseil', 'Selbstsicherungsschlinge', 'Rucksack'],
   'profil_physique' => ['Ausdauer', 'Mentales Management'],
   'record_monde' => 'El Capitan in < 2h (Honnold)',
   'date_record' => 2017,
   'id' => 'multi-pitch',
   'title-id' => 'Mehrseillängen'
];

$articleA5 = [
   'titre' => 'Trad Climbing (Traditionell)',
   'image' => '../images/cat1/trad.jpg',
   'description' => 'Der "saubere" und historische Kletterstil. An diesen Wänden gibt es keine fixen Sicherungspunkte (Bohrhaken). Es liegt am Kletterer, seine eigenen Sicherungen (Klemmkeile, Friends) in Felsrissen zu platzieren und sie nach dem Durchstieg wieder zu entfernen. Dies erfordert außergewöhnliche Kaltblütigkeit und große Felskenntnis. Stürzen ist erlaubt, aber psychologisch viel beeindruckender als beim Sportklettern.',
   'infos_caseA' => [
      'hauteur_moyenne' => '20 bis 200 Meter',
      'annee_apparition' => 1800,
      'echelle_cotation' => 'Französisch (z.B. 6c)',
      'lieu_pratique' => 'Outdoor (Fels & Berg)',
   ],
   'equipement_principal' => ['Klemmkeil-Set', 'Friends/Cams', 'Robuster Gurt'],
   'profil_physique' => ['Technik', 'Kaltblütigkeit'],
   'record_monde' => 'Route "Tribe" (Ohne Bewertung)',
   'date_record' => 2016,
   'id' => 'trad',
   'title-id' => 'Trad Climbing'
];

$categorieA = [$articleA1, $articleA2, $articleA3, $articleA4, $articleA5];

$infos_cles1 = [
   'infos_cles' => 'Wichtige Informationen:',
   'hauteur_moyenne' => 'Durchschnittliche Höhe:',
   'annee_apparition' => 'Erscheinungsjahr:',
   'echelle_cotation' => 'Bewertungsskala:',
   'lieu_pratique' => 'Ort der Ausübung:',
   'equipement_principal' => 'Hauptausrüstung:',
   'profil_physique' => 'Körperliches Profil:',
];

// --- DATA 2 : SPOTS (DE) ---

$articleB1 = [
   'nom' => 'Fontainebleau',
   'pays' => 'Frankreich',
   'flag' => '🇫🇷',
   'image' => '../images/cat2/fontainebleau.jpg',
   'infos_caseB' => [
      'type_roche' => 'Sandstein (Grès)',
      'meilleure_saison' => 'Winter (für Reibung)',
      'nombre_voies' => 30000,
      'ville_proche' => 'Fontainebleau / Paris',
      'niveau_requis' => 'Anfänger bis Mittelstufe',
   ],
   'avis_general' => "\"Das weltweite Mekka des Boulderns. Ein magischer Wald, tausende graue Felsen und eine weltweit einzigartige Atmosphäre. Hier zählt Fusstechnik mehr als Kraft.\"",
   'coordonnees_gps' => '48°24\'36.0"N, 2°37\'12.0"E',
   'lien_gps' => 'https://maps.app.goo.gl/54qkf96hHydpHd5D6',
   'type_hebergement' => [
      'heb1' => 'Ferienhaus',
      'heb2' => 'Airbnb',
      'heb3' => 'Camping',
   ],
   'id' => 'fontainebleau',
   'title-id' => 'Fontainebleau'
];
$articleB2 = [
   'nom' => 'Kalymnos',
   'pays' => 'Griechenland',
   'flag' => '🇬🇷',
   'image' => '../images/cat2/kalymnos.jpg',
   'infos_caseB' => [
      'type_roche' => 'Kalkstein (Sinter)',
      'meilleure_saison' => 'Herbst (Oktober)',
      'nombre_voies' => 3500,
      'ville_proche' => 'Pothia / Massouri',
      'niveau_requis' => 'Mittelstufe bis Experte',
   ],
   'avis_general' => "\"Die Insel der Kletterer. Stell dir vor, du kletterst an riesigen Grotten mit Blick auf die Ägäis und isst abends frischen Fisch. Das ist der ultimative 'Urlaubs'-Spot.\"",
   'coordonnees_gps' => '36°59\'33.4"N 26°56\'19.7"E',
   'lien_gps' => 'https://maps.app.goo.gl/CzeykgsLBgPZhPX8A',
   'type_hebergement' => [
      'heb1' => 'Studio',
      'heb2' => 'Hotel',
      'heb3' => 'Roller-Trip',
   ],
   'id' => 'kalymnos',
   'title-id' => 'Kalymnos'
];

$articleB3 = [
   'nom' => 'Yosemite Valley',
   'pays' => 'USA (Kalifornien)',
   'flag' => '🇺🇸',
   'image' => '../images/cat2/yosemite_valley.jpg',
   'infos_caseB' => [
      'type_roche' => 'Granit',
      'meilleure_saison' => 'Frühling / Herbst',
      'nombre_voies' => 1200,
      'ville_proche' => 'Mariposa',
      'niveau_requis' => 'Mittelstufe bis Experte'
   ],
   'avis_general' => "\"Das Zentrum des Kletteruniversums. El Capitan und Half Dome sind mythische Wände. Es ist das Königreich der Risse, des traditionellen Kletterns und der Big Walls.\"",
   'coordonnees_gps' => '37°43\'18.0"N 119°38\'47.0"W',
   'lien_gps' => 'https://maps.app.goo.gl/W9hXbydgAZqoP93j8',
   'type_hebergement' => [
      'heb1' => 'Camp 4 (Zelt)',
      'heb2' => 'Lodge',
      'heb3' => 'Van',
   ],
   'id' => 'yosemite_valley',
   'title-id' => 'Yosemite Valley'
];

$articleB4 = [
   'nom' => 'Siurana',
   'pays' => 'Spanien',
   'flag' => '🇪🇸',
   'image' => '../images/cat2/siurana.jpg',
   'infos_caseB' => [
      'type_roche' => 'Kalkstein (Orange & Grau)',
      'meilleure_saison' => 'Winter / Frühling',
      'nombre_voies' => 1800,
      'ville_proche' => 'Cornudella de Montsant',
      'niveau_requis' => 'Mittelstufe bis Experte'
   ],
   'avis_general' => "\"Der Tempel der Leisten. Ein mittelalterliches Dorf oben auf einer schwindelerregenden Klippe. Der Stil ist sehr technisch, fingerlastig und anspruchsvoll. Ein Muss für Performance.\"",
   'coordonnees_gps' => '41°15\'29.6"N 0°55\'56.3"E',
   'lien_gps' => 'https://maps.app.goo.gl/vBM99gHPKpYmrt3f8',
   'type_hebergement' => [
      'heb1' => 'Camping',
      'heb2' => 'Hütte',
      'heb3' => 'Bus/Van',
   ],
   'id' => 'siurana',
   'title-id' => 'Siurana'
];

$articleB5 = [
   'nom' => 'Rocklands',
   'pays' => 'Südafrika',
   'flag' => '🇿🇦',
   'image' => '../images/cat2/rocklands.jpg',
   'infos_caseB' => [
      'type_roche' => 'Roter Sandstein',
      'meilleure_saison' => 'Juni bis August (Austral-Winter)',
      'nombre_voies' => 4000,
      'ville_proche' => 'Clanwilliam',
      'niveau_requis' => 'Mittelstufe bis Experte'
   ],
   'avis_general' => "\"Wildes Chaos. Verrückte Felsformen im afrikanischen Busch. Es ist ein exotisches Ziel, das ein gewisses Budget erfordert, aber reine Linien bietet.\"",
   'coordonnees_gps' => '32°08\'58.9"S 19°01\'46.2"E',
   'lien_gps' => 'https://maps.app.goo.gl/T6tH7xq8bW1yvx2x8',
   'type_hebergement' => [
      'heb1' => 'Cottage',
      'heb2' => 'Luxus-Camping'
   ],
   'id' => 'rocklands',
   'title-id' => 'Rocklands'
];

$categorieB = [$articleB1, $articleB2, $articleB3, $articleB4, $articleB5];

$infos_cles2 = [
   'infos_cles' => 'Wichtige Informationen:',
   'type_roche' => 'Gesteinsart:',
   'meilleure_saison' => 'Beste Jahreszeit:',
   'nombre_voies' => 'Anzahl der Routen:',
   'ville_proche' => 'Nächstgelegene Stadt:',
   'niveau_requis' => 'Erforderliches Niveau:',
   'heb-reco' => 'Empfohlene Unterkünfte:',
];

// --- DATA 3 : AUSRÜSTUNG (DE) ---

// --- KLETTERSCHUHE --- //

$rubriqueA = [
   'titre_categorie' => 'Kletterschuhe',
   'intro' => 'Die direkte Verbindung zwischen dir und dem Fels. Die Wahl hängt von deiner Praxis ab: Komfort für Volumen, Asymmetrie für Leistung.',
   'produits' => [
      [
         'produit' => 'Scarpa Origin VS',
         'image_produit' => '../images/cat3/chaussons/originvs.jpg',
         'lien_achat' => 'https://www.auvieuxcampeur.fr/chaussons-escalade-origin-vs.html',
         'infos_caseC' => [
            'couleurs_dispo' => ['Grau', 'Blau'],
            'poids_g' => 460,
            'durabilite' => 'Sehr Hoch',
            'categorie_matos' => 'Schuhe'
         ],
         'avis_expert' => [
            'profil_type' => 'Anfänger / Fels',
            'note_sur_10' => 7,
            'les_plus' => 'Extreme Robustheit, Sofortiger Komfort',
            'les_moins' => 'Fehlendes Gefühl (dicke Sohle)'
         ]
      ],
      [
         'produit' => 'Scarpa Vapor V',
         'image_produit' => '../images/cat3/chaussons/vaporv.jpg',
         'lien_achat' => 'https://www.auvieuxcampeur.fr/chaussons-escalade-vapor-v.html',
         'infos_caseC' => [
            'couleurs_dispo' => ['Gelb / Blau', 'Rot / Schwarz'],
            'poids_g' => 420,
            'durabilite' => 'Mittel',
            'categorie_matos' => 'Schuhe'
         ],
         'avis_expert' => [
            'profil_type' => 'Mittelstufe / Fortgeschritten',
            'note_sur_10' => 9,
            'les_plus' => 'Exzellente Kante, Starke Ferse',
            'les_moins' => 'Anfangs steif'
         ]
      ],
      [
         'produit' => 'La Sportiva Solution Comp',
         'image_produit' => '../images/cat3/chaussons/solutioncomp.jpg',
         'lien_achat' => 'https://www.auvieuxcampeur.fr/chaussons-d-escalade-solution-comp.html',
         'infos_caseC' => [
            'couleurs_dispo' => ['Gelb', 'Schwarz'],
            'poids_g' => 480,
            'durabilite' => 'Gering',
            'categorie_matos' => 'Schuhe'
         ],
         'avis_expert' => [
            'profil_type' => 'Experte / Bouldern',
            'note_sur_10' => 9,
            'les_plus' => 'Ultra-präzise Ferse, Toe-Hooks',
            'les_moins' => 'Schmerzhaft, Schneller Verschleiß'
         ]
      ]
   ]
];

// --- KLETTERGURTE --- //

$rubriqueB = [
   'titre_categorie' => 'Klettergurte',
   'intro' => 'Deine Sicherheit und dein Komfort beim Hängen. Überprüfe immer die Anzahl der Materialschlaufen.',
   'produits' => [
      [
         'produit' => 'Black Diamond Momentum',
         'image_produit' => '../images/cat3/baudriers/momentum.jpg',
         'lien_achat' => 'https://www.auvieuxcampeur.fr/baudrier-momentum.html',
         'infos_caseC' => [
            'couleurs_dispo' => ['Anthrazit', 'Königsblau'],
            'poids_g' => 302,
            'durabilite' => 'Hoch',
            'categorie_matos' => 'Gurt'
         ],
         'avis_expert' => [
            'profil_type' => 'Vielseitig / Verein',
            'note_sur_10' => 8,
            'les_plus' => 'Einfache Einstellung, Robust',
            'les_moins' => 'Sperrig im Rucksack'
         ]
      ],
      [
         'produit' => 'Petzl Sitta',
         'image_produit' => '../images/cat3/baudriers/sitta.jpg',
         'lien_achat' => 'https://www.auvieuxcampeur.fr/baudrier-sitta.html',
         'infos_caseC' => [
            'couleurs_dispo' => ['Orange', 'Weiß'],
            'poids_g' => 270,
            'durabilite' => 'Mittel',
            'categorie_matos' => 'Gurt'
         ],
         'avis_expert' => [
            'profil_type' => 'Alpinismus / Leistung',
            'note_sur_10' => 9,
            'les_plus' => 'Extreme Kompaktheit, Wireframe-Technologie',
            'les_moins' => 'Elitärer Preis, Kein Schaumstoff'
         ]
      ]
   ]
];

// --- SICHERUNGSGERÄTE --- //
$rubriqueC = [
   'titre_categorie' => 'Sicherungssysteme',
   'intro' => 'Klassischer Tuber oder unterstütztes Bremsen? Die Wahl hängt von deiner Erfahrung ab.',
   'produits' => [
      [
         'produit' => 'Petzl Grigri',
         'image_produit' => '../images/cat3/assurage/grigri.jpg',
         'lien_achat' => 'https://www.auvieuxcampeur.fr/assureur-grigri.html',
         'infos_caseC' => [
            'couleurs_dispo' => ['Grau', 'Rot', 'Blau'],
            'poids_g' => 175,
            'durabilite' => 'Unzerstörbar',
            'categorie_matos' => 'Sicherungsgerät (Halbautomat)'
         ],
         'avis_expert' => [
            'profil_type' => 'Sport / Halle',
            'note_sur_10' => 10,
            'les_plus' => 'Sicherheit durch Blockierunterstützung',
            'les_moins' => 'Schwer, Kein Abseilen möglich'
         ]
      ],
      [
         'produit' => 'Black Diamond ATC',
         'image_produit' => '../images/cat3/assurage/atc.jpg',
         'lien_achat' => 'https://www.auvieuxcampeur.fr/assureur-atc-alpine-guide.html',
         'infos_caseC' => [
            'couleurs_dispo' => ['Grün'],
            'poids_g' => 80,
            'durabilite' => 'Hoch',
            'categorie_matos' => 'Sicherungsgerät (Tuber)'
         ],
         'avis_expert' => [
            'profil_type' => 'Mehrseillängen / Abseilen',
            'note_sur_10' => 8,
            'les_plus' => 'Leicht, Zuverlässig, Abseilen möglich',
            'les_moins' => 'Blockiert nicht automatisch'
         ]
      ]
   ]
];

// --- SEILE --- //
$rubriqueD = [
   'titre_categorie' => 'Seile',
   'intro' => 'Der Motor deiner Sicherheit. Einfachseil (1 Strang) für Sportklettern oder Halbseil (2 Stränge) für Mehrseillängen.',
   'produits' => [
      [
         'produit' => 'Mammut Crag Classic 9.8mm',
         'image_produit' => '../images/cat3/cordes/mammut-crag.jpg',
         'lien_achat' => 'https://www.auvieuxcampeur.fr/corde-crag-classic-9-8.html',
         'infos_caseC' => [
            'couleurs_dispo' => ['Orange', 'Blau'],
            'poids_g' => 3200,
            'durabilite' => 'Sehr Hoch',
            'categorie_matos' => 'Einfachseil'
         ],
         'avis_expert' => [
            'profil_type' => 'Halle & Sportfels',
            'note_sur_10' => 8,
            'les_plus' => 'Unglaubliche Robustheit, Preis',
            'les_moins' => 'Schwer für den Zustieg, Dicker Durchmesser'
         ]
      ],
      [
         'produit' => 'Petzl Volta 9.2mm',
         'image_produit' => '../images/cat3/cordes/volta.jpg',
         'lien_achat' => 'https://www.auvieuxcampeur.fr/o9-2-volta-dry-corde-poupee.html',
         'infos_caseC' => [
            'couleurs_dispo' => ['Grau', 'Orange'],
            'poids_g' => 2750,
            'durabilite' => 'Mittel',
            'categorie_matos' => 'Dreifach normiertes Seil'
         ],
         'avis_expert' => [
            'profil_type' => 'Leistung / Experte',
            'note_sur_10' => 9,
            'les_plus' => 'Extreme Flüssigkeit, Leichtigkeit, Vielseitigkeit',
            'les_moins' => 'Läuft schnell durchs Sicherungsgerät (Vorsicht!)'
         ]
      ],
      [
         'produit' => 'Beal Cobra II 8.6mm',
         'image_produit' => '../images/cat3/cordes/cobra.jpg',
         'lien_achat' => 'https://www.auvieuxcampeur.fr/corde-escalade-cobra-ii-unicore-dry-cover-8-6.html',
         'infos_caseC' => [
            'couleurs_dispo' => ['Blau', 'Fuchsia'],
            'poids_g' => 2880,
            'durabilite' => 'Hoch',
            'categorie_matos' => 'Halbseil'
         ],
         'avis_expert' => [
            'profil_type' => 'Mehrseillängen / Alpinismus',
            'note_sur_10' => 9,
            'les_plus' => 'Niedriger Fangstoß, Sicherheit bei Schnitt',
            'les_moins' => 'Handling zweier Stränge (Salat)'
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
   'texte_avc' => 'Finden Sie alle diese Produkte und vieles mehr auf der offiziellen Website von "Au Vieux Campeur"!',
   'titre' => 'Wusstest du schon?',
   'texte' => 'Die Wahl der Klettermaterialien ist entscheidend für Sicherheit und Leistung. Es ist wichtig, den Zustand der Ausrüstung vor jeder Benutzung zu überprüfen und die Empfehlungen der Hersteller zu befolgen.'
];
