<?php
session_start();

/* =========================================================
   DOUAE KARMOUN - PORTFOLIO
   Single PHP File
   ========================================================= */

/* =========================
   CONFIGURATION
   ========================= */
$config = [
    'name'      => 'DOUAE KARMOUN',
    'role'      => 'Stagiaire en développement web',
    'email'     => 'karmoundouae2007@gmail.com',
    'phone'     => '+212 6 98 65 80 64',
    'country'   => 'Morocco',
    'github'    => 'https://github.com/',
    'linkedin'  => 'https://www.linkedin.com/',
    'instagram' => 'https://www.instagram.com/km_duae?stkn=ZGd4N3Y1ZDJ4amZn',
];

/* =========================
   SECURITY HELPER
   ========================= */
function e($value): string
{
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

/* =========================
   CONTACT FORM
   ========================= */
$formErrors = [];
$formSuccess = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {

    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '' || mb_strlen($name) < 2) {
        $formErrors[] = "Veuillez entrer un nom valide.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $formErrors[] = "Veuillez entrer une adresse email valide.";
    }

    if ($subject === '' || mb_strlen($subject) < 3) {
        $formErrors[] = "Veuillez entrer un sujet.";
    }

    if ($message === '' || mb_strlen($message) < 10) {
        $formErrors[] = "Le message doit contenir au moins 10 caractères.";
    }

    if (empty($formErrors)) {

        /*
         * Le formulaire est sécurisé côté serveur.
         * Pour un vrai envoi email sur serveur configuré :
         *
         * $headers = "From: " . $email . "\r\n";
         * $headers .= "Reply-To: " . $email . "\r\n";
         * $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
         * mail($config['email'], $subject, $message, $headers);
         */

        $formSuccess = "Merci ! Votre message a bien été validé.";
    }
}

/* =========================
   MODULES + ATELIERS
   Minimum 2 ateliers par module
   ========================= */
$modules = [

    [
        'id' => 'M201',
        'title' => "Préparation d'un projet web",
        'icon' => 'fa-lightbulb',
        'description' => "Analyse, préparation et organisation d'un projet web avant son développement.",
        'topics' => [
            'Analyse des besoins',
            'Cahier des charges',
            'Conception',
            'Organisation d’un projet web',
            'Ateliers / projets scolaires'
        ],
        'projects' => [

            [
                'atelier' => 'Atelier 1',
                'name' => 'Agence immobilière',
                'description' => "Création de la préparation d'un site web pour une agence immobilière moderne.",
                'objectives' => [
                    'Analyser les besoins du client',
                    'Identifier les utilisateurs',
                    'Préparer les fonctionnalités',
                    'Organiser les différentes étapes du projet'
                ],
                'technologies' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL'],
                'skills' => ['Analyse', 'Organisation', 'Conception', 'Gestion de projet'],
                'image' => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=900&q=80',
                'github' => '#',
                'link' => '#'
            ],

            [
                'atelier' => 'Atelier 2',
                'name' => 'Cahier des charges - Boutique web',
                'description' => "Préparation d'un cahier des charges pour une boutique en ligne.",
                'objectives' => [
                    'Définir les objectifs du projet',
                    'Identifier les fonctionnalités',
                    'Définir les contraintes',
                    'Planifier les étapes du développement'
                ],
                'technologies' => ['Analyse', 'UML', 'Cahier des charges'],
                'skills' => ['Analyse des besoins', 'Planification', 'Documentation'],
                'image' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=900&q=80',
                'github' => '#',
                'link' => '#'
            ]

        ]
    ],

    [
        'id' => 'M202',
        'title' => 'Approche agile',
        'icon' => 'fa-people-group',
        'description' => "Découverte des méthodes agiles et du travail collaboratif dans les projets web.",
        'topics' => [
            'Méthodes agiles',
            'Travail en équipe',
            'Scrum',
            'Gestion de projet',
            'Ateliers / projets scolaires'
        ],
        'projects' => [

            [
                'atelier' => 'Atelier 1',
                'name' => 'Organisation Scrum',
                'description' => "Mise en place d'une organisation Scrum pour gérer un projet web en équipe.",
                'objectives' => [
                    'Comprendre Scrum',
                    'Créer un backlog',
                    'Organiser les tâches',
                    'Répartir le travail entre les membres'
                ],
                'technologies' => ['Scrum', 'Trello', 'Git'],
                'skills' => ['Travail en équipe', 'Organisation', 'Communication'],
                'image' => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=900&q=80',
                'github' => '#',
                'link' => '#'
            ],

            [
                'atelier' => 'Atelier 2',
                'name' => 'Gestion d’un projet en équipe',
                'description' => "Simulation d'un projet web avec répartition des tâches et suivi de l'avancement.",
                'objectives' => [
                    'Créer les tâches du projet',
                    'Attribuer les responsabilités',
                    'Suivre l’avancement',
                    'Présenter les résultats'
                ],
                'technologies' => ['Scrum', 'Trello', 'GitHub'],
                'skills' => ['Collaboration', 'Gestion de projet', 'Communication'],
                'image' => 'https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=900&q=80',
                'github' => '#',
                'link' => '#'
            ]

        ]
    ],

    [
        'id' => 'M203',
        'title' => 'Gestion des données',
        'icon' => 'fa-database',
        'description' => "Conception, organisation et manipulation des bases de données.",
        'topics' => [
            'Conception de bases de données',
            'Modélisation',
            'SQL',
            'MySQL',
            'Manipulation des données',
            'Ateliers / projets scolaires'
        ],
        'projects' => [

            [
                'atelier' => 'Atelier 1',
                'name' => 'Gestion des employés',
                'description' => "Création d'une base de données permettant de gérer les employés d'une entreprise.",
                'objectives' => [
                    'Créer les tables',
                    'Définir les relations',
                    'Insérer les données',
                    'Effectuer des requêtes SQL'
                ],
                'technologies' => ['MySQL', 'SQL', 'PHPMyAdmin'],
                'skills' => ['SQL', 'Modélisation', 'Base de données'],
                'image' => 'https://images.unsplash.com/photo-1544383835-bda2bc66a55d?auto=format&fit=crop&w=900&q=80',
                'github' => '#',
                'link' => '#'
            ],

            [
                'atelier' => 'Atelier 2',
                'name' => 'Gestion des tâches',
                'description' => "Base de données permettant de gérer des tâches, employés, durées et coûts.",
                'objectives' => [
                    'Créer les tables',
                    'Ajouter des contraintes',
                    'Utiliser les requêtes SELECT',
                    'Modifier et supprimer les données'
                ],
                'technologies' => ['MySQL', 'SQL', 'PHP'],
                'skills' => ['CRUD', 'SQL', 'Relations', 'Contraintes'],
                'image' => 'https://images.unsplash.com/photo-1454165205744-3b78555e5572?auto=format&fit=crop&w=900&q=80',
                'github' => '#',
                'link' => '#'
            ]

        ]
    ],

    [
        'id' => 'M204',
        'title' => 'Développement Front-End',
        'icon' => 'fa-code',
        'description' => "Création d'interfaces web modernes, interactives et responsive.",
        'topics' => [
            'HTML',
            'CSS',
            'JavaScript',
            'Interfaces web modernes',
            'Responsive Design',
            'Interactivité',
            'Ateliers / projets scolaires'
        ],
        'projects' => [

            [
                'atelier' => 'Atelier 1',
                'name' => 'Galerie photos responsive',
                'description' => "Création d'une galerie d'images moderne et responsive.",
                'objectives' => [
                    'Créer une interface responsive',
                    'Utiliser Bootstrap',
                    'Organiser les images',
                    'Adapter le design au mobile'
                ],
                'technologies' => ['HTML', 'CSS', 'Bootstrap 5'],
                'skills' => ['Responsive Design', 'UI Design', 'HTML/CSS'],
                'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=900&q=80',
                'github' => '#',
                'link' => '#'
            ],

            [
                'atelier' => 'Atelier 2',
                'name' => 'Application Calendar',
                'description' => "Création d'une interface de calendrier moderne pour organiser les événements.",
                'objectives' => [
                    'Créer une grille calendrier',
                    'Manipuler le DOM',
                    'Ajouter des interactions',
                    'Créer une interface mobile'
                ],
                'technologies' => ['HTML', 'CSS', 'JavaScript'],
                'skills' => ['DOM', 'JavaScript', 'Responsive Design'],
                'image' => 'https://images.unsplash.com/photo-1506784983877-45594efa4cbe?auto=format&fit=crop&w=900&q=80',
                'github' => '#',
                'link' => '#'
            ]

        ]
    ],

    [
        'id' => 'M205',
        'title' => 'Développement Back-End',
        'icon' => 'fa-server',
        'description' => "Développement de fonctionnalités serveur avec PHP et bases de données.",
        'topics' => [
            'PHP',
            'Serveur',
            'Logique métier',
            'Connexion à une base de données',
            'API',
            'Fonctionnalités d’une application web',
            'Ateliers / projets scolaires'
        ],
        'projects' => [

            [
                'atelier' => 'Atelier 1',
                'name' => 'CRUD Gestion des stagiaires',
                'description' => "Application PHP permettant d'ajouter, modifier, afficher et supprimer des stagiaires.",
                'objectives' => [
                    'Créer un formulaire',
                    'Connecter PHP à MySQL',
                    'Créer les opérations CRUD',
                    'Afficher les données dynamiquement'
                ],
                'technologies' => ['PHP', 'MySQL', 'HTML', 'CSS'],
                'skills' => ['PHP', 'CRUD', 'MySQL', 'Backend'],
                'image' => 'https://images.unsplash.com/photo-1515879218367-8466d910aaa4?auto=format&fit=crop&w=900&q=80',
                'github' => '#',
                'link' => '#'
            ],

            [
                'atelier' => 'Atelier 2',
                'name' => 'Application de gestion',
                'description' => "Développement d'une application web avec authentification et gestion des données.",
                'objectives' => [
                    'Créer une connexion utilisateur',
                    'Gérer les sessions',
                    'Sécuriser les formulaires',
                    'Manipuler une base de données'
                ],
                'technologies' => ['PHP', 'MySQL', 'PDO', 'JavaScript'],
                'skills' => ['Backend', 'Sessions', 'Sécurité', 'PDO'],
                'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=900&q=80',
                'github' => '#',
                'link' => '#'
            ]

        ]
    ],

    [
        'id' => 'M206',
        'title' => 'Création d’une application Cloud Native',
        'icon' => 'fa-cloud',
        'description' => "Découverte des technologies Cloud et des applications web modernes.",
        'topics' => [
            'Technologies Cloud',
            'Applications Cloud Native',
            'Déploiement',
            'Services web',
            'Outils modernes du développement web',
            'Ateliers / projets scolaires'
        ],
        'projects' => [

            [
                'atelier' => 'Atelier 1',
                'name' => 'Déploiement d’un site web',
                'description' => "Préparation et déploiement d'un site web sur une plateforme Cloud.",
                'objectives' => [
                    'Préparer une application',
                    'Découvrir le Cloud',
                    'Déployer un site',
                    'Tester l’application en ligne'
                ],
                'technologies' => ['Cloud', 'Git', 'GitHub'],
                'skills' => ['Déploiement', 'Cloud', 'Git'],
                'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=900&q=80',
                'github' => '#',
                'link' => '#'
            ],

            [
                'atelier' => 'Atelier 2',
                'name' => 'Application Cloud Native',
                'description' => "Conception d'une petite application web pensée pour un environnement Cloud.",
                'objectives' => [
                    'Comprendre le fonctionnement Cloud',
                    'Structurer une application',
                    'Utiliser des services web',
                    'Préparer le déploiement'
                ],
                'technologies' => ['Cloud', 'Web Services', 'GitHub'],
                'skills' => ['Cloud Native', 'Déploiement', 'Architecture web'],
                'image' => 'https://images.unsplash.com/photo-1544197150-b99a580bb7a8?auto=format&fit=crop&w=900&q=80',
                'github' => '#',
                'link' => '#'
            ]

        ]
    ],

    [
        'id' => 'M207',
        'title' => 'Projet de synthèse',
        'icon' => 'fa-rocket',
        'description' => "Mise en pratique de toutes les compétences dans un projet web complet.",
        'topics' => [
            'Projet web complet',
            'Analyse',
            'Conception',
            'Front-End',
            'Back-End',
            'Base de données',
            'Déploiement',
            'Présentation du projet final'
        ],
        'projects' => [

            [
                'atelier' => 'Atelier 1',
                'name' => 'Application web complète',
                'description' => "Réalisation d'une application web intégrant Front-End, Back-End et base de données.",
                'objectives' => [
                    'Analyser le besoin',
                    'Concevoir l’interface',
                    'Développer le Front-End',
                    'Développer le Back-End',
                    'Connecter la base de données'
                ],
                'technologies' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL'],
                'skills' => ['Full Stack', 'Gestion de projet', 'Base de données'],
                'image' => 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=900&q=80',
                'github' => '#',
                'link' => '#'
            ],

            [
                'atelier' => 'Atelier 2',
                'name' => 'Portfolio professionnel',
                'description' => "Création d'un portfolio personnel moderne pour présenter les compétences et les projets.",
                'objectives' => [
                    'Créer une identité visuelle',
                    'Présenter les compétences',
                    'Présenter les projets',
                    'Créer un site responsive'
                ],
                'technologies' => ['PHP', 'HTML', 'CSS', 'JavaScript'],
                'skills' => ['Portfolio', 'UI/UX', 'Responsive', 'Animation'],
                'image' => 'https://images.unsplash.com/photo-1547658719-da2b51169166?auto=format&fit=crop&w=900&q=80',
                'github' => '#',
                'link' => '#'
            ]

        ]
    ],

    [
        'id' => 'M208',
        'title' => 'Communication professionnelle',
        'icon' => 'fa-comments',
        'description' => "Développement des compétences de communication et préparation à l'insertion professionnelle.",
        'topics' => [
            'Communication professionnelle',
            'Présentation',
            'Travail en équipe',
            'Préparation à l’insertion professionnelle',
            'CV',
            'Entretien',
            'Ateliers / projets scolaires'
        ],
        'projects' => [

            [
                'atelier' => 'Atelier 1',
                'name' => 'Présentation professionnelle',
                'description' => "Préparation et présentation orale d'un projet web devant un groupe.",
                'objectives' => [
                    'Préparer une présentation',
                    'Présenter un projet clairement',
                    'Améliorer la communication orale',
                    'Répondre aux questions'
                ],
                'technologies' => ['PowerPoint', 'Canva'],
                'skills' => ['Communication', 'Présentation', 'Confiance en soi'],
                'image' => 'https://images.unsplash.com/photo-1475721027785-f74eccf877e2?auto=format&fit=crop&w=900&q=80',
                'github' => '#',
                'link' => '#'
            ],

            [
                'atelier' => 'Atelier 2',
                'name' => 'CV et entretien professionnel',
                'description' => "Création d'un CV professionnel et préparation à un entretien d'embauche.",
                'objectives' => [
                    'Créer un CV moderne',
                    'Présenter ses compétences',
                    'Préparer les questions d’entretien',
                    'Améliorer son expression professionnelle'
                ],
                'technologies' => ['Canva', 'Word'],
                'skills' => ['CV', 'Entretien', 'Communication professionnelle'],
                'image' => 'https://images.unsplash.com/photo-1521791055366-0d553872125f?auto=format&fit=crop&w=900&q=80',
                'github' => '#',
                'link' => '#'
            ]

        ]
    ]
];

/* =========================
   FLATTEN PROJECTS
   ========================= */
$allProjects = [];

foreach ($modules as $module) {
    foreach ($module['projects'] as $project) {
        $project['module'] = $module['id'];
        $project['moduleTitle'] = $module['title'];
        $allProjects[] = $project;
    }
}

$projectJson = json_encode(
    $allProjects,
    JSON_UNESCAPED_UNICODE |
    JSON_HEX_TAG |
    JSON_HEX_APOS |
    JSON_HEX_QUOT |
    JSON_HEX_AMP
);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= e($config['name']) ?> | Portfolio</title>

    <meta name="description" content="Portfolio professionnel de DOUAE KARMOUN - Stagiaire en développement web">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        /* =========================================================
           ROOT
           ========================================================= */

        :root {
            --pink: #d88b9b;
            --dark-pink: #b9677b;
            --light-pink: #f8e5e8;
            --soft-pink: #fff0f3;

            --purple: #b99be7;
            --light-purple: #eee7fa;

            --cream: #fffaf7;
            --beige: #f3e5dc;

            --white: #ffffff;
            --text: #4b3a3d;
            --text-light: #806d72;

            --border: rgba(216, 139, 155, .20);

            --shadow:
                0 15px 45px rgba(111, 75, 84, .10);

            --shadow-hover:
                0 25px 70px rgba(111, 75, 84, .18);

            --gradient:
                linear-gradient(135deg, #d88b9b, #b99be7);

            --gradient-soft:
                linear-gradient(135deg, #fff0f3, #eee7fa);

            --radius: 24px;

            --transition: .35s cubic-bezier(.4, 0, .2, 1);
        }

        [data-theme="dark"] {
            --cream: #17141a;
            --white: #211c25;
            --text: #f8eef1;
            --text-light: #c9b8be;

            --light-pink: #36252c;
            --soft-pink: #2b2027;
            --light-purple: #2d2639;
            --beige: #30272b;

            --border: rgba(255, 255, 255, .10);

            --shadow:
                0 15px 45px rgba(0, 0, 0, .30);

            --shadow-hover:
                0 25px 70px rgba(0, 0, 0, .45);
        }

        /* =========================================================
           RESET
           ========================================================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 90px;
        }

        body {
            font-family: "DM Sans", sans-serif;
            background: var(--cream);
            color: var(--text);
            line-height: 1.7;
            overflow-x: hidden;
            transition: background .3s ease, color .3s ease;
        }

        body.loaded {
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button,
        input,
        textarea {
            font: inherit;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .container {
            width: min(1180px, calc(100% - 40px));
            margin: auto;
        }

        /* =========================================================
           LOADER
           ========================================================= */

        #loader {
            position: fixed;
            inset: 0;
            z-index: 99999;

            display: flex;
            align-items: center;
            justify-content: center;

            background:
                radial-gradient(circle at 30% 30%, rgba(216,139,155,.35), transparent 35%),
                radial-gradient(circle at 70% 70%, rgba(185,155,231,.35), transparent 35%),
                var(--cream);

            transition:
                opacity .8s ease,
                visibility .8s ease;
        }

        #loader.hide {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        .loader-content {
            text-align: center;
        }

        .loader-logo {
            width: 90px;
            height: 90px;
            margin: auto;

            display: grid;
            place-items: center;

            border-radius: 50%;

            background: var(--gradient);

            color: white;

            font-family: "Playfair Display", serif;
            font-size: 34px;
            font-weight: 700;

            box-shadow:
                0 0 0 10px rgba(216,139,155,.08),
                0 0 0 20px rgba(185,155,231,.06);

            animation:
                loaderPulse 1.5s infinite ease-in-out;
        }

        .loader-text {
            margin-top: 25px;
            font-weight: 600;
            letter-spacing: 4px;
            font-size: 13px;
        }

        .loader-bar {
            width: 180px;
            height: 4px;
            margin: 20px auto 0;
            overflow: hidden;
            border-radius: 10px;
            background: var(--light-pink);
        }

        .loader-bar span {
            display: block;
            width: 50%;
            height: 100%;
            background: var(--gradient);
            animation: loaderBar 1.2s infinite ease-in-out;
        }

        @keyframes loaderPulse {
            0%,100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.08);
            }
        }

        @keyframes loaderBar {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(300%);
            }
        }

        /* =========================================================
           BACKGROUND BLOBS
           ========================================================= */

        .background-decoration {
            position: fixed;
            inset: 0;
            overflow: hidden;
            pointer-events: none;
            z-index: -2;
        }

        .blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: .22;
            animation: blobMove 12s ease-in-out infinite alternate;
        }

        .blob-1 {
            width: 400px;
            height: 400px;
            background: #e9a4b3;
            top: 0;
            left: -150px;
        }

        .blob-2 {
            width: 350px;
            height: 350px;
            background: #c9afea;
            right: -120px;
            top: 35%;
            animation-delay: -4s;
        }

        .blob-3 {
            width: 300px;
            height: 300px;
            background: #f4c7d0;
            left: 30%;
            bottom: -150px;
            animation-delay: -7s;
        }

        @keyframes blobMove {
            from {
                transform: translate(0, 0) scale(1);
            }

            to {
                transform: translate(60px, -50px) scale(1.15);
            }
        }

        /* =========================================================
           PARTICLES
           ========================================================= */

        #particles {
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: -1;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--pink);
            opacity: .3;
            animation: particleFloat linear infinite;
        }

        @keyframes particleFloat {
            from {
                transform: translateY(110vh) rotate(0);
            }

            to {
                transform: translateY(-20vh) rotate(360deg);
            }
        }

        /* =========================================================
           NAVBAR
           ========================================================= */

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;

            padding: 20px 0;

            transition:
                padding .3s ease,
                background .3s ease,
                box-shadow .3s ease;
        }

        .navbar.scrolled {
            padding: 12px 0;

            background: rgba(255, 250, 247, .80);

            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);

            box-shadow: 0 10px 30px rgba(70, 40, 50, .08);
        }

        [data-theme="dark"] .navbar.scrolled {
            background: rgba(23, 20, 26, .80);
        }

        .nav-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;

            font-family: "Playfair Display", serif;
            font-size: 22px;
            font-weight: 700;
        }

        .logo-mark {
            width: 43px;
            height: 43px;

            display: grid;
            place-items: center;

            border-radius: 14px;

            color: white;
            background: var(--gradient);

            box-shadow: 0 8px 25px rgba(216,139,155,.25);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 8px;
            list-style: none;
        }

        .nav-links a {
            position: relative;
            padding: 9px 13px;

            font-size: 14px;
            font-weight: 600;

            color: var(--text-light);

            transition: var(--transition);
        }

        .nav-links a::after {
            content: "";
            position: absolute;
            left: 13px;
            right: 13px;
            bottom: 3px;

            height: 2px;

            background: var(--gradient);

            transform: scaleX(0);
            transform-origin: center;

            transition: var(--transition);
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--dark-pink);
        }

        .nav-links a:hover::after,
        .nav-links a.active::after {
            transform: scaleX(1);
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .theme-btn,
        .menu-btn {
            width: 42px;
            height: 42px;

            border: 1px solid var(--border);
            border-radius: 50%;

            display: grid;
            place-items: center;

            background: var(--white);
            color: var(--text);

            cursor: pointer;

            transition: var(--transition);
        }

        .theme-btn:hover,
        .menu-btn:hover {
            transform: translateY(-3px);
            color: white;
            background: var(--gradient);
            border-color: transparent;
        }

        .menu-btn {
            display: none;
        }

        /* =========================================================
           HERO
           ========================================================= */

        .hero {
            min-height: 100vh;
            padding: 150px 0 90px;

            display: flex;
            align-items: center;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.05fr .95fr;
            align-items: center;
            gap: 70px;
        }

        .hero-tag {
            display: inline-flex;
            align-items: center;
            gap: 9px;

            padding: 9px 16px;

            border: 1px solid var(--border);
            border-radius: 100px;

            background: rgba(255,255,255,.55);

            color: var(--dark-pink);

            font-size: 13px;
            font-weight: 700;
        }

        [data-theme="dark"] .hero-tag {
            background: rgba(255,255,255,.05);
        }

        .hero-tag span {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #78d6a3;
            box-shadow: 0 0 0 5px rgba(120,214,163,.15);
        }

        .hero h1 {
            margin: 22px 0 15px;

            font-family: "Playfair Display", serif;
            font-size: clamp(48px, 7vw, 82px);
            line-height: 1.02;
            letter-spacing: -3px;
        }

        .gradient-text {
            background: var(--gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .hero-role {
            min-height: 35px;

            font-size: 20px;
            font-weight: 600;

            color: var(--dark-pink);
        }

        .typing-cursor {
            animation: blink .8s infinite;
        }

        @keyframes blink {
            50% {
                opacity: 0;
            }
        }

        .hero-description {
            max-width: 620px;
            margin: 20px 0 30px;

            color: var(--text-light);
            font-size: 17px;
        }

        .hero-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;

            min-height: 52px;
            padding: 0 24px;

            border: none;
            border-radius: 14px;

            font-size: 14px;
            font-weight: 700;

            cursor: pointer;

            transition: var(--transition);
        }

        .btn-primary {
            color: white;
            background: var(--gradient);
            box-shadow: 0 15px 35px rgba(216,139,155,.25);
        }

        .btn-primary:hover {
            transform: translateY(-4px) scale(1.02);
            box-shadow: 0 20px 45px rgba(216,139,155,.35);
        }

        .btn-outline {
            border: 1px solid var(--border);
            color: var(--text);
            background: var(--white);
        }

        .btn-outline:hover {
            transform: translateY(-4px);
            color: var(--dark-pink);
            border-color: var(--pink);
        }

        /* =========================================================
           HERO ILLUSTRATION
           ========================================================= */

        .hero-visual {
            position: relative;
            min-height: 500px;

            display: grid;
            place-items: center;
        }

        .hero-orbit {
            position: absolute;

            width: 390px;
            height: 390px;

            border: 1px solid rgba(216,139,155,.22);
            border-radius: 50%;

            animation: orbitRotate 15s linear infinite;
        }

        .hero-orbit::before,
        .hero-orbit::after {
            content: "";
            position: absolute;

            width: 14px;
            height: 14px;

            border-radius: 50%;

            background: var(--gradient);
        }

        .hero-orbit::before {
            top: 30px;
            left: 70px;
        }

        .hero-orbit::after {
            bottom: 50px;
            right: 35px;
        }

        @keyframes orbitRotate {
            to {
                transform: rotate(360deg);
            }
        }

        .developer-card {
            position: relative;
            z-index: 2;

            width: min(400px, 85vw);
            min-height: 350px;

            padding: 30px;

            border: 1px solid rgba(255,255,255,.6);
            border-radius: 35px;

            background:
                linear-gradient(
                    145deg,
                    rgba(255,255,255,.85),
                    rgba(248,229,232,.65)
                );

            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);

            box-shadow: var(--shadow-hover);

            animation: floatingCard 5s ease-in-out infinite;
        }

        [data-theme="dark"] .developer-card {
            background:
                linear-gradient(
                    145deg,
                    rgba(255,255,255,.08),
                    rgba(216,139,155,.08)
                );
        }

        @keyframes floatingCard {
            0%,100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-15px) rotate(1deg);
            }
        }

        .developer-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .code-dots {
            display: flex;
            gap: 6px;
        }

        .code-dots span {
            width: 9px;
            height: 9px;
            border-radius: 50%;
            background: var(--pink);
        }

        .code-dots span:nth-child(2) {
            background: var(--purple);
        }

        .code-dots span:nth-child(3) {
            background: #9fd9b5;
        }

        .code-window {
            margin-top: 30px;
            padding: 24px;

            border-radius: 20px;

            background: rgba(255,255,255,.55);
            border: 1px solid var(--border);

            font-family: monospace;
            font-size: 14px;
        }

        [data-theme="dark"] .code-window {
            background: rgba(0,0,0,.15);
        }

        .code-line {
            margin: 8px 0;
        }

        .code-pink {
            color: var(--dark-pink);
        }

        .code-purple {
            color: #9271c7;
        }

        .code-green {
            color: #5d9f7c;
        }

        .floating-icon {
            position: absolute;

            width: 58px;
            height: 58px;

            display: grid;
            place-items: center;

            border-radius: 18px;

            background: var(--white);
            color: var(--dark-pink);

            box-shadow: var(--shadow);

            animation: iconFloat 4s ease-in-out infinite;
        }

        .floating-icon.one {
            top: 70px;
            left: 30px;
        }

        .floating-icon.two {
            right: 25px;
            top: 120px;
            color: #9071c5;
            animation-delay: -1s;
        }

        .floating-icon.three {
            left: 65px;
            bottom: 70px;
            color: #8fbd9d;
            animation-delay: -2s;
        }

        @keyframes iconFloat {
            0%,100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-12px);
            }
        }

        /* =========================================================
           SECTIONS
           ========================================================= */

        section {
            padding: 110px 0;
        }

        .section-header {
            max-width: 720px;
            margin: 0 auto 55px;
            text-align: center;
        }

        .section-label {
            display: inline-block;

            margin-bottom: 12px;

            color: var(--dark-pink);

            font-size: 12px;
            font-weight: 800;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .section-title {
            font-family: "Playfair Display", serif;
            font-size: clamp(35px, 5vw, 52px);
            line-height: 1.1;
        }

        .section-description {
            margin-top: 15px;
            color: var(--text-light);
        }

        /* =========================================================
           REVEAL ANIMATIONS
           ========================================================= */

        .reveal {
            opacity: 0;
            transform: translateY(35px);
            transition:
                opacity .8s ease,
                transform .8s ease;
        }

        .reveal.show {
            opacity: 1;
            transform: translateY(0);
        }

        .slide-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: .8s ease;
        }

        .slide-left.show {
            opacity: 1;
            transform: translateX(0);
        }

        .slide-right {
            opacity: 0;
            transform: translateX(50px);
            transition: .8s ease;
        }

        .slide-right.show {
            opacity: 1;
            transform: translateX(0);
        }

        /* =========================================================
           ABOUT
           ========================================================= */

        .about-grid {
            display: grid;
            grid-template-columns: .85fr 1.15fr;
            gap: 70px;
            align-items: center;
        }

        .profile-card {
            position: relative;

            min-height: 480px;

            display: grid;
            place-items: center;

            border-radius: 35px;

            background: var(--gradient-soft);

            overflow: hidden;
        }

        .profile-card::before {
            content: "";
            position: absolute;

            width: 300px;
            height: 300px;

            border-radius: 50%;

            background: var(--gradient);

            opacity: .18;
            filter: blur(30px);
        }

        .profile-placeholder {
            position: relative;
            z-index: 2;

            width: 230px;
            height: 230px;

            display: grid;
            place-items: center;

            border-radius: 50%;

            color: white;

            font-family: "Playfair Display", serif;
            font-size: 65px;
            font-weight: 700;

            background: var(--gradient);

            border: 10px solid rgba(255,255,255,.7);

            box-shadow: 0 25px 60px rgba(185,103,123,.25);
        }

        .about-content h3 {
            font-family: "Playfair Display", serif;
            font-size: 35px;
            margin-bottom: 15px;
        }

        .about-content > p {
            color: var(--text-light);
            margin-bottom: 25px;
        }

        .about-info {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-bottom: 30px;
        }

        .info-box {
            padding: 18px;

            border: 1px solid var(--border);
            border-radius: 17px;

            background: var(--white);
        }

        .info-box small {
            display: block;
            margin-bottom: 5px;

            color: var(--text-light);
            font-size: 11px;
        }

        .info-box strong {
            font-size: 14px;
        }

        .strengths {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 14px;
        }

        .strength {
            display: flex;
            align-items: center;
            gap: 13px;

            padding: 15px;

            border: 1px solid var(--border);
            border-radius: 15px;

            background: var(--white);

            transition: var(--transition);
        }

        .strength:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow);
        }

        .strength-icon {
            width: 40px;
            height: 40px;

            display: grid;
            place-items: center;

            flex-shrink: 0;

            border-radius: 12px;

            color: var(--dark-pink);
            background: var(--light-pink);
        }

        /* =========================================================
           SKILLS
           ========================================================= */

        .skills-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        .skill-card {
            padding: 28px;

            border: 1px solid var(--border);
            border-radius: var(--radius);

            background: var(--white);

            box-shadow: var(--shadow);

            transition: var(--transition);
        }

        .skill-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-hover);
        }

        .skill-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            margin-bottom: 12px;
        }

        .skill-name {
            display: flex;
            align-items: center;
            gap: 11px;
            font-weight: 700;
        }

        .skill-name i {
            color: var(--dark-pink);
        }

        .skill-percent {
            color: var(--dark-pink);
            font-weight: 700;
        }

        .skill-track {
            width: 100%;
            height: 8px;
            border-radius: 100px;
            background: var(--light-pink);
            overflow: hidden;
        }

        .skill-progress {
            width: 0;
            height: 100%;

            border-radius: inherit;

            background: var(--gradient);

            transition: width 1.5s cubic-bezier(.4,0,.2,1);
        }

        /* =========================================================
           SERVICES
           ========================================================= */

        .services {
            background: var(--gradient-soft);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .service-card {
            padding: 35px 28px;

            border: 1px solid var(--border);
            border-radius: 25px;

            background: var(--white);

            transition: var(--transition);
        }

        .service-card:hover {
            transform: translateY(-9px);
            box-shadow: var(--shadow-hover);
        }

        .service-icon {
            width: 58px;
            height: 58px;

            display: grid;
            place-items: center;

            margin-bottom: 20px;

            border-radius: 18px;

            color: white;
            background: var(--gradient);

            font-size: 20px;
        }

        .service-card h3 {
            margin-bottom: 10px;
            font-family: "Playfair Display", serif;
            font-size: 24px;
        }

        .service-card p {
            color: var(--text-light);
            font-size: 14px;
        }

        /* =========================================================
           MODULES
           ========================================================= */

        .modules-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 28px;
        }

        .module-card {
            position: relative;

            padding: 32px;

            border: 1px solid var(--border);
            border-radius: 28px;

            background: var(--white);

            box-shadow: var(--shadow);

            overflow: hidden;

            transition: var(--transition);
        }

        .module-card::before {
            content: "";

            position: absolute;
            top: 0;
            left: 0;

            width: 100%;
            height: 4px;

            background: var(--gradient);
        }

        .module-card:hover {
            transform: translateY(-7px);
            box-shadow: var(--shadow-hover);
        }

        .module-top {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 20px;
        }

        .module-icon {
            width: 58px;
            height: 58px;

            display: grid;
            place-items: center;

            flex-shrink: 0;

            border-radius: 18px;

            background: var(--gradient-soft);
            color: var(--dark-pink);

            font-size: 21px;
        }

        .module-code {
            display: inline-block;

            margin-bottom: 7px;

            padding: 5px 10px;

            border-radius: 8px;

            background: var(--light-pink);
            color: var(--dark-pink);

            font-size: 11px;
            font-weight: 800;
        }

        .module-title {
            font-family: "Playfair Display", serif;
            font-size: 24px;
            line-height: 1.2;
        }

        .module-description {
            margin: 18px 0;

            color: var(--text-light);
            font-size: 14px;
        }

        .topics {
            display: flex;
            flex-wrap: wrap;
            gap: 7px;

            margin-bottom: 25px;
        }

        .topic {
            padding: 6px 10px;

            border-radius: 8px;

            background: var(--cream);

            border: 1px solid var(--border);

            font-size: 11px;
            color: var(--text-light);
        }

        /* =========================
           MODULE WORKSHOPS
           ========================= */

        .module-workshops {
            margin-top: 22px;
            padding-top: 22px;

            border-top: 1px solid var(--border);
        }

        .workshop-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-bottom: 14px;
        }

        .workshop-heading h4 {
            font-size: 14px;
        }

        .workshop-count {
            font-size: 11px;
            font-weight: 700;
            color: var(--dark-pink);
        }

        .workshop-list {
            display: grid;
            gap: 10px;
        }

        .workshop-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;

            padding: 13px;

            border: 1px solid var(--border);
            border-radius: 14px;

            background: var(--cream);

            transition: var(--transition);
        }

        .workshop-item:hover {
            transform: translateX(4px);
            border-color: var(--pink);
        }

        .workshop-info {
            min-width: 0;
        }

        .workshop-label {
            display: block;

            color: var(--dark-pink);

            font-size: 10px;
            font-weight: 800;
            text-transform: uppercase;
        }

        .workshop-name {
            display: block;

            margin-top: 2px;

            font-size: 13px;
            font-weight: 700;

            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .atelier-btn {
            flex-shrink: 0;

            display: inline-flex;
            align-items: center;
            gap: 6px;

            padding: 8px 11px;

            border: none;
            border-radius: 9px;

            color: white;
            background: var(--gradient);

            font-size: 10px;
            font-weight: 700;

            cursor: pointer;

            transition: var(--transition);
        }

        .atelier-btn:hover {
            transform: scale(1.06);
            box-shadow: 0 8px 20px rgba(216,139,155,.25);
        }

        .module-footer {
            margin-top: 22px;

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
        }

        .module-project-count {
            color: var(--text-light);
            font-size: 12px;
        }

        .module-project-btn {
            display: inline-flex;
            align-items: center;
            gap: 7px;

            padding: 11px 15px;

            border-radius: 11px;

            color: var(--dark-pink);
            background: var(--light-pink);

            font-size: 12px;
            font-weight: 700;

            transition: var(--transition);
        }

        .module-project-btn:hover {
            color: white;
            background: var(--gradient);
            transform: translateY(-2px);
        }

        /* =========================================================
           PROJECTS
           ========================================================= */

        .projects-section {
            background: var(--gradient-soft);
        }

        .filters {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 9px;

            margin-bottom: 35px;
        }

        .filter-btn {
            padding: 10px 16px;

            border: 1px solid var(--border);
            border-radius: 100px;

            background: var(--white);
            color: var(--text-light);

            font-size: 12px;
            font-weight: 700;

            cursor: pointer;

            transition: var(--transition);
        }

        .filter-btn:hover,
        .filter-btn.active {
            color: white;
            background: var(--gradient);
            border-color: transparent;
            transform: translateY(-2px);
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .project-card {
            overflow: hidden;

            border: 1px solid var(--border);
            border-radius: 24px;

            background: var(--white);

            box-shadow: var(--shadow);

            transition: var(--transition);
        }

        .project-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
        }

        .project-card.hidden {
            display: none;
        }

        .project-image {
            position: relative;
            height: 210px;
            overflow: hidden;
        }

        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;

            transition: transform .7s ease;
        }

        .project-card:hover .project-image img {
            transform: scale(1.08);
        }

        .project-overlay {
            position: absolute;
            inset: 0;

            display: flex;
            align-items: center;
            justify-content: center;

            background: rgba(75,58,61,.35);

            opacity: 0;

            transition: var(--transition);
        }

        .project-card:hover .project-overlay {
            opacity: 1;
        }

        .project-view {
            width: 50px;
            height: 50px;

            display: grid;
            place-items: center;

            border-radius: 50%;

            color: var(--dark-pink);
            background: white;

            border: none;

            cursor: pointer;

            transition: var(--transition);
        }

        .project-view:hover {
            transform: scale(1.1);
        }

        .project-body {
            padding: 23px;
        }

        .project-module {
            display: inline-block;

            margin-bottom: 9px;

            padding: 5px 9px;

            border-radius: 7px;

            background: var(--light-pink);
            color: var(--dark-pink);

            font-size: 10px;
            font-weight: 800;
        }

        .project-body h3 {
            margin-bottom: 8px;

            font-family: "Playfair Display", serif;
            font-size: 22px;
        }

        .project-body p {
            color: var(--text-light);
            font-size: 13px;

            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .project-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-top: 18px;
        }

        .project-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;

            color: var(--dark-pink);

            font-size: 12px;
            font-weight: 800;
        }

        /* =========================================================
           TIMELINE
           ========================================================= */

        .timeline {
            max-width: 850px;
            margin: auto;

            position: relative;
        }

        .timeline::before {
            content: "";

            position: absolute;

            top: 0;
            bottom: 0;
            left: 50%;

            width: 2px;

            background: var(--light-pink);

            transform: translateX(-50%);
        }

        .timeline-item {
            position: relative;

            width: 50%;

            padding: 0 35px 45px;
        }

        .timeline-item:nth-child(even) {
            margin-left: 50%;
        }

        .timeline-dot {
            position: absolute;

            top: 0;

            width: 17px;
            height: 17px;

            border-radius: 50%;

            background: var(--gradient);

            box-shadow:
                0 0 0 7px var(--soft-pink);
        }

        .timeline-item:nth-child(odd) .timeline-dot {
            right: -8px;
        }

        .timeline-item:nth-child(even) .timeline-dot {
            left: -8px;
        }

        .timeline-card {
            padding: 25px;

            border: 1px solid var(--border);
            border-radius: 20px;

            background: var(--white);

            box-shadow: var(--shadow);
        }

        .timeline-card span {
            font-size: 11px;
            font-weight: 800;
            color: var(--dark-pink);
        }

        .timeline-card h3 {
            margin: 6px 0;
            font-family: "Playfair Display", serif;
            font-size: 21px;
        }

        .timeline-card p {
            color: var(--text-light);
            font-size: 13px;
        }

        /* =========================================================
           CONTACT
           ========================================================= */

        .contact-grid {
            display: grid;
            grid-template-columns: .75fr 1.25fr;
            gap: 35px;
        }

        .contact-info {
            padding: 35px;

            border-radius: 28px;

            color: white;

            background: var(--gradient);

            box-shadow: var(--shadow-hover);
        }

        .contact-info h3 {
            font-family: "Playfair Display", serif;
            font-size: 31px;
            margin-bottom: 12px;
        }

        .contact-info > p {
            color: rgba(255,255,255,.8);
            margin-bottom: 30px;
            font-size: 14px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 14px;

            margin-bottom: 19px;
        }

        .contact-item-icon {
            width: 43px;
            height: 43px;

            display: grid;
            place-items: center;

            border-radius: 12px;

            background: rgba(255,255,255,.15);
        }

        .contact-item small {
            display: block;
            color: rgba(255,255,255,.7);
            font-size: 10px;
        }

        .contact-item strong {
            font-size: 13px;
        }

        .socials {
            display: flex;
            gap: 9px;
            margin-top: 28px;
        }

        .social {
            width: 42px;
            height: 42px;

            display: grid;
            place-items: center;

            border-radius: 12px;

            background: rgba(255,255,255,.15);

            transition: var(--transition);
        }

        .social:hover {
            background: white;
            color: var(--dark-pink);
            transform: translateY(-4px);
        }

        .contact-form-wrapper {
            padding: 35px;

            border: 1px solid var(--border);
            border-radius: 28px;

            background: var(--white);

            box-shadow: var(--shadow);
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 17px;
        }

        .form-group {
            margin-bottom: 17px;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        .form-group label {
            display: block;

            margin-bottom: 7px;

            font-size: 12px;
            font-weight: 700;
        }

        .form-control {
            width: 100%;

            padding: 14px 16px;

            border: 1px solid var(--border);
            border-radius: 13px;

            outline: none;

            background: var(--cream);
            color: var(--text);

            transition: var(--transition);
        }

        .form-control:focus {
            border-color: var(--pink);
            box-shadow: 0 0 0 4px rgba(216,139,155,.10);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .alert {
            padding: 14px 17px;
            margin-bottom: 20px;

            border-radius: 13px;

            font-size: 13px;
        }

        .alert-success {
            color: #347555;
            background: #e9f8ef;
            border: 1px solid #bde8cb;
        }

        .alert-error {
            color: #a13e4f;
            background: #fff0f3;
            border: 1px solid #f1b8c3;
        }

        .alert-error ul {
            padding-left: 18px;
        }

        /* =========================================================
           FOOTER
           ========================================================= */

        footer {
            padding: 35px 0;

            border-top: 1px solid var(--border);

            background: var(--white);
        }

        .footer-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .footer-brand {
            font-family: "Playfair Display", serif;
            font-size: 20px;
            font-weight: 700;
        }

        .footer-brand span {
            display: block;

            margin-top: 3px;

            color: var(--text-light);

            font-family: "DM Sans", sans-serif;
            font-size: 11px;
            font-weight: 400;
        }

        .copyright {
            color: var(--text-light);
            font-size: 11px;
            text-align: center;
        }

        .footer-socials {
            display: flex;
            gap: 8px;
        }

        .footer-social {
            width: 38px;
            height: 38px;

            display: grid;
            place-items: center;

            border-radius: 10px;

            background: var(--light-pink);
            color: var(--dark-pink);

            transition: var(--transition);
        }

        .footer-social:hover {
            color: white;
            background: var(--gradient);
            transform: translateY(-3px);
        }

        /* =========================================================
           BACK TO TOP
           ========================================================= */

        #backTop {
            position: fixed;

            right: 25px;
            bottom: 25px;

            width: 48px;
            height: 48px;

            display: grid;
            place-items: center;

            border: none;
            border-radius: 15px;

            color: white;
            background: var(--gradient);

            box-shadow: var(--shadow);

            cursor: pointer;

            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);

            transition: var(--transition);

            z-index: 500;
        }

        #backTop.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        #backTop:hover {
            transform: translateY(-5px);
        }

        /* =========================================================
           MODAL
           ========================================================= */

        .modal {
            position: fixed;
            inset: 0;

            z-index: 5000;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 25px;

            background: rgba(45, 31, 37, .65);

            backdrop-filter: blur(10px);

            opacity: 0;
            visibility: hidden;

            transition: .3s ease;
        }

        .modal.show {
            opacity: 1;
            visibility: visible;
        }

        .modal-box {
            width: min(900px, 100%);
            max-height: 90vh;

            overflow-y: auto;

            border-radius: 28px;

            background: var(--white);

            box-shadow: 0 30px 100px rgba(0,0,0,.25);

            transform: translateY(30px) scale(.97);

            transition: .35s ease;
        }

        .modal.show .modal-box {
            transform: translateY(0) scale(1);
        }

        .modal-image {
            height: 280px;
            overflow: hidden;
        }

        .modal-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .modal-content {
            padding: 30px;
        }

        .modal-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 20px;
        }

        .modal-header h2 {
            font-family: "Playfair Display", serif;
            font-size: 32px;
            line-height: 1.2;
        }

        .modal-close {
            width: 40px;
            height: 40px;

            flex-shrink: 0;

            display: grid;
            place-items: center;

            border: 1px solid var(--border);
            border-radius: 50%;

            background: var(--cream);
            color: var(--text);

            cursor: pointer;
        }

        .modal-module {
            display: inline-block;

            margin: 9px 0 15px;

            padding: 6px 10px;

            border-radius: 8px;

            background: var(--light-pink);
            color: var(--dark-pink);

            font-size: 11px;
            font-weight: 800;
        }

        .modal-description {
            color: var(--text-light);
            margin-bottom: 22px;
        }

        .modal-section {
            margin-top: 22px;
        }

        .modal-section h4 {
            margin-bottom: 10px;
            font-size: 14px;
        }

        .modal-list {
            padding-left: 20px;
            color: var(--text-light);
            font-size: 13px;
        }

        .tech-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tech {
            padding: 7px 11px;

            border-radius: 9px;

            color: var(--dark-pink);
            background: var(--light-pink);

            font-size: 11px;
            font-weight: 700;
        }

        .modal-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;

            margin-top: 28px;
        }

        /* =========================================================
           MOBILE
           ========================================================= */

        @media (max-width: 1100px) {

            .hero-grid {
                gap: 40px;
            }

            .projects-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .modules-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 850px) {

            .nav-links {
                position: fixed;

                top: 76px;
                left: 20px;
                right: 20px;

                display: none;
                flex-direction: column;
                align-items: stretch;

                padding: 15px;

                border: 1px solid var(--border);
                border-radius: 20px;

                background: rgba(255,250,247,.95);
                backdrop-filter: blur(20px);

                box-shadow: var(--shadow-hover);
            }

            [data-theme="dark"] .nav-links {
                background: rgba(23,20,26,.95);
            }

            .nav-links.open {
                display: flex;
            }

            .nav-links a {
                padding: 13px;
                border-radius: 10px;
            }

            .nav-links a:hover {
                background: var(--light-pink);
            }

            .nav-links a::after {
                display: none;
            }

            .menu-btn {
                display: grid;
            }

            .hero-grid,
            .about-grid,
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .hero {
                padding-top: 130px;
            }

            .hero-content {
                text-align: center;
            }

            .hero-description {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-buttons {
                justify-content: center;
            }

            .hero-visual {
                min-height: 430px;
            }

            .about-content {
                text-align: center;
            }

            .strengths {
                text-align: left;
            }

            .timeline::before {
                left: 10px;
            }

            .timeline-item,
            .timeline-item:nth-child(even) {
                width: 100%;
                margin-left: 0;
                padding-left: 40px;
                padding-right: 0;
            }

            .timeline-item:nth-child(odd) .timeline-dot,
            .timeline-item:nth-child(even) .timeline-dot {
                left: 2px;
                right: auto;
            }

            .timeline-card {
                text-align: left;
            }
        }

        @media (max-width: 650px) {

            .container {
                width: min(100% - 28px, 1180px);
            }

            section {
                padding: 80px 0;
            }

            .nav-container {
                gap: 10px;
            }

            .logo {
                font-size: 18px;
            }

            .logo-mark {
                width: 38px;
                height: 38px;
            }

            .hero h1 {
                font-size: 48px;
                letter-spacing: -2px;
            }

            .hero-role {
                font-size: 17px;
            }

            .hero-description {
                font-size: 15px;
            }

            .hero-visual {
                min-height: 390px;
            }

            .hero-orbit {
                width: 310px;
                height: 310px;
            }

            .developer-card {
                min-height: 300px;
                padding: 22px;
            }

            .floating-icon {
                width: 48px;
                height: 48px;
            }

            .floating-icon.one {
                left: 0;
            }

            .floating-icon.two {
                right: 0;
            }

            .about-info {
                grid-template-columns: 1fr;
            }

            .strengths {
                grid-template-columns: 1fr;
            }

            .skills-grid,
            .services-grid,
            .projects-grid {
                grid-template-columns: 1fr;
            }

            .module-card {
                padding: 23px;
            }

            .module-top {
                gap: 10px;
            }

            .module-title {
                font-size: 21px;
            }

            .workshop-item {
                align-items: flex-start;
            }

            .workshop-name {
                white-space: normal;
            }

            .module-footer {
                flex-direction: column;
                align-items: stretch;
            }

            .module-project-btn {
                justify-content: center;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full {
                grid-column: auto;
            }

            .contact-form-wrapper,
            .contact-info {
                padding: 24px;
            }

            .footer-inner {
                flex-direction: column;
                text-align: center;
            }

            .modal {
                padding: 12px;
            }

            .modal-image {
                height: 210px;
            }

            .modal-content {
                padding: 22px;
            }

            .modal-header h2 {
                font-size: 25px;
            }
        }

        /* =========================================================
           REDUCED MOTION
           ========================================================= */

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: .01ms !important;
            }

            .reveal,
            .slide-left,
            .slide-right {
                opacity: 1;
                transform: none;
            }
        }

    </style>
</head>

<body>

<!-- =========================================================
     LOADER
     ========================================================= -->

<div id="loader">
    <div class="loader-content">
        <div class="loader-logo">DK</div>
        <div class="loader-text">DOUAE KARMOUN</div>
        <div class="loader-bar">
            <span></span>
        </div>
    </div>
</div>

<!-- =========================================================
     BACKGROUND
     ========================================================= -->

<div class="background-decoration">
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    <div class="blob blob-3"></div>
</div>

<div id="particles"></div>

<!-- =========================================================
     NAVBAR
     ========================================================= -->

<header class="navbar" id="navbar">

    <div class="container nav-container">

        <a href="#accueil" class="logo">
            <span class="logo-mark">DK</span>
            <span>Douae Karmoun</span>
        </a>

        <nav>
            <ul class="nav-links" id="navLinks">

                <li>
                    <a href="#accueil" class="active">Accueil</a>
                </li>

                <li>
                    <a href="#apropos">À propos</a>
                </li>

                <li>
                    <a href="#competences">Compétences</a>
                </li>

                <li>
                    <a href="#modules">Modules</a>
                </li>

                <li>
                    <a href="#projets">Projets</a>
                </li>

                <li>
                    <a href="#contact">Contact</a>
                </li>

            </ul>
        </nav>

        <div class="nav-actions">

            <button
                class="theme-btn"
                id="themeBtn"
                aria-label="Changer le thème">
                <i class="fa-solid fa-moon"></i>
            </button>

            <button
                class="menu-btn"
                id="menuBtn"
                aria-label="Menu">
                <i class="fa-solid fa-bars"></i>
            </button>

        </div>

    </div>

</header>

<!-- =========================================================
     HERO
     ========================================================= -->

<main>

<section class="hero" id="accueil">

    <div class="container hero-grid">

        <div class="hero-content">

            <span class="hero-tag reveal">
                <span></span>
                Disponible pour de nouveaux projets
            </span>

            <h1 class="reveal">
                DOUAE
                <br>
                <span class="gradient-text">KARMOUN</span>
            </h1>

            <div class="hero-role reveal">
                <span id="typing"></span>
                <span class="typing-cursor">|</span>
            </div>

            <p class="hero-description reveal">
                Bienvenue sur mon portfolio. Découvrez mon parcours,
                mes compétences et les projets que j'ai réalisés au cours
                de ma formation en développement web.
            </p>

            <div class="hero-buttons reveal">

                <a href="#projets" class="btn btn-primary">
                    <i class="fa-solid fa-folder-open"></i>
                    Découvrir mes projets
                </a>

                <a href="#contact" class="btn btn-outline">
                    <i class="fa-regular fa-paper-plane"></i>
                    Me contacter
                </a>

            </div>

        </div>

        <div class="hero-visual reveal">

            <div class="hero-orbit"></div>

            <div class="floating-icon one">
                <i class="fa-brands fa-js"></i>
            </div>

            <div class="floating-icon two">
                <i class="fa-brands fa-php"></i>
            </div>

            <div class="floating-icon three">
                <i class="fa-solid fa-database"></i>
            </div>

            <div class="developer-card">

                <div class="developer-top">

                    <div class="code-dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <i class="fa-solid fa-code"></i>

                </div>

                <div class="code-window">

                    <div class="code-line">
                        <span class="code-purple">&lt;developer&gt;</span>
                    </div>

                    <div class="code-line">
                        &nbsp;&nbsp;
                        <span class="code-pink">name</span> =
                        <span class="code-green">"Douae"</span>
                    </div>

                    <div class="code-line">
                        &nbsp;&nbsp;
                        <span class="code-pink">role</span> =
                        <span class="code-green">"Web Developer"</span>
                    </div>

                    <div class="code-line">
                        &nbsp;&nbsp;
                        <span class="code-pink">skills</span> =
                        <span class="code-green">"HTML, CSS, JS, PHP"</span>
                    </div>

                    <div class="code-line">
                        &nbsp;&nbsp;
                        <span class="code-pink">database</span> =
                        <span class="code-green">"MySQL"</span>
                    </div>

                    <div class="code-line">
                        <span class="code-purple">&lt;/developer&gt;</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- =========================================================
     ABOUT
     ========================================================= -->

<section id="apropos">

    <div class="container">

        <div class="section-header reveal">
            <span class="section-label">À propos</span>
            <h2 class="section-title">
                Un profil <span class="gradient-text">créatif</span> et passionné
            </h2>

            <p class="section-description">
                Une jeune développeuse web motivée par la technologie,
                la programmation et la création de solutions modernes.
            </p>
        </div>

        <div class="about-grid">

            <div class="profile-card slide-left">

                <div class="profile-placeholder">
                    DK
                </div>

            </div>

            <div class="about-content slide-right">

                <h3>
                    Bonjour, je suis Douae 👋
                </h3>

                <p>
                    Je suis une stagiaire en développement web, motivée,
                    créative et ambitieuse. J'aime découvrir les nouvelles
                    technologies, apprendre la programmation et créer
                    des sites web et applications modernes.
                </p>

                <div class="about-info">

                    <div class="info-box">
                        <small>Nom</small>
                        <strong>DOUAE KARMOUN</strong>
                    </div>

                    <div class="info-box">
                        <small>Statut</small>
                        <strong>Stagiaire</strong>
                    </div>

                    <div class="info-box">
                        <small>Domaine</small>
                        <strong>Développement Web</strong>
                    </div>

                </div>

                <div class="strengths">

                    <div class="strength">
                        <div class="strength-icon">
                            <i class="fa-solid fa-list-check"></i>
                        </div>
                        <span>Gestion de projet</span>
                    </div>

                    <div class="strength">
                        <div class="strength-icon">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                        </div>
                        <span>Créativité</span>
                    </div>

                    <div class="strength">
                        <div class="strength-icon">
                            <i class="fa-solid fa-puzzle-piece"></i>
                        </div>
                        <span>Problem solving</span>
                    </div>

                    <div class="strength">
                        <div class="strength-icon">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>
                        <span>Développement web</span>
                    </div>

                    <div class="strength">
                        <div class="strength-icon">
                            <i class="fa-solid fa-microchip"></i>
                        </div>
                        <span>Nouvelles technologies</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- =========================================================
     SKILLS
     ========================================================= -->

<section id="competences">

    <div class="container">

        <div class="section-header reveal">

            <span class="section-label">
                Compétences
            </span>

            <h2 class="section-title">
                Mes compétences <span class="gradient-text">techniques</span>
            </h2>

            <p class="section-description">
                Les technologies et compétences développées au cours
                de ma formation.
            </p>

        </div>

        <div class="skills-grid">

            <?php

            $skills = [
                ['Gestion de projet', 82, 'fa-list-check'],
                ['Méthodes agiles', 78, 'fa-people-group'],
                ['Bases de données', 80, 'fa-database'],
                ['HTML / CSS', 92, 'fa-code'],
                ['JavaScript', 82, 'fa-js'],
                ['Front-End', 88, 'fa-desktop'],
                ['Back-End', 80, 'fa-server'],
                ['PHP', 78, 'fa-php'],
                ['MySQL', 82, 'fa-database'],
                ['Cloud / Cloud Native', 65, 'fa-cloud'],
                ['Communication professionnelle', 85, 'fa-comments']
            ];

            foreach ($skills as $skill):
            ?>

                <div class="skill-card reveal">

                    <div class="skill-header">

                        <div class="skill-name">
                            <i class="fa-solid <?= e($skill[2]) ?>"></i>
                            <?= e($skill[0]) ?>
                        </div>

                        <span class="skill-percent">
                            <?= e($skill[1]) ?>%
                        </span>

                    </div>

                    <div class="skill-track">

                        <div
                            class="skill-progress"
                            data-progress="<?= e($skill[1]) ?>">
                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>

<!-- =========================================================
     SERVICES
     ========================================================= -->

<section class="services">

    <div class="container">

        <div class="section-header reveal">

            <span class="section-label">
                Ce que je peux réaliser
            </span>

            <h2 class="section-title">
                Des solutions <span class="gradient-text">web modernes</span>
            </h2>

        </div>

        <div class="services-grid">

            <div class="service-card reveal">

                <div class="service-icon">
                    <i class="fa-solid fa-window-maximize"></i>
                </div>

                <h3>Sites vitrines</h3>

                <p>
                    Création de sites modernes, élégants et responsive
                    adaptés aux différents appareils.
                </p>

            </div>

            <div class="service-card reveal">

                <div class="service-icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>

                <h3>Applications web</h3>

                <p>
                    Développement d'applications web avec Front-End,
                    Back-End et bases de données.
                </p>

            </div>

            <div class="service-card reveal">

                <div class="service-icon">
                    <i class="fa-solid fa-mobile-screen"></i>
                </div>

                <h3>Responsive Design</h3>

                <p>
                    Interfaces adaptées aux ordinateurs, tablettes
                    et smartphones.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- =========================================================
     MODULES
     ========================================================= -->

<section id="modules">

    <div class="container">

        <div class="section-header reveal">

            <span class="section-label">
                Formation
            </span>

            <h2 class="section-title">
                Mes <span class="gradient-text">modules</span>
            </h2>

            <p class="section-description">
                Découvrez les modules de ma formation et les ateliers
                réalisés dans chaque module.
            </p>

        </div>

        <div class="modules-grid">

            <?php foreach ($modules as $module): ?>

                <article
                    class="module-card reveal"
                    id="<?= e(strtolower($module['id'])) ?>">

                    <div class="module-top">

                        <div>

                            <span class="module-code">
                                <?= e($module['id']) ?>
                            </span>

                            <h3 class="module-title">
                                <?= e($module['title']) ?>
                            </h3>

                        </div>

                        <div class="module-icon">
                            <i class="fa-solid <?= e($module['icon']) ?>"></i>
                        </div>

                    </div>

                    <p class="module-description">
                        <?= e($module['description']) ?>
                    </p>

                    <div class="topics">

                        <?php foreach ($module['topics'] as $topic): ?>

                            <span class="topic">
                                <?= e($topic) ?>
                            </span>

                        <?php endforeach; ?>

                    </div>

                    <!-- ATELIERS -->
                    <div class="module-workshops">

                        <div class="workshop-heading">

                            <h4>
                                <i class="fa-solid fa-folder-open"></i>
                                Ateliers réalisés
                            </h4>

                            <span class="workshop-count">
                                <?= count($module['projects']) ?> ateliers
                            </span>

                        </div>

                        <div class="workshop-list">

                            <?php foreach ($module['projects'] as $projectIndex => $project): ?>

                                <?php

                                $globalProjectIndex = 0;

                                foreach ($allProjects as $index => $globalProject) {
                                    if (
                                        $globalProject['module'] === $module['id'] &&
                                        $globalProject['name'] === $project['name']
                                    ) {
                                        $globalProjectIndex = $index;
                                        break;
                                    }
                                }

                                ?>

                                <div class="workshop-item">

                                    <div class="workshop-info">

                                        <span class="workshop-label">
                                            <?= e($project['atelier']) ?>
                                        </span>

                                        <span class="workshop-name">
                                            <?= e($project['name']) ?>
                                        </span>

                                    </div>

                                    <button
                                        class="atelier-btn open-project"
                                        data-index="<?= e($globalProjectIndex) ?>">

                                        Voir l'atelier
                                        <i class="fa-solid fa-arrow-right"></i>

                                    </button>

                                </div>

                            <?php endforeach; ?>

                        </div>

                    </div>

                    <div class="module-footer">

                        <span class="module-project-count">
                            <i class="fa-solid fa-diagram-project"></i>
                            <?= count($module['projects']) ?> projets disponibles
                        </span>

                        <a
                            href="#projets"
                            class="module-project-btn filter-module"
                            data-module="<?= e($module['id']) ?>">

                            Voir les projets
                            <i class="fa-solid fa-arrow-right"></i>

                        </a>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>

<!-- =========================================================
     PROJECTS GALLERY
     ========================================================= -->

<section class="projects-section" id="projets">

    <div class="container">

        <div class="section-header reveal">

            <span class="section-label">
                Portfolio
            </span>

            <h2 class="section-title">
                Mes <span class="gradient-text">projets</span>
            </h2>

            <p class="section-description">
                Explorez mes différents ateliers et projets réalisés
                durant ma formation.
            </p>

        </div>

        <div class="filters reveal">

            <button
                class="filter-btn active"
                data-filter="all">
                Tous
            </button>

            <?php foreach ($modules as $module): ?>

                <button
                    class="filter-btn"
                    data-filter="<?= e($module['id']) ?>">

                    <?= e($module['id']) ?>

                </button>

            <?php endforeach; ?>

        </div>

        <div class="projects-grid" id="projectsGrid">

            <?php foreach ($allProjects as $index => $project): ?>

                <article
                    class="project-card reveal"
                    data-module="<?= e($project['module']) ?>">

                    <div class="project-image">

                        <img
                            src="<?= e($project['image']) ?>"
                            alt="<?= e($project['name']) ?>"
                            loading="lazy">

                        <div class="project-overlay">

                            <button
                                class="project-view open-project"
                                data-index="<?= e($index) ?>"
                                aria-label="Voir le projet">

                                <i class="fa-solid fa-eye"></i>

                            </button>

                        </div>

                    </div>

                    <div class="project-body">

                        <span class="project-module">
                            <?= e($project['module']) ?>
                        </span>

                        <h3>
                            <?= e($project['name']) ?>
                        </h3>

                        <p>
                            <?= e($project['description']) ?>
                        </p>

                        <div class="project-footer">

                            <span class="project-link">
                                <?= e($project['atelier']) ?>
                            </span>

                            <button
                                class="project-link open-project"
                                data-index="<?= e($index) ?>"
                                style="border:none;background:none;cursor:pointer;">

                                Voir
                                <i class="fa-solid fa-arrow-right"></i>

                            </button>

                        </div>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>

<!-- =========================================================
     PARCOURS / TIMELINE
     ========================================================= -->

<section>

    <div class="container">

        <div class="section-header reveal">

            <span class="section-label">
                Parcours
            </span>

            <h2 class="section-title">
                Mon <span class="gradient-text">parcours</span>
            </h2>

        </div>

        <div class="timeline">

            <div class="timeline-item slide-left">

                <div class="timeline-dot"></div>

                <div class="timeline-card">

                    <span>FORMATION</span>

                    <h3>
                        Développement Web
                    </h3>

                    <p>
                        Formation orientée vers la création de sites
                        et applications web modernes.
                    </p>

                </div>

            </div>

            <div class="timeline-item slide-right">

                <div class="timeline-dot"></div>

                <div class="timeline-card">

                    <span>PROJETS</span>

                    <h3>
                        Ateliers M201 – M208
                    </h3>

                    <p>
                        Réalisation de plusieurs ateliers pratiques
                        en Front-End, Back-End, bases de données,
                        gestion de projet et communication.
                    </p>

                </div>

            </div>

            <div class="timeline-item slide-left">

                <div class="timeline-dot"></div>

                <div class="timeline-card">

                    <span>PROJET DE SYNTHÈSE</span>

                    <h3>
                        Application Web complète
                    </h3>

                    <p>
                        Mise en pratique des compétences acquises
                        à travers un projet web intégrant plusieurs
                        technologies.
                    </p>

                </div>

            </div>

            <div class="timeline-item slide-right">

                <div class="timeline-dot"></div>

                <div class="timeline-card">

                    <span>OBJECTIF</span>

                    <h3>
                        Évoluer dans le développement web
                    </h3>

                    <p>
                        Continuer à apprendre, développer mes compétences
                        et découvrir de nouvelles technologies.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- =========================================================
     CONTACT
     ========================================================= -->

<section id="contact">

    <div class="container">

        <div class="section-header reveal">

            <span class="section-label">
                Contact
            </span>

            <h2 class="section-title">
                Parlons de votre <span class="gradient-text">projet</span>
            </h2>

            <p class="section-description">
                Une question, une idée ou simplement envie d'échanger ?
                N'hésitez pas à me contacter.
            </p>

        </div>

        <div class="contact-grid">

            <div class="contact-info slide-left">

                <h3>
                    Restons en contact
                </h3>

                <p>
                    Je suis toujours intéressée par de nouveaux projets,
                    de nouvelles expériences et opportunités d'apprentissage.
                </p>

                <div class="contact-item">

                    <div class="contact-item-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>

                    <div>
                        <small>Email</small>
                        <strong><?= e($config['email']) ?></strong>
                    </div>

                </div>

                <div class="contact-item">

                    <div class="contact-item-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>

                    <div>
                        <small>Téléphone</small>
                        <strong><?= e($config['phone']) ?></strong>
                    </div>

                </div>

                <div class="contact-item">

                    <div class="contact-item-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>

                    <div>
                        <small>Localisation</small>
                        <strong><?= e($config['country']) ?></strong>
                    </div>

                </div>

                <div class="socials">

                    <a
                        href="<?= e($config['github']) ?>"
                        target="_blank"
                        class="social"
                        aria-label="GitHub">

                        <i class="fa-brands fa-github"></i>

                    </a>

                    <a
                        href="<?= e($config['linkedin']) ?>"
                        target="_blank"
                        class="social"
                        aria-label="LinkedIn">

                        <i class="fa-brands fa-linkedin-in"></i>

                    </a>

                    <a
                        href="<?= e($config['instagram']) ?>"
                        target="_blank"
                        class="social"
                        aria-label="Instagram">

                        <i class="fa-brands fa-instagram"></i>

                    </a>

                </div>

            </div>

            <div class="contact-form-wrapper slide-right">

                <?php if ($formSuccess): ?>

                    <div class="alert alert-success" id="formSuccess">

                        <i class="fa-solid fa-circle-check"></i>

                        <?= e($formSuccess) ?>

                    </div>

                <?php endif; ?>

                <?php if (!empty($formErrors)): ?>

                    <div class="alert alert-error">

                        <strong>
                            <i class="fa-solid fa-circle-exclamation"></i>
                            Attention
                        </strong>

                        <ul>

                            <?php foreach ($formErrors as $error): ?>

                                <li>
                                    <?= e($error) ?>
                                </li>

                            <?php endforeach; ?>

                        </ul>

                    </div>

                <?php endif; ?>

                <form
                    method="POST"
                    action="#contact"
                    id="contactForm"
                    novalidate>

                    <div class="form-grid">

                        <div class="form-group">

                            <label for="name">
                                Nom *
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                class="form-control"
                                placeholder="Votre nom"
                                required>

                        </div>

                        <div class="form-group">

                            <label for="email">
                                Email *
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="form-control"
                                placeholder="votre@email.com"
                                required>

                        </div>

                        <div class="form-group full">

                            <label for="subject">
                                Sujet *
                            </label>

                            <input
                                type="text"
                                id="subject"
                                name="subject"
                                class="form-control"
                                placeholder="Sujet de votre message"
                                required>

                        </div>

                        <div class="form-group full">

                            <label for="message">
                                Message *
                            </label>

                            <textarea
                                id="message"
                                name="message"
                                class="form-control"
                                placeholder="Écrivez votre message..."
                                required></textarea>

                        </div>

                    </div>

                    <button
                        type="submit"
                        name="contact_submit"
                        class="btn btn-primary">

                        <i class="fa-solid fa-paper-plane"></i>

                        Envoyer le message

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

</main>

<!-- =========================================================
     FOOTER
     ========================================================= -->

<footer>

    <div class="container footer-inner">

        <div class="footer-brand">

            DOUAE KARMOUN

            <span>
                Stagiaire en développement web
            </span>

        </div>

        <div class="copyright">

            DOUAE KARMOUN © 2026 — All Rights Reserved

        </div>

        <div class="footer-socials">

            <a
                href="<?= e($config['github']) ?>"
                target="_blank"
                class="footer-social">

                <i class="fa-brands fa-github"></i>

            </a>

            <a
                href="<?= e($config['linkedin']) ?>"
                target="_blank"
                class="footer-social">

                <i class="fa-brands fa-linkedin-in"></i>

            </a>

            <a
                href="<?= e($config['instagram']) ?>"
                target="_blank"
                class="footer-social">

                <i class="fa-brands fa-instagram"></i>

            </a>

        </div>

    </div>

</footer>

<!-- =========================================================
     BACK TO TOP
     ========================================================= -->

<button
    id="backTop"
    aria-label="Retour en haut">

    <i class="fa-solid fa-arrow-up"></i>

</button>

<!-- =========================================================
     PROJECT MODAL
     ========================================================= -->

<div
    class="modal"
    id="projectModal"
    aria-hidden="true">

    <div class="modal-box">

        <div class="modal-image">

            <img
                id="modalImage"
                src=""
                alt="Projet">

        </div>

        <div class="modal-content">

            <div class="modal-header">

                <div>

                    <span
                        class="modal-module"
                        id="modalModule">
                    </span>

                    <h2 id="modalTitle">
                        Projet
                    </h2>

                </div>

                <button
                    class="modal-close"
                    id="modalClose"
                    aria-label="Fermer">

                    <i class="fa-solid fa-xmark"></i>

                </button>

            </div>

            <p
                class="modal-description"
                id="modalDescription">
            </p>

            <div class="modal-section">

                <h4>
                    <i class="fa-solid fa-bullseye"></i>
                    Objectifs
                </h4>

                <ul
                    class="modal-list"
                    id="modalObjectives">
                </ul>

            </div>

            <div class="modal-section">

                <h4>
                    <i class="fa-solid fa-code"></i>
                    Technologies
                </h4>

                <div
                    class="tech-list"
                    id="modalTechnologies">
                </div>

            </div>

            <div class="modal-section">

                <h4>
                    <i class="fa-solid fa-star"></i>
                    Compétences acquises
                </h4>

                <div
                    class="tech-list"
                    id="modalSkills">
                </div>

            </div>

            <div class="modal-actions">

                <a
                    href="#"
                    target="_blank"
                    class="btn btn-primary"
                    id="modalProjectLink">

                    <i class="fa-solid fa-eye"></i>
                    Voir le projet

                </a>

                <a
                    href="#"
                    target="_blank"
                    class="btn btn-outline"
                    id="modalGithubLink">

                    <i class="fa-brands fa-github"></i>
                    GitHub

                </a>

            </div>

        </div>

    </div>

</div>

<!-- =========================================================
     JAVASCRIPT
     ========================================================= -->

<script>

    /* =========================================================
       PROJECT DATA FROM PHP
       ========================================================= */

    const projects = <?= $projectJson ?: '[]' ?>;

    /* =========================================================
       LOADER
       ========================================================= */

    window.addEventListener("load", () => {

        setTimeout(() => {

            document
                .getElementById("loader")
                .classList.add("hide");

            document.body.classList.add("loaded");

        }, 900);

    });

    /* =========================================================
       PARTICLES
       ========================================================= */

    const particlesContainer =
        document.getElementById("particles");

    for (let i = 0; i < 24; i++) {

        const particle =
            document.createElement("span");

        particle.className = "particle";

        particle.style.left =
            Math.random() * 100 + "%";

        particle.style.animationDuration =
            (8 + Math.random() * 15) + "s";

        particle.style.animationDelay =
            (-Math.random() * 15) + "s";

        particle.style.width =
            (3 + Math.random() * 5) + "px";

        particle.style.height =
            particle.style.width;

        particlesContainer.appendChild(particle);
    }

    /* =========================================================
       TYPING EFFECT
       ========================================================= */

    const typingElement =
        document.getElementById("typing");

    const words = [
        "Web Developer",
        "Student",
        "Creative"
    ];

    let wordIndex = 0;
    let charIndex = 0;
    let deleting = false;

    function typeEffect() {

        const currentWord =
            words[wordIndex];

        if (!deleting) {

            typingElement.textContent =
                currentWord.substring(0, charIndex + 1);

            charIndex++;

            if (charIndex === currentWord.length) {

                deleting = true;

                setTimeout(typeEffect, 1500);

                return;
            }

        } else {

            typingElement.textContent =
                currentWord.substring(0, charIndex - 1);

            charIndex--;

            if (charIndex === 0) {

                deleting = false;

                wordIndex =
                    (wordIndex + 1) % words.length;
            }
        }

        setTimeout(
            typeEffect,
            deleting ? 60 : 100
        );
    }

    typeEffect();

    /* =========================================================
       NAVBAR SCROLL
       ========================================================= */

    const navbar =
        document.getElementById("navbar");

    const backTop =
        document.getElementById("backTop");

    function handleScroll() {

        if (window.scrollY > 50) {

            navbar.classList.add("scrolled");

        } else {

            navbar.classList.remove("scrolled");

        }

        if (window.scrollY > 500) {

            backTop.classList.add("show");

        } else {

            backTop.classList.remove("show");

        }

    }

    window.addEventListener(
        "scroll",
        handleScroll
    );

    handleScroll();

    /* =========================================================
       MOBILE MENU
       ========================================================= */

    const menuBtn =
        document.getElementById("menuBtn");

    const navLinks =
        document.getElementById("navLinks");

    menuBtn.addEventListener("click", () => {

        navLinks.classList.toggle("open");

        const icon =
            menuBtn.querySelector("i");

        if (navLinks.classList.contains("open")) {

            icon.className =
                "fa-solid fa-xmark";

        } else {

            icon.className =
                "fa-solid fa-bars";

        }

    });

    document.querySelectorAll(".nav-links a")
        .forEach(link => {

            link.addEventListener("click", () => {

                navLinks.classList.remove("open");

                menuBtn.querySelector("i").className =
                    "fa-solid fa-bars";

            });

        });

    /* =========================================================
       ACTIVE NAVIGATION
       ========================================================= */

    const sections =
        document.querySelectorAll("section[id]");

    const navigationLinks =
        document.querySelectorAll(".nav-links a");

    const sectionObserver =
        new IntersectionObserver(
            entries => {

                entries.forEach(entry => {

                    if (entry.isIntersecting) {

                        navigationLinks.forEach(link => {

                            link.classList.remove("active");

                            if (
                                link.getAttribute("href") ===
                                "#" + entry.target.id
                            ) {

                                link.classList.add("active");

                            }

                        });

                    }

                });

            },
            {
                threshold: .35
            }
        );

    sections.forEach(section => {

        sectionObserver.observe(section);

    });

    /* =========================================================
       REVEAL ANIMATIONS
       ========================================================= */

    const revealElements =
        document.querySelectorAll(
            ".reveal, .slide-left, .slide-right"
        );

    const revealObserver =
        new IntersectionObserver(
            entries => {

                entries.forEach(entry => {

                    if (entry.isIntersecting) {

                        entry.target.classList.add("show");

                        revealObserver.unobserve(
                            entry.target
                        );

                    }

                });

            },
            {
                threshold: .12
            }
        );

    revealElements.forEach(element => {

        revealObserver.observe(element);

    });

    /* =========================================================
       SKILL BARS
       ========================================================= */

    const skillBars =
        document.querySelectorAll(".skill-progress");

    const skillObserver =
        new IntersectionObserver(
            entries => {

                entries.forEach(entry => {

                    if (entry.isIntersecting) {

                        const progress =
                            entry.target.dataset.progress;

                        entry.target.style.width =
                            progress + "%";

                        skillObserver.unobserve(
                            entry.target
                        );

                    }

                });

            },
            {
                threshold: .5
            }
        );

    skillBars.forEach(bar => {

        skillObserver.observe(bar);

    });

    /* =========================================================
       FILTER PROJECTS
       ========================================================= */

    const filterButtons =
        document.querySelectorAll(".filter-btn");

    const projectCards =
        document.querySelectorAll(".project-card");

    function filterProjects(filter) {

        projectCards.forEach(card => {

            const module =
                card.dataset.module;

            if (
                filter === "all" ||
                module === filter
            ) {

                card.classList.remove("hidden");

            } else {

                card.classList.add("hidden");

            }

        });

        filterButtons.forEach(button => {

            button.classList.toggle(
                "active",
                button.dataset.filter === filter
            );

        });

    }

    filterButtons.forEach(button => {

        button.addEventListener("click", () => {

            filterProjects(
                button.dataset.filter
            );

        });

    });

    /* =========================================================
       MODULE DIRECT BUTTONS
       ========================================================= */

    document.querySelectorAll(".filter-module")
        .forEach(button => {

            button.addEventListener("click", event => {

                event.preventDefault();

                const module =
                    button.dataset.module;

                filterProjects(module);

                document
                    .getElementById("projets")
                    .scrollIntoView({
                        behavior: "smooth"
                    });

            });

        });

    /* =========================================================
       PROJECT MODAL
       ========================================================= */

    const modal =
        document.getElementById("projectModal");

    const modalClose =
        document.getElementById("modalClose");

    const modalImage =
        document.getElementById("modalImage");

    const modalTitle =
        document.getElementById("modalTitle");

    const modalModule =
        document.getElementById("modalModule");

    const modalDescription =
        document.getElementById("modalDescription");

    const modalObjectives =
        document.getElementById("modalObjectives");

    const modalTechnologies =
        document.getElementById("modalTechnologies");

    const modalSkills =
        document.getElementById("modalSkills");

    const modalProjectLink =
        document.getElementById("modalProjectLink");

    const modalGithubLink =
        document.getElementById("modalGithubLink");

    function openProject(index) {

        const project =
            projects[index];

        if (!project) return;

        modalImage.src =
            project.image;

        modalImage.alt =
            project.name;

        modalTitle.textContent =
            project.name;

        modalModule.textContent =
            project.module + " — " +
            project.atelier;

        modalDescription.textContent =
            project.description;

        modalObjectives.innerHTML =
            project.objectives
                .map(item => `<li>${escapeHtml(item)}</li>`)
                .join("");

        modalTechnologies.innerHTML =
            project.technologies
                .map(item => `<span class="tech">${escapeHtml(item)}</span>`)
                .join("");

        modalSkills.innerHTML =
            project.skills
                .map(item => `<span class="tech">${escapeHtml(item)}</span>`)
                .join("");

        modalProjectLink.href =
            project.link;

        modalGithubLink.href =
            project.github;

        modal.classList.add("show");

        modal.setAttribute(
            "aria-hidden",
            "false"
        );

        document.body.style.overflow =
            "hidden";

    }

    function closeProject() {

        modal.classList.remove("show");

        modal.setAttribute(
            "aria-hidden",
            "true"
        );

        document.body.style.overflow =
            "";

    }

    document.querySelectorAll(".open-project")
        .forEach(button => {

            button.addEventListener("click", () => {

                openProject(
                    Number(button.dataset.index)
                );

            });

        });

    modalClose.addEventListener(
        "click",
        closeProject
    );

    modal.addEventListener(
        "click",
        event => {

            if (event.target === modal) {

                closeProject();

            }

        }
    );

    document.addEventListener(
        "keydown",
        event => {

            if (event.key === "Escape") {

                closeProject();

            }

        }
    );

    /* =========================================================
       HTML ESCAPE FOR MODAL
       ========================================================= */

    function escapeHtml(value) {

        return String(value)
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");

    }

    /* =========================================================
       DARK MODE
       ========================================================= */

    const themeBtn =
        document.getElementById("themeBtn");

    const savedTheme =
        localStorage.getItem("douae-theme");

    if (savedTheme === "dark") {

        document.documentElement
            .setAttribute(
                "data-theme",
                "dark"
            );

        themeBtn.innerHTML =
            '<i class="fa-solid fa-sun"></i>';

    }

    themeBtn.addEventListener("click", () => {

        const isDark =
            document.documentElement
                .getAttribute("data-theme") ===
            "dark";

        if (isDark) {

            document.documentElement
                .removeAttribute("data-theme");

            localStorage.removeItem(
                "douae-theme"
            );

            themeBtn.innerHTML =
                '<i class="fa-solid fa-moon"></i>';

        } else {

            document.documentElement
                .setAttribute(
                    "data-theme",
                    "dark"
                );

            localStorage.setItem(
                "douae-theme",
                "dark"
            );

            themeBtn.innerHTML =
                '<i class="fa-solid fa-sun"></i>';

        }

    });

    /* =========================================================
       BACK TO TOP
       ========================================================= */

    backTop.addEventListener(
        "click",
        () => {

            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });

        }
    );

    /* =========================================================
       CONTACT FORM CLIENT VALIDATION
       ========================================================= */

    const contactForm =
        document.getElementById("contactForm");

    contactForm.addEventListener(
        "submit",
        event => {

            const name =
                document.getElementById("name");

            const email =
                document.getElementById("email");

            const subject =
                document.getElementById("subject");

            const message =
                document.getElementById("message");

            let valid = true;

            [name, email, subject, message]
                .forEach(input => {

                    input.style.borderColor = "";

                });

            if (name.value.trim().length < 2) {

                name.style.borderColor =
                    "#d66d80";

                valid = false;

            }

            const emailRegex =
                /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailRegex.test(email.value.trim())) {

                email.style.borderColor =
                    "#d66d80";

                valid = false;

            }

            if (subject.value.trim().length < 3) {

                subject.style.borderColor =
                    "#d66d80";

                valid = false;

            }

            if (message.value.trim().length < 10) {

                message.style.borderColor =
                    "#d66d80";

                valid = false;

            }

            if (!valid) {

                event.preventDefault();

                const firstInvalid =
                    document.querySelector(
                        '.form-control[style*="border-color"]'
                    );

                if (firstInvalid) {

                    firstInvalid.focus();

                }

            }

        }
    );

    /* =========================================================
       SUCCESS MESSAGE ANIMATION
       ========================================================= */

    const successMessage =
        document.getElementById("formSuccess");

    if (successMessage) {

        successMessage.scrollIntoView({
            behavior: "smooth",
            block: "center"
        });

    }

</script>

</body>
</html>