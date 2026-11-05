<?php

// --- LES CHAUSSONS --- //

$rubriqueA = [
    'titre_categorie' => 'Chaussons d\'escalade',
    'intro' => 'Le lien direct entre vous et le rocher. Le choix dépend de votre pratique : confort pour le volume, asymétrie pour la performance.',
    'produits' => [
        [
            'produit' => 'Scarpa Origin VS',
            'image_produit' => '../images/cat3/chaussons/originvs.jpg',
            'lien_achat' => 'https://www.auvieuxcampeur.fr/chaussons-escalade-origin-vs.html',
            'infos_caseC' => [
                'couleurs_dispo' => ['Gris', 'Bleu'],
                'poids_g' => 460,
                'durabilite' => 'Très Élevée',
                'categorie_matos' => 'Chaussons'
            ],
            'avis_expert' => [
                'profil_type' => 'Débutant / Falaise',
                'note_sur_10' => 7,
                'les_plus' => 'Solidité à toute épreuve, Confort immédiat',
                'les_moins' => 'Manque de sensations (semelle épaisse)'
            ]
        ],
        [
            'produit' => 'Scarpa Vapor V',
            'image_produit' => '../images/cat3/chaussons/vaporv.jpg',
            'lien_achat' => 'https://www.auvieuxcampeur.fr/chaussons-escalade-vapor-v.html',
            'infos_caseC' => [
                'couleurs_dispo' => ['Jaune / Bleu', 'Rouge / Noir'],
                'poids_g' => 420,
                'durabilite' => 'Moyenne',
                'categorie_matos' => 'Chaussons'
            ],
            'avis_expert' => [
                'profil_type' => 'Intermédiaire / Confirmé',
                'note_sur_10' => 9,
                'les_plus' => 'Excellente carre, Talon puissant',
                'les_moins' => 'Rigide au début'
            ]
        ],
        [
            'produit' => 'La Sportiva Solution Comp',
            'image_produit' => '../images/cat3/chaussons/solutioncomp.jpg',
            'lien_achat' => 'https://www.auvieuxcampeur.fr/chaussons-d-escalade-solution-comp.html',
            'infos_caseC' => [
                'couleurs_dispo' => ['Jaune', 'Noir'],
                'poids_g' => 480,
                'durabilite' => 'Faible',
                'categorie_matos' => 'Chaussons'
            ],
            'avis_expert' => [
                'profil_type' => 'Expert / Bloqueur',
                'note_sur_10' => 9,
                'les_plus' => 'Talon ultra précis, Contre-pointes',
                'les_moins' => 'Douloureux, Usure rapide'
            ]
        ]
    ]
];

// --- BAUDRIERS --- //

$rubriqueB = [
    'titre_categorie' => 'Harnais & Baudriers',
    'intro' => 'Votre sécurité et votre confort en suspension. Vérifiez toujours le nombre de porte-matériels.',
    'produits' => [
        [
            'produit' => 'Black Diamond Momentum',
            'image_produit' => '../images/cat3/baudriers/momentum.jpg',
            'lien_achat' => 'https://www.auvieuxcampeur.fr/baudrier-momentum.html',
            'infos_caseC' => [
                'couleurs_dispo' => ['Anthracite', 'Bleu Roi'],
                'poids_g' => 302,
                'durabilite' => 'Élevée',
                'categorie_matos' => 'Baudrier'
            ],
            'avis_expert' => [
                'profil_type' => 'Polyvalent / Club',
                'note_sur_10' => 8,
                'les_plus' => 'Réglage facile, Robuste',
                'les_moins' => 'Encombrant dans le sac'
            ]
        ],
        [
            'produit' => 'Petzl Sitta',
            'image_produit' => '../images/cat3/baudriers/sitta.jpg',
            'lien_achat' => 'https://www.auvieuxcampeur.fr/baudrier-sitta.html',
            'infos_caseC' => [
                'couleurs_dispo' => ['Orange', 'Blanc'],
                'poids_g' => 270,
                'durabilite' => 'Moyenne',
                'categorie_matos' => 'Baudrier'
            ],
            'avis_expert' => [
                'profil_type' => 'Alpiniste / Performance',
                'note_sur_10' => 9,
                'les_plus' => 'Compacité extrême, Technologie Wireframe',
                'les_moins' => 'Prix élitiste, Pas de mousse'
            ]
        ]
    ]
];

// --- ASSURAGE --- //
$rubriqueC = [
    'titre_categorie' => 'Systèmes d\'Assurage',
    'intro' => 'Tube classique ou freinage assisté ? Le choix se fait selon votre expérience.',
    'produits' => [
        [
            'produit' => 'Petzl Grigri',
            'image_produit' => '../images/cat3/assurage/grigri.jpg',
            'lien_achat' => 'https://www.auvieuxcampeur.fr/assureur-grigri.html',
            'infos_caseC' => [
                'couleurs_dispo' => ['Gris', 'Rouge', 'Bleu'],
                'poids_g' => 175,
                'durabilite' => 'Indestructible',
                'categorie_matos' => 'Assurage (Assisté)'
            ],
            'avis_expert' => [
                'profil_type' => 'Sportif / Salle',
                'note_sur_10' => 10,
                'les_plus' => 'Sécurité blocage assisté',
                'les_moins' => 'Lourd, Ne permet pas le rappel'
            ]
        ],
        [
            'produit' => 'Black Diamond ATC',
            'image_produit' => '../images/cat3/assurage/atc.jpg',
            'lien_achat' => 'https://www.auvieuxcampeur.fr/assureur-atc-alpine-guide.html',
            'infos_caseC' => [
                'couleurs_dispo' => ['Vert'],
                'poids_g' => 80,
                'durabilite' => 'Élevée',
                'categorie_matos' => 'Assurage (Tube)'
            ],
            'avis_expert' => [
                'profil_type' => 'Grande Voie / Rappel',
                'note_sur_10' => 8,
                'les_plus' => 'Léger, Fiable, Rappel possible',
                'les_moins' => 'Ne bloque pas tout seul'
            ]
        ]
    ]
];

// --- CORDES --- //
$rubriqueD = [
    'titre_categorie' => 'Cordes',
    'intro' => 'Le moteur de votre sécurité. Simple (1 brin) pour la couenne, ou Double (2 brins) pour la grande voie.',
    'produits' => [
        [
            'produit' => 'Mammut Crag Classic 9.8mm',
            'image_produit' => '../images/cat3/cordes/mammut-crag.jpg',
            'lien_achat' => 'https://www.auvieuxcampeur.fr/corde-crag-classic-9-8.html',
            'infos_caseC' => [
                'couleurs_dispo' => ['Orange', 'Bleu'],
                'poids_g' => 3200,
                'durabilite' => 'Très Élevée',
                'categorie_matos' => 'Corde à Simple'
            ],
            'avis_expert' => [
                'profil_type' => 'Salle & Falaise Sportive',
                'note_sur_10' => 8,
                'les_plus' => 'Robustesse incroyable, Prix',
                'les_moins' => 'Lourde pour l\'approche, Diamètre épais'
            ]
        ],
        [
            'produit' => 'Petzl Volta 9.2mm',
            'image_produit' => '../images/cat3/cordes/volta.jpg',
            'lien_achat' => 'https://www.auvieuxcampeur.fr/o9-2-volta-dry-corde-poupee.html',
            'infos_caseC' => [
                'couleurs_dispo' => ['Gris', 'Orange'],
                'poids_g' => 2750,
                'durabilite' => 'Moyenne',
                'categorie_matos' => 'Corde Triple Norme'
            ],
            'avis_expert' => [
                'profil_type' => 'Performance / Expert',
                'note_sur_10' => 9,
                'les_plus' => 'Fluidité extrême, Légèreté, Polyvalence',
                'les_moins' => 'File vite dans l\'assureur (Attention !)'
            ]
        ],
        [
            'produit' => 'Beal Cobra II 8.6mm',
            'image_produit' => '../images/cat3/cordes/cobra.jpg',
            'lien_achat' => 'https://www.auvieuxcampeur.fr/corde-escalade-cobra-ii-unicore-dry-cover-8-6.html',
            'infos_caseC' => [
                'couleurs_dispo' => ['Bleu', 'Fuchsia'],
                'poids_g' => 2880,
                'durabilite' => 'Élevée',
                'categorie_matos' => 'Corde à Double'
            ],
            'avis_expert' => [
                'profil_type' => 'Grande Voie / Alpinisme',
                'note_sur_10' => 9,
                'les_plus' => 'Force de choc basse, Sécurité coupure',
                'les_moins' => 'Gestion des deux brins (mêlés)'
            ]
        ]
    ]
];

$categorieC = [
    'chaussons' => $rubriqueA,
    'baudriers' => $rubriqueB,
    'assurage'  => $rubriqueC,
    'cordes'    => $rubriqueD,
];

// --- INFO FLASH --- //

$info_flash = [
    'texte_avc' => 'Retrouvez tous ces produits et bien plus encore sur le site officiel du Vieux Campeur !',
    'titre' => 'Le Saviez-Vous ?',
    'texte' => 'Le choix du matériel d\'escalade est crucial pour la sécurité et la performance. Il est important de toujours vérifier l\'état de son équipement avant chaque utilisation et de suivre les recommandations des fabricants.'
];
