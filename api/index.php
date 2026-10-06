```php
<?php
/* ============================================================
   DOUAE KARMOUN — PROFESSIONAL PHP PORTFOLIO
   Single-file version : index.php
   ============================================================ */

$site = [
    "name"      => "DOUAE KARMOUN",
    "title"     => "Stagiaire en développement web",
    "email"     => "karmoundouae2007@gmail.vom",
    "phone"     => "+212 6 98 65 80 64",
    "location"  => "Morocco",
    "github"    => "https://github.com/",
    "linkedin"  => "https://www.linkedin.com/",
    "instagram" => "https://www.instagram.com/km_duae?stkn=ZGd4N3Y1ZDJ4amZn"
];

function e($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, "UTF-8");
}

/* ============================================================
   MODULES
   ============================================================ */

$modules = [

    "M201" => [
        "title" => "Préparation d'un projet web",
        "icon" => "fa-lightbulb",
        "description" => "Préparer et organiser un projet web à partir des besoins du client.",
        "topics" => [
            "Analyse des besoins",
            "Cahier des charges",
            "Conception",
            "Organisation d'un projet web",
            "Ateliers / projets scolaires"
        ]
    ],

    "M202" => [
        "title" => "Approche agile",
        "icon" => "fa-people-group",
        "description" => "Découvrir les méthodes agiles et apprendre à travailler efficacement en équipe.",
        "topics" => [
            "Méthodes agiles",
            "Travail en équipe",
            "Scrum",
            "Gestion de projet",
            "Ateliers / projets scolaires"
        ]
    ],

    "M203" => [
        "title" => "Gestion des données",
        "icon" => "fa-database",
        "description" => "Concevoir, organiser et manipuler des bases de données.",
        "topics" => [
            "Conception de bases de données",
            "Modélisation",
            "SQL",
            "MySQL",
            "Manipulation des données",
            "Ateliers / projets scolaires"
        ]
    ],

    "M204" => [
        "title" => "Développement Front-End",
        "icon" => "fa-code",
        "description" => "Créer des interfaces web modernes, interactives et responsives.",
        "topics" => [
            "HTML",
            "CSS",
            "JavaScript",
            "Interfaces web modernes",
            "Responsive Design",
            "Interactivité",
            "Ateliers / projets scolaires"
        ]
    ],

    "M205" => [
        "title" => "Développement Back-End",
        "icon" => "fa-server",
        "description" => "Développer la logique serveur et connecter les applications aux bases de données.",
        "topics" => [
            "PHP",
            "Serveur",
            "Logique métier",
            "Connexion à une base de données",
            "API",
            "Fonctionnalités d'une application web",
            "Ateliers / projets scolaires"
        ]
    ],

    "M206" => [
        "title" => "Création d'une application Cloud Native",
        "icon" => "fa-cloud",
        "description" => "Découvrir les technologies Cloud et les méthodes modernes de déploiement.",
        "topics" => [
            "Technologies Cloud",
            "Applications Cloud Native",
            "Déploiement",
            "Services web",
            "Outils modernes du développement web",
            "Ateliers / projets scolaires"
        ]
    ],

    "M207" => [
        "title" => "Projet de synthèse",
        "icon" => "fa-rocket",
        "description" => "Mettre en pratique les compétences dans un projet web complet.",
        "topics" => [
            "Projet web complet",
            "Analyse",
            "Conception",
            "Front-End",
            "Back-End",
            "Base de données",
            "Déploiement",
            "Présentation du projet final"
        ]
    ],

    "M208" => [
        "title" => "Communication professionnelle",
        "icon" => "fa-comments",
        "description" => "Développer les compétences professionnelles nécessaires à l'insertion.",
        "topics" => [
            "Communication professionnelle",
            "Présentation",
            "Travail en équipe",
            "Préparation à l'insertion professionnelle",
            "CV",
            "Entretien",
            "Ateliers / projets scolaires"
        ]
    ]
];

/* ============================================================
   PROJECTS
   ============================================================ */

$projects = [

    [
        "id" => 1,
        "module" => "M204",
        "atelier" => "Atelier 1",
        "name" => "Agence immobilière",
        "description" => "Création d'un site web moderne permettant de présenter des biens immobiliers et leurs informations.",
        "objectives" => "Créer une interface claire, moderne et responsive.",
        "technologies" => "HTML, CSS, JavaScript",
        "skills" => "Responsive Design, UI, JavaScript",
        "image" => "https://placehold.co/900x600/f8e5e8/7b5261?text=Agence+Immobilière",
        "url" => "#",
        "github" => "https://github.com/"
    ],

    [
        "id" => 2,
        "module" => "M203",
        "atelier" => "Atelier 2",
        "name" => "Gestion des employés",
        "description" => "Application permettant d'ajouter, modifier, supprimer et consulter des employés.",
        "objectives" => "Manipuler une base MySQL avec les opérations CRUD.",
        "technologies" => "PHP, MySQL, HTML, CSS",
        "skills" => "SQL, CRUD, PHP, Bases de données",
        "image" => "https://placehold.co/900x600/eee9fb/604d91?text=Gestion+Employés",
        "url" => "#",
        "github" => "https://github.com/"
    ],

    [
        "id" => 3,
        "module" => "M205",
        "atelier" => "Atelier 3",
        "name" => "Planning web",
        "description" => "Création d'une application de planning permettant d'organiser des tâches et des événements.",
        "objectives" => "Créer une application dynamique connectée à une base de données.",
        "technologies" => "PHP, MySQL, JavaScript, Bootstrap",
        "skills" => "Back-End, DOM, SQL",
        "image" => "https://placehold.co/900x600/f8e5e8/7b5261?text=Planning+Web",
        "url" => "#",
        "github" => "https://github.com/"
    ],

    [
        "id" => 4,
        "module" => "M204",
        "atelier" => "Atelier 4",
        "name" => "Galerie responsive",
        "description" => "Création d'une galerie d'images moderne adaptée aux ordinateurs, tablettes et téléphones.",
        "objectives" => "Créer une expérience visuelle responsive.",
        "technologies" => "HTML, CSS, Bootstrap",
        "skills" => "Responsive Design, Bootstrap, CSS",
        "image" => "https://placehold.co/900x600/eee9fb/604d91?text=Galerie+Responsive",
        "url" => "#",
        "github" => "https://github.com/"
    ],

    [
        "id" => 5,
        "module" => "M201",
        "atelier" => "Atelier 5",
        "name" => "Cahier des charges web",
        "description" => "Analyse des besoins et préparation d'un projet web à partir d'un besoin fictif.",
        "objectives" => "Apprendre à analyser et organiser un projet.",
        "technologies" => "Word, Canva, Figma",
        "skills" => "Analyse, conception, organisation",
        "image" => "https://placehold.co/900x600/f8e5e8/7b5261?text=Cahier+des+charges",
        "url" => "#",
        "github" => "https://github.com/"
    ],

    [
        "id" => 6,
        "module" => "M202",
        "atelier" => "Atelier 6",
        "name" => "Projet Agile",
        "description" => "Simulation d'un projet réalisé en équipe avec une organisation inspirée de Scrum.",
        "objectives" => "Apprendre à organiser un projet avec une méthode agile.",
        "technologies" => "Trello, GitHub, Scrum",
        "skills" => "Agile, Scrum, Travail en équipe",
        "image" => "https://placehold.co/900x600/eee9fb/604d91?text=Projet+Agile",
        "url" => "#",
        "github" => "https://github.com/"
    ],

    [
        "id" => 7,
        "module" => "M206",
        "atelier" => "Atelier 7",
        "name" => "Application Cloud",
        "description" => "Mini application pensée pour être déployée dans un environnement Cloud.",
        "objectives" => "Découvrir les principes du déploiement Cloud.",
        "technologies" => "Cloud, Git, API",
        "skills" => "Cloud, Déploiement, Services web",
        "image" => "https://placehold.co/900x600/f8e5e8/7b5261?text=Application+Cloud",
        "url" => "#",
        "github" => "https://github.com/"
    ],

    [
        "id" => 8,
        "module" => "M207",
        "atelier" => "Atelier 8",
        "name" => "Portfolio professionnel",
        "description" => "Création d'un portfolio personnel présentant les compétences et projets réalisés.",
        "objectives" => "Présenter un profil professionnel de développeuse web.",
        "technologies" => "PHP, HTML, CSS, JavaScript",
        "skills" => "Full-Stack, UI/UX, Présentation",
        "image" => "https://placehold.co/900x600/eee9fb/604d91?text=Portfolio",
        "url" => "#",
        "github" => "https://github.com/"
    ],

    [
        "id" => 9,
        "module" => "M208",
        "atelier" => "Atelier 9",
        "name" => "Présentation professionnelle",
        "description" => "Préparation d'une présentation professionnelle et d'outils pour l'insertion.",
        "objectives" => "Améliorer la communication, le CV et la présentation orale.",
        "technologies" => "PowerPoint, Canva",
        "skills" => "Communication, Présentation, CV",
        "image" => "https://placehold.co/900x600/f8e5e8/7b5261?text=Communication",
        "url" => "#",
        "github" => "https://github.com/"
    ]
];

/* ============================================================
   CONTACT FORM
   ============================================================ */

$formSuccess = false;
$formErrors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $subject = trim($_POST["subject"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if ($name === "" || strlen($name) < 2) {
        $formErrors[] = "Veuillez saisir un nom valide.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $formErrors[] = "Veuillez saisir une adresse email valide.";
    }

    if ($subject === "" || strlen($subject) < 3) {
        $formErrors[] = "Veuillez saisir un sujet.";
    }

    if ($message === "" || strlen($message) < 10) {
        $formErrors[] = "Le message doit contenir au moins 10 caractères.";
    }

    if (empty($formErrors)) {
        $formSuccess = true;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description"
content="Portfolio professionnel de Douae Karmoun - Stagiaire en développement web.">

<title>DOUAE KARMOUN | Portfolio</title>

<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect"
href="https://fonts.gstatic.com"
crossorigin>

<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap"
rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
rel="stylesheet">

<style>

/* ============================================================
   VARIABLES
   ============================================================ */

:root {

    --pink:#d88b9b;
    --dark-pink:#b9677b;
    --light-pink:#f8e5e8;

    --purple:#9b82d4;
    --light-purple:#eee9fb;

    --cream:#fffaf7;
    --white:#ffffff;

    --text:#403438;
    --muted:#786a6f;

    --border:rgba(216,139,155,.20);

    --shadow:0 20px 60px rgba(86,55,68,.10);

    --radius:24px;
}

* {
    box-sizing:border-box;
}

html {
    scroll-behavior:smooth;
    scroll-padding-top:90px;
}

body {
    margin:0;
    font-family:"DM Sans",sans-serif;
    color:var(--text);
    background:var(--cream);
    overflow-x:hidden;
}

body.dark {
    --cream:#171419;
    --white:#211d22;
    --text:#f6edf0;
    --muted:#c6b7bd;
    --light-pink:#30242a;
    --light-purple:#292431;
    --border:rgba(255,255,255,.10);
    --shadow:0 20px 60px rgba(0,0,0,.35);
}

a {
    text-decoration:none;
    color:inherit;
}

button,
input,
textarea {
    font-family:inherit;
}

::selection {
    background:var(--pink);
    color:white;
}

/* ============================================================
   LOADER
   ============================================================ */

#loader {

    position:fixed;

    inset:0;

    z-index:99999;

    display:grid;

    place-items:center;

    background:
        linear-gradient(
            135deg,
            #fff8fa,
            #eee8fc,
            #f9e1e7
        );

    transition:.7s;
}

#loader.loaded {

    opacity:0;

    visibility:hidden;
}

.loader-content {
    text-align:center;
    position:relative;
}

.loader-logo {

    font-family:"Playfair Display";

    font-size:75px;

    font-weight:700;

    background:
        linear-gradient(
            135deg,
            var(--dark-pink),
            var(--purple)
        );

    -webkit-background-clip:text;

    color:transparent;

    animation:pulse 1.4s infinite;
}

.loader-ring {

    position:absolute;

    width:140px;

    height:140px;

    border:2px solid transparent;

    border-top-color:var(--pink);

    border-right-color:var(--purple);

    border-radius:50%;

    left:50%;

    top:50%;

    transform:translate(-50%,-50%);

    animation:spin 1s linear infinite;
}

.loader-content p {
    color:#786a6f;
}

/* ============================================================
   BACKGROUND
   ============================================================ */

.bg-blob {

    position:fixed;

    border-radius:50%;

    filter:blur(75px);

    opacity:.20;

    pointer-events:none;

    z-index:-2;

    animation:blob 12s ease-in-out infinite alternate;
}

.blob-1 {

    width:420px;

    height:420px;

    background:#e6a5b5;

    top:-120px;

    left:-120px;
}

.blob-2 {

    width:450px;

    height:450px;

    background:#b8a4e8;

    right:-160px;

    bottom:-50px;

    animation-delay:-5s;
}

.particles {

    position:fixed;

    inset:0;

    pointer-events:none;

    z-index:-1;
}

.particle {

    position:absolute;

    width:6px;

    height:6px;

    border-radius:50%;

    background:
        linear-gradient(
            135deg,
            var(--pink),
            var(--purple)
        );

    opacity:.25;

    animation:floatParticle linear infinite;
}

/* ============================================================
   NAVBAR
   ============================================================ */

.navbar {

    padding:17px 0;

    transition:.35s;

    background:transparent;
}

.navbar.scrolled {

    background:rgba(255,250,247,.86);

    backdrop-filter:blur(18px);

    box-shadow:
        0 8px 30px rgba(65,43,52,.08);
}

body.dark .navbar.scrolled {
    background:rgba(23,20,25,.90);
}

.navbar-brand {

    display:flex;

    align-items:center;

    gap:10px;

    font-weight:700;
}

.brand-mark {

    width:43px;

    height:43px;

    border-radius:14px;

    display:grid;

    place-items:center;

    color:white;

    background:
        linear-gradient(
            135deg,
            var(--pink),
            var(--purple)
        );

    box-shadow:
        0 8px 22px rgba(216,139,155,.30);
}

.nav-link {

    font-weight:600;

    color:var(--text);

    position:relative;

    padding:9px 12px !important;
}

.nav-link::after {

    content:"";

    position:absolute;

    bottom:3px;

    left:12px;

    width:0;

    height:2px;

    border-radius:5px;

    background:
        linear-gradient(
            90deg,
            var(--pink),
            var(--purple)
        );

    transition:.3s;
}

.nav-link:hover::after {

    width:calc(100% - 24px);
}

.theme-toggle {

    border:0;

    background:var(--light-pink);

    color:var(--dark-pink);

    width:42px;

    height:42px;

    border-radius:50%;
}

.navbar-toggler {
    border:0;
}

.navbar-toggler span {

    display:block;

    width:25px;

    height:2px;

    margin:5px;

    background:var(--text);
}

/* ============================================================
   HERO
   ============================================================ */

.hero-section {

    min-height:100vh;

    display:flex;

    align-items:center;

    position:relative;

    padding:130px 0 80px;
}

.hero-grid {

    display:grid;

    grid-template-columns:1.05fr .95fr;

    gap:50px;

    align-items:center;
}

.hero-kicker {

    font-size:.78rem;

    letter-spacing:3px;

    font-weight:800;

    color:var(--dark-pink);
}

.hero-content h1 {

    font-family:"Playfair Display";

    font-size:clamp(3.5rem,7vw,6.7rem);

    line-height:.92;

    margin:18px 0;

    background:
        linear-gradient(
            135deg,
            var(--text) 35%,
            var(--dark-pink),
            var(--purple)
        );

    -webkit-background-clip:text;

    color:transparent;
}

.hero-content h1 span {
    display:block;
}

.typing-line {

    font-size:1.35rem;

    font-weight:700;

    color:var(--dark-pink);

    min-height:35px;
}

.cursor {
    animation:blink .8s infinite;
}

.hero-text {

    font-size:1.08rem;

    line-height:1.85;

    color:var(--muted);

    max-width:650px;

    margin:22px 0;
}

.hero-actions {

    display:flex;

    gap:12px;

    flex-wrap:wrap;
}

.btn-main,
.btn-outline-main {

    border-radius:14px;

    padding:13px 21px;

    font-weight:700;

    transition:.3s;
}

.btn-main {

    color:white;

    border:0;

    background:
        linear-gradient(
            135deg,
            var(--dark-pink),
            var(--purple)
        );

    box-shadow:
        0 12px 28px rgba(185,103,123,.24);
}

.btn-main:hover {

    color:white;

    transform:
        translateY(-3px)
        scale(1.02);

    box-shadow:
        0 16px 35px rgba(185,103,123,.35);
}

.btn-outline-main {

    border:1px solid var(--border);

    background:rgba(255,255,255,.5);

    color:var(--text);
}

.btn-outline-main:hover {

    border-color:var(--pink);

    color:var(--dark-pink);

    transform:translateY(-3px);
}

.hero-mini {

    display:flex;

    gap:25px;

    margin-top:28px;

    color:var(--muted);

    font-size:.9rem;
}

.hero-mini i {
    color:var(--pink);
    margin-right:5px;
}

/* ============================================================
   HERO VISUAL
   ============================================================ */

.hero-visual {

    height:560px;

    position:relative;

    display:grid;

    place-items:center;
}

.visual-ring {

    position:absolute;

    border:1px solid var(--border);

    border-radius:50%;

    animation:spin 18s linear infinite;
}

.ring-one {

    width:440px;

    height:440px;
}

.ring-two {

    width:330px;

    height:330px;

    animation-direction:reverse;

    animation-duration:14s;
}

.code-card {

    width:min(450px,90%);

    border:
        1px solid
        rgba(255,255,255,.7);

    background:
        rgba(255,255,255,.65);

    backdrop-filter:blur(20px);

    border-radius:25px;

    box-shadow:var(--shadow);

    padding:20px;

    z-index:2;
}

.code-header {

    display:flex;

    gap:6px;

    margin-bottom:15px;
}

.code-header span {

    width:10px;

    height:10px;

    border-radius:50%;

    background:var(--rose);
}

pre {

    margin:0;

    font-size:.88rem;

    line-height:1.8;

    color:#55474d;
}

.pink {
    color:#c76d84;
}

.purple {
    color:#856bc0;
}

.green {
    color:#639b78;
}

.floating {
    animation:float 4s ease-in-out infinite;
}

.floating-bubble {

    position:absolute;

    width:58px;

    height:58px;

    border-radius:18px;

    display:grid;

    place-items:center;

    font-size:1.45rem;

    color:white;

    box-shadow:var(--shadow);

    animation:float 4s ease-in-out infinite;

    z-index:3;
}

.bubble-html {

    background:#e96868;

    top:90px;

    right:10%;
}

.bubble-js {

    background:#d2aa3a;

    bottom:95px;

    left:9%;

    animation-delay:-1s;
}

.bubble-php {

    background:#777bb3;

    bottom:100px;

    right:8%;

    animation-delay:-2s;
}

.hero-orbit {

    position:absolute;

    top:70px;

    left:12%;

    width:75px;

    height:75px;

    border-radius:50%;

    display:grid;

    place-items:center;

    background:
        linear-gradient(
            135deg,
            var(--pink),
            var(--purple)
        );

    color:white;

    font-family:"Playfair Display";

    font-size:1.4rem;

    box-shadow:
        0 15px 30px rgba(150,105,170,.25);

    animation:float 5s ease-in-out infinite;
}

/* ============================================================
   SECTIONS
   ============================================================ */

.section-padding {
    padding:105px 0;
}

.section-soft {

    background:
        linear-gradient(
            180deg,
            transparent,
            rgba(248,229,232,.48),
            transparent
        );
}

.section-heading {

    text-align:center;

    max-width:700px;

    margin:0 auto 55px;
}

.eyebrow {

    font-size:.78rem;

    letter-spacing:3px;

    font-weight:800;

    color:var(--dark-pink);
}

.section-heading h2 {

    font-family:"Playfair Display";

    font-size:
        clamp(
            2.3rem,
            4vw,
            3.7rem
        );

    margin:9px 0;
}

.section-heading h2 span {
    color:var(--dark-pink);
}

.section-heading p {

    color:var(--muted);

    line-height:1.7;
}

/* ============================================================
   ABOUT
   ============================================================ */

.about-grid {

    display:grid;

    grid-template-columns:.75fr 1.25fr;

    gap:70px;

    align-items:center;
}

.profile-card {

    position:relative;

    text-align:center;

    padding:35px;

    border-radius:30px;

    background:rgba(255,255,255,.62);

    border:1px solid var(--border);

    box-shadow:var(--shadow);

    overflow:hidden;
}

.profile-glow {

    position:absolute;

    width:230px;

    height:230px;

    background:var(--light-purple);

    filter:blur(50px);

    border-radius:50%;

    left:50%;

    top:25%;

    transform:translateX(-50%);
}

.profile-placeholder {

    width:230px;

    height:270px;

    margin:0 auto 25px;

    border-radius:
        120px 120px 35px 35px;

    display:grid;

    place-items:center;

    background:
        linear-gradient(
            145deg,
            var(--light-pink),
            var(--light-purple)
        );

    font-size:5rem;

    color:var(--dark-pink);

    position:relative;
}

.profile-name {

    font-family:"Playfair Display";

    font-size:1.5rem;
}

.profile-role {

    color:var(--muted);

    margin-top:5px;
}

.mini-info {

    display:grid;

    grid-template-columns:
        repeat(3,1fr);

    gap:12px;

    margin-bottom:25px;
}

.mini-info div {

    padding:16px;

    border:1px solid var(--border);

    border-radius:17px;

    background:rgba(255,255,255,.4);
}

.mini-info span {

    display:block;

    color:var(--muted);

    font-size:.8rem;

    margin-bottom:4px;
}

.mini-info strong {
    font-size:.85rem;
}

.about-content > p {

    color:var(--muted);

    line-height:1.9;
}

.quality-grid {

    display:grid;

    grid-template-columns:
        repeat(3,1fr);

    gap:12px;

    margin-top:25px;
}

.quality-card {

    display:flex;

    gap:10px;

    align-items:center;

    padding:15px;

    border-radius:16px;

    background:var(--white);

    border:1px solid var(--border);

    font-size:.85rem;

    font-weight:600;

    transition:.3s;
}

.quality-card:hover {

    transform:translateY(-4px);

    box-shadow:var(--shadow);
}

.quality-card i {
    color:var(--dark-pink);
}

/* ============================================================
   SKILLS
   ============================================================ */

.skills-grid {

    display:grid;

    grid-template-columns:
        repeat(2,1fr);

    gap:15px;
}

.skill-card {

    padding:22px;

    border-radius:20px;

    background:var(--white);

    border:1px solid var(--border);

    box-shadow:
        0 8px 30px rgba(70,50,60,.05);
}

.skill-top {

    display:grid;

    grid-template-columns:
        42px 1fr auto;

    align-items:center;

    gap:12px;

    margin-bottom:15px;
}

.skill-icon {

    width:42px;

    height:42px;

    border-radius:13px;

    background:var(--light-pink);

    color:var(--dark-pink);

    display:grid;

    place-items:center;
}

.skill-name {
    font-weight:700;
}

.skill-top > span {

    color:var(--dark-pink);

    font-weight:800;
}

.progress-track {

    height:7px;

    background:var(--light-purple);

    border-radius:20px;

    overflow:hidden;
}

.progress-fill {

    height:100%;

    width:0;

    background:
        linear-gradient(
            90deg,
            var(--pink),
            var(--purple)
        );

    border-radius:20px;

    transition:
        width 1.4s
        cubic-bezier(.2,.8,.2,1);
}

/* ============================================================
   MODULES
   ============================================================ */

.modules-grid {

    display:grid;

    grid-template-columns:
        repeat(4,1fr);

    gap:18px;
}

.module-card {

    position:relative;

    padding:28px;

    border-radius:24px;

    background:var(--white);

    border:1px solid var(--border);

    box-shadow:
        0 10px 35px rgba(70,50,60,.06);

    overflow:hidden;

    transition:.4s;
}

.module-card:hover {

    transform:translateY(-8px);

    box-shadow:var(--shadow);

    border-color:
        rgba(216,139,155,.4);
}

.module-number {

    position:absolute;

    right:18px;

    top:16px;

    font-weight:900;

    color:rgba(185,103,123,.13);

    font-size:2.5rem;
}

.module-icon {

    width:55px;

    height:55px;

    border-radius:17px;

    display:grid;

    place-items:center;

    color:white;

    background:
        linear-gradient(
            135deg,
            var(--pink),
            var(--purple)
        );

    margin-bottom:20px;
}

.module-card h3 {

    font-family:"Playfair Display";

    font-size:1.35rem;

    min-height:58px;
}

.module-card p {

    font-size:.9rem;

    color:var(--muted);

    line-height:1.65;
}

.module-card ul {

    list-style:none;

    padding:0;

    margin:20px 0;
}

.module-card li {

    font-size:.82rem;

    color:var(--muted);

    margin:9px 0;

    display:flex;

    gap:8px;
}

.module-card li i {

    color:var(--pink);

    margin-top:3px;
}

.module-link {

    font-size:.85rem;

    font-weight:800;

    color:var(--dark-pink);
}

/* ============================================================
   PROJECTS
   ============================================================ */

.filter-wrap {

    display:flex;

    justify-content:center;

    gap:8px;

    flex-wrap:wrap;

    margin-bottom:30px;
}

.filter-btn {

    border:1px solid var(--border);

    background:var(--white);

    padding:9px 16px;

    border-radius:30px;

    font-weight:700;

    color:var(--muted);

    transition:.3s;
}

.filter-btn:hover,
.filter-btn.active {

    background:
        linear-gradient(
            135deg,
            var(--pink),
            var(--purple)
        );

    color:white;

    border-color:transparent;
}

.projects-grid {

    display:grid;

    grid-template-columns:
        repeat(3,1fr);

    gap:22px;
}

.project-card {

    background:var(--white);

    border:1px solid var(--border);

    border-radius:24px;

    overflow:hidden;

    box-shadow:
        0 10px 35px rgba(70,50,60,.06);

    transition:.4s;
}

.project-card:hover {

    transform:translateY(-7px);

    box-shadow:var(--shadow);
}

.project-card.hidden {
    display:none;
}

.project-image-wrap {

    height:220px;

    position:relative;

    overflow:hidden;
}

.project-image {

    width:100%;

    height:100%;

    object-fit:cover;

    transition:.6s;
}

.project-card:hover .project-image {
    transform:scale(1.07);
}

.project-module {

    position:absolute;

    top:15px;

    left:15px;

    background:
        rgba(255,255,255,.9);

    backdrop-filter:blur(10px);

    padding:6px 11px;

    border-radius:20px;

    font-weight:800;

    font-size:.72rem;

    color:var(--dark-pink);
}

.project-overlay {

    position:absolute;

    inset:0;

    background:
        rgba(61,39,49,.38);

    display:grid;

    place-items:center;

    opacity:0;

    transition:.3s;
}

.project-card:hover .project-overlay {
    opacity:1;
}

.view-project {

    border:0;

    background:#fff;

    color:var(--dark-pink);

    padding:11px 17px;

    border-radius:12px;

    font-weight:800;
}

.project-body {
    padding:22px;
}

.atelier {

    font-size:.72rem;

    letter-spacing:1px;

    color:var(--purple);

    font-weight:800;
}

.project-body h3 {

    font-family:"Playfair Display";

    font-size:1.4rem;

    margin:8px 0;
}

.project-body p {

    color:var(--muted);

    font-size:.87rem;

    line-height:1.65;
}

.tech-list {

    display:flex;

    gap:6px;

    flex-wrap:wrap;

    margin:15px 0;
}

.tech-list span {

    font-size:.7rem;

    background:var(--light-pink);

    padding:5px 8px;

    border-radius:7px;

    color:var(--dark-pink);

    font-weight:700;
}

.text-btn {

    padding:0;

    background:none;

    border:0;

    color:var(--dark-pink);

    font-weight:800;
}

/* ============================================================
   CONTACT
   ============================================================ */

.contact-grid {

    display:grid;

    grid-template-columns:.8fr 1.2fr;

    gap:40px;

    align-items:start;
}

.contact-card {

    display:flex;

    align-items:center;

    gap:15px;

    padding:18px;

    border-radius:18px;

    background:var(--white);

    border:1px solid var(--border);

    margin-bottom:13px;
}

.contact-icon {

    width:48px;

    height:48px;

    border-radius:15px;

    background:var(--light-pink);

    display:grid;

    place-items:center;

    color:var(--dark-pink);
}

.contact-card span {

    display:block;

    color:var(--muted);

    font-size:.76rem;
}

.contact-card strong,
.contact-card a {

    font-weight:700;

    font-size:.9rem;
}

.contact-socials {

    display:flex;

    gap:10px;

    margin-top:22px;
}

.contact-socials a,
.socials a {

    width:45px;

    height:45px;

    border-radius:14px;

    display:grid;

    place-items:center;

    background:var(--white);

    border:1px solid var(--border);

    transition:.3s;
}

.contact-socials a:hover,
.socials a:hover {

    background:
        linear-gradient(
            135deg,
            var(--pink),
            var(--purple)
        );

    color:white;

    transform:
        translateY(-4px)
        rotate(3deg);
}

.contact-form-wrap {

    background:var(--white);

    border:1px solid var(--border);

    border-radius:27px;

    padding:28px;

    box-shadow:var(--shadow);
}

.form-row {

    display:grid;

    grid-template-columns:1fr 1fr;

    gap:15px;
}

.form-group {
    margin-bottom:17px;
}

.form-group label {

    font-weight:700;

    font-size:.82rem;

    margin-bottom:7px;

    display:block;
}

.form-group input,
.form-group textarea {

    width:100%;

    border:1px solid var(--border);

    background:var(--cream);

    border-radius:13px;

    padding:13px 15px;

    color:var(--text);

    outline:none;

    transition:.3s;
}

.form-group input:focus,
.form-group textarea:focus {

    border-color:var(--pink);

    box-shadow:
        0 0 0 4px
        rgba(216,139,155,.1);
}

.error-box {

    background:#fff0f0;

    border:1px solid #f1b2b2;

    color:#a74b4b;

    padding:15px;

    border-radius:13px;

    margin-bottom:18px;

    font-size:.85rem;
}

.success-message {

    text-align:center;

    padding:45px 20px;
}

.success-icon {

    width:75px;

    height:75px;

    border-radius:50%;

    margin:0 auto 18px;

    display:grid;

    place-items:center;

    color:white;

    background:
        linear-gradient(
            135deg,
            #73c995,
            #4cae73
        );

    font-size:2rem;

    animation:successPop .6s;
}

.success-message h3 {

    font-family:"Playfair Display";

    font-size:2rem;
}

.success-message p {
    color:var(--muted);
}

/* ============================================================
   FOOTER
   ============================================================ */

.footer {

    padding:45px 0 25px;

    border-top:1px solid var(--border);

    background:
        rgba(255,255,255,.35);
}

.footer-grid {

    display:flex;

    justify-content:space-between;

    align-items:center;
}

.footer-brand {

    font-family:"Playfair Display";

    font-size:1.3rem;
}

.footer p {

    color:var(--muted);

    margin:5px 0;
}

.socials {

    display:flex;

    gap:9px;
}

.footer-bottom {

    text-align:center;

    border-top:1px solid var(--border);

    margin-top:30px;

    padding-top:20px;

    color:var(--muted);

    font-size:.78rem;
}

/* ============================================================
   BACK TO TOP
   ============================================================ */

.back-top {

    position:fixed;

    right:22px;

    bottom:22px;

    width:46px;

    height:46px;

    border:0;

    border-radius:15px;

    color:white;

    background:
        linear-gradient(
            135deg,
            var(--pink),
            var(--purple)
        );

    box-shadow:var(--shadow);

    opacity:0;

    visibility:hidden;

    transform:translateY(15px);

    transition:.3s;

    z-index:50;
}

.back-top.show {

    opacity:1;

    visibility:visible;

    transform:none;
}

/* ============================================================
   MODAL
   ============================================================ */

.project-modal {

    background:var(--white);

    color:var(--text);

    border:1px solid var(--border);

    border-radius:25px;

    overflow:hidden;
}

.modal-project-image {

    width:100%;

    height:300px;

    object-fit:cover;
}

.modal-close {

    position:absolute;

    right:15px;

    top:15px;

    z-index:2;

    width:40px;

    height:40px;

    border:0;

    border-radius:50%;

    background:rgba(255,255,255,.85);

    color:#493c42;
}

.project-modal h3 {

    font-family:"Playfair Display";

    font-size:2rem;

    margin:14px 0 8px;
}

.project-modal p {

    color:var(--muted);

    line-height:1.7;
}

.module-badge {

    display:inline-block;

    background:var(--light-pink);

    color:var(--dark-pink);

    font-weight:800;

    padding:6px 11px;

    border-radius:20px;
}

.modal-info-grid {

    display:grid;

    grid-template-columns:
        repeat(3,1fr);

    gap:15px;

    margin-top:22px;
}

.modal-info-grid > div {

    padding:15px;

    border:1px solid var(--border);

    border-radius:15px;
}

.modal-info-grid strong {
    font-size:.82rem;
}

.modal-info-grid p {

    font-size:.82rem;

    margin:7px 0 0;
}

/* ============================================================
   REVEAL
   ============================================================ */

.reveal {

    opacity:0;

    transform:translateY(25px);

    transition:
        opacity .7s ease,
        transform .7s ease;
}

.reveal.visible {

    opacity:1;

    transform:none;
}

.slide-left {
    transform:translateX(-35px);
}

.slide-right {
    transform:translateX(35px);
}

.slide-left.visible,
.slide-right.visible {
    transform:none;
}

/* ============================================================
   ANIMATIONS
   ============================================================ */

@keyframes spin {

    to {
        transform:rotate(360deg);
    }
}

@keyframes pulse {

    50% {
        transform:scale(1.08);
    }
}

@keyframes blink {

    50% {
        opacity:0;
    }
}

@keyframes float {

    50% {
        transform:translateY(-15px);
    }
}

@keyframes blob {

    to {
        transform:
            translate(80px,50px)
            scale(1.15);
    }
}

@keyframes floatParticle {

    to {
        transform:
            translateY(-110vh)
            rotate(360deg);
    }
}

@keyframes successPop {

    0% {
        transform:scale(0);
    }

    80% {
        transform:scale(1.12);
    }

    100% {
        transform:scale(1);
    }
}

/* ============================================================
   RESPONSIVE
   ============================================================ */

@media(max-width:1100px) {

    .modules-grid {
        grid-template-columns:repeat(2,1fr);
    }

    .projects-grid {
        grid-template-columns:repeat(2,1fr);
    }
}

@media(max-width:991px) {

    .hero-grid,
    .about-grid,
    .contact-grid {
        grid-template-columns:1fr;
    }

    .hero-content {
        text-align:center;
    }

    .hero-text {
        margin-left:auto;
        margin-right:auto;
    }

    .hero-actions,
    .hero-mini {
        justify-content:center;
    }

    .hero-visual {
        height:500px;
    }

    .navbar-collapse {

        background:var(--white);

        padding:15px;

        border-radius:18px;

        margin-top:12px;

        box-shadow:var(--shadow);
    }
}

@media(max-width:767px) {

    .section-padding {
        padding:75px 0;
    }

    .hero-section {
        padding-top:120px;
    }

    .hero-content h1 {
        font-size:3.5rem;
    }

    .hero-visual {
        height:400px;
    }

    .ring-one {
        width:320px;
        height:320px;
    }

    .ring-two {
        width:240px;
        height:240px;
    }

    .projects-grid,
    .skills-grid,
    .modules-grid {
        grid-template-columns:1fr;
    }

    .quality-grid {
        grid-template-columns:1fr 1fr;
    }

    .form-row,
    .modal-info-grid {
        grid-template-columns:1fr;
    }

    .footer-grid {

        flex-direction:column;

        gap:20px;

        text-align:center;
    }

    .modal-project-image {
        height:220px;
    }
}

@media(max-width:450px) {

    .hero-content h1 {
        font-size:2.9rem;
    }

    .quality-grid {
        grid-template-columns:1fr;
    }

    .mini-info {
        grid-template-columns:1fr;
    }

    .hero-mini {

        flex-direction:column;

        gap:8px;
    }

    .hero-actions .btn {
        width:100%;
    }
}

@media(prefers-reduced-motion:reduce) {

    *,
    *::before,
    *::after {

        animation-duration:.01ms !important;

        animation-iteration-count:1 !important;

        scroll-behavior:auto !important;

        transition-duration:.01ms !important;
    }

    .reveal {

        opacity:1 !important;

        transform:none !important;
    }
}

</style>

</head>

<body>

<!-- ============================================================
     LOADER
     ============================================================ -->

<div id="loader">

    <div class="loader-content">

        <div class="loader-logo">
            DK
        </div>

        <div class="loader-ring"></div>

        <p>
            Création de mon univers...
        </p>

    </div>

</div>

<div class="bg-blob blob-1"></div>

<div class="bg-blob blob-2"></div>

<div class="particles"></div>


<!-- ============================================================
     NAVBAR
     ============================================================ -->

<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">

    <div class="container">

        <a class="navbar-brand" href="#home">

            <span class="brand-mark">
                DK
            </span>

            <span>
                Douae Karmoun
            </span>

        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navMenu">

            <span></span>
            <span></span>
            <span></span>

        </button>

        <div
            class="collapse navbar-collapse"
            id="navMenu">

            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">

                <li>
                    <a class="nav-link" href="#home">
                        Accueil
                    </a>
                </li>

                <li>
                    <a class="nav-link" href="#about">
                        À propos
                    </a>
                </li>

                <li>
                    <a class="nav-link" href="#skills">
                        Compétences
                    </a>
                </li>

                <li>
                    <a class="nav-link" href="#modules">
                        Modules
                    </a>
                </li>

                <li>
                    <a class="nav-link" href="#projects">
                        Projets
                    </a>
                </li>

                <li>
                    <a class="nav-link" href="#contact">
                        Contact
                    </a>
                </li>

                <li>

                    <button
                        class="theme-toggle"
                        id="themeToggle">

                        <i class="fa-solid fa-moon"></i>

                    </button>

                </li>

            </ul>

        </div>

    </div>

</nav>


<main>

<!-- ============================================================
     HERO
     ============================================================ -->

<section
    id="home"
    class="hero-section">

    <div class="container">

        <div class="hero-grid">

            <div class="hero-content">

                <div class="hero-kicker reveal">
                    PORTFOLIO • 2026
                </div>

                <h1 class="reveal">

                    DOUAE
                    <span>KARMOUN</span>

                </h1>

                <div class="typing-line reveal">

                    <span id="typing"></span>

                    <span class="cursor">
                        |
                    </span>

                </div>

                <p class="hero-text reveal">

                    Bienvenue sur mon portfolio.
                    Découvrez mon parcours, mes compétences
                    et les projets que j'ai réalisés au cours
                    de ma formation en développement web.

                </p>

                <div class="hero-actions reveal">

                    <a
                        href="#projects"
                        class="btn btn-main">

                        Découvrir mes projets

                        <i class="fa-solid fa-arrow-down"></i>

                    </a>

                    <a
                        href="#contact"
                        class="btn btn-outline-main">

                        Me contacter

                        <i class="fa-regular fa-envelope"></i>

                    </a>

                </div>

                <div class="hero-mini reveal">

                    <span>
                        <i class="fa-solid fa-location-dot"></i>
                        Morocco
                    </span>

                    <span>
                        <i class="fa-solid fa-code"></i>
                        Web Development
                    </span>

                </div>

            </div>


            <div class="hero-visual reveal">

                <div class="visual-ring ring-one"></div>

                <div class="visual-ring ring-two"></div>

                <div class="code-card floating">

                    <div class="code-header">

                        <span></span>
                        <span></span>
                        <span></span>

                    </div>

<pre><code><span class="pink">&lt;developer</span>
<span class="purple">name</span>=<span class="green">"Douae"</span><span class="pink">&gt;</span>

  <span class="purple">creative</span>: <span class="green">true</span>,
  <span class="purple">coding</span>: <span class="green">"∞"</span>,
  <span class="purple">dream</span>: <span class="green">"build"</span>

<span class="pink">&lt;/developer&gt;</span></code></pre>

                </div>

                <div class="floating-bubble bubble-html">
                    <i class="fa-brands fa-html5"></i>
                </div>

                <div class="floating-bubble bubble-js">
                    <i class="fa-brands fa-js"></i>
                </div>

                <div class="floating-bubble bubble-php">
                    <i class="fa-brands fa-php"></i>
                </div>

                <div class="hero-orbit">
                    DK
                </div>

            </div>

        </div>

    </div>

</section>


<!-- ============================================================
     ABOUT
     ============================================================ -->

<section
    id="about"
    class="section-padding">

    <div class="container">

        <div class="section-heading reveal">

            <span class="eyebrow">
                QUI SUIS-JE ?
            </span>

            <h2>
                À propos de
                <span>moi</span>
            </h2>

            <p>
                Un parcours construit autour de la créativité,
                de la technologie et de l'envie d'apprendre.
            </p>

        </div>


        <div class="about-grid">

            <div class="profile-card reveal slide-left">

                <div class="profile-glow"></div>

                <div class="profile-placeholder">

                    <i class="fa-solid fa-user"></i>

                </div>

                <div class="profile-name">
                    DOUAE KARMOUN
                </div>

                <div class="profile-role">
                    Stagiaire • Développement Web
                </div>

            </div>


            <div class="about-content reveal slide-right">

                <div class="mini-info">

                    <div>

                        <span>
                            Nom
                        </span>

                        <strong>
                            DOUAE KARMOUN
                        </strong>

                    </div>

                    <div>

                        <span>
                            Statut
                        </span>

                        <strong>
                            Stagiaire
                        </strong>

                    </div>

                    <div>

                        <span>
                            Domaine
                        </span>

                        <strong>
                            Développement Web
                        </strong>

                    </div>

                </div>

                <p>

                    Je suis une étudiante motivée, créative
                    et ambitieuse dans le domaine du développement web.
                    Je m'intéresse à la technologie, à la programmation
                    et à la création de sites et d'applications modernes,
                    utiles et agréables à utiliser.

                </p>

                <p>

                    Ma formation me permet de développer progressivement
                    mes compétences en Front-End, Back-End,
                    bases de données, gestion de projet
                    et nouvelles technologies.

                </p>


                <div class="quality-grid">

                    <?php

                    $qualities = [

                        ["fa-diagram-project","Gestion de projet"],

                        ["fa-wand-magic-sparkles","Créativité"],

                        ["fa-puzzle-piece","Problem solving"],

                        ["fa-code","Développement web"],

                        ["fa-microchip","Nouvelles technologies"]

                    ];

                    foreach ($qualities as $q):

                    ?>

                    <div class="quality-card">

                        <i class="fa-solid <?= e($q[0]) ?>"></i>

                        <span>
                            <?= e($q[1]) ?>
                        </span>

                    </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ============================================================
     SKILLS
     ============================================================ -->

<section
    id="skills"
    class="section-padding section-soft">

    <div class="container">

        <div class="section-heading reveal">

            <span class="eyebrow">
                MON SAVOIR-FAIRE
            </span>

            <h2>
                Mes
                <span>compétences</span>
            </h2>

            <p>
                Des compétences techniques et professionnelles
                développées pendant ma formation.
            </p>

        </div>


        <div class="skills-grid">

            <?php

            $skills = [

                ["Gestion de projet",88,"fa-diagram-project"],

                ["Méthodes agiles",82,"fa-arrows-rotate"],

                ["Bases de données",84,"fa-database"],

                ["HTML / CSS",94,"fa-code"],

                ["JavaScript",82,"fa-js"],

                ["Front-End",90,"fa-laptop-code"],

                ["Back-End",78,"fa-server"],

                ["PHP",80,"fa-php"],

                ["MySQL",84,"fa-database"],

                ["Cloud / Cloud Native",68,"fa-cloud"],

                ["Communication professionnelle",86,"fa-comments"]

            ];

            foreach ($skills as $skill):

            ?>

            <div class="skill-card reveal">

                <div class="skill-top">

                    <div class="skill-icon">

                        <i class="fa-solid <?= e($skill[2]) ?>"></i>

                    </div>

                    <div class="skill-name">
                        <?= e($skill[0]) ?>
                    </div>

                    <span>
                        <?= (int)$skill[1] ?>%
                    </span>

                </div>

                <div class="progress-track">

                    <div
                        class="progress-fill"
                        data-width="<?= (int)$skill[1] ?>%">

                    </div>

                </div>

            </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- ============================================================
     MODULES
     ============================================================ -->

<section
    id="modules"
    class="section-padding">

    <div class="container">

        <div class="section-heading reveal">

            <span class="eyebrow">
                MA FORMATION
            </span>

            <h2>
                Mes
                <span>modules</span>
            </h2>

            <p>
                Les modules M201 à M208 qui structurent
                ma formation en développement web.
            </p>

        </div>


        <div class="modules-grid">

            <?php foreach ($modules as $code => $module): ?>

            <article class="module-card reveal">

                <div class="module-number">
                    <?= e($code) ?>
                </div>

                <div class="module-icon">

                    <i class="fa-solid <?= e($module["icon"]) ?>"></i>

                </div>

                <h3>
                    <?= e($module["title"]) ?>
                </h3>

                <p>
                    <?= e($module["description"]) ?>
                </p>

                <ul>

                    <?php foreach ($module["topics"] as $topic): ?>

                    <li>

                        <i class="fa-solid fa-check"></i>

                        <?= e($topic) ?>

                    </li>

                    <?php endforeach; ?>

                </ul>

                <a
                    href="#projects"
                    class="module-link"
                    data-module-link="<?= e($code) ?>">

                    Voir les ateliers

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- ============================================================
     PROJECTS
     ============================================================ -->

<section
    id="projects"
    class="section-padding section-soft">

    <div class="container">

        <div class="section-heading reveal">

            <span class="eyebrow">
                MES RÉALISATIONS
            </span>

            <h2>
                Projets &
                <span>ateliers</span>
            </h2>

            <p>
                Une sélection de projets scolaires réalisés
                pendant ma formation.
            </p>

        </div>


        <div class="filter-wrap reveal">

            <button
                class="filter-btn active"
                data-filter="all">

                Tous

            </button>

            <?php foreach ($modules as $code => $module): ?>

            <button
                class="filter-btn"
                data-filter="<?= e($code) ?>">

                <?= e($code) ?>

            </button>

            <?php endforeach; ?>

        </div>


        <div
            class="projects-grid"
            id="projectGrid">

            <?php foreach ($projects as $project): ?>

            <article
                class="project-card reveal"
                data-module="<?= e($project["module"]) ?>">

                <div class="project-image-wrap">

                    <img
                        src="<?= e($project["image"]) ?>"
                        alt="<?= e($project["name"]) ?>"
                        class="project-image">

                    <span class="project-module">

                        <?= e($project["module"]) ?>

                    </span>

                    <div class="project-overlay">

                        <button
                            class="view-project"
                            data-project-id="<?= (int)$project["id"] ?>">

                            Voir les détails

                        </button>

                    </div>

                </div>


                <div class="project-body">

                    <span class="atelier">
                        <?= e($project["atelier"]) ?>
                    </span>

                    <h3>
                        <?= e($project["name"]) ?>
                    </h3>

                    <p>
                        <?= e($project["description"]) ?>
                    </p>

                    <div class="tech-list">

                        <?php

                        foreach (
                            array_map(
                                "trim",
                                explode(",", $project["technologies"])
                            )
                            as $tech
                        ):

                        ?>

                        <span>
                            <?= e($tech) ?>
                        </span>

                        <?php endforeach; ?>

                    </div>

                    <button
                        class="text-btn view-project"
                        data-project-id="<?= (int)$project["id"] ?>">

                        Voir le projet

                        <i class="fa-solid fa-arrow-right"></i>

                    </button>

                </div>

            </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- ============================================================
     CONTACT
     ============================================================ -->

<section
    id="contact"
    class="section-padding">

    <div class="container">

        <div class="section-heading reveal">

            <span class="eyebrow">
                RESTONS EN CONTACT
            </span>

            <h2>
                Me
                <span>contacter</span>
            </h2>

            <p>
                Une question, un projet ou simplement envie
                d'échanger ? N'hésitez pas à m'écrire.
            </p>

        </div>


        <div class="contact-grid">

            <div class="contact-info reveal slide-left">

                <div class="contact-card">

                    <div class="contact-icon">

                        <i class="fa-solid fa-envelope"></i>

                    </div>

                    <div>

                        <span>
                            Email
                        </span>

                        <a href="mailto:<?= e($site["email"]) ?>">

                            <?= e($site["email"]) ?>

                        </a>

                    </div>

                </div>


                <div class="contact-card">

                    <div class="contact-icon">

                        <i class="fa-solid fa-phone"></i>

                    </div>

                    <div>

                        <span>
                            Téléphone
                        </span>

                        <strong>
                            <?= e($site["phone"]) ?>
                        </strong>

                    </div>

                </div>


                <div class="contact-card">

                    <div class="contact-icon">

                        <i class="fa-solid fa-location-dot"></i>

                    </div>

                    <div>

                        <span>
                            Localisation
                        </span>

                        <strong>
                            <?= e($site["location"]) ?>
                        </strong>

                    </div>

                </div>


                <div class="contact-socials">

                    <a
                        href="<?= e($site["github"]) ?>"
                        target="_blank">

                        <i class="fa-brands fa-github"></i>

                    </a>

                    <a
                        href="<?= e($site["linkedin"]) ?>"
                        target="_blank">

                        <i class="fa-brands fa-linkedin-in"></i>

                    </a>

                    <a
                        href="<?= e($site["instagram"]) ?>"
                        target="_blank">

                        <i class="fa-brands fa-instagram"></i>

                    </a>

                </div>

            </div>


            <div class="contact-form-wrap reveal slide-right">

                <?php if ($formSuccess): ?>

                    <div class="success-message">

                        <div class="success-icon">

                            <i class="fa-solid fa-check"></i>

                        </div>

                        <h3>
                            Message envoyé !
                        </h3>

                        <p>
                            Merci pour votre message.
                            Je reviendrai vers vous prochainement.
                        </p>

                    </div>

                <?php else: ?>


                    <?php if (!empty($formErrors)): ?>

                    <div class="error-box">

                        <?php foreach ($formErrors as $error): ?>

                            <div>

                                <i class="fa-solid fa-circle-exclamation"></i>

                                <?= e($error) ?>

                            </div>

                        <?php endforeach; ?>

                    </div>

                    <?php endif; ?>


                    <form
                        method="POST"
                        id="contactForm"
                        novalidate>

                        <div class="form-row">

                            <div class="form-group">

                                <label for="name">
                                    Nom
                                </label>

                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    minlength="2"
                                    required
                                    placeholder="Votre nom">

                            </div>


                            <div class="form-group">

                                <label for="email">
                                    Email
                                </label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    required
                                    placeholder="votre@email.com">

                            </div>

                        </div>


                        <div class="form-group">

                            <label for="subject">
                                Sujet
                            </label>

                            <input
                                type="text"
                                id="subject"
                                name="subject"
                                minlength="3"
                                required
                                placeholder="Sujet du message">

                        </div>


                        <div class="form-group">

                            <label for="message">
                                Message
                            </label>

                            <textarea
                                id="message"
                                name="message"
                                rows="6"
                                minlength="10"
                                required
                                placeholder="Votre message..."></textarea>

                        </div>


                        <button
                            type="submit"
                            class="btn btn-main">

                            Envoyer le message

                            <i class="fa-solid fa-paper-plane"></i>

                        </button>

                    </form>

                <?php endif; ?>

            </div>

        </div>

    </div>

</section>

</main>


<!-- ============================================================
     FOOTER
     ============================================================ -->

<footer class="footer">

    <div class="container">

        <div class="footer-grid">

            <div>

                <div class="footer-brand">
                    DOUAE KARMOUN
                </div>

                <p>
                    Stagiaire en développement web
                </p>

            </div>


            <div class="socials">

                <a
                    href="<?= e($site["github"]) ?>"
                    target="_blank">

                    <i class="fa-brands fa-github"></i>

                </a>

                <a
                    href="<?= e($site["linkedin"]) ?>"
                    target="_blank">

                    <i class="fa-brands fa-linkedin-in"></i>

                </a>

                <a
                    href="<?= e($site["instagram"]) ?>"
                    target="_blank">

                    <i class="fa-brands fa-instagram"></i>

                </a>

            </div>

        </div>


        <div class="footer-bottom">

            DOUAE KARMOUN © 2026 — All Rights Reserved

        </div>

    </div>

</footer>


<!-- BACK TO TOP -->

<button
    id="backTop"
    class="back-top">

    <i class="fa-solid fa-arrow-up"></i>

</button>


<!-- ============================================================
     PROJECT MODAL
     ============================================================ -->

<div
    class="modal fade"
    id="projectModal"
    tabindex="-1">

    <div class="modal-dialog modal-lg modal-dialog-centered">

        <div class="modal-content project-modal">

            <button
                type="button"
                class="modal-close"
                data-bs-dismiss="modal">

                <i class="fa-solid fa-xmark"></i>

            </button>

            <img
                id="modalImage"
                src=""
                alt="Projet"
                class="modal-project-image">

            <div class="modal-body p-4 p-md-5">

                <span
                    id="modalModule"
                    class="module-badge">
                </span>

                <h3 id="modalTitle"></h3>

                <p id="modalDescription"></p>


                <div class="modal-info-grid">

                    <div>

                        <strong>
                            Objectifs
                        </strong>

                        <p id="modalObjectives"></p>

                    </div>


                    <div>

                        <strong>
                            Technologies
                        </strong>

                        <p id="modalTechnologies"></p>

                    </div>


                    <div>

                        <strong>
                            Compétences acquises
                        </strong>

                        <p id="modalSkills"></p>

                    </div>

                </div>


                <div class="d-flex gap-2 flex-wrap mt-4">

                    <a
                        id="modalUrl"
                        href="#"
                        target="_blank"
                        class="btn btn-main">

                        Voir le projet

                        <i class="fa-solid fa-arrow-up-right-from-square"></i>

                    </a>

                    <a
                        id="modalGithub"
                        href="#"
                        target="_blank"
                        class="btn btn-outline-main">

                        <i class="fa-brands fa-github"></i>

                        Voir le code

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<script>

/* ============================================================
   PROJECT DATA
   ============================================================ */

const projects = <?= json_encode(
    $projects,
    JSON_UNESCAPED_UNICODE |
    JSON_UNESCAPED_SLASHES
) ?>;


/* ============================================================
   LOADER
   ============================================================ */

window.addEventListener("load", () => {

    setTimeout(() => {

        document
            .getElementById("loader")
            .classList.add("loaded");

    }, 700);

});


/* ============================================================
   PARTICLES
   ============================================================ */

const particleBox =
    document.querySelector(".particles");

if (
    particleBox &&
    !window.matchMedia(
        "(prefers-reduced-motion: reduce)"
    ).matches
) {

    for (let i = 0; i < 25; i++) {

        const particle =
            document.createElement("span");

        particle.className = "particle";

        particle.style.left =
            Math.random() * 100 + "%";

        particle.style.top =
            65 + Math.random() * 45 + "%";

        particle.style.animationDuration =
            8 + Math.random() * 10 + "s";

        particle.style.animationDelay =
            -Math.random() * 12 + "s";

        particleBox.appendChild(particle);
    }
}


/* ============================================================
   NAVBAR
   ============================================================ */

const nav =
    document.getElementById("mainNav");

const back =
    document.getElementById("backTop");

function onScroll() {

    if (window.scrollY > 40) {

        nav.classList.add("scrolled");

    } else {

        nav.classList.remove("scrolled");

    }


    if (window.scrollY > 500) {

        back.classList.add("show");

    } else {

        back.classList.remove("show");

    }

}

window.addEventListener(
    "scroll",
    onScroll,
    { passive:true }
);

onScroll();


/* ============================================================
   BACK TO TOP
   ============================================================ */

back.addEventListener(
    "click",
    () => {

        window.scrollTo({
            top:0,
            behavior:"smooth"
        });

    }
);


/* ============================================================
   TYPING EFFECT
   ============================================================ */

const typing =
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

    if (!typing) return;

    const word =
        words[wordIndex];


    if (deleting) {

        typing.textContent =
            word.substring(
                0,
                charIndex--
            );

    } else {

        typing.textContent =
            word.substring(
                0,
                charIndex++
            );
    }


    let speed =
        deleting ? 55 : 90;


    if (
        !deleting &&
        charIndex > word.length
    ) {

        deleting = true;

        speed = 1300;

    }


    if (
        deleting &&
        charIndex < 0
    ) {

        deleting = false;

        wordIndex =
            (wordIndex + 1)
            % words.length;

        charIndex = 0;

        speed = 300;
    }


    setTimeout(
        typeEffect,
        speed
    );
}

typeEffect();


/* ============================================================
   SCROLL REVEAL
   ============================================================ */

const observer =
    new IntersectionObserver(
        (entries) => {

            entries.forEach(
                (entry) => {

                    if (
                        entry.isIntersecting
                    ) {

                        entry.target
                            .classList
                            .add("visible");


                        if (
                            entry.target
                                .classList
                                .contains(
                                    "skill-card"
                                )
                        ) {

                            const fill =
                                entry.target
                                .querySelector(
                                    ".progress-fill"
                                );

                            if (fill) {

                                fill.style.width =
                                    fill.dataset.width;

                            }

                        }


                        observer.unobserve(
                            entry.target
                        );
                    }

                });

        },
        {
            threshold:.12
        }
    );


document
    .querySelectorAll(".reveal")
    .forEach(
        element =>
            observer.observe(element)
    );


/* ============================================================
   DARK MODE
   ============================================================ */

const themeToggle =
    document.getElementById(
        "themeToggle"
    );

const savedTheme =
    localStorage.getItem(
        "douae-theme"
    );


if (savedTheme === "dark") {

    document.body
        .classList
        .add("dark");

}


function updateThemeIcon() {

    if (
        document.body
            .classList
            .contains("dark")
    ) {

        themeToggle.innerHTML =
            '<i class="fa-solid fa-sun"></i>';

    } else {

        themeToggle.innerHTML =
            '<i class="fa-solid fa-moon"></i>';

    }

}

updateThemeIcon();


themeToggle.addEventListener(
    "click",
    () => {

        document.body
            .classList
            .toggle("dark");


        localStorage.setItem(
            "douae-theme",

            document.body
                .classList
                .contains("dark")
                ? "dark"
                : "light"
        );


        updateThemeIcon();

    }
);


/* ============================================================
   MOBILE NAVBAR
   ============================================================ */

document
    .querySelectorAll(".nav-link")
    .forEach(link => {

        link.addEventListener(
            "click",
            () => {

                const menu =
                    document.getElementById(
                        "navMenu"
                    );

                if (
                    menu &&
                    menu.classList
                        .contains("show")
                ) {

                    bootstrap
                        .Collapse
                        .getOrCreateInstance(
                            menu
                        )
                        .hide();

                }

            }
        );

    });


/* ============================================================
   PROJECT FILTER
   ============================================================ */

const filterButtons =
    document.querySelectorAll(
        ".filter-btn"
    );

const projectCards =
    document.querySelectorAll(
        ".project-card"
    );


filterButtons.forEach(button => {

    button.addEventListener(
        "click",
        () => {

            filterButtons
                .forEach(btn =>
                    btn.classList
                        .remove("active")
                );

            button.classList
                .add("active");


            const filter =
                button.dataset.filter;


            projectCards.forEach(card => {

                if (
                    filter === "all" ||
                    card.dataset.module === filter
                ) {

                    card.classList
                        .remove("hidden");

                } else {

                    card.classList
                        .add("hidden");

                }

            });

        }
    );

});


/* ============================================================
   MODULE → PROJECT FILTER
   ============================================================ */

document
    .querySelectorAll(
        "[data-module-link]"
    )
    .forEach(link => {

        link.addEventListener(
            "click",
            () => {

                const module =
                    link.dataset.moduleLink;


                setTimeout(() => {

                    const button =
                        document.querySelector(
                            `.filter-btn[data-filter="${module}"]`
                        );

                    if (button) {
                        button.click();
                    }

                }, 250);

            }
        );

    });


/* ============================================================
   PROJECT MODAL
   ============================================================ */

const modalElement =
    document.getElementById(
        "projectModal"
    );

const projectModal =
    new bootstrap.Modal(
        modalElement
    );


document
    .querySelectorAll(
        ".view-project"
    )
    .forEach(button => {

        button.addEventListener(
            "click",
            () => {

                const project =
                    projects.find(
                        item =>
                            String(item.id) ===
                            String(
                                button.dataset.projectId
                            )
                    );


                if (!project) return;


                document.getElementById(
                    "modalImage"
                ).src = project.image;


                document.getElementById(
                    "modalModule"
                ).textContent =
                    project.module;


                document.getElementById(
                    "modalTitle"
                ).textContent =
                    project.name;


                document.getElementById(
                    "modalDescription"
                ).textContent =
                    project.description;


                document.getElementById(
                    "modalObjectives"
                ).textContent =
                    project.objectives;


                document.getElementById(
                    "modalTechnologies"
                ).textContent =
                    project.technologies;


                document.getElementById(
                    "modalSkills"
                ).textContent =
                    project.skills;


                document.getElementById(
                    "modalUrl"
                ).href =
                    project.url;


                document.getElementById(
                    "modalGithub"
                ).href =
                    project.github;


                projectModal.show();

            }
        );

    });


/* ============================================================
   CONTACT FORM VALIDATION
   ============================================================ */

const form =
    document.getElementById(
        "contactForm"
    );


if (form) {

    form.addEventListener(
        "submit",
        (event) => {

            const fields =
                form.querySelectorAll(
                    "input, textarea"
                );

            let valid = true;


            fields.forEach(
                field => {

                    field.classList
                        .remove(
                            "is-invalid"
                        );


                    if (
                        !field.checkValidity()
                    ) {

                        field.classList
                            .add(
                                "is-invalid"
                            );

                        valid = false;

                    }

                }
            );


            if (!valid) {

                event.preventDefault();

            }

        }
    );

}

</script>

</body>
</html>
```
