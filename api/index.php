<?php
/* =========================================================
   DOUAE KARMOUN - PORTFOLIO
   Single PHP File
   ========================================================= */

session_start();

/* =========================
   CONFIGURATION
========================= */
$config = [
    'name'       => 'DOUAE KARMOUN',
    'role'       => 'Stagiaire en développement web',
    'email'      => 'karmoundouae2007@gmail.com',
    'phone'      => '+212 6 98 65 80 64',
    'country'    => 'Morocco',
    'github'     => 'https://github.com/',
    'linkedin'   => 'https://www.linkedin.com/',
    'instagram'  => 'https://www.instagram.com/km_duae?stkn=ZGd4N3Y1ZDJ4amZn'
];

/*
|--------------------------------------------------------------------------
| PDF DES ATELIERS
|--------------------------------------------------------------------------
| Mets tes fichiers PDF dans un dossier "pdf" à côté de index.php.
|
| Exemple :
| pdf/
|   M201_Atelier_1.pdf
|   M201_Atelier_2.pdf
|   M202_Atelier_1.pdf
|
| Ensuite, remplace simplement les liens ci-dessous.
|--------------------------------------------------------------------------
*/

$modules = [

    [
        'id' => 'M201',
        'title' => 'Préparation d’un projet web',
        'icon' => 'fa-solid fa-lightbulb',
        'description' => 'Ce module permet de préparer, analyser et organiser un projet web avant son développement.',
        'topics' => [
            'Analyse des besoins',
            'Cahier des charges',
            'Conception',
            'Organisation d’un projet web'
        ],
        'projects' => [
            [
                'atelier' => 'Atelier 1',
                'name' => 'Agence immobilière',
                'description' => 'Conception d’un projet web pour une agence immobilière.',
                'objectives' => 'Analyser les besoins du client et préparer les différentes étapes du projet.',
                'technologies' => 'HTML, CSS, JavaScript, PHP, MySQL',
                'skills' => 'Analyse, conception, organisation et préparation de projet',
                'file' => 'agence.pdf'
            ],
            [
                'atelier' => 'Atelier 2',
                'name' => 'Figma',
                'description' => 'Préparation d’un site vitrine moderne pour une entreprise.',
                'objectives' => 'Identifier les besoins et organiser la structure générale du site.',
                'technologies' => 'HTML, CSS, JavaScript',
                'skills' => 'Cahier des charges, wireframe et organisation',
                'file' => 'figmaa.pdf'
            ]
        ]
    ],

    [
        'id' => 'M202',
        'title' => 'Approche agile',
        'icon' => 'fa-solid fa-arrows-rotate',
        'description' => 'Découverte des méthodes agiles et du travail collaboratif dans les projets web.',
        'topics' => [
            'Méthodes agiles',
            'Travail en équipe',
            'Scrum',
            'Gestion de projet'
        ],
        'projects' => [
            [
                'atelier' => 'Atelier 1',
                'name' => 'Gestion de projet Scrum',
                'description' => 'Mise en place d’une organisation de projet selon Scrum.',
                'objectives' => 'Comprendre les rôles, les tâches et les différentes étapes d’un projet agile.',
                'technologies' => 'Trello, GitHub, Documentation',
                'skills' => 'Travail en équipe, Scrum, organisation',
                'file' => 'pdf/M202_Atelier_1.pdf'
            ],
            [
                'atelier' => 'Atelier 2',
                'name' => 'Planification d’un projet web',
                'description' => 'Création d’un planning pour organiser le développement d’une application.',
                'objectives' => 'Découper le projet en tâches et suivre son avancement.',
                'technologies' => 'Trello, GitHub',
                'skills' => 'Planification, communication et gestion des tâches',
                'file' => 'pdf/M202_Atelier_2.pdf'
            ]
        ]
    ],

    [
        'id' => 'M203',
        'title' => 'Gestion des données',
        'icon' => 'fa-solid fa-database',
        'description' => 'Création, organisation et manipulation des bases de données utilisées dans les applications web.',
        'topics' => [
            'Conception de bases de données',
            'Modélisation',
            'SQL',
            'MySQL',
            'Manipulation des données'
        ],
        'projects' => [
            [
                'atelier' => 'Atelier 1',
                'name' => 'Gestion des employés',
                'description' => 'Création d’une base de données permettant de gérer des employés.',
                'objectives' => 'Créer les tables, les relations et manipuler les données avec SQL.',
                'technologies' => 'MySQL, SQL',
                'skills' => 'Base de données, requêtes SQL, relations',
                'file' => 'pdf/M203_Atelier_1.pdf'
            ],
            [
                'atelier' => 'Atelier 2',
                'name' => 'Gestion des tâches',
                'description' => 'Base de données permettant de gérer les tâches d’un projet.',
                'objectives' => 'Créer une structure de données cohérente et effectuer différentes requêtes.',
                'technologies' => 'MySQL, SQL',
                'skills' => 'Modélisation, SELECT, INSERT, UPDATE, DELETE',
                'file' => 'pdf/M203_Atelier_2.pdf'
            ]
        ]
    ],

    [
        'id' => 'M204',
        'title' => 'Développement Front-End',
        'icon' => 'fa-solid fa-code',
        'description' => 'Développement d’interfaces web modernes, responsives et interactives.',
        'topics' => [
            'HTML',
            'CSS',
            'JavaScript',
            'Responsive Design',
            'Interactivité'
        ],
        'projects' => [
            [
                'atelier' => 'Atelier 1',
                'name' => 'Galerie d’images responsive',
                'description' => 'Création d’une galerie d’images moderne adaptée aux différents écrans.',
                'objectives' => 'Créer une interface responsive avec des interactions JavaScript.',
                'technologies' => 'HTML, CSS, JavaScript, Bootstrap',
                'skills' => 'Responsive Design, DOM, événements JavaScript',
                'file' => 'pdf/M204_Atelier_1.pdf'
            ],
            [
                'atelier' => 'Atelier 2',
                'name' => 'Application calendrier',
                'description' => 'Création d’une interface calendrier moderne et responsive.',
                'objectives' => 'Afficher les informations dans une interface organisée et interactive.',
                'technologies' => 'HTML, CSS, JavaScript, Bootstrap',
                'skills' => 'UI Design, JavaScript, responsive design',
                'file' => 'pdf/M204_Atelier_2.pdf'
            ]
        ]
    ],

    [
        'id' => 'M205',
        'title' => 'Développement Back-End',
        'icon' => 'fa-solid fa-server',
        'description' => 'Développement de la logique serveur et connexion des applications web aux bases de données.',
        'topics' => [
            'PHP',
            'Serveur',
            'Logique métier',
            'Connexion à une base de données',
            'API'
        ],
        'projects' => [
            [
                'atelier' => 'Atelier 1',
                'name' => 'Application CRUD PHP',
                'description' => 'Application permettant d’ajouter, modifier, supprimer et afficher des données.',
                'objectives' => 'Comprendre le fonctionnement d’une application PHP connectée à MySQL.',
                'technologies' => 'PHP, MySQL, HTML, CSS',
                'skills' => 'CRUD, PHP, SQL, formulaires',
                'file' => 'pdf/M205_Atelier_1.pdf'
            ],
            [
                'atelier' => 'Atelier 2',
                'name' => 'Gestion des stagiaires',
                'description' => 'Application web permettant de gérer les informations des stagiaires.',
                'objectives' => 'Créer une application complète avec formulaires et base de données.',
                'technologies' => 'PHP, MySQL, HTML, CSS, JavaScript',
                'skills' => 'PHP, PDO, MySQL, validation des formulaires',
                'file' => 'pdf/M205_Atelier_2.pdf'
            ]
        ]
    ],

    [
        'id' => 'M206',
        'title' => 'Création d’une application Cloud Native',
        'icon' => 'fa-solid fa-cloud',
        'description' => 'Découverte des technologies modernes permettant de développer et déployer des applications web dans le Cloud.',
        'topics' => [
            'Technologies Cloud',
            'Applications Cloud Native',
            'Déploiement',
            'Services web',
            'Outils modernes'
        ],
        'projects' => [
            [
                'atelier' => 'Atelier 1',
                'name' => 'Application web Cloud',
                'description' => 'Conception d’une petite application web pensée pour être déployée en ligne.',
                'objectives' => 'Comprendre les principes de base du Cloud et du déploiement.',
                'technologies' => 'HTML, CSS, JavaScript, PHP',
                'skills' => 'Déploiement, environnement web et services Cloud',
                'file' => 'pdf/M206_Atelier_1.pdf'
            ],
            [
                'atelier' => 'Atelier 2',
                'name' => 'Déploiement d’un site web',
                'description' => 'Préparation et mise en ligne d’un projet web.',
                'objectives' => 'Découvrir les étapes nécessaires pour rendre une application accessible en ligne.',
                'technologies' => 'Git, GitHub, Hosting',
                'skills' => 'Déploiement, versioning et configuration',
                'file' => 'pdf/M206_Atelier_2.pdf'
            ]
        ]
    ],

    [
        'id' => 'M207',
        'title' => 'Projet de synthèse',
        'icon' => 'fa-solid fa-laptop-code',
        'description' => 'Réalisation d’un projet web complet réunissant les compétences acquises durant la formation.',
        'topics' => [
            'Projet web complet',
            'Analyse',
            'Conception',
            'Front-End',
            'Back-End',
            'Base de données',
            'Déploiement'
        ],
        'projects' => [
            [
                'atelier' => 'Atelier 1',
                'name' => 'Projet web complet',
                'description' => 'Réalisation d’une application web complète avec plusieurs fonctionnalités.',
                'objectives' => 'Mettre en pratique les compétences Front-End, Back-End et base de données.',
                'technologies' => 'HTML, CSS, JavaScript, PHP, MySQL',
                'skills' => 'Gestion complète d’un projet web',
                'file' => 'pdf/M207_Atelier_1.pdf'
            ],
            [
                'atelier' => 'Atelier 2',
                'name' => 'Projet final',
                'description' => 'Projet de synthèse présentant l’ensemble des compétences développées.',
                'objectives' => 'Concevoir, développer et présenter une application web fonctionnelle.',
                'technologies' => 'HTML, CSS, JavaScript, PHP, MySQL',
                'skills' => 'Analyse, développement, base de données et présentation',
                'file' => 'pdf/M207_Atelier_2.pdf'
            ]
        ]
    ],

    [
        'id' => 'M208',
        'title' => 'Communication professionnelle',
        'icon' => 'fa-solid fa-comments',
        'description' => 'Développement des compétences de communication nécessaires dans le monde professionnel.',
        'topics' => [
            'Communication professionnelle',
            'Présentation',
            'Travail en équipe',
            'CV',
            'Entretien',
            'Insertion professionnelle'
        ],
        'projects' => [
            [
                'atelier' => 'Atelier 1',
                'name' => 'Présentation professionnelle',
                'description' => 'Préparation et réalisation d’une présentation professionnelle.',
                'objectives' => 'Apprendre à présenter un sujet clairement devant un public.',
                'technologies' => 'PowerPoint, Canva',
                'skills' => 'Communication, présentation et prise de parole',
                'file' => 'pdf/M208_Atelier_1.pdf'
            ],
            [
                'atelier' => 'Atelier 2',
                'name' => 'CV et entretien',
                'description' => 'Préparation d’un CV professionnel et simulation d’un entretien.',
                'objectives' => 'Se préparer à la recherche d’un stage ou d’un emploi.',
                'technologies' => 'Canva, Word',
                'skills' => 'CV, communication et entretien professionnel',
                'file' => 'pdf/M208_Atelier_2.pdf'
            ]
        ]
    ]
];


/* =========================
   CONTACT FORM
========================= */

$formErrors = [];
$formSuccess = '';

function e($value)
{
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '') {
        $formErrors[] = 'Veuillez entrer votre nom.';
    }

    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $formErrors[] = 'Veuillez entrer une adresse email valide.';
    }

    if ($subject === '') {
        $formErrors[] = 'Veuillez entrer un sujet.';
    }

    if ($message === '' || strlen($message) < 10) {
        $formErrors[] = 'Le message doit contenir au moins 10 caractères.';
    }

    if (empty($formErrors)) {

        /*
         * Protection de base :
         * - trim()
         * - htmlspecialchars()
         * - validation email
         * - aucune requête SQL directe avec les données utilisateur
         */

        $safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $safeEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
        $safeSubject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
        $safeMessage = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

        /*
         * Pour utiliser mail() réellement, configurez votre serveur SMTP.
         * Le formulaire reste fonctionnel côté validation même sur XAMPP.
         */

        $mailBody =
            "Nom : " . $safeName . "\n" .
            "Email : " . $safeEmail . "\n\n" .
            "Message :\n" . $safeMessage;

        /*
         * Décommente si ton serveur mail est configuré :
         *
         * $headers = "From: " . $safeEmail . "\r\n";
         * $headers .= "Reply-To: " . $safeEmail . "\r\n";
         * mail($config['email'], $safeSubject, $mailBody, $headers);
         */

        $formSuccess = 'Votre message a été validé avec succès. Merci pour votre message !';

        $name = '';
        $email = '';
        $subject = '';
        $message = '';
    }
}


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
?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Portfolio de DOUAE KARMOUN - Stagiaire en développement web">

    <title>DOUAE KARMOUN | Portfolio</title>

    <!-- Google Fonts -->
    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
          rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <style>

        /* =====================================================
           ROOT
        ===================================================== */

        :root {

            --pink: #d88b9b;
            --dark-pink: #b9677b;
            --light-pink: #f8e5e8;

            --purple: #a98bd4;
            --light-purple: #eee7fa;

            --cream: #fffaf7;
            --white: #ffffff;

            --text: #4b3a3d;
            --muted: #816f73;

            --border: rgba(216, 139, 155, .18);

            --shadow:
                0 15px 45px rgba(85, 54, 63, .10);

            --shadow-hover:
                0 25px 70px rgba(185, 103, 123, .18);

            --gradient:
                linear-gradient(
                    135deg,
                    #d88b9b 0%,
                    #c991b9 45%,
                    #a98bd4 100%
                );

            --gradient-soft:
                linear-gradient(
                    135deg,
                    rgba(248,229,232,.95),
                    rgba(238,231,250,.95)
                );

            --radius: 24px;

            --transition: .35s ease;
        }


        /* =====================================================
           DARK MODE
        ===================================================== */

        body.dark {

            --cream: #18151a;
            --white: #211d23;

            --text: #f8eef1;
            --muted: #c5b5bb;

            --light-pink: #30232a;
            --light-purple: #292331;

            --border: rgba(255,255,255,.08);

            --shadow:
                0 15px 45px rgba(0,0,0,.25);
        }


        /* =====================================================
           RESET
        ===================================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {

            font-family: 'DM Sans', sans-serif;

            background:
                radial-gradient(
                    circle at 10% 20%,
                    rgba(216,139,155,.08),
                    transparent 28%
                ),
                radial-gradient(
                    circle at 90% 80%,
                    rgba(169,139,212,.10),
                    transparent 30%
                ),
                var(--cream);

            color: var(--text);

            line-height: 1.7;

            overflow-x: hidden;

            transition:
                background .4s ease,
                color .4s ease;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        button,
        input,
        textarea {
            font-family: inherit;
        }

        img {
            max-width: 100%;
            display: block;
        }

        ::selection {
            background: var(--pink);
            color: white;
        }


        /* =====================================================
           LOADER
        ===================================================== */

        #loader {

            position: fixed;

            inset: 0;

            z-index: 99999;

            display: flex;

            justify-content: center;

            align-items: center;

            background: var(--cream);

            transition:
                opacity .8s ease,
                visibility .8s ease;
        }

        #loader.hide {
            opacity: 0;
            visibility: hidden;
        }

        .loader-content {
            text-align: center;
        }

        .loader-logo {

            width: 100px;
            height: 100px;

            border-radius: 50%;

            display: flex;

            justify-content: center;
            align-items: center;

            margin: auto;

            font-family: 'Playfair Display', serif;

            font-size: 2.1rem;

            font-weight: 700;

            color: white;

            background: var(--gradient);

            box-shadow:
                0 0 0 10px rgba(216,139,155,.08),
                0 0 60px rgba(216,139,155,.3);

            animation:
                loaderPulse 1.5s infinite;
        }

        .loader-content p {

            margin-top: 22px;

            color: var(--muted);

            font-size: .9rem;

            letter-spacing: 2px;
        }

        @keyframes loaderPulse {

            0%, 100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.08);
            }
        }


        /* =====================================================
           BACKGROUND BLOBS
        ===================================================== */

        .blob {

            position: fixed;

            width: 380px;
            height: 380px;

            border-radius: 50%;

            filter: blur(70px);

            opacity: .12;

            pointer-events: none;

            z-index: -2;

            animation: blobMove 14s ease-in-out infinite alternate;
        }

        .blob-one {

            background: var(--pink);

            top: 5%;
            left: -180px;
        }

        .blob-two {

            background: var(--purple);

            bottom: 0;
            right: -180px;

            animation-delay: -6s;
        }

        @keyframes blobMove {

            from {
                transform: translate(0,0) scale(1);
            }

            to {
                transform: translate(100px,70px) scale(1.25);
            }
        }


        /* =====================================================
           PARTICLES
        ===================================================== */

        .particles {

            position: fixed;

            inset: 0;

            pointer-events: none;

            z-index: -1;
        }

        .particle {

            position: absolute;

            width: 5px;
            height: 5px;

            border-radius: 50%;

            background: var(--pink);

            opacity: .25;

            animation: particleFloat 8s linear infinite;
        }

        @keyframes particleFloat {

            from {
                transform: translateY(110vh) rotate(0deg);
            }

            to {
                transform: translateY(-20vh) rotate(360deg);
            }
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        header {

            position: fixed;

            top: 0;
            left: 0;
            right: 0;

            z-index: 1000;

            padding: 18px 5%;

            transition: var(--transition);
        }

        header.scrolled {

            padding: 10px 5%;

            background:
                rgba(255,255,255,.75);

            backdrop-filter: blur(20px);

            box-shadow:
                0 10px 40px rgba(75,58,61,.08);
        }

        body.dark header.scrolled {
            background: rgba(25,21,28,.78);
        }

        .navbar {

            max-width: 1250px;

            margin: auto;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 12px 20px;

            border: 1px solid var(--border);

            border-radius: 50px;

            background:
                rgba(255,255,255,.55);

            backdrop-filter: blur(18px);
        }

        body.dark .navbar {
            background: rgba(33,29,35,.65);
        }

        .logo {

            font-family: 'Playfair Display', serif;

            font-size: 1.35rem;

            font-weight: 700;

            background: var(--gradient);

            -webkit-background-clip: text;
            background-clip: text;

            color: transparent;
        }

        .nav-links {

            display: flex;

            align-items: center;

            gap: 8px;
        }

        .nav-links a {

            position: relative;

            padding: 9px 13px;

            font-size: .9rem;

            color: var(--text);

            transition: var(--transition);
        }

        .nav-links a::after {

            content: '';

            position: absolute;

            left: 13px;
            right: 13px;

            bottom: 2px;

            height: 2px;

            border-radius: 20px;

            background: var(--gradient);

            transform: scaleX(0);

            transform-origin: center;

            transition: var(--transition);
        }

        .nav-links a:hover {
            color: var(--dark-pink);
        }

        .nav-links a:hover::after {
            transform: scaleX(1);
        }

        .nav-actions {

            display: flex;

            align-items: center;

            gap: 8px;
        }

        .icon-btn {

            width: 38px;
            height: 38px;

            border: 1px solid var(--border);

            border-radius: 50%;

            background: var(--white);

            color: var(--text);

            cursor: pointer;

            display: flex;

            justify-content: center;
            align-items: center;

            transition: var(--transition);
        }

        .icon-btn:hover {

            transform: translateY(-3px) rotate(5deg);

            color: var(--dark-pink);

            box-shadow: var(--shadow);
        }

        .menu-toggle {
            display: none;
        }


        /* =====================================================
           GENERAL
        ===================================================== */

        .container {

            width: min(1180px, 90%);

            margin: auto;
        }

        section {

            position: relative;

            padding: 110px 0;
        }

        .section-heading {

            text-align: center;

            max-width: 720px;

            margin: 0 auto 55px;
        }

        .section-kicker {

            display: inline-flex;

            align-items: center;

            gap: 8px;

            padding: 7px 14px;

            border-radius: 50px;

            background: var(--light-pink);

            color: var(--dark-pink);

            font-size: .8rem;

            font-weight: 700;

            letter-spacing: 1px;

            text-transform: uppercase;

            margin-bottom: 15px;
        }

        .section-heading h2 {

            font-family: 'Playfair Display', serif;

            font-size: clamp(2rem, 4vw, 3.2rem);

            line-height: 1.2;

            margin-bottom: 15px;
        }

        .section-heading p {
            color: var(--muted);
        }


        /* =====================================================
           BUTTONS
        ===================================================== */

        .btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 10px;

            padding: 13px 22px;

            border-radius: 50px;

            border: none;

            cursor: pointer;

            font-weight: 700;

            font-size: .9rem;

            transition: var(--transition);
        }

        .btn-primary {

            color: white;

            background: var(--gradient);

            box-shadow:
                0 12px 30px rgba(216,139,155,.25);
        }

        .btn-primary:hover {

            transform: translateY(-4px) scale(1.02);

            box-shadow:
                0 18px 40px rgba(216,139,155,.35);
        }

        .btn-outline {

            color: var(--dark-pink);

            background: transparent;

            border: 1px solid rgba(185,103,123,.35);
        }

        .btn-outline:hover {

            color: white;

            background: var(--gradient);

            border-color: transparent;

            transform: translateY(-4px);
        }

        .btn-small {

            padding: 10px 16px;

            font-size: .82rem;
        }


        /* =====================================================
           HERO
        ===================================================== */

        .hero {

            min-height: 100vh;

            display: flex;

            align-items: center;

            padding-top: 150px;
        }

        .hero-grid {

            display: grid;

            grid-template-columns: 1.05fr .95fr;

            align-items: center;

            gap: 70px;
        }

        .hero-content {

            animation: heroUp .9s ease both;
        }

        .hero-badge {

            display: inline-flex;

            align-items: center;

            gap: 10px;

            padding: 8px 15px;

            border-radius: 50px;

            background: var(--light-pink);

            color: var(--dark-pink);

            font-size: .85rem;

            margin-bottom: 22px;
        }

        .hero-badge span {

            width: 8px;
            height: 8px;

            border-radius: 50%;

            background: #70b88b;

            box-shadow: 0 0 0 5px rgba(112,184,139,.12);
        }

        .hero h1 {

            font-family: 'Playfair Display', serif;

            font-size: clamp(3.2rem, 7vw, 6rem);

            line-height: .95;

            letter-spacing: -2px;

            margin-bottom: 20px;
        }

        .hero h1 span {

            display: block;

            background: var(--gradient);

            -webkit-background-clip: text;
            background-clip: text;

            color: transparent;
        }

        .hero-role {

            font-size: 1.25rem;

            font-weight: 700;

            margin-bottom: 15px;
        }

        .typing {

            color: var(--dark-pink);
        }

        .hero-description {

            color: var(--muted);

            max-width: 620px;

            margin-bottom: 30px;
        }

        .hero-buttons {

            display: flex;

            gap: 12px;

            flex-wrap: wrap;
        }

        .hero-visual {

            position: relative;

            min-height: 500px;

            display: flex;

            justify-content: center;

            align-items: center;
        }

        .hero-card {

            width: 390px;
            height: 430px;

            border-radius: 45px;

            position: relative;

            display: flex;

            justify-content: center;

            align-items: center;

            background:
                linear-gradient(
                    145deg,
                    rgba(255,255,255,.75),
                    rgba(248,229,232,.72)
                );

            border: 1px solid rgba(255,255,255,.9);

            box-shadow:
                0 35px 80px rgba(185,103,123,.15);

            backdrop-filter: blur(20px);

            animation: floating 5s ease-in-out infinite;
        }

        body.dark .hero-card {

            background:
                linear-gradient(
                    145deg,
                    rgba(60,45,55,.8),
                    rgba(42,34,50,.8)
                );
        }

        .hero-code-window {

            width: 75%;

            background: rgba(255,255,255,.75);

            border-radius: 20px;

            padding: 20px;

            box-shadow: var(--shadow);
        }

        body.dark .hero-code-window {
            background: rgba(20,18,22,.8);
        }

        .window-top {

            display: flex;

            gap: 6px;

            margin-bottom: 18px;
        }

        .window-top span {

            width: 9px;
            height: 9px;

            border-radius: 50%;

            background: var(--pink);
        }

        .code-line {

            height: 8px;

            border-radius: 10px;

            background: var(--light-pink);

            margin: 12px 0;
        }

        .code-line:nth-child(2) {
            width: 85%;
        }

        .code-line:nth-child(3) {
            width: 65%;
        }

        .code-line:nth-child(4) {
            width: 92%;
        }

        .code-line:nth-child(5) {
            width: 55%;
        }

        .floating-icon {

            position: absolute;

            width: 58px;
            height: 58px;

            border-radius: 18px;

            display: flex;

            align-items: center;
            justify-content: center;

            background: rgba(255,255,255,.85);

            box-shadow: var(--shadow);

            color: var(--dark-pink);

            font-size: 1.2rem;

            animation: iconFloat 4s ease-in-out infinite;
        }

        body.dark .floating-icon {
            background: #282329;
        }

        .floating-icon.one {
            top: 25px;
            left: 15px;
        }

        .floating-icon.two {
            right: 5px;
            top: 100px;
            animation-delay: -1s;
        }

        .floating-icon.three {
            left: 20px;
            bottom: 70px;
            animation-delay: -2s;
        }

        .floating-icon.four {
            right: 25px;
            bottom: 30px;
            animation-delay: -3s;
        }

        @keyframes floating {

            0%,100% {
                transform: translateY(0) rotate(0);
            }

            50% {
                transform: translateY(-15px) rotate(1deg);
            }
        }

        @keyframes iconFloat {

            0%,100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-12px);
            }
        }

        @keyframes heroUp {

            from {
                opacity: 0;
                transform: translateY(35px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }


        /* =====================================================
           ABOUT
        ===================================================== */

        .about-grid {

            display: grid;

            grid-template-columns: .85fr 1.15fr;

            gap: 65px;

            align-items: center;
        }

        .profile-card {

            position: relative;

            min-height: 430px;

            border-radius: 35px;

            background: var(--gradient-soft);

            display: flex;

            justify-content: center;

            align-items: center;

            overflow: hidden;

            box-shadow: var(--shadow);
        }

        .profile-circle {

            width: 250px;
            height: 250px;

            border-radius: 50%;

            display: flex;

            justify-content: center;
            align-items: center;

            font-family: 'Playfair Display', serif;

            font-size: 4rem;

            font-weight: 700;

            color: white;

            background: var(--gradient);

            box-shadow:
                0 25px 60px rgba(185,103,123,.25);
        }

        .profile-decoration {

            position: absolute;

            width: 120px;
            height: 120px;

            border: 1px solid rgba(185,103,123,.25);

            border-radius: 50%;
        }

        .profile-decoration.one {
            top: 25px;
            left: 25px;
        }

        .profile-decoration.two {
            bottom: -30px;
            right: -30px;
            width: 180px;
            height: 180px;
        }

        .about-content h3 {

            font-family: 'Playfair Display', serif;

            font-size: 2rem;

            margin-bottom: 15px;
        }

        .about-content > p {

            color: var(--muted);

            margin-bottom: 25px;
        }

        .info-grid {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 12px;

            margin-bottom: 25px;
        }

        .info-item {

            padding: 16px;

            border-radius: 18px;

            background: var(--white);

            border: 1px solid var(--border);

            box-shadow: 0 8px 25px rgba(75,58,61,.05);
        }

        .info-item small {

            display: block;

            color: var(--muted);

            font-size: .72rem;

            margin-bottom: 4px;
        }

        .info-item strong {
            font-size: .86rem;
        }

        .about-features {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 12px;
        }

        .feature {

            padding: 18px;

            border-radius: 20px;

            background: var(--white);

            border: 1px solid var(--border);

            transition: var(--transition);
        }

        .feature:hover {

            transform: translateY(-6px);

            box-shadow: var(--shadow-hover);
        }

        .feature i {

            color: var(--dark-pink);

            font-size: 1.3rem;

            margin-bottom: 8px;
        }

        .feature h4 {
            font-size: .9rem;
        }


        /* =====================================================
           SKILLS
        ===================================================== */

        .skills-grid {

            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 18px;
        }

        .skill-card {

            padding: 24px;

            background: var(--white);

            border: 1px solid var(--border);

            border-radius: 22px;

            box-shadow: 0 10px 35px rgba(75,58,61,.05);

            transition: var(--transition);
        }

        .skill-card:hover {

            transform: translateY(-6px);

            box-shadow: var(--shadow-hover);
        }

        .skill-head {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 12px;
        }

        .skill-name {

            display: flex;

            align-items: center;

            gap: 10px;

            font-weight: 700;
        }

        .skill-name i {
            color: var(--dark-pink);
        }

        .skill-percent {

            color: var(--dark-pink);

            font-weight: 700;

            font-size: .85rem;
        }

        .skill-bar {

            height: 8px;

            border-radius: 50px;

            background: var(--light-pink);

            overflow: hidden;
        }

        .skill-progress {

            width: 0;

            height: 100%;

            border-radius: 50px;

            background: var(--gradient);

            transition: width 1.5s ease;
        }


        /* =====================================================
           MODULES
        ===================================================== */

        .modules-grid {

            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 25px;
        }

        .module-card {

            position: relative;

            padding: 30px;

            border-radius: 28px;

            background: var(--white);

            border: 1px solid var(--border);

            box-shadow: var(--shadow);

            overflow: hidden;

            transition: var(--transition);
        }

        .module-card::before {

            content: '';

            position: absolute;

            top: 0;
            left: 0;
            right: 0;

            height: 4px;

            background: var(--gradient);
        }

        .module-card::after {

            content: '';

            position: absolute;

            width: 130px;
            height: 130px;

            border-radius: 50%;

            background: var(--light-pink);

            right: -60px;
            top: -60px;

            opacity: .5;
        }

        .module-card:hover {

            transform: translateY(-8px);

            box-shadow: var(--shadow-hover);
        }

        .module-top {

            display: flex;

            align-items: flex-start;

            justify-content: space-between;

            gap: 15px;

            margin-bottom: 18px;
        }

        .module-number {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            width: 58px;
            height: 58px;

            border-radius: 18px;

            color: white;

            background: var(--gradient);

            font-weight: 800;

            box-shadow:
                0 10px 25px rgba(216,139,155,.25);
        }

        .module-icon {

            color: var(--dark-pink);

            font-size: 1.5rem;
        }

        .module-card h3 {

            font-family: 'Playfair Display', serif;

            font-size: 1.45rem;

            line-height: 1.3;

            margin-bottom: 10px;
        }

        .module-card > p {

            color: var(--muted);

            font-size: .9rem;

            margin-bottom: 18px;
        }

        .topics {

            display: flex;

            flex-wrap: wrap;

            gap: 7px;

            margin-bottom: 25px;
        }

        .topic {

            padding: 6px 10px;

            border-radius: 50px;

            background: var(--light-purple);

            color: var(--text);

            font-size: .72rem;

            font-weight: 600;
        }

        .module-projects {

            border-top: 1px solid var(--border);

            padding-top: 20px;
        }

        .module-projects-title {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 14px;
        }

        .module-projects-title h4 {

            font-size: .9rem;
        }

        .atelier-count {

            font-size: .72rem;

            color: var(--dark-pink);

            background: var(--light-pink);

            padding: 5px 9px;

            border-radius: 50px;
        }

        .atelier-list {

            display: grid;

            gap: 10px;
        }

        .atelier-item {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 15px;

            padding: 13px;

            border-radius: 16px;

            background: var(--cream);

            border: 1px solid var(--border);

            transition: var(--transition);
        }

        .atelier-item:hover {

            transform: translateX(5px);

            border-color: rgba(216,139,155,.4);
        }

        .atelier-info {

            min-width: 0;
        }

        .atelier-label {

            display: block;

            color: var(--dark-pink);

            font-size: .68rem;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: .5px;
        }

        .atelier-info strong {

            display: block;

            font-size: .85rem;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }

        .atelier-btn {

            flex-shrink: 0;

            display: inline-flex;

            align-items: center;

            gap: 6px;

            padding: 9px 13px;

            border-radius: 50px;

            background: var(--gradient);

            color: white;

            font-size: .72rem;

            font-weight: 700;

            transition: var(--transition);
        }

        .atelier-btn:hover {

            transform: scale(1.05);

            box-shadow:
                0 8px 20px rgba(216,139,155,.25);
        }


        /* =====================================================
           SERVICES
        ===================================================== */

        .services-grid {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 22px;
        }

        .service-card {

            padding: 32px;

            border-radius: 26px;

            background: var(--white);

            border: 1px solid var(--border);

            text-align: center;

            transition: var(--transition);
        }

        .service-card:hover {

            transform: translateY(-8px);

            box-shadow: var(--shadow-hover);
        }

        .service-icon {

            width: 70px;
            height: 70px;

            margin: 0 auto 18px;

            border-radius: 22px;

            display: flex;

            align-items: center;
            justify-content: center;

            color: white;

            font-size: 1.5rem;

            background: var(--gradient);
        }

        .service-card h3 {

            font-family: 'Playfair Display', serif;

            margin-bottom: 8px;
        }

        .service-card p {

            color: var(--muted);

            font-size: .9rem;
        }


        /* =====================================================
           CONTACT
        ===================================================== */

        .contact-grid {

            display: grid;

            grid-template-columns: .75fr 1.25fr;

            gap: 30px;
        }

        .contact-info,
        .contact-form-card {

            padding: 35px;

            border-radius: 28px;

            background: var(--white);

            border: 1px solid var(--border);

            box-shadow: var(--shadow);
        }

        .contact-info h3,
        .contact-form-card h3 {

            font-family: 'Playfair Display', serif;

            font-size: 1.7rem;

            margin-bottom: 10px;
        }

        .contact-info > p {

            color: var(--muted);

            margin-bottom: 25px;
        }

        .contact-item {

            display: flex;

            align-items: center;

            gap: 14px;

            margin-bottom: 17px;
        }

        .contact-icon {

            flex-shrink: 0;

            width: 45px;
            height: 45px;

            border-radius: 14px;

            display: flex;

            justify-content: center;
            align-items: center;

            background: var(--light-pink);

            color: var(--dark-pink);
        }

        .contact-item small {

            display: block;

            color: var(--muted);

            font-size: .7rem;
        }

        .contact-item strong {

            font-size: .84rem;

            word-break: break-word;
        }

        .socials {

            display: flex;

            gap: 9px;

            margin-top: 25px;
        }

        .social {

            width: 42px;
            height: 42px;

            border-radius: 50%;

            display: flex;

            justify-content: center;
            align-items: center;

            background: var(--light-purple);

            color: var(--text);

            transition: var(--transition);
        }

        .social:hover {

            transform: translateY(-5px);

            color: white;

            background: var(--gradient);
        }

        .form-grid {

            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 15px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        .form-group label {

            display: block;

            font-size: .78rem;

            font-weight: 700;

            margin-bottom: 7px;
        }

        .form-group input,
        .form-group textarea {

            width: 100%;

            border: 1px solid var(--border);

            border-radius: 15px;

            padding: 13px 15px;

            outline: none;

            color: var(--text);

            background: var(--cream);

            transition: var(--transition);
        }

        .form-group textarea {

            resize: vertical;

            min-height: 145px;
        }

        .form-group input:focus,
        .form-group textarea:focus {

            border-color: var(--pink);

            box-shadow:
                0 0 0 4px rgba(216,139,155,.10);
        }

        .form-alert {

            padding: 14px 17px;

            border-radius: 15px;

            margin-bottom: 20px;

            font-size: .85rem;
        }

        .form-error {

            background: #fff0f0;

            color: #a53e3e;

            border: 1px solid #ffd1d1;
        }

        .form-success {

            background: #edf9f0;

            color: #347246;

            border: 1px solid #c8ebd1;

            animation: successPop .5s ease;
        }

        @keyframes successPop {

            from {
                opacity: 0;
                transform: scale(.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        footer {

            padding: 35px 0;

            border-top: 1px solid var(--border);
        }

        .footer-content {

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 20px;
        }

        .footer-brand strong {

            font-family: 'Playfair Display', serif;

            font-size: 1.2rem;
        }

        .footer-brand p {

            color: var(--muted);

            font-size: .78rem;
        }

        .copyright {

            color: var(--muted);

            font-size: .75rem;

            text-align: right;
        }


        /* =====================================================
           BACK TO TOP
        ===================================================== */

        #backTop {

            position: fixed;

            right: 25px;
            bottom: 25px;

            width: 48px;
            height: 48px;

            border: none;

            border-radius: 50%;

            background: var(--gradient);

            color: white;

            display: flex;

            justify-content: center;
            align-items: center;

            cursor: pointer;

            opacity: 0;

            visibility: hidden;

            transform: translateY(20px);

            transition: var(--transition);

            z-index: 900;
        }

        #backTop.show {

            opacity: 1;

            visibility: visible;

            transform: translateY(0);
        }

        #backTop:hover {
            transform: translateY(-5px);
        }


        /* =====================================================
           REVEAL ANIMATIONS
        ===================================================== */

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

            transform: translateX(-40px);

            transition: .8s ease;
        }

        .slide-left.show {

            opacity: 1;

            transform: translateX(0);
        }

        .slide-right {

            opacity: 0;

            transform: translateX(40px);

            transition: .8s ease;
        }

        .slide-right.show {

            opacity: 1;

            transform: translateX(0);
        }


        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 1000px) {

            .hero-grid,
            .about-grid,
            .contact-grid {
                grid-template-columns: 1fr;
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

            .info-grid,
            .about-features {
                text-align: left;
            }
        }

        @media (max-width: 800px) {

            .nav-links {

                position: absolute;

                top: calc(100% + 10px);

                left: 0;
                right: 0;

                padding: 15px;

                border-radius: 25px;

                background: var(--white);

                border: 1px solid var(--border);

                box-shadow: var(--shadow);

                display: none;

                flex-direction: column;

                align-items: stretch;
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links a {
                padding: 12px 15px;
            }

            .menu-toggle {
                display: flex;
            }

            .modules-grid,
            .skills-grid {
                grid-template-columns: 1fr;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .footer-content {
                flex-direction: column;
                text-align: center;
            }

            .copyright {
                text-align: center;
            }
        }

        @media (max-width: 600px) {

            section {
                padding: 80px 0;
            }

            .hero {
                padding-top: 130px;
            }

            .hero h1 {
                font-size: 3.1rem;
            }

            .hero-visual {
                min-height: 360px;
            }

            .hero-card {

                width: 290px;
                height: 330px;

                border-radius: 35px;
            }

            .hero-code-window {
                width: 75%;
            }

            .floating-icon {
                width: 45px;
                height: 45px;

                border-radius: 14px;
            }

            .info-grid,
            .about-features,
            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full {
                grid-column: auto;
            }

            .profile-card {
                min-height: 340px;
            }

            .profile-circle {

                width: 190px;
                height: 190px;

                font-size: 3rem;
            }

            .module-card {
                padding: 22px;
            }

            .atelier-item {
                align-items: flex-start;
            }

            .atelier-btn {
                padding: 8px 10px;
            }

            .contact-info,
            .contact-form-card {
                padding: 24px;
            }

            .navbar {
                padding: 9px 12px;
            }
        }

        @media (max-width: 400px) {

            .hero h1 {
                font-size: 2.65rem;
            }

            .hero-buttons .btn {
                width: 100%;
            }

            .atelier-item {
                flex-direction: column;
            }

            .atelier-btn {
                width: 100%;

                justify-content: center;
            }
        }


        /* =====================================================
           REDUCED MOTION
        ===================================================== */

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {

                animation-duration: .01ms !important;

                animation-iteration-count: 1 !important;

                scroll-behavior: auto !important;

                transition-duration: .01ms !important;
            }
        }

    </style>

</head>


<body>

<!-- =====================================================
     LOADER
===================================================== -->

<div id="loader">

    <div class="loader-content">

        <div class="loader-logo">
            DK
        </div>

        <p>DOUAE KARMOUN</p>

    </div>

</div>


<!-- BACKGROUND -->

<div class="blob blob-one"></div>
<div class="blob blob-two"></div>

<div class="particles" id="particles"></div>


<!-- =====================================================
     NAVBAR
===================================================== -->

<header id="header">

    <nav class="navbar">

        <a href="#accueil" class="logo">
            DOUAE.
        </a>

        <div class="nav-links" id="navLinks">

            <a href="#accueil">Accueil</a>

            <a href="#about">À propos</a>

            <a href="#skills">Compétences</a>

            <a href="#modules">Modules</a>

            <a href="#contact">Contact</a>

        </div>

        <div class="nav-actions">

            <button
                class="icon-btn"
                id="themeToggle"
                aria-label="Changer le thème">

                <i class="fa-solid fa-moon"></i>

            </button>

            <button
                class="icon-btn menu-toggle"
                id="menuToggle"
                aria-label="Menu">

                <i class="fa-solid fa-bars"></i>

            </button>

        </div>

    </nav>

</header>


<!-- =====================================================
     HERO
===================================================== -->

<main>

<section class="hero" id="accueil">

    <div class="container">

        <div class="hero-grid">

            <div class="hero-content">

                <div class="hero-badge">

                    <span></span>

                    Disponible pour apprendre et créer

                </div>

                <h1>
                    DOUAE
                    <span>KARMOUN</span>
                </h1>

                <div class="hero-role">

                    Stagiaire en développement web

                    <span class="typing" id="typing"></span>

                </div>

                <p class="hero-description">

                    Bienvenue sur mon portfolio.
                    Découvrez mon parcours, mes compétences et les projets
                    que j'ai réalisés au cours de ma formation en développement web.

                </p>

                <div class="hero-buttons">

                    <a href="#modules"
                       class="btn btn-primary">

                        <i class="fa-solid fa-folder-open"></i>

                        Découvrir mes ateliers

                    </a>

                    <a href="#contact"
                       class="btn btn-outline">

                        <i class="fa-regular fa-envelope"></i>

                        Me contacter

                    </a>

                </div>

            </div>


            <div class="hero-visual">

                <div class="hero-card">

                    <div class="hero-code-window">

                        <div class="window-top">

                            <span></span>
                            <span></span>
                            <span></span>

                        </div>

                        <div class="code-line"></div>
                        <div class="code-line"></div>
                        <div class="code-line"></div>
                        <div class="code-line"></div>

                    </div>


                    <div class="floating-icon one">
                        <i class="fa-brands fa-html5"></i>
                    </div>

                    <div class="floating-icon two">
                        <i class="fa-brands fa-js"></i>
                    </div>

                    <div class="floating-icon three">
                        <i class="fa-brands fa-php"></i>
                    </div>

                    <div class="floating-icon four">
                        <i class="fa-solid fa-database"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     ABOUT
===================================================== -->

<section id="about">

    <div class="container">

        <div class="section-heading reveal">

            <div class="section-kicker">
                <i class="fa-regular fa-heart"></i>
                À propos
            </div>

            <h2>
                Quelques mots sur moi
            </h2>

            <p>
                Une jeune développeuse web motivée, créative et ambitieuse.
            </p>

        </div>


        <div class="about-grid">

            <div class="profile-card slide-left">

                <div class="profile-decoration one"></div>
                <div class="profile-decoration two"></div>

                <div class="profile-circle">
                    DK
                </div>

            </div>


            <div class="about-content slide-right">

                <h3>
                    DOUAE KARMOUN
                </h3>

                <p>

                    Je suis une stagiaire en développement web,
                    passionnée par la technologie, la programmation
                    et la création de sites et applications modernes.

                    J'aime apprendre de nouvelles technologies,
                    résoudre des problèmes et transformer une idée
                    en une solution web claire et fonctionnelle.

                </p>


                <div class="info-grid">

                    <div class="info-item">

                        <small>Nom</small>

                        <strong>DOUAE KARMOUN</strong>

                    </div>

                    <div class="info-item">

                        <small>Statut</small>

                        <strong>Stagiaire</strong>

                    </div>

                    <div class="info-item">

                        <small>Domaine</small>

                        <strong>Développement Web</strong>

                    </div>

                </div>


                <div class="about-features">

                    <div class="feature">

                        <i class="fa-solid fa-list-check"></i>

                        <h4>Gestion de projet</h4>

                    </div>

                    <div class="feature">

                        <i class="fa-solid fa-palette"></i>

                        <h4>Créativité</h4>

                    </div>

                    <div class="feature">

                        <i class="fa-solid fa-puzzle-piece"></i>

                        <h4>Problem solving</h4>

                    </div>

                    <div class="feature">

                        <i class="fa-solid fa-code"></i>

                        <h4>Développement web</h4>

                    </div>

                    <div class="feature">

                        <i class="fa-solid fa-rocket"></i>

                        <h4>Nouvelles technologies</h4>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     SKILLS
===================================================== -->

<section id="skills">

    <div class="container">

        <div class="section-heading reveal">

            <div class="section-kicker">
                <i class="fa-solid fa-star"></i>
                Compétences
            </div>

            <h2>
                Mes compétences
            </h2>

            <p>
                Les principales compétences développées durant ma formation.
            </p>

        </div>


        <div class="skills-grid">

            <?php

            $skills = [
                ['Gestion de projet', 'fa-list-check', 85],
                ['Méthodes agiles', 'fa-arrows-rotate', 80],
                ['Bases de données', 'fa-database', 82],
                ['HTML / CSS', 'fa-code', 92],
                ['JavaScript', 'fa-brands fa-js', 82],
                ['Front-End', 'fa-display', 86],
                ['Back-End', 'fa-server', 80],
                ['PHP', 'fa-brands fa-php', 82],
                ['MySQL', 'fa-database', 84],
                ['Cloud / Cloud Native', 'fa-cloud', 68],
                ['Communication professionnelle', 'fa-comments', 88]
            ];

            foreach ($skills as $skill):

            ?>

                <div class="skill-card reveal">

                    <div class="skill-head">

                        <div class="skill-name">

                            <i class="fa-solid <?= e($skill[1]) ?>"></i>

                            <?= e($skill[0]) ?>

                        </div>

                        <span class="skill-percent">
                            <?= $skill[2] ?>%
                        </span>

                    </div>

                    <div class="skill-bar">

                        <div
                            class="skill-progress"
                            data-progress="<?= $skill[2] ?>%">
                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- =====================================================
     MODULES
===================================================== -->

<section id="modules">

    <div class="container">

        <div class="section-heading reveal">

            <div class="section-kicker">

                <i class="fa-solid fa-book-open"></i>

                Formation

            </div>

            <h2>
                Mes modules
            </h2>

            <p>

                Retrouvez les différents modules de ma formation
                ainsi que les ateliers réalisés.

            </p>

        </div>


        <div class="modules-grid">

            <?php foreach ($modules as $module): ?>

                <article class="module-card reveal">

                    <div class="module-top">

                        <div class="module-number">

                            <?= e($module['id']) ?>

                        </div>

                        <i class="<?= e($module['icon']) ?> module-icon"></i>

                    </div>


                    <h3>
                        <?= e($module['title']) ?>
                    </h3>


                    <p>
                        <?= e($module['description']) ?>
                    </p>


                    <div class="topics">

                        <?php foreach ($module['topics'] as $topic): ?>

                            <span class="topic">
                                <?= e($topic) ?>
                            </span>

                        <?php endforeach; ?>

                    </div>


                    <div class="module-projects">

                        <div class="module-projects-title">

                            <h4>
                                <i class="fa-solid fa-folder-open"></i>
                                Ateliers
                            </h4>

                            <span class="atelier-count">

                                <?= count($module['projects']) ?>
                                ateliers

                            </span>

                        </div>


                        <div class="atelier-list">

                            <?php foreach ($module['projects'] as $project): ?>

                                <div class="atelier-item">

                                    <div class="atelier-info">

                                        <span class="atelier-label">
                                            <?= e($project['atelier']) ?>
                                        </span>

                                        <strong>
                                            <?= e($project['name']) ?>
                                        </strong>

                                    </div>


                                    <!--
                                        LIEN DIRECT VERS TON PDF
                                        Remplace simplement le fichier
                                        dans le dossier /pdf/
                                    -->

                                    <a
                                        href="<?= e($project['pdf']) ?>"
                                        target="_blank"
                                        rel="noopener"
                                        class="atelier-btn">

                                        <i class="fa-solid fa-file-pdf"></i>

                                        Voir l'atelier

                                    </a>

                                </div>

                            <?php endforeach; ?>

                        </div>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- =====================================================
     SERVICES
===================================================== -->

<section>

    <div class="container">

        <div class="section-heading reveal">

            <div class="section-kicker">

                <i class="fa-solid fa-wand-magic-sparkles"></i>

                Ce que je peux réaliser

            </div>

            <h2>
                Création web
            </h2>

            <p>
                Des solutions modernes, responsives et adaptées aux besoins.
            </p>

        </div>


        <div class="services-grid">

            <div class="service-card reveal">

                <div class="service-icon">

                    <i class="fa-solid fa-window-maximize"></i>

                </div>

                <h3>
                    Sites vitrines
                </h3>

                <p>
                    Création de sites modernes et responsives
                    pour présenter une entreprise, une activité ou un projet.
                </p>

            </div>


            <div class="service-card reveal">

                <div class="service-icon">

                    <i class="fa-solid fa-laptop-code"></i>

                </div>

                <h3>
                    Applications web
                </h3>

                <p>
                    Développement d’applications web avec
                    Front-End, Back-End et bases de données.
                </p>

            </div>


            <div class="service-card reveal">

                <div class="service-icon">

                    <i class="fa-solid fa-mobile-screen"></i>

                </div>

                <h3>
                    Responsive Design
                </h3>

                <p>
                    Interfaces adaptées aux ordinateurs,
                    tablettes et smartphones.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     CONTACT
===================================================== -->

<section id="contact">

    <div class="container">

        <div class="section-heading reveal">

            <div class="section-kicker">

                <i class="fa-regular fa-paper-plane"></i>

                Contact

            </div>

            <h2>
                Parlons ensemble
            </h2>

            <p>
                Une question, une idée ou un projet ?
                N’hésitez pas à me contacter.
            </p>

        </div>


        <div class="contact-grid">

            <div class="contact-info slide-left">

                <h3>
                    Mes coordonnées
                </h3>

                <p>
                    Vous pouvez me contacter directement
                    à travers les informations suivantes.
                </p>


                <div class="contact-item">

                    <div class="contact-icon">

                        <i class="fa-regular fa-envelope"></i>

                    </div>

                    <div>

                        <small>Email</small>

                        <strong>
                            <?= e($config['email']) ?>
                        </strong>

                    </div>

                </div>


                <div class="contact-item">

                    <div class="contact-icon">

                        <i class="fa-solid fa-phone"></i>

                    </div>

                    <div>

                        <small>Téléphone</small>

                        <strong>
                            <?= e($config['phone']) ?>
                        </strong>

                    </div>

                </div>


                <div class="contact-item">

                    <div class="contact-icon">

                        <i class="fa-solid fa-location-dot"></i>

                    </div>

                    <div>

                        <small>Localisation</small>

                        <strong>
                            <?= e($config['country']) ?>
                        </strong>

                    </div>

                </div>


                <div class="socials">

                    <a
                        href="<?= e($config['github']) ?>"
                        target="_blank"
                        rel="noopener"
                        class="social"
                        aria-label="GitHub">

                        <i class="fa-brands fa-github"></i>

                    </a>

                    <a
                        href="<?= e($config['linkedin']) ?>"
                        target="_blank"
                        rel="noopener"
                        class="social"
                        aria-label="LinkedIn">

                        <i class="fa-brands fa-linkedin-in"></i>

                    </a>

                    <a
                        href="<?= e($config['instagram']) ?>"
                        target="_blank"
                        rel="noopener"
                        class="social"
                        aria-label="Instagram">

                        <i class="fa-brands fa-instagram"></i>

                    </a>

                </div>

            </div>


            <div class="contact-form-card slide-right">

                <h3>
                    Envoyer un message
                </h3>


                <?php if (!empty($formErrors)): ?>

                    <div class="form-alert form-error">

                        <?php foreach ($formErrors as $error): ?>

                            <div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                                <?= e($error) ?>
                            </div>

                        <?php endforeach; ?>

                    </div>

                <?php endif; ?>


                <?php if ($formSuccess): ?>

                    <div class="form-alert form-success">

                        <i class="fa-solid fa-circle-check"></i>

                        <?= e($formSuccess) ?>

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
                                Nom
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Votre nom"
                                value="<?= e($name ?? '') ?>"
                                required>

                        </div>


                        <div class="form-group">

                            <label for="email">
                                Email
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="votre@email.com"
                                value="<?= e($email ?? '') ?>"
                                required>

                        </div>


                        <div class="form-group full">

                            <label for="subject">
                                Sujet
                            </label>

                            <input
                                type="text"
                                id="subject"
                                name="subject"
                                placeholder="Sujet du message"
                                value="<?= e($subject ?? '') ?>"
                                required>

                        </div>


                        <div class="form-group full">

                            <label for="message">
                                Message
                            </label>

                            <textarea
                                id="message"
                                name="message"
                                placeholder="Écrivez votre message..."
                                required><?= e($message ?? '') ?></textarea>

                        </div>

                    </div>


                    <button
                        type="submit"
                        name="contact_submit"
                        class="btn btn-primary">

                        <i class="fa-regular fa-paper-plane"></i>

                        Envoyer

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

</main>


<!-- =====================================================
     FOOTER
===================================================== -->

<footer>

    <div class="container">

        <div class="footer-content">

            <div class="footer-brand">

                <strong>
                    DOUAE KARMOUN
                </strong>

                <p>
                    Stagiaire en développement web
                </p>

            </div>


            <div class="copyright">

                DOUAE KARMOUN © 2026 —
                All Rights Reserved

            </div>

        </div>

    </div>

</footer>


<!-- BACK TO TOP -->

<button
    id="backTop"
    aria-label="Retour en haut">

    <i class="fa-solid fa-arrow-up"></i>

</button>


<script>

    /* =====================================================
       LOADER
    ===================================================== */

    window.addEventListener('load', function () {

        setTimeout(function () {

            document.getElementById('loader')
                .classList.add('hide');

        }, 700);

    });


    /* =====================================================
       PARTICLES
    ===================================================== */

    const particles = document.getElementById('particles');

    for (let i = 0; i < 25; i++) {

        const particle = document.createElement('span');

        particle.className = 'particle';

        particle.style.left =
            Math.random() * 100 + '%';

        particle.style.animationDelay =
            Math.random() * 8 + 's';

        particle.style.animationDuration =
            (6 + Math.random() * 8) + 's';

        particle.style.width =
            (3 + Math.random() * 4) + 'px';

        particle.style.height =
            particle.style.width;

        particles.appendChild(particle);
    }


    /* =====================================================
       TYPING EFFECT
    ===================================================== */

    const typingElement =
        document.getElementById('typing');

    const words = [
        ' | Web Developer',
        ' | Student',
        ' | Creative'
    ];

    let wordIndex = 0;
    let charIndex = 0;
    let deleting = false;

    function typeEffect() {

        const currentWord = words[wordIndex];

        if (!deleting) {

            typingElement.textContent =
                currentWord.substring(0, charIndex++);

            if (charIndex > currentWord.length) {

                deleting = true;

                setTimeout(typeEffect, 1300);

                return;
            }

        } else {

            typingElement.textContent =
                currentWord.substring(0, charIndex--);

            if (charIndex < 0) {

                deleting = false;

                wordIndex =
                    (wordIndex + 1) % words.length;

                charIndex = 0;
            }
        }

        setTimeout(
            typeEffect,
            deleting ? 50 : 90
        );
    }

    typeEffect();


    /* =====================================================
       NAVBAR SCROLL
    ===================================================== */

    const header =
        document.getElementById('header');

    const backTop =
        document.getElementById('backTop');

    window.addEventListener('scroll', function () {

        if (window.scrollY > 40) {

            header.classList.add('scrolled');

        } else {

            header.classList.remove('scrolled');
        }


        if (window.scrollY > 500) {

            backTop.classList.add('show');

        } else {

            backTop.classList.remove('show');
        }

    });


    /* =====================================================
       BACK TO TOP
    ===================================================== */

    backTop.addEventListener('click', function () {

        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });

    });


    /* =====================================================
       MOBILE MENU
    ===================================================== */

    const menuToggle =
        document.getElementById('menuToggle');

    const navLinks =
        document.getElementById('navLinks');

    menuToggle.addEventListener('click', function () {

        navLinks.classList.toggle('active');

        const icon =
            menuToggle.querySelector('i');

        if (navLinks.classList.contains('active')) {

            icon.className =
                'fa-solid fa-xmark';

        } else {

            icon.className =
                'fa-solid fa-bars';
        }

    });


    document.querySelectorAll('.nav-links a')
        .forEach(function (link) {

            link.addEventListener('click', function () {

                navLinks.classList.remove('active');

                menuToggle.querySelector('i')
                    .className =
                    'fa-solid fa-bars';

            });

        });


    /* =====================================================
       DARK MODE
    ===================================================== */

    const themeToggle =
        document.getElementById('themeToggle');

    const savedTheme =
        localStorage.getItem('portfolio-theme');

    if (savedTheme === 'dark') {

        document.body.classList.add('dark');

        themeToggle.innerHTML =
            '<i class="fa-solid fa-sun"></i>';
    }

    themeToggle.addEventListener('click', function () {

        document.body.classList.toggle('dark');

        const dark =
            document.body.classList.contains('dark');

        localStorage.setItem(
            'portfolio-theme',
            dark ? 'dark' : 'light'
        );

        themeToggle.innerHTML = dark
            ? '<i class="fa-solid fa-sun"></i>'
            : '<i class="fa-solid fa-moon"></i>';

    });


    /* =====================================================
       SCROLL REVEAL
    ===================================================== */

    const revealElements =
        document.querySelectorAll(
            '.reveal, .slide-left, .slide-right'
        );

    const revealObserver =
        new IntersectionObserver(
            function (entries, observer) {

                entries.forEach(function (entry) {

                    if (entry.isIntersecting) {

                        entry.target.classList.add('show');

                        observer.unobserve(entry.target);
                    }

                });

            },
            {
                threshold: .12
            }
        );

    revealElements.forEach(function (element) {

        revealObserver.observe(element);

    });


    /* =====================================================
       SKILL BARS
    ===================================================== */

    const skillBars =
        document.querySelectorAll('.skill-progress');

    const skillObserver =
        new IntersectionObserver(
            function (entries, observer) {

                entries.forEach(function (entry) {

                    if (entry.isIntersecting) {

                        const progress =
                            entry.target.dataset.progress;

                        entry.target.style.width =
                            progress;

                        observer.unobserve(entry.target);
                    }

                });

            },
            {
                threshold: .4
            }
        );

    skillBars.forEach(function (bar) {

        skillObserver.observe(bar);

    });


    /* =====================================================
       CONTACT FORM VALIDATION
    ===================================================== */

    const contactForm =
        document.getElementById('contactForm');

    contactForm.addEventListener('submit', function (event) {

        const name =
            document.getElementById('name');

        const email =
            document.getElementById('email');

        const subject =
            document.getElementById('subject');

        const message =
            document.getElementById('message');

        let valid = true;

        [name, email, subject, message]
            .forEach(function (input) {

                input.style.borderColor = '';

            });


        if (name.value.trim() === '') {

            name.style.borderColor = '#d66';

            valid = false;
        }


        const emailPattern =
            /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailPattern.test(email.value.trim())) {

            email.style.borderColor = '#d66';

            valid = false;
        }


        if (subject.value.trim() === '') {

            subject.style.borderColor = '#d66';

            valid = false;
        }


        if (message.value.trim().length < 10) {

            message.style.borderColor = '#d66';

            valid = false;
        }


        if (!valid) {

            event.preventDefault();

            alert(
                'Veuillez vérifier les informations du formulaire.'
            );

        }

    });


    /* =====================================================
       SMOOTH SCROLL
    ===================================================== */

    document.querySelectorAll('a[href^="#"]')
        .forEach(function (anchor) {

            anchor.addEventListener('click', function (event) {

                const targetId =
                    this.getAttribute('href');

                if (
                    targetId === '#' ||
                    !document.querySelector(targetId)
                ) {
                    return;
                }

                event.preventDefault();

                document.querySelector(targetId)
                    .scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });

            });

        });

</script>

</body>

</html>