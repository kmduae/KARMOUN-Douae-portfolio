<?php
session_start();

/* ------------------------------------------------------------------
   CONTENT — edit these to make the site yours
------------------------------------------------------------------- */

$owner = [
    'name'    => 'Théo Bassong',
    'role'    => 'Brand & visual designer',
    'tagline' => 'Identity systems for restaurants, record labels, and small manufacturers.',
    'email'   => 'theo@basson-studio.com',
    'location'=> 'Marseille, France',
];

$socials = [
    'Instagram' => 'https://instagram.com/',
    'Are.na'    => 'https://are.na/',
    'LinkedIn'  => 'https://linkedin.com/',
];

// Each project gets a generated gradient thumbnail (no external images needed).
$projects = [
    [
        'title' => 'Fournil Lucie',
        'client' => 'Independent bakery, Marseille',
        'year' => '2025',
        'category' => 'Identity, packaging',
        'description' => 'A mark and packaging system built around the bakery\'s wood-fired oven — warm, a little uneven, printed in two colors to keep costs low for a single storefront.',
        'hue1' => 24, 'hue2' => 4,
    ],
    [
        'title' => 'Nocturne Records',
        'client' => 'Independent label',
        'year' => '2024',
        'category' => 'Identity, sleeve system',
        'description' => 'A modular sleeve grid that lets each release look distinct while staying recognizably part of the same catalogue. Built for a label putting out six records a year on a tight budget.',
        'hue1' => 250, 'hue2' => 210,
    ],
    [
        'title' => 'Atelier Ferrand',
        'client' => 'Furniture workshop',
        'year' => '2024',
        'category' => 'Identity, signage',
        'description' => 'Signage and stationery for a three-person furniture workshop, drawn from the joinery marks they already stamped into their own work.',
        'hue1' => 40, 'hue2' => 85,
    ],
    [
        'title' => 'Radis',
        'client' => 'Neighbourhood grocer',
        'year' => '2023',
        'category' => 'Identity, wayfinding',
        'description' => 'A produce-forward identity and in-store wayfinding system for a small grocer competing directly against a supermarket chain that moved in next door.',
        'hue1' => 140, 'hue2' => 95,
    ],
    [
        'title' => 'Périphérique',
        'client' => 'Design conference',
        'year' => '2023',
        'category' => 'Identity, print',
        'description' => 'Poster and program design for a two-day conference on design outside major cities. The system reused a single road-marking motif across every touchpoint.',
        'hue1' => 355, 'hue2' => 330,
    ],
];

$capabilities = [
    'Brand identity', 'Packaging', 'Signage & wayfinding',
    'Editorial & print', 'Art direction', 'Typeface pairing',
];

/* ------------------------------------------------------------------
   CONTACT FORM HANDLING
------------------------------------------------------------------- */

$errors = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '') $errors[] = 'Enter your name.';
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Enter a valid email address.';
    if ($message === '') $errors[] = 'Write a message before sending.';

    if (empty($errors)) {
        // Wire this up to mail(), a mailer library, or a database insert.
        // mail($owner['email'], "Portfolio contact from $name", $message, "From: $email");
        $_SESSION['flash_success'] = true;
        header('Location: ' . $_SERVER['PHP_SELF'] . '#contact');
        exit;
    }
}

if (isset($_SESSION['flash_success'])) {
    $success = true;
    unset($_SESSION['flash_success']);
}

function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

// Builds a CSS gradient string from two hues so each project gets a
// distinct generated thumbnail without needing image assets.
function thumb_gradient($hue1, $hue2) {
    return "linear-gradient(135deg, hsl({$hue1}, 62%, 52%), hsl({$hue2}, 70%, 38%))";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= e($owner['name']) ?> — <?= e($owner['role']) ?></title>
<meta name="description" content="<?= e($owner['tagline']) ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<style>
  :root {
    --bg: #12131a;
    --bg-raised: #191b24;
    --paper: #eeece6;
    --dim: #9296a3;
    --line: #2a2c38;
    --accent: #6c7bff;
    --accent-warm: #e2a83c;
    --font-display: 'Space Grotesk', 'Arial Narrow', sans-serif;
    --font-body: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
  }

  * { box-sizing: border-box; }
  html { scroll-behavior: smooth; }

  body {
    margin: 0;
    background: var(--bg);
    color: var(--paper);
    font-family: var(--font-body);
    line-height: 1.55;
    -webkit-font-smoothing: antialiased;
  }

  a { color: inherit; }

  .wrap {
    max-width: 1100px;
    margin: 0 auto;
    padding: 0 32px;
  }

  /* ---------- Layout shell: sidebar + content ---------- */

  .shell {
    display: grid;
    grid-template-columns: 260px 1fr;
    max-width: 1300px;
    margin: 0 auto;
  }

  @media (max-width: 880px) {
    .shell { grid-template-columns: 1fr; }
  }

  aside.side {
    padding: 48px 32px;
    border-right: 1px solid var(--line);
    position: sticky;
    top: 0;
    align-self: start;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  @media (max-width: 880px) {
    aside.side {
      position: static;
      height: auto;
      border-right: none;
      border-bottom: 1px solid var(--line);
    }
  }

  .side-top .mark {
    font-family: var(--font-display);
    font-size: 1.15rem;
    font-weight: 700;
    text-decoration: none;
    display: block;
    margin-bottom: 6px;
  }

  .side-top .role {
    font-size: 0.85rem;
    color: var(--dim);
    margin: 0 0 40px;
  }

  nav.primary {
    display: flex;
    flex-direction: column;
    gap: 14px;
    font-family: var(--font-display);
    font-size: 0.95rem;
  }

  nav.primary a {
    text-decoration: none;
    color: var(--paper);
    opacity: 0.6;
  }

  nav.primary a:hover,
  nav.primary a:focus-visible {
    opacity: 1;
    color: var(--accent);
  }

  .side-bottom {
    font-size: 0.8rem;
    color: var(--dim);
  }

  main.content { min-width: 0; }

  /* ---------- Hero ---------- */

  .hero {
    padding: 80px 0 64px;
    border-bottom: 1px solid var(--line);
  }

  .hero h1 {
    font-family: var(--font-display);
    font-weight: 500;
    font-size: clamp(1.9rem, 3.6vw, 2.7rem);
    line-height: 1.25;
    margin: 0 0 20px;
    max-width: 22ch;
  }

  .hero p.loc {
    font-size: 0.85rem;
    color: var(--dim);
    margin: 0;
  }

  /* ---------- Work grid ---------- */

  section { padding: 64px 0; border-bottom: 1px solid var(--line); }
  section:last-of-type { border-bottom: none; }

  .section-head {
    display: flex;
    justify-content: space-between;
    align-items: baseline;
    margin-bottom: 36px;
  }

  .section-head h2 {
    font-family: var(--font-display);
    font-weight: 500;
    font-size: 1.3rem;
    margin: 0;
  }

  .section-head .count {
    font-size: 0.8rem;
    color: var(--dim);
  }

  .grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 28px;
  }

  @media (max-width: 640px) {
    .grid { grid-template-columns: 1fr; }
  }

  .card {
    display: block;
    text-decoration: none;
    color: inherit;
  }

  .thumb {
    aspect-ratio: 4 / 3;
    border-radius: 4px;
    margin-bottom: 16px;
  }

  .card h3 {
    font-family: var(--font-display);
    font-weight: 500;
    font-size: 1.1rem;
    margin: 0 0 4px;
  }

  .card .meta {
    font-size: 0.78rem;
    color: var(--dim);
    margin: 0 0 10px;
  }

  .card p.desc {
    font-size: 0.9rem;
    color: var(--dim);
    margin: 0;
    max-width: 42ch;
  }

  /* ---------- Capabilities ---------- */

  .capabilities {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .capabilities li {
    font-size: 0.85rem;
    padding: 8px 14px;
    border: 1px solid var(--line);
    border-radius: 20px;
    color: var(--dim);
  }

  /* ---------- Contact ---------- */

  .contact-grid {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 48px;
  }

  @media (max-width: 700px) {
    .contact-grid { grid-template-columns: 1fr; }
  }

  .contact-info p {
    color: var(--dim);
    max-width: 34ch;
    margin: 0 0 20px;
  }

  .contact-info .email {
    display: inline-block;
    font-family: var(--font-display);
    font-size: 1.15rem;
    text-decoration: none;
    color: var(--accent-warm);
    margin-bottom: 24px;
  }

  .contact-info ul.social {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: 18px;
    font-size: 0.85rem;
  }

  .contact-info ul.social a { text-decoration: none; color: var(--dim); }
  .contact-info ul.social a:hover { color: var(--accent); }

  form.contact-form label {
    display: block;
    font-size: 0.8rem;
    color: var(--dim);
    margin-bottom: 6px;
  }

  form.contact-form .field { margin-bottom: 18px; }

  form.contact-form input,
  form.contact-form textarea {
    width: 100%;
    font-family: var(--font-body);
    font-size: 0.92rem;
    padding: 11px 13px;
    border: 1px solid var(--line);
    border-radius: 4px;
    background: var(--bg-raised);
    color: var(--paper);
  }

  form.contact-form input:focus-visible,
  form.contact-form textarea:focus-visible {
    outline: 2px solid var(--accent);
    outline-offset: 1px;
  }

  form.contact-form textarea { min-height: 120px; resize: vertical; }

  form.contact-form button {
    font-family: var(--font-display);
    font-size: 0.9rem;
    font-weight: 500;
    background: var(--accent);
    color: #0d0e14;
    border: none;
    padding: 12px 22px;
    border-radius: 4px;
    cursor: pointer;
  }

  form.contact-form button:hover { background: var(--accent-warm); }

  .notice {
    font-size: 0.85rem;
    padding: 12px 14px;
    border-radius: 4px;
    margin-bottom: 18px;
  }

  .notice.success {
    background: rgba(108,123,255,0.12);
    color: #b7bfff;
    border: 1px solid rgba(108,123,255,0.35);
  }

  .notice.error {
    background: rgba(226,90,90,0.1);
    color: #f0a5a5;
    border: 1px solid rgba(226,90,90,0.3);
  }

  footer.site {
    padding: 28px 0 48px;
    font-size: 0.78rem;
    color: var(--dim);
  }

  @media (prefers-reduced-motion: reduce) {
    html { scroll-behavior: auto; }
  }
</style>
</head>
<body>

<div class="shell">

  <aside class="side">
    <div class="side-top">
      <a class="mark" href="#top"><?= e($owner['name']) ?></a>
      <p class="role"><?= e($owner['role']) ?></p>
      <nav class="primary">
        <a href="#work">Work</a>
        <a href="#about">Capabilities</a>
        <a href="#contact">Contact</a>
      </nav>
    </div>
    <div class="side-bottom">
      <?= e($owner['location']) ?>
    </div>
  </aside>

  <main class="content" id="top">

    <div class="wrap">
      <div class="hero">
        <h1><?= e($owner['tagline']) ?></h1>
        <p class="loc">Available for new projects, Q1 2027</p>
      </div>
    </div>

    <section id="work">
      <div class="wrap">
        <div class="section-head">
          <h2>Selected work</h2>
          <span class="count"><?= count($projects) ?> case studies</span>
        </div>

        <div class="grid">
          <?php foreach ($projects as $p): ?>
            <a class="card" href="#">
              <div class="thumb" style="background: <?= thumb_gradient($p['hue1'], $p['hue2']) ?>;"></div>
              <h3><?= e($p['title']) ?></h3>
              <p class="meta"><?= e($p['client']) ?> · <?= e($p['year']) ?> · <?= e($p['category']) ?></p>
              <p class="desc"><?= e($p['description']) ?></p>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section id="about">
      <div class="wrap">
        <div class="section-head">
          <h2>Capabilities</h2>
        </div>
        <ul class="capabilities">
          <?php foreach ($capabilities as $skill): ?>
            <li><?= e($skill) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </section>

    <section id="contact">
      <div class="wrap">
        <div class="section-head">
          <h2>Contact</h2>
        </div>

        <div class="contact-grid">
          <div class="contact-info">
            <p>Working on an identity, packaging, or signage project? Send a few details and I'll reply within a couple of days.</p>
            <a class="email" href="mailto:<?= e($owner['email']) ?>"><?= e($owner['email']) ?></a>
            <ul class="social">
              <?php foreach ($socials as $label => $url): ?>
                <li><a href="<?= e($url) ?>"><?= e($label) ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>

          <form class="contact-form" method="post" action="#contact">
            <?php if ($success): ?>
              <div class="notice success">Thanks — your message is in. I'll reply soon.</div>
            <?php endif; ?>

            <?php if (!empty($errors)): ?>
              <div class="notice error"><?= e(implode(' ', $errors)) ?></div>
            <?php endif; ?>

            <div class="field">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" value="<?= e($_POST['name'] ?? '') ?>" required>
            </div>
            <div class="field">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" value="<?= e($_POST['email'] ?? '') ?>" required>
            </div>
            <div class="field">
              <label for="message">Project details</label>
              <textarea id="message" name="message" required><?= e($_POST['message'] ?? '') ?></textarea>
            </div>
            <button type="submit" name="contact_submit" value="1">Send message</button>
          </form>
        </div>
      </div>
    </section>

    <footer class="site">
      <div class="wrap">&copy; <?= date('Y') ?> <?= e($owner['name']) ?> — Built with PHP</div>
    </footer>

  </main>
</div>

</body>
</html>